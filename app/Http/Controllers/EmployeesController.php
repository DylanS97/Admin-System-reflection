<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Exception;
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
        return view('employees.show')
            ->with(['employee' => $employee]);
    }

    // Direct to employee create page.
    public function create(Companies $company)
    {
        return view('employees.create')
            ->with([ 'company' => $company ]);
    }

    // Store the created employee.
    public function store(Employees $employee) 
    {
        $company = Companies::where('id', request('company'))->first();
        try {
            $attributes = Employees::getAttr();
        } catch (Exception $e) {
            return back()->withInput()->withErrors($e->validator);
        }

        $employee->addEmployee($company->id, $attributes['first_name'], $attributes['last_name'], $attributes['email'], $attributes['phone_number']);

        return redirect('/companies/' . $company->id . '/employees');
    }

    // Edit an employees details and what company they work for.
    public function edit(Employees $employee)
    {
        $company = Companies::where('id', $employee->company_id)->first();
        return view('employees.edit') 
            ->with([
                'company' => $company,
                'employee' => $employee]);
    }

    public function update(Employees $employee)
    {
        try {
            $employee->update(Employees::getAttr());
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
