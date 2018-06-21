<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Program;

class ProgramController extends Controller
{
    private $program;
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
        $programs=Program::orderBy('code','asc')->simplePaginate(10);
        return view('programs.view',['programs'=>$programs]);
    }
    
    public function create(Request $request){
        $this->validate($request,[
            'code'=>'required|string|unique:programs',
            'name'=>'required|string|unique:programs',
            'duration'=>'required|numeric',
        ]);

        $this->program=Program::create($request->all());

        if(!$this->program->save()){
            return view('status', ['response' => 'An error occurred!', 'back' => 'programs/create']);
        }

        return view('status',['response'=>$this->getEncodedResponse("Successfully Created program"),'back'=>'programs/create']);
    }

    public function edit($code){
        $program=Program::where('code',$code)->firstOrFail();
        return view('programs.edit',['program'=>$program]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'code'=>'required|string',
            'name'=>'required|string',
            'duration'=>'required|numeric',
        ]);

        $this->program=Program::where('code',$request->input('code'))->firstOrFail();

        $updateCount=$this->program->update($request->all());
        if(!$updateCount>0){
            return view('status',['response'=>'An error occurred!','back'=>'programs']);
        }
        return view('status',['response'=>$this->getEncodedResponse("Program successfully updated"),'back'=>'programs']);
    }

    public function destroy($code){
        $this->program=Program::where('code',$code)->firstOrFail();

        if(!$this->program->delete()){
            return view('status',['response'=>'An error occurred!','back'=>'programs']);
        }

        return view('status',['response'=>$this->getEncodedResponse("Program successfully deleted"),'back'=>'programs']);
    }


    private function getEncodedResponse($msg)
    {
        return(
        json_encode([
            'status'=>"ok",
            'content'=>$msg,
            'program'=>$this->program
        ])
        );
    }

}
