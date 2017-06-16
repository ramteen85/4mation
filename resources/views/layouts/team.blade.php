<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>4Mation | Teams</title>
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
        <link href="/css/tasks.css" rel="stylesheet" type="text/css">
        <link href="/css/messages.css" rel="stylesheet" type="text/css">
        <link href="/css/msgbody.css" rel="stylesheet" type="text/css">
        <link href="/css/teams.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav">
        <!-- logged in version of nav -->
        
        @include('layouts.members.nav')

        <section id="cb-intro-1-5" class="cb-intro-block cb-intro-1-5" data-pg-collapsed>
            <div id="intro5" style="background-image:url('images/5.jpg');"> 
                <div class="overlay"></div>                 
                <div class="container" data-pg-collapsed> 
                    <h3 class="editContent mb20" style="outline: none; cursor: inherit;"> <span class="rectangle">Teams</span></h3> 
                    <p class="editContent" style="outline: none; cursor: inherit;">This is the teams page. Here, You will be able to view all the current teams that are listed and all the members of that team. Please keep in mind that our admins choose the teams and will allocate you to one if you have a new account, but you cannot select the team yourself. When you are allocated in your team, this will be indicated at the top of your profile and in the statistics section of the members area.</p> 
                </div>                 
            </div>
        </section>


        <section id="cb-header-1-6" class="cb-header-block cb-header-1-6" data-pg-collapsed>
            <header id="header6" style="background-image:url('images/team.png');"> 
</header>             
        </section>
        <section id="cb-content-1-4" class="content-block cb-content-1-4 bgblue" data-pg-collapsed>
            <div id="content4"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-offset-1 col-sm-10"> 
                            <h1 style="text-align: center;" class="teamheader">List of Teams</h1> 
                        </div>                         
                    </div>
                    <div class="row" data-pg-collapsed> 
                        
                        @foreach($teams as $team)
                        <a href="/getplayers/{{ $team->id }}">
                        <div class="col-sm-4" data-pg-collapsed> 
                            <div style="background: #095880;" class="feautures-box"> 
                                <div class="icon editContent" style="outline: none; cursor: inherit;">
                                    <i style="font-size: 60px" class="glyphicon glyphicon-education"></i> 
                                </div>                                 
                                <h3 class="editContent">{{ $team->name }}</h3> 
                                <p class="editContent">{{ $team->description }}</p>
                            </div>                             
                        </div>
                        </a>
                        @endforeach

                    </div>                     
                </div>                 
            </div>             
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
