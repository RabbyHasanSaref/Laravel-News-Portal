<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
            @if($footer)
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>{{ $footer->address }}</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+880{{ $footer->phone }}</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>{{ $footer->email }}</p>
            @else
                <p class="m-0 text-center">No footer data available.</p>
            @endif
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start">
                @if($footer)

                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="{{$footer->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="{{$footer->linkedIn}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="{{$footer->instagram}}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="{{$footer->youtube}}"><i class="fab fa-youtube"></i></a>
                @else
                    <p class="m-0 text-center">No footer data available.</p>
                @endif
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="d-flex flex-column">
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">About Us</a>
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">Contact Us</a>
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">Apps</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="d-flex flex-column">
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">Comment Policy</a>
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">RSS</a>
                <a href="" class="mb-4 text-white text-uppercase font-weight-bold">Sitemap</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="mb-4 text-white text-uppercase font-weight-bold">Mobile App Download</a>
            <img style="width: 300px; height: 200px;" src="{{asset('Frontend//img/apple-play-sotre.png')}}" alt="">
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    @if($footer)
        <p class="m-0 text-center">© {{ $footer->develop_by }}</p>
    @else
        <p class="m-0 text-center">No footer data available.</p>
    @endif
</div>
<!-- Footer End -->