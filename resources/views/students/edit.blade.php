@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">Edit Student</li>
                </ol>
                
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                     
                     <form action="{{URL('students/update')}}" method="POST" role="form">
                         <legend>Update Program</legend>
                         <input type="hidden" name="accessType" value="web">
                         <input type="hidden" name="id" value="{{$student->id}}">
                         <div class="form-group">
                                <label for="">Registration #</label>
                                <input type="text" class="form-control" name="reg_num" placeholder="Registration #" value="{{$student->reg_num}}">
                            </div>
                            <div class="form-group">
                                <label for="">Firstname</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="{{$student->firstname}}">
                            </div>
                            <div class="form-group">
                                <label for="">Surname</label>
                                <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{$student->surname}}">
                            </div>
                            <div class="form-group">
                                <label for="">DOB</label>
                                <input type="date"  class="form-control" name="dob" placeholder="Date of birth" value="{{$student->dob}}">
                            </div>
                            <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender"  class="form-control">  
                                           <option value="{{$student->gender}}">{{ucfirst($student->gender)}}</option>
                                           @if($student->gender=='male')
                                                <option value="female">Female</option>
                                           @else
                                                 <option value="male">Male</option>
                                           @endif     
                                    </select>
                             </div>
                            <div class="form-group">
                                <label for="">Program</label>
                                <select name="program"  class="form-control">
                                    <option value="{{$student->program}}">{{$student->programStudy->name}}</option>
                                    @foreach($programs as $program)
                                        @if(strtolower($program)!=strtolower($student->program))
                                         <option value="{{$program->code}}">{{$program->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>               
                         <button type="submit" class="btn btn-primary">Update</button>
                     </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <hr>
                &copy;Smart APis from <strong> <a href="https://githu.com/fraganya/">Fraganya</a></strong>
            </div>
        </div>
       
    </div>
@stop