<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Blogs - Mayoral Blog</title>

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
   @include('home.navbar')

    

    

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">
            <form class="mb-4 w-50 m-auto"  action="{{url('search_post')}}" method="GET">
                <div class="input-group" style = "margin: auto">
                    <input type="search" class="form-control" placeholder="Search" name="search">
                </div>
            </form>
            <div class="col-lg-12 bar">

                @foreach($post as $posts)
                <div style = "padding-top: 10px;padding-bottom: 10px">

                    <div class="col-sm-2 col-md-12 col-lg-12"></div>

                <div class="col-lg-3 col-md-3 col-sm-8 img-bar border-right">
                    <img style="width:155px" class="img-responsive" src="product/{{$posts->image}}" alt="eclass">
                </div>

                <div class="clear-both-sm"></div><div class="col-sm-2"></div>

                <div class="col-lg-9 col-md-9 col-sm-8 content-bar">
                    <div class = "h1"><a href = "{{url('blog',$posts->id)}}"  class="tracking-in-expand">{{$posts->title}}</a></div>
                    <p>{{$posts->description}}</p>
                    <a href="{{url('blog',$posts->id)}}" class="btn topicTag">Read Post</a>
                </div>

                </div> 
                @endforeach
               
            </div>
            {!!$post->links('pagination::bootstrap-5')!!}  
            
           
        </div></div>
        <div class="clear"></div>
        
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   @include('home.footer')