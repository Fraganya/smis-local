<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Student;

class StudentController extends Controller
{
    private $student;
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
            'program'=>'required|exists:programs,code'
        ]);

        $this->student=Student::create($request->all());

        if(empty($this->student->save())){
            return view('status',['response'=>'An error occurred!','back'=>'students/create']);
        }


        return view('status',['response'=>$this->getEncodedResponse("Student successfully created"),'back'=>'students/create']);
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
            'program'=>'required|exists:programs,code'
        ]);

        $this->student=Student::where('id',$request->input('id'))->firstOrFail();

        $updateCount=$this->student->update($request->all());
        if($updateCount==0){
            return view('status',['response'=>'An error occurred!','back'=>'students']);
        }
        return view('status',['response'=>$this->getEncodedResponse('Succeffuly Updated Student'),'back'=>'students']);
    }

    public function destroy($studID){
        $this->student=Student::where('id',$studID)->firstOrFail();

        if(!$this->student->delete()){
            return view('status',['response'=>'An error occurred!','back'=>'students']);
        }
        return view('status',['response'=>$this->getEncodedResponse("Student successfully deleted"),'back'=>'students']);
    }

    private function getEncodedResponse($msg)
    {
        return(
        json_encode([
            'status'=>"ok",
            'content'=>$msg,
            'student'=>$this->student
        ])
        );
    }

}
