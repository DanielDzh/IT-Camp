<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('created_at','desc')->get();
        
        return view('admin.teachers.index',[
            'teachers' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create($request->only(['name','lastname','profession','url', 'alt_name', 'description']));
        return redirect()->back()->withSuccess('Нового викладача додано успішно');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.profile',[
            'teacher' => $teacher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit',[
            'teachers' => $teacher

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->only(['name','lastname','profession','url', 'alt_name', 'description']));
        return redirect()->back()->withSuccess('Успішно редаговано викладача: '.$teacher->name);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->withSuccess('Успішно видалено викладача: '.$teacher->name);
    
    }

    public function search(){
        $search_text = $_GET['query'];
        
       //$f=array('id'=>"1",'name'=>"uriy",'lastname'=>"Chub",'profession'=>"dsfsdf",'url'=>"sdf", 'alt_name'=>"sdfdsf", 'description'=>"sdf");
        $teachers=Teacher::where('lastname', $search_text)->get();
        
        return view('admin.teachers.search', [
            'teachers' => $teachers

        ]);

    }
}
