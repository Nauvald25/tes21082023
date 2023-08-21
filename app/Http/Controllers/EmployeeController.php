<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'division' => 'required',
            'salary' => 'required|numeric',
            'allowance' => 'required|numeric',
        ]);

        $data['total'] = $data['salary'] + $data['allowance'];

        Employee::create($data);

        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => 'required',
            'division' => 'required',
            'salary' => 'required|numeric',
            'allowance' => 'required|numeric',
        ]);

        $data['total'] = $data['salary'] + $data['allowance'];

        $employee->update($data);

        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
