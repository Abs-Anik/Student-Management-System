<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('index')->with('students',$students);
    }

    public function create(){
        return view('create');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit')->with('student',$student);
    }

    public function store(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department = $request->department;
        $student->info = $request->info;
        $student->save();
        return redirect()->route('index');
        
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department = $request->department;
        $student->info = $request->info;
        $student->update();
        return redirect()->route('index');
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}
