@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">Create Program</li>
                </ol>
                
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                     <form action="{{URL('programs/create')}}" method="POST" role="form">
                         <legend>Create New Program</legend>
                         <input type="hidden" name="accessType" value="web">
                         <div class="form-group">
                             <label for="">Program Code</label>
                             <input type="text" class="form-control" name="code" placeholder="Program Code">
                         </div>
                         <div class="form-group">
                             <label for="">Program Name</label>
                             <input type="text" class="form-control" name="name" placeholder="name">
                         </div>
                         <div class="form-group">
                             <label for="">Duration</label>
                             <input type="text" class="form-control" value="4" name="duration" placeholder="duration i.e 4 yrs">
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