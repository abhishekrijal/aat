<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Asian Adventure Trips</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- Dashboard CSS    -->
    <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet"/>
    
    <!--     Fonts and icons     -->
    
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />  


        
</head>

<body>
<div class="wrapper">

    <div class="sidebar" data-active-color="orange" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg')}}">
        <div class="logo">
            <a href="#" class="simple-text">
                AAT's Admin Portal
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="#" class="simple-text">
                <img src="{{asset('images/aat-logo-71x71.jpg')}}" class="img-responsive">
            </a>
        </div>
        <div class="sidebar-wrapper">
           
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-gavel"></i>
                                <p class="hidden-md hidden-lg">
                                    Actions
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Create New User</a></li>
                                <li><a href="#">Manage Role</a></li>
                                <li><a href="#">Add New Beneficiaries</a></li>
                                <li><a href="#">Search Beneficiaries</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('/profile')}}"><i class="material-icons">person_outline</i> Profile</a>
                                </li>
                                <li>
                                    <a href="{{url('/logout')}}"><i class="material-icons">power_settings_new</i> Logout</a>
                                </li>
                            </ul>

                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>


<!--  Plugin for Date Time Picker and Full Calendar Plugin-->

<!--  Charts Plugin -->
<script src="{{asset('js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->

<!--  Notifications Plugin    -->

<!-- DateTimePicker Plugin -->

<!-- Vector Map plugin -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>

</html>