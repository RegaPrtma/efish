           <!-- loader  -->
           <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#"/></div>
         </div>
         <!-- end loader -->
     <!-- header -->
     <div class="header">
        <div class="container-fluid">
           <div class="row d_flex">
              <div class=" col-md-2 col-sm-3 logo_section">
                 <div class="full">
                    <div class="center-desk">
                       <div class="logo">
                          <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-8 col-md-10 col-sm-9">
                 <nav class="navigation navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                       <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                             <a class="nav-link" href="/">Home</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" href="about.html">About</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" href="fishs.html">Fishs</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" href="blog.html">Blog</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" href="contact.html">contact us</a>
                          </li>
                          <li class="nav-item">
                           <a class="nav-link" href="{{ url('menu_order') }}">Pesananku</a>
                        </li>
                          <li class="nav-item">
                           <a class="fa fa-shopping-bag" aria-hidden="true" href="{{ url('menu_keranjang') }}">[{{ $count }}]</a>
                        </li>
                       </ul>
                    </div>
                 </nav>
              </div>
              <div class="col-md-2 d_none">
                @if (Route::has('login'))
                @auth

                

                <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input class="btn btn-danger" type="submit" value="logout">
                </form>
                @else
                
                 <ul class="email text_align_right">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @endauth
                    @endif
                    <!--<li><a href="Javascript:void(0)"><img src="images/sho.png" alt="#"/></a></li>
                    <li><a href="Javascript:void(0)"><img src="images/sea.png" alt="#"/></a></li>-->
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <!-- end header inner -->
     <!-- end header -->