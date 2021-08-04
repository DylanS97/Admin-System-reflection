<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    // Relationship with employees.
    public function employees()
    {
        return $this->hasMany(Employees::class, 'company_id', 'id');
    }

    // Create a company.
    public function addCompany($company, $request) 
    {
        $attributes = Companies::getUpdateAttributes();
        Companies::validateImage();
        $attributes['logo'] = str_replace('public/', '', $request->file('logo')->store('public'));
        $company->create($attributes);
        
        return redirect('/companies');
    }

    // Update a company.
    public function updateCompany($company, $request) 
    {
        $attributes = Companies::getUpdateAttributes($company);
        if ($request->file('logo')) {
            Companies::validateImage();
            $attributes['logo'] = str_replace('public/', '', $request->file('logo')->store('public'));
        }
        $company->update($attributes);

        return redirect('/companies/' . $company->id);
    }

    // Show a company.
    public static function showCompany($company, $request)
    {
        return Companies::slugCheck($company, $request);
    }

    // Checks if it is the details tab or employees tab on the company page.
    protected static function slugCheck($company, $request)
    {
        if (strpos(url()->current(), '/companies') && strpos(url()->current(), '/employees')) {
            return view('companies.employees')
                ->with([
                    'company' => $company,
                    'items' => $items = $request->items ?? 10,
                    'employees' => Companies::search('employee', $request, $items, $company)]);
        } else {
            return view('companies.show')
                ->with([
                    'company' => $company]);
        }
    }

    // Filters the companies based off the search bar.
    protected static function search($option, $request, $items, $company = null) 
    {
        if ($option == 'company') {
            return Companies::where([
                ['name', '!=', Null],
                [function($query) use ($request) {
                    if ($search = $request->search) {
                        $query->orWhere('name', 'LIKE', '%'. $search . '%')->get();
                    }
                }]
            ])
                ->paginate($items);
        } else if ($option =='employee') {
            return Employees::where([
                ['company_id', $company['id']],
                [function($query) use ($request) {
                    if ($search = $request->search) {
                        $query->where('first_name', 'LIKE', '%'. $search . '%')
                            ->orWhere('last_name', 'LIKE', '%'. $search . '%')
                            ->get();
                    }
                }]
            ])
                ->paginate($items);
        }
    }

    // Get attributes for update.
    public static function getUpdateAttributes($company = null) {
        
        return request()->validate([
            'name' => $company ? 'sometimes|required|unique:companies,name,'.$company->id : 'required|unique:companies',
            'email' => $company ? 'sometimes|required|unique:companies,email,'.$company->id : 'required|unique:companies',
            'website' => 'required|url'
        ]);
    }

    // Validate the uploaded file.
    public static function validateImage() 
    {
        return request()->validate([
            'logo' => 'required|image'
        ]);
    }

    // Deletes images.
    protected static function deleteImage($logo)
    {
        $dir = 'storage/';
        try {
            unlink($dir . $logo);
        } catch(Exception $e) {}
    }
}