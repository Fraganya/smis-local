<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Student;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $students=Student::orderBy('reg_num','asc')->simplePaginate(10);
        return view('students.view',['students'=>$students]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'reg_num'=>'required|string|unique:students',
            'firstname'=>'required|string',
            'surname'=>'required|string',
            'gender'=>'required|string',
            'dob'=>'required|date',
            'program'=>'required'
        ]);

        $student=new Student($request->all());

        if($student->save()){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully created program!',
                'program'=>$student
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'students/create']);
        }

        return (
            ($request->input('accessType')=='web') 
            ? view('status',['response'=>json_encode($response),'back'=>'students/create']) 
            : $response
        );
    }

    public function edit($studID){
        $student=Student::where('id',$studID)->firstOrFail();
        $programs=\App\Program::all();
        
        return view('students.edit',['student'=>$student,'programs'=>$programs]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'reg_num'=>'required|string',
            'firstname'=>'required|string',
            'surname'=>'required|string',
            'gender'=>'required|string',
            'dob'=>'required|date',
            'program'=>'required'
        ]);

        $student=Student::where('id',$request->input('id'))->firstOrFail();

        $updateCount=$student->update($request->all());
        if($updateCount>0){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully updated student!',
                'student'=>$student
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'students']);
        }
        return view('status',['response'=>json_encode($response),'back'=>'students']);
    }

    public function destroy($studID){
        $student=Student::where('id',$studID)->firstOrFail();

        if($student->delete()){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully deleted student!',
                'student'=>$student
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'students']);
        }

        return view('status',['response'=>json_encode($response),'back'=>'students']);
    }


}
