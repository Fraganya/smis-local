<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMIS API</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}" />

    <style>
        .btn{
            border-radius:0px!important;
        }
    </style>
    @yield('styles')
</head>
<body>
    
    <nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL('/')}}" style="color:#fff;">
               <i class="fa fa-desktop"></i>&nbsp;SMIS Web Service API
            </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse main-nav">           
            <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff;">
                                <i class="fa fa-clone"></i>
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{URL('students')}}">Students</a></li>
                                    <li><a href="{{URL('programs')}}">Programs</a></li>
                                </ul>
                          </li>
                    <p class="navbar-text" style="color:#fff;">Smart APIs.org</p>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div>
    </nav>


    @yield('content')

    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>