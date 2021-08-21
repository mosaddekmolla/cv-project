<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = auth()->user()->education;

        return view('education.index',compact('education')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // UserDetail::create($request->all());
        // return back();

        $request->validate([
            'school_name'=> 'required',
            'school_location'=> 'required',
            'degree'=> 'required',
            'field_of_study'=> 'required',
            'graduation_start_date'=> 'required',
            'graduation_end_date'=> 'required',
        ]);

        auth()->user()->education()->create($request->all());

        // $detail = new Education();

        // $detail->school_name = $request->input('school_name');
        // $detail->school_location = $request->input('school_location');
        // $detail->degree = $request->input('degree');
        // $detail->field_of_study = $request->input('field_of_study');
        // $detail->graduation_start_date = $request->input('graduation_start_date');
        // $detail->graduation_end_date = $request->input('graduation_end_date');


        // $detail->education = auth()->id();
        // $detail->save();

        return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
