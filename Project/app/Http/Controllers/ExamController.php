<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request)
    {
        $cid = $request->cid;
        $coid= explode (",", $cid);

        foreach($coid as $c){

            $exam = new Exam();

            $exam->examuid = $request->regno;
            $exam->examcid = $c;
            $exam->examname = $request->examname;
            $exam->examyear = $request->examyear;
            $exam->examsem = $request->examsem;

            $exam->save();

        }

        return redirect()->route('student.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show( StoreExamRequest $request)
    {
        $cid = $request->ccode;

        $ccode = explode (",", $cid[0]);

        $course = DB::select('select * from courses');

        $sid = Auth::user()->email;

        $students = DB::select('select * from students where email = ?', [$sid]);


        return view('student.examentryform', compact('ccode','course','students'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamRequest  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamRequest $request, $id)
    {

        $sid = $request->stuid;
        $assi = $request->assig;
        $att = $request->atten;
        $coid = $request->cid;

        $stuid = explode (",", $sid[0]);
        $mark = explode(",",$assi[0]);
        $atten = explode(",",$att[0]);
        $cid = explode(',',$coid[0]);

        $count = 0;

        foreach($cid as $c){
            $affected = DB::update(
                'update exams set examca = ?, examatt = ?, lech = 1 where id = ?',
                [$mark[$count],$atten[$count],$c]
            );
            $count = $count+1;
        }



        return redirect()->route('lecture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
