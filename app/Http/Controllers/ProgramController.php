<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Program;

class ProgramController extends Controller
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
        $programs=Program::orderBy('code','asc')->simplePaginate(10);
        return view('programs.view',['programs'=>$programs]);
    }
    
    public function create(Request $request){
        $this->validate($request,[
            'code'=>'required|string|unique:programs',
            'name'=>'required|string|unique:programs',
            'duration'=>'required|numeric',
        ]);

        $program=new Program($request->all());

        if($program->save()){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully created program!',
                'program'=>$program
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'programs/create']);
        }

        return (
                ($request->input('accessType')=='web') 
                ? view('status',['response'=>json_encode($response),'back'=>'programs/create']) 
                : $response
        );
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

        $program=Program::where('code',$request->input('code'))->firstOrFail();

        $updateCount=$program->update($request->all());
        if($updateCount>0){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully updated program!',
                'program'=>$program
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'programs']);
        }
        return view('status',['response'=>json_encode($response),'back'=>'programs']);
    }

    public function destroy($code){
        $program=Program::where('code',$code)->firstOrFail();

        if($program->delete()){
            $response=array(
                'status'=>'ok',
                'content'=>'Successfully deleted program!',
                'program'=>$program
            );
        }
        else{
            return view('status',['response'=>'An error occurred!','back'=>'programs']);
        }

        return view('status',['response'=>json_encode($response),'back'=>'programs']);
    }



}
