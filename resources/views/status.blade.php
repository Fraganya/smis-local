@extends('app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <h3 class="page-header">
                            System Reponse
                    </h3>
            </div>
           
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-body">
                        {{$response}}
                    </div>
                </div>
                <br>
                <a href="{{URL($back)}}" class="btn btn-primary">
                    <i class="fa fa-rotate-left" aria-hidden="true"></i>&nbsp;
                    Back
                </a>
            </div>
            <div class="col-sm-12">
                <hr>
                &copy;Smart APis from <strong> <a href="https://githu.com/fraganya/">Fraganya</a></strong>
            </div>
        </div>
       
    </div>
@stop