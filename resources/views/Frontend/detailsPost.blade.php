@extends('Frontend.layout.master')
@section('content')
    <!-- News With Sidebar Start -->
    <div class="container-fluid pt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{env('STORAGE_PATH')}}/{{$posts->Post_Image}}" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="{{route('Frontend.categoryPost', $posts->category->id)}}">{{ $posts->category ? $posts->category->name : 'N/A' }}</a>
                                <a class="text-body" href="">{{ date('d-m-Y', strtotime($posts->created_at))}}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$posts->Post_Title}}</h1>
                            <p>{{$posts->Post_Content}}</p>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="https://i.ibb.co.com/3WPvxLF/user.png" width="25" height="25" alt="">
                                <span>{{ $posts->author ? $posts->author->name : 'N/A' }}</span>
                            </div>
                            <div class="d-flex align-items-center">
{{--                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>--}}
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>{{$commentCount}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">{{$commentCount}} Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            @foreach($comments as $comment)
                            <div class="media mb-4">
                                <img src="https://i.ibb.co.com/3WPvxLF/user.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">{{$comment->name}}</a></h6>
                                    <p>{{$comment->comment}}</p>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form action="{{url('comment', $posts->id)}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" name="name" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" name="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message">comment *</label>
                                    <textarea id="message" name="comment" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                           class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
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
    <!-- News With Sidebar End -->
@endsection