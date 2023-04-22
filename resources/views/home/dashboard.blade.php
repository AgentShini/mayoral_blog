<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Dashboard - Mayoral Blog</title>

    <!-- Bootstrap -->
    <link href="{{asset('/home/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/home/assets/css/style.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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
    @include('home.navbar')
    <!-- Content body -->
    <div class="wrapper">
        <div class="container"><div class="row">

            <div class="col-lg-12 bar">
                

                <div class="container">    <div class="panel panel-default">

                <a  href = "{{url('/create_post')}}"> <button class = "btn-lg btn-secondary longButton" >Create new post</button></a>
                
                        <div class="panel-heading "> <p class = "text-center"> Your Posts</p> </div>

                        <table class="table table-striped">
                        
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                        @foreach($post as $post)
                            <tbody>
                                <tr>
                                    <td class="col-lg-1 col-md-1 col-xs-2">
                                    </td>
                                    <td class="vert-align"><a href="{{url('blog',$post->id)}}">{{$post->title}}</a></td>
                                    <td class="text-center vert-align"><a class = "btn btn-warning" href="{{url('edit',$post->id)}}">Edit</a></td>
                                    <td class="text-center vert-align"><a onclick="confirmation(event)" class = "btn btn-danger" href="{{url('delete',$post->id)}}">Delete</a></td>
                                </tr>  
                            </tbody>
                            @endforeach
                        
                          </table>
                      
                </div>     </div>

            </div>

        </div></div>
        <div class="clear"></div>
    </div>
    <script>
        
function confirmation(event){
event.preventDefault();
var urlToRedirect = event.currentTarget.getAttribute('href');
console.log(urlToRedirect)
new swal({
title:"Are you sure ?",
text:"Post will be deleted",
icon:"warning",
buttons:true,
dangerMode:true,
})
.then((willCancel)=>{
if(willCancel){

window.location.href = urlToRedirect;
}
});
} 
    </script>

    <!-- Footer -->
    @include('home.footer')
