<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        
        <meta charset="utf-8"> 
        <title>4Mation | Inbox</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="4Mation Technologies Employee Management Systemn | Admin Inbox" />
       
        <!-- Core CSS -->         
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->


        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <link href="css/style-library-1.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/blocks.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">           
        <link rel="stylesheet" href="components/pg.chocka-blocks/css/cb-style.css">       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400">
        <link href="css/eprofile.css" rel="stylesheet" type="text/css">
        <link href="css/profile.css" rel="stylesheet" type="text/css">    
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">       
        <link href="/css/style-library-1.css" rel="stylesheet" type="text/css">
        <link href="/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="/css/blocks.css" rel="stylesheet" type="text/css">
        <link href="/components/pg.chocka-blocks/css/cb-style.css" rel="stylesheet" type="text/css">
        <link href="/components/pg.chocka-blocks/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/style-library-1.css">       
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">       
        <link href="/css/admin.css" rel="stylesheet" type="text/css">        
        <link href="/css/admin2.css" rel="stylesheet" type="text/css">
        <script type="/text/javascript" src="js/jquery-1.11.1.min.js"></script>
    </head>     
            
        <body data-spy="scroll" data-target="nav" class="bodybg">
           
           @include('layouts.members.nav')

            <div class="container">
                <div class="row">
                    <h1 id="adminheader" class="header-radius">Admin Panel</h1>
                    
                    @include('layouts.admin.sidebar')

                    <div class="col-md-9">
                        <div class="well wellpbot wellclean">
                            <div class="list-group">
                                <div href="#" class="list-group-item active  titlebox">
                                    <div class="col-xs-12 titlebox ha">
                                        <h4 class="list-group-item-heading spacer-10 text-center">Admin Mail</h4>
                                        <p class="list-group-item-text">Welcome to the mail section of the admin page. Here is where all the mail arrives from the front page. Anyone as long as they have Admin access levels, can view and delete these messages. Any incoming messages will appear below.
                                        
                                        <br /><br />
                                        - See "Pages" for more options.

                                        </p>
                                    </div>
                                </div>
                                <hr>

                                @foreach($emails as $email)

                                <div class="rndclean list-group-item active  msgheight">
                                <form action="/delemail" method="POST">
                                    {{ csrf_field() }}
                                    <div class="media col-md-4">
                                        <figure class="pull-left picposition">
                                        <img class="media-object img-rounded img-responsive imgcenter" src="/images/envelope.gif" alt="placehold.it/350x250">
                                        </figure>
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="list-group-item-heading spacer-10 subcenter">{{ $email->subject}}</h4>
                                        <p class="list-group-item-text"> {{ $email->message }} </p>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h3 class="h3margin h3m1">{{ $email->firstname }}</h3>
                                        <h3 class="h3margin">Taheri</h3>
                                        <h6 class="fz13 h3margin h3m1">{{ $email->email }}</h6>
                                        <button type="submit" class="btn btn-danger btn-md btn-block">Delete</button>
                                        <p class="dater">{{ $email->created_at->diffForHumans() }} </p>
                                    </div>
                                    <input type="hidden" value="{{ $email->id }}" name="id" />

                                    </form>
                                </div>
                                <hr>

                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.footer')
            <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>         
            <script type="text/javascript" src="/js/bootstrap.min.js"></script>         
            <script type="text/javascript" src="/js/plugins.js"></script>
            <script type="text/javascript" src="/js/bskit-scripts.js"></script>         
            <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>        
        </body>         
    </html>
    
