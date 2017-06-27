
<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="{{url('/')}}" class="simple-text">
            <img height="300px" width="200px" src="{{asset('images/logo.png')}}" class="img-responsive">
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{{ (Request::is('/') ? 'active' : '') }}}" >
                <a href="{{url('/')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{{ (Request::is('/profile') ? 'active' : '') }}}">
                <a href="{{url('/profile')}}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>