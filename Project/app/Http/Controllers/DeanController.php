<?php

namespace App\Http\Controllers;

use App\Models\Sig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = [];
        return view('dean/deandashboard', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dep = $request->dep;
        $year = $request->year;

        $course = DB::select('select * from courses where year = ? && department = ?', [$year,$dep]);

        return view('dean.deandashboard', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = DB::select('select * from exams where examcid = ?', [$id]);

        $course = DB::select('select * from courses where id = ?', [$id]);

        return view('dean.deanrecommendation', compact('exam','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eid = $request->data;

        $data = explode(',', $eid[0]);

        foreach($data as $d){
            $affected = DB::update(
                'update exams set deanch = 1 where id = ?',
                [$d]
            );
        }

        return redirect()->route('dean.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
