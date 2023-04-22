
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Create post - Eightsoft blog</title>

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
@include('sweetalert::alert')

    <!-- Navigation bar (header) -->
    <div class="container-fluid">    <div class="row">

      @include('home.navbar')

    </div></div>

    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">

            <div class="col-lg-12 bar">
                <h2>Create post</h2>
                <hr>

                <form action="{{url('/post_created')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text"  name = "title"  placeholder="Title" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <input type="text"  name = "description"  placeholder="Short description" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" name = "category" placeholder="Category" class="form-control input-lg">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control"  name = "post" placeholder="Body"></textarea>
                    </div>

                    <!-- <button class = "btn-lg btn-secondary">Upload image</button> -->

                    <label for="image" class="btn btn-primary">
                        Upload Image
                    </label>

                    <div class="form-group">
                      <input type="file" class="form-control-file btn btn-primary" name = "image" id="image">
                    </div>
                    <button class = "btn-lg btn-warning pull-right">Submit</button>
                </form>

                <div class="margin-8 clear"></div>


            </div>

        </div></div>
        <div class="clear"></div>
    </div>

 @include('home.footer')
