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

            <div class="col-lg-12 bar">
                

                <div class="container">    <div class="panel panel-default">

                <a  href = "{{url('/create_post')}}"> <button class = "btn-lg btn-secondary longButton" >Create new post</button></a>
                
                        <div class="panel-heading "> <p class = "text-center"> Your posts</p> </div>

                        <table class="table table-striped">
                        
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td class="col-lg-1 col-md-1 col-xs-2">
                                    </td>
                                    <td class="vert-align"><a href="">1</a></td>
                                    <td class="text-center vert-align"><button class = "btn-lg btn-secondary">edit</button></td>
                                    <td class="text-center vert-align"><button class = "btn-lg btn-secondary">delete</button></td>
                                </tr>  
                            </tbody>
                        
                        
                          </table>
                      
                </div>     </div>

            </div>

        </div></div>
        <div class="clear"></div>
    </div>

    <!-- Footer -->
    @include('home.footer')