@extends('app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
                
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">SMIS Web Service API</a>
                    </li>
                    <li class="active">View Programs</li>
                </ol>
                
            </div>
            <div class="col-sm-12">

                            <!-- Table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($programs as $program)
                                    <tr>
                                        <td>{{$program->code}}</td>
                                        <td>{{$program->name}}</td>
                                        <td>{{$program->duration}}</td>
                                        <td>
                                            <a href="{{URL('programs/edit',$program->code)}}" class="btn btn-sm btn-info">
                                                 Edit
                                            </a>
                                            <a href="{{URL('programs/delete',$program->code)}}" class="btn btn-sm btn-danger" 
                                                title="Delete without confirmation!"> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <ul class="pagination">
                                @if($programs->onFirstPage())
                                     <li class="disabled"><span>Prev</span></li>
                                @else
                                    <li><a href="{{ $programs->previousPageUrl() }}" rel="prev">Prev</a></li>
                                @endif

                                @if($programs->hasMorePages())
                                <li><a href="{{ $programs->nextPageUrl() }}" rel="next">Next</a></li>
                                @else
                                     <li class="disabled"><span>Next</span></li>
                                    
                                @endif
                            </ul>
                                                       
      
            </div>
            <div class="col-sm-12">
                <hr>
                &copy;Smart APis from <strong> <a href="https://githu.com/fraganya/">Fraganya</a></strong>
            </div>
        </div>
       
    </div>
@stop