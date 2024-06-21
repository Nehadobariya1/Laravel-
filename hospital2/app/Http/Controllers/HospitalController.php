<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // $patient=hospital::get();
        $patient=hospital::paginate(10);
        return view('user.index',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * 
     * 
     * 
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        hospital::create($request->all());
        return redirect()->route('hospital.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(hospital $hospital)
    {
        // $data=hospital::find($id);
        return view('user.show',compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hospital $hospital)
    {
        return view('user.edit',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hospital $hospital)
    {
        $hospital->update($request->all());
        return redirect()->route('hospital.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index');
    }

    public function trash()
    {   

        $hospital=hospital::onlyTrashed()->get();
        return view('user.trashed',compact('hospital'));

    }

    public function recover($id)
    {   

        $hospital=hospital::withTrashed($id)->where('id',$id)->restore();
        return redirect()->route('hospital.index');
       

    }

    public function permenentDelete($id)
    {
        $hospital=hospital::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('hospital.trash');
    }
}
