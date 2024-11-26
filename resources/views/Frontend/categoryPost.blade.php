@extends('Frontend.layout.master')
@section('content')
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count($posts)>0)
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Category: {{ $posts->first()->category->name }}</h4>                            </div>
                        </div>
                        @foreach($posts as $post)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{env('STORAGE_PATH')}}/{{$post->Post_Image}}" style="object-fit: cover;  height: 300px;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="">{{ $posts->first()->category->name }}</a>
                                        <a class="text-body" href=""><small>{{ date('d-m-Y', strtotime($post->created_at))}}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{route('Frontend.detailsPost', $post->id)}}">{{Str::limit($post->Post_Title, 19, ' ...')}}</a>
                                    <p class="m-0">{{Str::limit($post->Post_Content, 150, ' ...')}}</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="https://i.ibb.co.com/3WPvxLF/user.png" width="25" height="25" alt="">
                                        <span>{{ $post->author ? $post->author->name : 'N/A' }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        {{--                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>{{ $post->comments_count }}</small>--}}
                                    </div>
                                </div>
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
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="{{route('Frontend.categoryPost', $tranding->category->id)}}">{{ $tranding->category->name}}</a>
                                                <a class="text-body" href=""><small>{{ date('d-m-Y', strtotime($tranding->created_at))}}</small></a>
                                            </div>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{route('Frontend.detailsPost', $tranding->id)}}">{{Str::limit($tranding->Post_Title, 10, ' ...')}}</a>
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
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                            <div class="input-group mb-2" style="width: 100%;">--}}
{{--                                <input type="text" class="form-control form-control-lg" placeholder="Enter Your Email">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn btn-primary font-weight-bold px-3">Subscrip</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
  @endsection