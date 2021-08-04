<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'company_id',
        'first_name',
        'last_name',
        'company_name',
        'email',
        'phone_number',
    ];

    // Relationship with company.
    public function company()
    {
        return $this->belongsTo(Companies::class);
    }
    
    // Filter employees by dropdown and search.
    public static function getEmployees($request, $company, $com, $items)
    {
        if (!$request->search && $com != '' && $com != '/') {
            return Employees::where('company_id', $company->id)->paginate($items);
        } elseif ($request->search) {
            // returns searched employees. Checks if $com is no t equal to an empty string or '/'. Passes company if true, null if false.
            return Employees::search($request, $items, $com != '' &&  $com != '/' ? $company : null);
        }
        return Employees::paginate($items);
    }

    // Add an employee
    public function addEmployee($employee)
    {
        $attributes = Employees::getAttr();
        $attributes['company_id'] = Companies::where('id', request('company'))->first()->id;

        $employee->create($attributes);

        return redirect('/companies/' . $attributes['company_id'] . '/employees');
    }

    // Update an employee
    public function updateEmployee($employee) 
    {
        $employee->update(Employees::getAttr($employee));

        return redirect("/employees/" . $employee->id);
    }

    // Search function.
    protected static function search($request, $items, $company = null) 
    {
        return Employees::where([
            $company ? ['company_id', $company->id] : ['id', '!=', null],
            [function($query) use ($request) {
                if ($search = $request->search) {
                    $query->orWhere('first_name', 'LIKE', '%'. $search . '%')
                        ->orWhere('last_name', 'LIKE', '%'. $search . '%')
                        ->get();
                }
            }]
        ])
            ->paginate($items);
    }

    protected static function getAttr($employee = null)
    {
        return request()->validate([
            'first_name' =>'required',
            'last_name' => 'required',
            'email' => $employee ? 'sometimes|required|unique:employees,email,'.$employee->id : 'required|unique:employees',
            'phone_number' => $employee ? 'sometimes|required|regex:/^([0-9\s\-\+\(\)]*)$/|unique:employees,phone_number,'.$employee->id : 'required|unique:employees'
        ]);
    }
    
    public static function getParentCompany()
    {
        $url = parse_url(url()->previous());
        preg_match_all('!\d!', $url['path'], $id_array);

        for ($i = 0, $c = count($id_array[0]) - 1, $id = null; $i <= $c; $i++) {
            $id = $id . $id_array[0][$i];
        }

        return $id;
    }
}
