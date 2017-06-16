<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>4Mation | Team Members</title>
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

        <section id="cb-header-1-6" class="cb-header-block cb-header-1-6">
            <header id="header6" style="background-image:url('/images/players.png');"> 
            </header>             
        </section>
        <section id="cb-content-1-4" class="content-block cb-content-1-4 bgblue">
            <div id="content4"> 
                <div style="padding-left: 7em;" class="container-fluid"> 
                    <div class="row" data-pg-collapsed> 
                        <div class="col-sm-offset-1 col-sm-10"> 
                            <h1 style="text-align: center;" class="teamheader">{{ $team->name }}</h1> 
                        </div>                         
                    </div>
    
                    @foreach($users as $user)

                    <div class="feautures-box .namebg col-xs-12 nopaddingsm col-sm-3" style="padding-right: 0; z-index:200; margin-right: 10px;" data-pg-collapsed> 
                        <div> 
                            <h1 style="text-align: center;" class="editContent nameheader nameheadersize">{{ $user->username }}</h1>
                            <h3 style="text-align: center;" class="editContent nameheader">{{ $user->firstname }} {{ $user->lastname }}</h3> 
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <a href="/messages/compose/{{ $user->username }}" style="margin: auto;" class=" btn btn-success">message<a>                             
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <a href="/profile/{{ $user->username }}" style="margin: auto;" class="btn btn-info">Profile</a>                             
                        </div>                         
                    </div>
                    @endforeach      
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
