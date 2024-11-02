@extends('Frontend.layout.master')
@section('content')

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                @if(count($slider)>0)
                <div class="owl-carousel main-carousel position-relative">
                    @foreach($slider as $slide)
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="{{env('STORAGE_PATH')}}/{{$slide->Post_Image}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                       href="{{route('Frontend.categoryPost', $slide->category->id)}}">{{ $slide->category->name}}</a>
                                    <a class="text-white" href="">{{ date('d-m-Y', strtotime($slide->created_at))}}</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="{{route('Frontend.detailsPost', $slide->id)}}">{{Str::limit($slide->Post_Title, 40, ' ...')}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                    <div class="error-page text-center">
                        <h1 class="display-1">404</h1>
                        <h2>Oops! Page Not Found</h2>
                    </div>
                @endif
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @foreach($card as $item)
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{env('STORAGE_PATH')}}/{{$item->Post_Image}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="{{route('Frontend.categoryPost', $item->category->id)}}">{{ $item->category->name}}</a>
                                        <a class="text-white" href=""><small>{{ date('d-m-Y', strtotime($item->created_at))}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{route('Frontend.detailsPost', $item->id)}}">{{Str::limit($item->Post_Title, 30, ' ...')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        @if(count($slider)>0)
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                             style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach($breaking as $break)
                                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="{{route('Frontend.detailsPost', $break->id)}}">{{$break->Post_Title}}</a></div>
                            @endforeach
                        </div>
                        @else
                            <p class="text-white">Data Not Found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->

    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            @if(count($featurePost)>0)
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach($featurePost as $feature)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{env('STORAGE_PATH')}}/{{$feature->Post_Image}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                               href="{{route('Frontend.categoryPost', $feature->category->id)}}">{{ $feature->category->name}}</a>
                            <a class="text-white" href=""><small>{{ date('d-m-Y', strtotime($feature->created_at))}}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{route('Frontend.detailsPost', $feature->id)}}">{{Str::limit($feature->Post_Title, 30, ' ...')}}</a>
                    </div>
                </div>
                    @endforeach
            </div>
            @else
                <p class="text-black-50">Data Not Found!</p>
            @endif
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            </div>
                        </div>
                        @if(count($latestPost)>0)
                        @foreach($latestPost as $latest)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{env('STORAGE_PATH')}}/{{$latest->Post_Image}}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="{{route('Frontend.categoryPost', $latest->category->id)}}">{{ $latest->category->name}}</a>
                                        <a class="text-body" href=""><small>{{ date('d-m-Y', strtotime($latest->created_at))}}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{route('Frontend.categoryPost', $latest->category->id)}}">{{ $latest->category->name}}</a>
                                    <p class="m-0">{{Str::limit($latest->Post_Content, 150, ' ...')}}</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="https://i.ibb.co.com/3WPvxLF/user.png" width="25" height="25" alt="">
                                        <span>{{ $latest->author ? $latest->author->name : 'N/A' }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <div class="error-page text-center">
                                <h1 class="display-1">404</h1>
                                <h2>Oops! Page Not Found</h2>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-bold">Facebook Share</span>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=YOUR_URL" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-bold">LinkedIn Share</span>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-bold">Instagram Share</span>
                            </a>
                            <a href="https://www.youtube.com" target="_blank" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-bold">YouTube Share</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        @if(count($trandingPost)>0)
                        <div class="bg-white border border-top-0 p-3">
                            @foreach($trandingPost as $tranding)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" style="width: 150px" src="{{env('STORAGE_PATH')}}/{{$tranding->Post_Image}}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="{{route('Frontend.categoryPost', $feature->category->id)}}">{{ $feature->category->name}}</a>
                                        <a class="text-body" href=""><small>{{ date('d-m-Y', strtotime($feature->created_at))}}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{route('Frontend.detailsPost', $feature->id)}}">{{Str::limit($feature->Post_Title, 10, ' ...')}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <p class="text-black-50">Data Not Found!</p>
                        @endif
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                           <form action="{{route('subscribe')}}" method="post">
                               @csrf
                               <div class="input-group mb-2" style="width: 100%;">
                                   <input type="text" class="form-control form-control-lg" name="email" placeholder="Enter Your Email">
                                   <div class="input-group-append">
                                       <button class="btn btn-primary font-weight-bold px-3">Subscrip</button>
                                   </div>
                               </div>
                           </form>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                @foreach($categories as $category)
                                    <a href="{{route('Frontend.categoryPost', $category->id)}}" class="nav-item nav-link">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
  @endsection