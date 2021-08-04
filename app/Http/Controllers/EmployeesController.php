<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
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
        return $employee->addEmployee($employee);
    }

    // Edit an employees details and what company they work for.
    public function edit(Employees $employee)
    {
        return view('employees.edit') 
            ->with([
                'company' => $employee->company()->first(),
                'employee' => $employee]);
    }

    public function update(Employees $employee)
    {
        return $employee->updateEmployee($employee);
    }

    // Deleted employee.
    public function destroy(Employees $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }
}
