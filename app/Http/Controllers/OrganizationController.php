<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use RealRashid\SweetAlert\Facades\Alert;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();   
        return view("organization.index", [
            'title' => 'Halaman Organiasi',
            'organizations' => $organizations,
        ]);
    }
    public function myIndex()
    {
        $organizations = Organization::all();   
        return view("organization.myIndex", [
            'title' => 'Kelola Organiasi',
            'organizations' => $organizations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("organization.create", [
            'title' => 'Tambahkan Organiasi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|min:3|max:300',
            'description' => 'required|min:3',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('img', $filename);

        Organization::create([
            'name' => $ValidatedData['name'],
            'description' => $ValidatedData['description'],
            'image' => $filename,
        ]);

        Alert::success('Success', 'Organisasi Berhasil Dibuat');
        return redirect()->intended('/myorganization');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return view('organization.show', [
            'title' => 'Organisasi' . $organization->name,
            'organization' => $organization,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('organization.edit', [
            'title' => 'Edit' . $organization->name,
            'organization' => $organization,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        
        $ValidatedData = $request->validate([
            'name' => 'required|min:3|max:300',
            'description' => 'required|min:3',
            'image' => '',
        ]);

        $filename = $organization->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('img', $filename);
        }

        $organization->update([
            'name' => $ValidatedData['name'],
            'description' => $ValidatedData['description'],
            'image' => $filename,
        ]);

        Alert::success('Success', 'Organisasi Berhasil Diubah');
        return redirect()->intended('/myorganization');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
