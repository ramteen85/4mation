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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <!-- Style Library -->         
        <link href="css/style-library-1.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/blocks.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
        <link rel="stylesheet" href="components/pg.chocka-blocks/css/cb-style.css">
        <link rel="stylesheet" href="components/pg.chocka-blocks/css/owl.carousel.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400">
        <link href="css/eprofile.css" rel="stylesheet" type="text/css">
        <link href="css/profile.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav">

        @include('layouts.members.nav')

        <section id="cb-contact-1-1" class="cb-contact-block cb-contact-1-1">
            <div id="contact1"> 
                <div class="container"> 
                    <h3 id="ephead" class="editContent" style="outline: none; cursor: inherit;">Profile</h3>
                    <div class="row mt40 mb40"> 
                        <div id="pbox1" class="col-sm-12">
                            <div class="col-sm-6">
                                <h2><span class="lstyle">Name:</span> <span class="astyle">{{ $user->firstname }} {{ $user->lastname }}</span></h2>
                                <h2><span class="lstyle">Username:</span> <span class="astyle">{{ $user->username }}</span></h2>
                                <h2><span class="lstyle">E-Mail:</span> <span class="astyle">{{ $user->email }}</span></h2> 
                            </div>
                            <div class="col-sm-6"> 
                                <p><span class="lstyle">Tasks Completed:</span> <span class="astyle">34</span></p>
                                <p class="astyle"><span class="lstyle">Registered:</span> <span>{{ $timeago }}</span></p>
                                <p><span class="lstyle">Team:</span> <span class="astyle">Not Assigned</span></p>
                                <p><span class="lstyle">User Type:</span> <span class="astyle">@if($user->role == 0)
                                        Employee
                                    @elseif($user->role == 1)
                                        Admin
                                    @endif</span></p>
                            </div>                             
                        </div>
                        <div id="pbox2" class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <h1 class="text-center boxhead">Skills</h1> 
                                </div>
                                
                                @foreach($skills as $skill)
                                    <div class="col-sm-3">
                                        <h1 class="text-center skillstyle">{{ $skill->name }}</h1> 
                                    </div>
                                @endforeach

                                                                
                            </div>                             
                        </div>
                        <div id="pbox3" class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <h1 class="text-center boxhead">About {{ $user->firstname }}</h1> 
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-md-12">
                                        <p class="abstyle">{{ $user->about }}<br></p>
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>

                        @if($flag == false)
                        <div id="pbox4" class="col-sm-12 col-xs-12">
                            <div class="col-sm-12">
                                <div class="col-sm-offset-4 col-sm-4 col-xs-6 col-xs-offset-3">
                                    <a href="/messages/compose/{{ $user->username }}" class="btn btn-info col-sm-12">Send Message</a>                                     
                                </div>                                 
                            </div>                             
                        </div>
                        @endif                         
                    </div>                     
                </div>                 
            </div>             
        </section>

        @include('layouts.footer')

        
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="../js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/cb-main.js"></script>
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
    </body>     
</html>
