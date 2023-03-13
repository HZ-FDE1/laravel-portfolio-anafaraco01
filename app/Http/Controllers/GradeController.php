<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::Paginate(20);

        return view('grades.index', ['grades'=>$grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect(route('dashboard.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $dashboard)
    {
        return view('grades.edit', compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $dashboard)
    {
        $dashboard->update($this->validateGrade($request));

        return redirect('/dashboard')->with('status', 'Grade updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grade::findOrFail($id)->delete();

        return redirect('/dashboard');
    }

    public function validateGrade(Request $request)
    {
        return $request->validate([
            'test_name' => 'required',
            'best_grade' => 'nullable|numeric|between: 0 , 10'
        ]);
    }
}
