@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">Edit Program</li>
                </ol>
                
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                     
                     <form action="{{URL('programs/update')}}" method="POST" role="form">
                         <legend>Update Program</legend>
                         <input type="hidden" name="accessType" value="web">
                         <div class="form-group">
                             <label for="">Program Code</label>
                             <input type="text" class="form-control" name="code" placeholder="Program Code" value="{{$program->code}}">
                         </div>
                         <div class="form-group">
                             <label for="">Program Name</label>
                             <input type="text" class="form-control" name="name" placeholder="name" value="{{$program->name}}">
                         </div>
                         <div class="form-group">
                             <label for="">Duration</label>
                             <input type="text" class="form-control"  name="duration" placeholder="duration i.e 4 yrs" value="{{$program->duration}}">
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