<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 


    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index()
    {
        $myclass = classroom::all();
        return view('classrooms.index', compact('myclass'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'classcode' => 'required',
            'classname' => 'required',
            'description' => 'required',
            'course' => 'required',
            'section' => 'required',
            'level' => 'required',
            'subject' => 'required',
            'color' => 'required',
            'avatar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('classroom')
                        ->withErrors($validator)
                        ->withInput();
        }

        $cls = new classroom; 
        $cls->classcode = $request->classcode;
        $cls->classname = $request->classname;
        $cls->description = $request->description;
        $cls->courseid = $request->course;
        $cls->courselevelid = $request->level;
        $cls->subjectid = $request->subject;
        $cls->colourvariant = $request->color;
        $cls->avatar = $request->avatar;
        $cls->instructor_id = $request->teacher_id;
        $cls->status = "active";

        $cls->save();

        return redirect('classroom');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show($classroom)
    {
        $room = classroom::where('classcode', $classroom)->first();
        if ($room) {
            return view('classrooms.room', ['roominfo' => $room]);
        }else{
            return response()->view('errorpages.404');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(classroom $classroom)
    {
        //
    }

    public function students($classcode)
    {
        $room = classroom::where('classcode', $classcode)->first();
        return view('classrooms.students', ['roominfo' => $room]);
    }

    public function files($classcode)
    {
        $room = classroom::where('classcode', $classcode)->first();
        return view('classrooms.files', ['roominfo' => $room]);
    }

    public function academic($classcode)
    {
        $room = classroom::where('classcode', $classcode)->first();
        return view('classrooms.academic', ['roominfo' => $room]);
    }

    public function settings($classcode)
    {
        $room = classroom::where('classcode', $classcode)->first();
        return view('classrooms.settings', ['roominfo' => $room]);
    }
}
