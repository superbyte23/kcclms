<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create', ['title' => 'Create New Student']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'mobile' => 'required|min:11|string|numeric',
            // 'fb_account' => 'required',
        ]);

        $std = Student::create([
            'user_id' => 1,  
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'address' => $request->address,
            'dob' => $request->date_of_birth,
            'age' => $request->age,
            'gender' => $request->gender,
            'birth_place' => $request->birth_place,
            'civil_status' => $request->civil_status,
            'nationality' => $request->nationality,
            'mobile' => $request->mobile,
            'religion' => $request->religion,
            'fb_account' => $request->fb_account,
        ]);

        if ($std->save()) {
            return redirect('student')->with([
                'success'=> 'bg-green',
                'message'=>'Student added successfully.',

            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $std = Student::find($student)->first();
        return view ('students.edit', compact('std'))->with(['title' => 'Edit Student']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'mobile' => 'required|min:11|string|numeric',
            // 'fb_account' => 'required',
        ]);

        $std = Student::find($student->id);

        $std->user_id = 1;
        $std->first_name = $request->first_name;
        $std->last_name = $request->last_name;
        $std->middle_name = $request->middle_name;
        $std->address = $request->address;
        $std->dob = $request->date_of_birth;
        $std->age = $request->age;
        $std->gender = $request->gender;
        $std->birth_place = $request->birth_place;
        $std->civil_status = $request->civil_status;
        $std->nationality = $request->nationality;
        $std->mobile = $request->mobile;
        $std->religion = $request->religion;
        $std->fb_account = $request->fb_account;

        if ($std->save()) {
            return redirect('student')->with([
                'success'=> 'bg-green',
                'message'=>'Student details updated successfully.',

            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $std = Student::find($student)->first();
        dd($std);
    }
}
