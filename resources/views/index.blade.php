@extends('app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="{{URL('students/create')}}" class="btn btn-default">
                    <i class="fa fa-user-plus"></i>&nbsp;Create Student
                </a>
                <a href="{{URL('students')}}" class="btn btn-default">
                    <i class="fa fa-eye"></i>&nbsp;View Students
                </a>

                <a href="{{URL('programs/create')}}" class="btn btn-default">
                        <i class="fa fa-plus"></i>&nbsp;Create Program
                </a>
                <a href="{{URL('programs')}}" class="btn btn-default">
                        <i class="fa fa-eye"></i>&nbsp;View Programs
                </a>
                <br> <br>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <strong>The Student Management Information System (SMIS) Web service API</strong>&nbsp;
                        is a a minimal system that tries to simulate an actual SMIS by providing API data to systems 
                        that need to work with student information. External applications can only <code>read</code> data and all
                        <code>create</code>, <code>update</code> and <code>delete</code> operations are primarily handled by the system.<br> <br>
        
                        In as much as <strong>data validation</strong> has been implemented, this is at a minimal level and the service
                        admin + users are responsible for ensuring that the data is as valid as possible.
                    </div>
                </div>
            </div>
            <div class="col-sm-8">  
                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title">APIs</h3>
                      </div>
                      
                      <div class="list-group">
                          <a href="#" class="list-group-item ">
                              <h5 class="list-group-item-heading">Get Student by ID</h5>
                              <p class="list-group-item-text">
                                  <code>::host/students/get/byId?id={id}</code>
                              </p>
                          </a>
                          <a href="#" class="list-group-item ">
                                <h5 class="list-group-item-heading">Get Student by Registration #</h5>
                                <p class="list-group-item-text">
                                    <code>::host/students/get/byReg?reg={reg}</code>
                                </p>
                            </a>
                            <a href="#" class="list-group-item ">
                                    <h5 class="list-group-item-heading">Get Students by program</h5>
                                    <p class="list-group-item-text">
                                        <code>::host/students/get/byProg?code={code}</code>
                                    </p>
                            </a>
                            <a href="#" class="list-group-item ">
                                    <h5 class="list-group-item-heading">Get Students by gender</h5>
                                    <p class="list-group-item-text">
                                        <code>::host/students/get/byGender?gender={gender}</code>
                                    </p>
                            </a>
                            <a href="#" class="list-group-item ">
                                    <h5 class="list-group-item-heading">Get all programs</h5>
                                    <p class="list-group-item-text">
                                        <code>::host/programs/get</code>
                                    </p>
                            </a>
                            <a href="#" class="list-group-item ">
                                    <h5 class="list-group-item-heading">Get single program data</h5>
                                    <p class="list-group-item-text">
                                        <code>::host/programs/get/{code}</code>
                                    </p>
                            </a>   
                      </div>   
                </div>
            </div><!--./col -8 -->
            <div class="col-sm-4">
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                  <h3 class="panel-title">Vendor Libraries</h3>
                            </div>
                            
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                   <i class="fa fa-github"></i> Laravel/Lumen
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-github"></i>&nbsp;Bootstrap
                                </a>
                                <a href="#" class="list-group-item">
                                     <i class="fa fa-github"></i>&nbsp;Font-awesome                                    
                                </a>
                                <a href="#" class="list-group-item">
                                     <i class="fa fa-github"></i>&nbsp;jQuery                                    
                                </a>
                            </div>
                            
                    </div>
            </div>
            <div class="col-sm-12">
                <hr style="margin-top:3px;">
                &copy;Smart APis from <strong> <a href="https://githu.com/fraganya/">Fraganya</a></strong>
            </div>
        </div>
       
    </div>
@stop

