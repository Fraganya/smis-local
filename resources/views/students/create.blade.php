@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">Create</li>
                </ol>
                
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                     
                     <form action="" method="POST" role="form">
                         <legend>Create New Student</legend>
                         <input type="hidden" name="accessType" value="web">
                         <div class="form-group">
                             <label for="">Registration #</label>
                             <input type="text" class="form-control" name="reg_num" placeholder="Registration #">
                         </div>
                         <div class="form-group">
                             <label for="">Firstname</label>
                             <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                         </div>
                         <div class="form-group">
                             <label for="">Surname</label>
                             <input type="text" class="form-control" name="surname" placeholder="Surname">
                         </div>
                         <div class="form-group">
                             <label for="">DOB</label>
                             <input type="date"  class="form-control" name="dob" placeholder="Date of birth">
                         </div>
                         <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender"  class="form-control">  
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                </select>
                         </div>
                         <div class="form-group">
                             <label for="">Program</label>
                             <select name="program"  class="form-control">
                                 @foreach($programs as $program)
                                    <option value="{{$program->code}}">{{$program->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                     
                         
                     
                         <button type="submit" class="btn btn-primary">Create</button>
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