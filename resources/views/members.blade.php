<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head>

        <meta charset="utf-8"> 
        <title>4Mation | Employee's Area</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="4Mation Technologies Employee Management System | Members" />
        
        <!-- Core CSS -->         
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->        
        
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
        <link href="/css/members.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav">
        
        @include('layouts.members.nav')

        <section id="content-3-6" style="background: #244a6e;" class="content-block content-3-6">
            <div class="container-fluid">
                <div class="row feature-box">
                    <!-- Feature Box 1 -->
                    <!-- Feature Box 2 -->
                    <div class="col-xs-12 col-sm-12">
                        <div id="statdiv">
                            <h1 class="white-text stathead fatwhite">Your Statistics</h1>
                            <div style="padding: 0;" class="statsbg container col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 bg-info statcol pad-sm">
                                    <h3 class="htext1">Name: &nbsp; {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                                </div>
                                <div class="col-md-12 bg-info statcol pad-sm">
                                    <h3 class="htext1">
                                    @if(Auth::user()->role == 0)
                                    	Role: &nbsp; Employee
                                    @elseif(Auth::user()->role == 1)
                                    	Role: &nbsp; Admin
                                    @endif

                                    </h3>
                                </div>
                                <div class="col-md-12 bg-info statcol pad-sm">
                                    <h3 class="htext1">Team: &nbsp; {{ \App\User::find(Auth::user()->id)->team->first()->name }}</h3>
                                </div>
                                @if($unread == 1)
                                <div class="col-md-12 bg-danger statcol pad-sm">
                                    <h3 class="fatwhite htext1">You have <a href="/messages/inbox"><span class="numur">1 new message!!</span></a></h3>
                                </div>
                                @elseif($unread > 1)
                                <div class="col-md-12 bg-danger statcol pad-sm">
                                    <h3 class="fatwhite htext1">You have <a href="/messages/inbox"><span class="numur">{{ $unread }} new messages!!</span></a></h3>
                                </div>
                                @endif
                                
                                @if( App\Task::countincompletetasks(Auth::user()->id) == 1)

                                   <div class="col-md-12 bg-warning statcol pad-sm">
                                       <h3 class="fatwhite htext1">You have <a href="tasks"><span class="numtr">{{ App\Task::countincompletetasks(Auth::user()->id) }} task remaining!</span></a></h3>
                                    </div>


                                @elseif(App\Task::countincompletetasks(Auth::user()->id) > 0)
                                    <div class="col-md-12 bg-warning statcol pad-sm">
                                       <h3 class="fatwhite htext1">You have <a href="tasks"><span class="numtr">{{ App\Task::countincompletetasks(Auth::user()->id) }} tasks remaining!</span></a></h3>
                                    </div>
                                    
                                @elseif(App\Task::countincompletetasks(Auth::user()->id) == 0)

                                    <div class="col-md-12 bg-warning statcol pad-sm">
                                       <h3 class="fatwhite htext1"><a href="tasks"><span class="numtr">You have not been assigned any Tasks.</span></a></h3>
                                    </div>



                                @endif




                                @if( App\Task::countcompletetasks(Auth::user()->id) == 1)

                                <div class="col-md-12 bg-success statcol pad-sm">
                                   <h3 class="fatwhite htext1">You have <a href="tasks"><span class="numct">{{ App\Task::countcompletetasks(Auth::user()->id) }} complete task!</span></a></h3>
                                </div>  
                                @elseif( App\Task::countcompletetasks(Auth::user()->id) > 0)

                                <div class="col-md-12 bg-success statcol pad-sm">
                                   <h3 class="fatwhite htext1">You have <a href="tasks"><span class="numct">{{ App\Task::countcompletetasks(Auth::user()->id) }} completed tasks!</span></a></h3>
                                </div>
                                                             
                                @elseif(App\Task::countcompletetasks(Auth::user()->id) == 0)
                
                                    <div class="col-md-12 bg-success statcol pad-sm">
                                   <h3 class="fatwhite htext1"><a href="tasks">You have not completed any Tasks.</a></h3>
                                </div>

                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- Feature Box 3 -->
                </div>
                <!-- Row Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <section id="content-1-9" class="content-1-9">
            <div id="ann_border" class="container-fluid content-3-6 white-text">
                <div id="anndiv" class="underlined-title">
                    <h1 class="white-text fatwhite">Announcements</h1>
                    <hr>
                </div>
                <div class="row blborder">
                    
                
                   
                    @foreach($announcements as $announcement)

                    <div class="border1 col-xs-12 col-sm-12 col-md-12">
                        <div class="ipstn ipostn col-sm-2 col-xs-12">
                            <img class="exicon" src="images/excl.png" />
                        </div>
                        <div id="atitlewrap" class="col-xs-12 col-sm-10">
                            <h3 class="fatwhite aheader-sm">{{ $announcement->title }}</h3>
                            <h5>By <a href="/profile/{{ $announcement->getSenderFromId($announcement->issue_id)->username }}"><span class="usrtxt">{{$announcement::getSenderFromId($announcement->issue_id)->username }}</span></a>, <span class="timeagotext">{{ $announcement->created_at->diffForHumans() }}</span></h5>
                            <p class="white-text apara">{{ $announcement->body }}</p>
                        </div>
                    </div>

                    @endforeach
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        @include('layouts.footer')

        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>        
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>      
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>         
        <script type="text/javascript" src="/components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/bskit-scripts.js"></script>
    </body>     
</html>
