<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>Pinegrow Bootstrap Blocks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 
        <!-- Core CSS -->         
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
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
        <link href="/css/findusers.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav">
        <!-- logged in version of nav -->
        
        @include('layouts.members.nav')

        <section id="cb-content-2-2" class="content-block cb-content-2-2 bg-official" data-pg-collapsed>
            <div id="content12"> 
                <div class="row"> 
                    <div class="nopaddingnomargin col-sm-4"> 
                        <img src="images/workmates.jpg" alt="Image"> 
                    </div>                     
                    <div class="nopaddingnomargin col-sm-8"> 
                        <div class="content-center"> 
                            <h3 class="editContent" style="outline: none; cursor: inherit;">Employee Management System Search</h3> 
                            <p class="editContent" style="outline: none; cursor: inherit;">Use the search form below to find your workmates! You can choose to either view their profiles, or message them!<br>You can search for a user via their first name, last name, email or their username</p>
                        </div>                         
                    </div>                     
                </div>                 
            </div>
        </section>
        <section id="cb-content-2-1" class="content-block cb-content-2-1 bg-official" data-pg-collapsed>
            <div id="content11"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="icon"> 
                                <span class="fa fa-paper-plane" style="outline: none; cursor: inherit;"></span> 
                            </div>                             
                            <h3 class="editContent" style="outline: none; cursor: inherit;">Search for workmates</h3> 
                        </div>                         
                        <div class="col-md-6"> 
                            <form action="/searchusers" method="POST">
                                {{ csrf_field() }} 
                                <input name="query" type="text" placeholder="Search for a friend..." class="form-control"> 
                                <button type="submit" class="btn btn-default-dark-tiny">Search</button> 
                            </form>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>
        <section class="content-block pricing-table-2 bg-official" data-pg-collapsed>
            <div class="container-fluid">
                <div class="underlined-title">
                    <h1 class="lblwhite">Results</h1>
                    <hr>
                </div>

                @if(isset($final))

                @for($count = 0; $count < count($final); $count++)


                <div class="col-md-4 bg-official bguser" data-pg-collapsed>
                    <div class="bg-official col-sm-12 border" data-pg-collapsed>
                        <header class="resh1 price-block bg-official">
                            <a href="/profile/{{ $final[$count]->username }}"><h1 style="text-align: center;" class="usrheader">{{ $final[$count]->username }}</h1></a>
                            <h5 style="text-align: center;" class="regheader">Registered: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($final[$count]->created_at->date))->diffForHumans() }}</h5>
                            <!-- /.price -->
                            <a href="/messages/compose/{{ $final[$count]->username }}" class="btn btn-success col-xs-12">Message</a>
                        </header>                         
                    </div>                     
                </div>
                
                @endfor
                @endif


                @if(isset($users))

                @foreach($users as $user)


                <div class="col-md-4 bg-official bguser" data-pg-collapsed>
                    <div class="bg-official col-sm-12 border" data-pg-collapsed>
                        <header class="resh1 price-block bg-official">
                            <a href="/profile/{{ $user->username }}"><h1 style="text-align: center;" class="usrheader">{{ $user->username }}</h1></a>
                            <h5 style="text-align: center;" class="regheader">Registered: {{ $user->created_at->diffForHumans() }}</h5>
                            <!-- /.price -->
                            <a href="/messages/compose/{{ $user->username }}" class="btn btn-success col-xs-12">Message</a>
                        </header>                         
                    </div>                     
                </div>
                
                @endforeach
                @endif

                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        @include('layouts.footer')
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>         
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/bskit-scripts.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
    </body>
</html>
