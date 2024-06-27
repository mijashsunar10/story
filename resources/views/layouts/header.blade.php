<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    {{-- <a href="./index.blade.php" class="fs-1 fw-bold " > --}}
                    <a href="./index.blade.php" >
                        {{-- <img class="img-fluid " src="img/symthesis.png" alt=""> --}}
                        {{-- <span class="text-light fs-3 fw-bold">Simthesis</span> --}}
                        <img src="img/logo.png" alt="">

                    </a>
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('categories')}}">Categories<span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{url('categories')}}">Science Fiction</a></li>
                                    <li><a href="{{url('adetails')}}">Comedy</a></li>
                                    <li><a href="{{url('awatching')}}">Love</a></li>                                    <li><a href="{{url('signup')}}">Sign Up</a></li>
                                    <li><a href="{{url('awatching')}}">Fantasy</a></li>                                    <li><a href="{{url('signup')}}">Sign Up</a></li>
                                    <li><a href="{{url('login')}}">Mystery</a></li>
                                    <li><a href="{{url('login')}}">Mythology</a></li>
                                    <li><a href="{{url('login')}}">Legend</a></li>
                                    <li><a href="{{url('login')}}">Fairy Tale</a></li>
                                    <li><a href="{{url('login')}}">Historical</a></li>
                                    <li><a href="{{url('login')}}">Drama</a></li>
                                    <li><a href="{{url('login')}}">Fable</a></li>
                                </ul>

                                {{-- <ul class="dropdown">
                                    <li><a href="./categories.blade.php">Categories</a></li>
                                    <li><a href="./anime-details.blade.php">Anime Details</a></li>
                                    <li><a href="./anime-watching.blade.php">Anime Watching</a></li>
                                    <li><a href="./blog-details.blade.php">Blog Details</a></li>
                                    <li><a href="./signup.blade.php">Sign Up</a></li>
                                    <li><a href="./login.blade.php">Login</a></li>
                                </ul> --}}

                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle link-offset-2 link-underline link-underline-opacity-100" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>   
                                <!-- <a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Underline opacity 0</a> -->
                                <div class="dropdown-menu">
                                  <ul>
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  </ul>
                                  <ul>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  </ul>
                                  <ul>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                                </div> 
                                
                              </li> --}}
                            <li><a href="{{route('storydetails.create')}}">Write</a></li>
                            <li><a href="{{url('fourlayer')}}">Read</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="{{url('signup')}}"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>