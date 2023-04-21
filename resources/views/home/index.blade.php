<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "Content-Type" content = "text/html"; charset = "utf-8"/>
    <meta name="author" content="Eightsoft">
    <meta name = "description" content = "All about the AI"/>

    <title>Home - Eightsoft blog</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
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

            <!-- Images + Photo -->

            <div class="col-lg-12">     <div class="row">

                <div class="col-lg-12">
                    <div class="row backgroundImage">
                        <div class="col-lg-6">
                             <div class="contentBlock">
                                 <h6>ABOUT</h6>
                                 <h1>Bringing the benefits of AI to everyone</h1>
                                 <p>We provide a platform for thousands of people to exchange ideas and to 
                                     expand our understanding of data science. While we allow
                                      authors to publish articles,
                                       we do not endorse each author’s contribution.</p>
                             </div>
                         </div>
    
                        <div class="col-lg-6"></div>
                    </div>
                </div>
                

<!--                 <div class="col-sm-6 col-md-4">     <div class="thumbnail">

                    <img src="assets/img/1.jpg" alt="Title">

                    <div class="caption">
                        <h3>Title</h3>
                        <p> Description</p>
                        <p><a href="#" class="btn btn-primary" role="button">Like</a> 
                            <a href="#" class="btn btn-primary" role="button">Comment</a>
                            <a href="#" class="btn btn-primary" role="button">Read more</a>
                        </p>
                    </div>

                </div></div> -->

               @include('home.content')

               

            </div></div>
            

        </div></div>

        <div class="container">
            <div class="row">

                <div class="jumbotron jumbotron-fluid aboutPost">
                    <div class="jumbotron ">
                        <h6>BLOG</h6>
                        <h2>Read our blog</h2>
                        <p>We provide a platform for thousands of people to exchange ideas and to 
                            expand our understanding of data science. While we allow
                             authors to publish articles,
                              we do not endorse each author’s contribution.</p>
                        <a class="btn btn-primary btn-lg" href="{{url('/blogs')}}" role="button">Learn more</a>
                      </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid aboutPost aboutPostLeft">
                            <div class="jumbotron ">
                                <h6>DASHBOARD</h6>
                                <h2>Discover</h2>
                                <p>We provide a platform for thousands of people to exchange ideas and to 
                                    expand our understanding of data science. While we allow
                                     authors to publish articles,
                                      we do not endorse each author’s contribution.</p>
                                <a class="btn btn-primary btn-lg" href="{{url('/dashboard')}}" role="button">Learn more</a>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid aboutPost aboutPostRight">
                            <div class="jumbotron ">
                                <h6>CONTACTS</h6>
                                <h2>Contact us</h2>
                                <p>We provide a platform for thousands of people to exchange ideas and to 
                                    expand our understanding of data science. While we allow
                                     authors to publish articles,
                                      we do not endorse each author’s contribution.</p>
                                <a class="btn btn-primary btn-lg" href="{{url('/contact')}}" role="button">Learn more</a>
                              </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

        

         <div class="container">    <div class="panel panel-default">

                <div class="panel-heading">Popular posts</div>
              
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th class="text-center">Rating</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="col-lg-1 col-md-1 col-xs-2">
                                <img class="img-responsive" src="{{asset('home/assets/img/eclass.png')}}" alt="Title">
                            </td>
                            <td class="vert-align"><a href="{{url('/blog/1')}}">1</a></td>
                            <td class="text-center vert-align"><span class="badge">10.0</span></td>
                        </tr>  
                        <tr>
                            <td class="col-lg-1 col-md-1 col-xs-2">
                                <img class="img-responsive" src="{{asset('home/assets/img/eclass.png')}}" alt="Title">
                            </td>
                            <td class="vert-align"><a href="{{url('/blog/2')}}">2</a></td>
                            <td class="text-center vert-align"><span class="badge">10.0</span></td>
                        </tr> 
                        <tr>
                            <td class="col-lg-1 col-md-1 col-xs-2">
                                <img class="img-responsive" src="{{asset('home/assets/img/eclass.png')}}" alt="Title">
                            </td>
                            <td class="vert-align"><a href="{{url('/blog/3')}}">3</a></td>
                            <td class="text-center vert-align"><span class="badge">8.0</span></td>
                        </tr>  
                    </tbody>
        
        
                  </table>

        </div>    
     </div> 
        

        <div class="clear"></div>
    </div>

    <!-- Footer -->
  @include('home.footer')
</body>

</html>
