<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Show collection of companies.
    public function index(Request $request)
    {
        return view('companies.index')
            ->with([
                'items' => $items = $request->items ?? 10,
                'companies' => Companies::search('company', $request, $items)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Direct to create company page.
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Store created company.
    public function store(Companies $company, Request $request) 
    {
        $attributes = request()->validate([
            'name' =>'required',
            'email' => 'required',
            'website' => 'required'
        ]);

        $image = $request->file('logo')->store('public');
        // dd($image);

        $company->addCompany($attributes['name'], $attributes['email'], str_replace('public/', '', $image), $attributes['website']);

        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Show a company.
    public function show(Companies $company, Request $request)
    {
        return $company->showCompany($company, $request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $company)
    {
        return view('companies.edit')
            ->with(['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Companies $company, Request $request)
    {
        $attributes = Companies::getUpdateAttributes($company, $request);

        try {
            $company->update($attributes);
            if ($request->file('logo')) {
                Companies::deleteImage($company->logo);
                $image['logo'] = str_replace('public/', '', $request->file('logo')->store('public'));
                $company->update($image);
            }
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062) {
                return redirect("/companies/" . $company->id)->withErrors($errorCode);
            }
        }

        return redirect('/companies/' . $company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Delete company and associated employees.
    public function destroy(Companies $company) 
    {
        Companies::deleteImage($company->logo);
        Employees::where('company_id', $company->id)
            ->delete();
        $company->delete();

        return redirect('/companies');
    }
}