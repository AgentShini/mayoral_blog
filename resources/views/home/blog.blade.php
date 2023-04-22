<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Post - Eightsoft blog</title>

    <!-- Bootstrap -->
    <link href="{{asset('/home/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/home/assets/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!-- Navigation bar (header) -->
    <div class="container-fluid">    <div class="row">

      @include('home.navbar')
    </div></div>

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">

            <div class="col-lg-12 bar">

            <h2>{{$post->title}}</h2>
            <h3>{{$post->description}}</h3>
            <hr>

            <div class="viewThumbnail">
                <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eRu30Fi3_Wo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <img style="width: 600px; margin-left:250px" src="/product/{{$post->image}}" alt="">
            </div>
            <div class="well text-center">
                Date: <span class = "badge">{{$post->created_at}}</span>
                <a href="{{url('like',$post->id)}}" class="btn likeButton" role="button">Likes:<span class = "badge">{{$post->likes}}</span></a>

                Author: <span class = "badge">{{$post->username}}</span>
            </div>

            <div class="margin-8"></div>

            <h2>Body</h2>
            <hr>

            <div class="well">
                <p>
                    {{$post->post}}
                </p>
            </div>

            <div class="margin-8"></div>

            <h2>Comments</h2>
            @if(Route::has('login'))
            @auth
            <hr>

            <form action="{{url('add_comment',$post->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name = "commenter" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name = "comment" placeholder="Max 250 characters"></textarea>
                </div>
                <div class="submitButton">
                    <button class = "btn-lg btn-warning">Submit</button>
                </div>
            </form>
            @endauth
            @endif

            <hr>
            @foreach($comment as $comment)
            <div class="panel panel-info">
                <div class="panel-heading"><i class= "glyphicon glyphicon-user"></i><span>{{$comment->commenter}}</span></div>
                <div class="panel-body">
                 {{$comment->comment}}
                </div>
            </div>
            @endforeach

            


        </div></div>

        </div>

    </div>

   @include('home.footer')
</body>

</html>

