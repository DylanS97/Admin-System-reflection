<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    // Show collection of employees.
    public function index(Request $request, Companies $company) 
    {
        return view('employees.index') 
            ->with([
                'companies' => Companies::orderBy('name')->get(),
                'items' => $items = $request->items ?? 10,
                'com' => $com = $company['name'],
                'employees' => Employees::getEmployees($request, $company, $com, $items)]);
    }

    // Show an employee.
    public function show(Employees $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    // Direct to employee create page.
    public function create()
    {
        $company = Companies::where('id', Employees::getParentCompany())->get();
        return view('employees.create')
            ->with([ 'company' => $company ]);
    }

    // Store the created employee.
    public function store(Employees $employee) 
    {
        $company = Companies::where('id', request('company'))->get('id');
        $attributes = Employees::getAttr();
        $attributes['company_id'] = $company[0]->id;

        $employee->addEmployee($company[0]->id, $attributes['first_name'], $attributes['last_name'], $attributes['email'], $attributes['phone_number']);

        return redirect('/companies/' . $company[0]->id . '/employees');
    }

    // Edit an employees details and what company they work for.
    public function edit(Employees $employee)
    {
        return view('employees.edit') 
            ->with([
                'company' => Companies::where('id', $employee->company_id)->get(),
                'com' => $employee->company->name,
                'employee' => $employee]);
    }

    public function update(Employees $employee)
    {
        try {
            $employee->update(request()->all());
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062) {
                return redirect("/employees/" . $employee->id)->withErrors($errorCode);
            }
        }

        return redirect("/employees/" . $employee->id);
    }

    // Deleted employee.
    public function destroy(Employees $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }
}
