@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">Students</li>
                </ol>
                
            </div>
            <div class="col-sm-12">

                            <!-- Table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>Reg #</th>
                                        <th>Firstname</th>
                                        <th>Surname</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Program</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->reg_num}}</td>
                                        <td>{{ucfirst($student->firstname)}}</td>
                                        <td>{{ucfirst($student->surname)}}</td>
                                        <td>{{ucfirst($student->gender)}}</td>
                                        <td>{{$student->dob}}</td>
                                        <td>{{$student->program}}</td>
                                        <td>
                                            <a href="{{URL('students/edit',$student->id)}}" class="btn btn-sm btn-info">
                                                 Edit
                                            </a>
                                            <a href="{{URL('students/delete',$student->id)}}" class="btn btn-sm btn-danger" 
                                                title="Delete without confirmation!"> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            {{$students->links()}}                            
      
            </div>
            <div class="col-sm-12">
                <hr>
                &copy;Smart APis from <strong> <a href="https://githu.com/fraganya/">Fraganya</a></strong>
            </div>
        </div>
       
    </div>
@stop