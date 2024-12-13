<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-secondary">
                        <a id="currentDateTime" class="nav-link text-white font-weight-bold" href="#"></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    <!-- Language Dropdown -->
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link btn dropdown-toggle text-white font-weight-bold small" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe"></i> Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="languageDropdown">
                            <a class="dropdown-item text-black-50 font-weight-bold" href="#">
                                <img src="https://i.ibb.co/3BbDhzR/american-flag-eagle-united-states-usa-wallpaper-thumb.jpg" alt="English" style="width: 20px; height: auto;"> English
                            </a>
                            <a class="dropdown-item text-black-50 font-weight-bold" href="#">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Flag_of_Bangladesh.svg" alt="Bangla" style="width: 20px; height: auto;"> Bangla
                            </a>
                        </div>
                    </li>

                    <!-- Login Button -->
{{--                    <li class="nav-item p-3">--}}
{{--                        <a class="btn btn-primary btn-sm ml-2 font-weight-bold" href="#">--}}
{{--                            <i class="fas fa-sign-in-alt"></i> Login--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
        </div>

    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="{{url('/')}}" class="navbar-brand p-0 d-none d-lg-block">
                @if($footer)
                    <h1 class="m-0 display-4 text-uppercase text-primary">{{$footer->app_name}}</h1>
                @else
                    <p class="m-0 text-center">No footer data available.</p>
                @endif

            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <a href=""><img class="img-fluid" src="https://i.ibb.co.com/tsVBgrf/16329352908763878107.jpg" alt=""></a>
        </div>
    </div>
</div>

<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="{{url('/')}}" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">Bogra<span class="text-white font-weight-normal">Blog</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
                @foreach($categories as $category)
                <a href="{{route('Frontend.categoryPost', $category->id)}}" class="nav-item nav-link">{{$category->name}}</a>
                @endforeach
            </div>

            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <form class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;" action="{{ url('searching') }}" method="GET">
                <input type="text" name="query" class="form-control border-0" placeholder="Keyword">
                <div class="input-group-append">
                    <button type="submit" class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                </div>
                </form>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
