<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('home',['students'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {

          $validate = $req->validate([
           'name'=>'required',
           'email'=>'required',
           'mobile'=>'required',
           'password'=>'required|min:8',
        ]);

        $student = new Student;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->mobile = $req->mobile;
        $student->password = $req->password;
        $student->save();
        return redirect()->route('index')->with('status','Student Saved Successfully !!');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('editform',['students'=>$student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {

          $validate = $req->validate([
           'name'=>'required',
           'email'=>'required',
           'mobile'=>'required',
           'password'=>'required|min:8',
        ]);

        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->mobile = $req->mobile;
        $student->password = $req->password;
        $student->save();
        return redirect()->route('index')->with('status','Student Updated Successfully !!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('index')->with('delete_status','Student Deleted Successfully !!');;

    }
}
