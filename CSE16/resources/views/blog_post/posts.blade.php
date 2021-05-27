<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Post/Notice Dashboard</title>
    <link href="{{asset('post/css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<div id="layoutSidenav_content">
    <main>
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <a href="/"><img src="{{asset('images/Batch logo.png')}}" style="width: 20%;"></a>
                </div>
            </div>

            <div class="row">

                @if($view_post)
                    <div class="col-xl-7">
                    <div class="card mb-4">

                        <div class="card-header">
                            Post

                            @guest()
                            @else
                                @if($view_post->poster_email == Auth::user()->email)
                                    <a class="px-2" style="float: right" href="/post/delete/{{ $view_post->id }}">Delete Post</a>
                                @endif
                            @endif


                        </div>

                        <div class="card-body">
                            <div>

                                <a href="/student/{{ $view_post->roll }}" class="card-title" style="color: #1a202c">
                                    <img src="{{ asset($view_post->profile_pic)}}" style="width: 50px;height: 50px" class="rounded-circle">
                                    {{ $view_post->posted_by }}
                                </a>
                                <p style="font-size: 10px">{{ $view_post->created_at }}</p>


{{--                                <h6>{{$view_post->posted_by}}</h6>--}}
{{--                                <p style="font-size: 15px"><i> {{$view_post->created_at}} </i> </p>--}}

                                <div class="text-center">
                                    <h4>{{$view_post->post_heading}}</h4>
                                </div>


                            </div>

                            <div class="mt-1">
                                <p>{{$view_post->post_body}}</p>
                            </div>

                            <div class="text-center">
                                @foreach(explode('|',$view_post->post_pictures) as $picture)
                                    <img class="mb-2" src="{{ asset($picture)}}" alt="" style="width: 100%">
                                @endforeach
                            </div>



                        </div>
                    </div>
                </div>

                    <div class="col-xl-5">
                        <div class="card mb-4">
                            <div class="card-header">
                                Create a post
                            </div>
                            <div class="card-body">
                                <form action="{{ route('create_post') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Post Tittle</label>
                                        <textarea type="text" class="form-control" placeholder="Give a short tittle" name="heading"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Post Body</label>
                                        <textarea type="text" class="form-control" placeholder="Your Idea" name="body" style="height: 150px;"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label >Include Images</label>
                                        <input type="file" name="image[]" multiple>
                                    </div>

                                    @guest()
                                        <div class="text-center" style="color: red">
                                            <h6>Sorry It's Seems You are not a Member of Our CSE family, So you can not post</h6>
                                            <h5 style="color: green">If you are a CSEian</h5>
                                            <h5 style="color: green">Please login with your cse.pstu.ac.bd domain</h5>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Share Now</button>
                                        </div>
                                    @endif






                                </form>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header">
                                Create a post
                            </div>
                            <div class="card-body">
                                <form action="{{ route('create_post') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Post Tittle</label>
                                        <textarea type="text" class="form-control" placeholder="Give a short tittle" name="heading"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Post Body</label>
                                        <textarea type="text" class="form-control" placeholder="Your Idea" name="body" style="height: 150px;"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label >Include Images</label>
                                        <input type="file" name="image[]" multiple>
                                    </div>


                                    @guest()
                                        <div class="text-center" style="color: red">
                                            <h6>Sorry It's Seems You are not a Member of Our CSE family, So you can not post</h6>
                                            <h5 style="color: green">If you are a CSEian</h5>
                                            <h5 style="color: green">Please login with your cse.pstu.ac.bd domain</h5>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Share Now</button>
                                        </div>
                                    @endif



                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>

                @endif



            </div>

            <div class="card mb-4">
                <div class="card-header">
                    More Posts
                </div>
                <div class="card-body" style="background-color: #F0F2F5">
                    <div class="table-responsive" >

                        @foreach($posts as $post)

                            <div class="card mt-3" style="z-index: 10; background-color: #FFFFFF;">
                                <div class="card-body">
                                    <a href="/student/{{ $post->roll }}" class="card-title" style="color: #1a202c">
                                        <img src="{{asset( $post->profile_pic)}}" style="width: 65px;height: 65px" class="rounded-circle">
                                        {{ $post->posted_by }}
                                    </a>
                                    <p style="font-size: 12px"><i>{{ $post->created_at }}</i></p>
                                    <div class="text-center">
                                        <h4 class="card-subtitle my-2 text-muted" style="color: #559415">{{$post->post_heading}}</h4>

                                    </div>

                                    <p class="card-text">{{ $post->post_body }}</p>

                                    <div>
                                        @foreach(explode('|',$post->post_pictures) as $picture)
                                            <img src="{{asset($picture)}}" alt="" style="width: 25%">
                                        @endforeach
                                            <a href="/view/post/{{ $post->id }}" class="mb-1 mr-2" style="float: right; margin-top: -10px" >....See Post</a>

                                    </div>

                                </div>
                            </div>


                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">

            </div>
        </div>
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('post/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>



{{--    @foreach($posts as $post)--}}
{{--        <h3>{{ $post->post_heading }}</h3>--}}
{{--        <h3>{{ $post->post_body }}</h3>--}}
{{--        <a href="/post/delete/{{ $post->id }}">DELETE</a>--}}

{{--        @foreach(explode('|',$post->post_pictures) as $picture)--}}
{{--            <img src="{{ asset($picture) }}" alt="" style="width: 50%">--}}
{{--        @endforeach--}}

{{--    @endforeach--}}
