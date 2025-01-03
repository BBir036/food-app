<div class="header_main" id="head">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="#"><img src="images/image-removebg-preview.png" width="200px" height="100px"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">Recipes</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="#">Video Tutorials</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="#">Contact</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="#"><img src="images/image-removebg-preview.png"></a></div>
       <div class="menu_main">
          <ul>
             <li><a href="{{url('home')}}">Home</a></li>
             <li><a href="{{url('recipes')}}">Recipes</a></li>
             <li><a href="{{url('about')}}">About Us</a></li>
             <li><a href="{{url('videoTutorials')}}">Video Tutorials</a></li>

               @if (Route::has('login'))
               @auth
               <li><a href="{{url('user_add')}}">Add Recipe</a></li>
               <li><a href="{{url('my_recipe')}}">My Recipes</a></li>
               <li>
                  <a href="#" class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                  </a>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                  </form>
               </li>
               @else
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
               @endauth
               @endif
            </ul>
            

            
       </div>
    </div>
 </div>