<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('status', function () use ($router) {
    return view('status');
});

/**
 * Student Resource Routes::
 * [create,edit,delete,update]
 */
$router->get('students','StudentController@index');
$router->get('students/create', function () use ($router) {
    $programs=\App\Program::all();
    return view('students.create',['programs'=>$programs]);
});
$router->post('students/create','StudentController@create');
$router->get('students/edit/{id}','StudentController@edit');
$router->get('students/delete/{id}','StudentController@destroy');

#[POST - ROUTES]
$router->post('students/create','StudentController@create');
$router->post('students/update','StudentController@update');

/**
 * Program Resource Routes::
 * [create,edit,delete,update]
 */
$router->get('programs','ProgramController@index');
$router->get('programs/create', function () use ($router) {
    return view('programs.create');
});
$router->get('programs/edit/{code}','ProgramController@edit');
$router->get('programs/delete/{code}','ProgramController@destroy');

#[POST - ROUTES]
$router->post('programs/create','ProgramController@create');
$router->post('programs/update','ProgramController@update');



/**
 * API Routes for external applications
 * [Get student]
 * @params - ID , Reg_num, program. gender
 */
$router->get('students/get/byId', function (Request $request) use ($router) {
    $this->validate($request,['id'=>'required|numeric']);
    return \App\Student::find($request->input('id'));
});


$router->get('students/get/random', function (Request $request) use ($router) {
    return \App\Student::all()[rand(0,count(\App\Student::all())-1)];
});

$router->get('students/get/byReg', function (Request $request) use ($router) {
    $this->validate($request,['reg'=>'required|string']);
    return \App\Student::where('reg_num',$request->input('reg'))->first();
});

$router->get('students/get/byProg', function (Request $request) use ($router) {
    $this->validate($request,['code'=>'required|string']);
    return \App\Student::where('program',$request->input('code'))->get();
});

$router->get('students/get/byGender', function (Request $request) use ($router) {
    $this->validate($request,['gender'=>'required|string']);
    return \App\Student::where('gender',$request->input('gender'))->get();
});

/**
 * [Get Programs]
 * @params - get:all , byCode 
 */
$router->get('programs/get', function () use ($router) {
    return \App\Program::all();
});
$router->get('programs/get/{code}', function ($code) use ($router) {
    return \App\Program::where('code',$code)->first();
});