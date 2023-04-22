<div class="container-fluid">    <div class="row">

    <nav role="navigation" class="navbar navbar-inverse">
        <div class="container">
            
            <!-- Logo (name) -->
            <div class="navbar-header header">

                <div class="col-lg-12"><div class="container"><div class="row">

                        <h1><a href="{{url('/index')}}">Mayoral Blog</a></h1>
                        <p><a href="javascript:void()">All about AI</a></p>

                </div></div></div>
                

                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            
            </div>
            
            <!-- Navigation buttons -->
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <div id="navbarCollapse"class="collapse navbar-collapse">
                    <ul class="nav nav-pills nav-justified">
                        @if(Route::has('login'))
                        <li role="presentation" class="active"><a href="{{url('/index')}}">Home</a></li>
                        <li role="presentation"><a href="{{url('/blogs')}}">Blog</a></li>
                        <li role="presentation"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li role="presentation"><a href="{{url('/contact')}}">Contacts</a></li>
                        @else
                        <li role="presentation"><a href="{{url('/login')}}">Login</a></li>
                        <li role="presentation"><a href="{{url('/register')}}">Register</a></li>
                        @endif

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              @if(Route::has('login'))
                              @auth
                              {{$name}}
                              @endauth
                              @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{url('/logout')}}">Log out</a>
                            </div>
                        </li>
                      </ul>
                </div>
            </div>
            
        </div>
    </nav>

</div></div>