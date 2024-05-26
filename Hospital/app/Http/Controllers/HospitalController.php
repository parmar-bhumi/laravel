<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Hospital::get();
        return view('hospital.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
    //     $hospital = new hospital();
         hospital::create($request->all());
        return redirect()->route('hospital.index');
        // $hospital = new Hospital();
        // $hospital->patient_name = $request->patient_name;        
        // $hospital->mobile_no = $request->mobile_no;
        // $hospital->disease = $request->disease;
        // $hospital->slug = Str::of('$request->patient_name')->slug('-');
        // $hospital->save();
        //return $request->all();
        //return $mypost;
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        return view('hospital.show',compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        return view('hospital.edit',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
    {

        $hospital->update($request->all());
        return redirect()->route('hospital.index');


        // $hospital->patient_name = $request->patient_name;        
        // $hospital->mobile_no = $request->mobile_no;
        // $hospital->disease = $request->disease;
        // //$hospital->slug = Str::of('$request->patient_name')->slug('-');
        // $hospital->save();
        // return redirect()->route('hospital.index');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index');
        //return $hospital;
    }
}
