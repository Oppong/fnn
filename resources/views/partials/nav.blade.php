<nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4">
  <a class="navbar-brand font-weight-bold text-dark" href="#" style="font-size: 18px;">GNAAS WA-CAMPUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color:  #F96332;">
    <span class=" fa fa-bars " style="color: white;"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
    <div class="navbar-nav " style="font-size: 18px;">
      <a class="nav-item nav-link active  text-dark" href="/"> <strong>Home </strong></a>
      <a class="nav-item nav-link text-dark" href="/about"><strong>About Us</strong></a>
      <a class="nav-item nav-link text-dark" href="/contact"><strong>Contact Us </strong></a>
      <a class="nav-item nav-link text-dark " href="/alumni"><strong>Alumni </strong></a>
      <a class="nav-item nav-link text-dark " href="/posts"><strong>Blog </strong></a>

      <div class="dropdown">
         <a class=" dropdown-toggle nav-item nav-link text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>
          Gallery
      </strong></a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <a class="dropdown-item" href="/choir">Choir @5</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="/lawra">Lawra Evangelism </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="/masterguide">Master Guide </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="/inter2015">Inter-Tertiary 2015</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="/inter2016">Inter-Tertiary 2016</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="/generals">General</a>
      </div>
    </div><!-- end of dropdown -->
    <a class="nav-item nav-link text-dark " href="/register"><strong>Register</strong></a>
    <a class="nav-item nav-link text-dark " href="/login"><strong>Login</strong></a>

    
                 @if(Auth::check())
                        <div class="dropdown">
                            <a class=" dropdown-toggle nav-item nav-link text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">         {{ Auth::user()->name}} 
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                               @role('superadministrator|administrator')
                                 <a class="dropdown-item" href="{{ route('admin.dashboard')}}"> Admin Panel </a>
                              @endrole

                                 <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"> Logout </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                              </div>
                             </div><!-- end of dropdown -->
                          
                           @endif
    </div>
  </div><!-- end of Collapse -->
 
</nav>

