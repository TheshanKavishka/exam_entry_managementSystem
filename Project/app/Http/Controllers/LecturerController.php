<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Sig;
use App\Http\Requests\StoreLecturerRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateLecturerRequest;
use Illuminate\Support\Facades\Auth;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=[];
        return view('lecture/lecdashboard',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreLecturerRequest $request)
    {
        $year = $request->year;
        $dep = $request->dep;

        $fac = $request->fac;

        $courses = DB::select('select * from courses where year = ? && department = ? && faculty = ?', [$year,$dep,$fac]);

        return view('lecture/lecdashboard', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLecturerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLecturerRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $sig = new Sig();
        $sig->suid = Auth::user()->id;
        $sig->sparth = $imageName;
        $sig->save();

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = DB::select('select * from exams where examcid = ?', [$id]);
        $course = DB::select('select * from courses where id = ?', [$id]);

        return view('lecture.lectureconformation', compact('exam','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLecturerRequest  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLecturerRequest $request, Lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
