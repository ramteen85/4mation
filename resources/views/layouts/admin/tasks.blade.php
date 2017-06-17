<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        
        <meta charset="utf-8"> 
        <title>4Mation Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 

          <!-- Core CSS -->   

        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">              
        <link href="/css/style-library-1.css" rel="stylesheet">
        <link href="/css/plugins.css" rel="stylesheet">
        <link href="/css/blocks.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">                
        <link rel="stylesheet" href="/components/pg.chocka-blocks/css/cb-style.css">     
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400">
            
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">        
       
        <link href="/components/pg.chocka-blocks/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="/components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/style-library-1.css">       
     
        
    
     
       
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        
        
        
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/css/style-library-1.css" rel="stylesheet" type="text/css">
        <link href="/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="/components/pg.chocka-blocks/css/cb-style.css" rel="stylesheet" type="text/css">
        <link href="/css/blocks.css" rel="stylesheet" type="text/css">
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link href="/css/admin2.css" rel="stylesheet" type="text/css">
        <link href="/css/admin3.css" rel="stylesheet" type="text/css">
        <link href="/css/admin4.css" rel="stylesheet" type="text/css">
        <script type="/text/javascript" src="js/jquery-1.11.1.min.js"></script>
    </head>     
            
        <body data-spy="scroll" data-target="nav" class="bodybg">
           
           @include('layouts.members.nav')

            <div class="container">
                <div class="row bgsm">
                    <h1 id="adminheader" class="header-radius bigtitlesizesm">Admin Panel</h1>
                    @include('layouts.admin.sidebar')
                    <!-- /.sidebar column end here -->
                    <div class="col-md-9 minh webbbody panelbglge colsize">
                        <div class="well wellpbot minh webbbody wellbg">
                            <div class="list-group minh wellbg panelbglge">
                                <div href="#" class="list-group-item active  titlebox">
                                    <div class="col-xs-12 titlebox" style="height:auto;">
                                        <h4 class="list-group-item-heading spacer-10 text-center">Tasks / Announcements</h4>
                                        <p class="list-group-item-text">Welcome to the tasks and announcements page.&nbsp;<br><br>Here you can:<br><br>- Allocate tasks to individual users, edit or delete them<br>- Post Announcements<br></p>
                                    </div>
                                </div>
                                <section class="panelbg margin30">
                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30">
                                        <div class="text-center col-xs-12">
                                            <h1 class="delh">Select a Task</h1> 
                                        </div>
                                        <div class="col-xs-12 labelsm">
                                            <div class="col-sm-4 col-xs-12">
                                                <h1 class="delh titlesm bigtitlesm">To:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12 marginlge">
                                                <div class="col-xs-12 col-sm-12">
                                                    <input id="forminput00" type="text" style="width: 100%; height: 40px;" placeholder="Enter Username or E-mail"> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="delh titlesm bigtitlesm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="forminput00" style="width: 100%; height: 40px;" placeholder="    << Task Title >>" class="marginlge" /> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh titlesm">Details</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea style="width: 100%; height: 100px;" placeholder="  << Task Description >>"></textarea>                                             
                                        </div>
                                        <div class="text-center col-xs-6 btnleftxs">
                                            <button type="button" class="btn btn-danger">Delete</button>                                             
                                        </div>
                                        <div class="text-center col-xs-6 btnleftxs">
                                            <button type="button" class="btn btn-success">Update</button>                                             
                                        </div>
                                    </section>
                                </section>
                                <section class="panelbg margin30">
                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30">
                                        <div class="text-center col-xs-12">
                                            <h1 class="delh">Create a Task</h1> 
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="bigtitlesm delh titlesm  labelsm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="forminput00" style="width: 100%; height: 40px;" placeholder="Enter a task title..." class="marginlge" /> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="delh titlesm bigtitlesm labelsm">To:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="forminput00" type="text" style="width: 100%; height: 40px;" placeholder="Enter Username or E-mail" class="marginlge"> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh labelsm">Details</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea style="width: 100%; height: 100px;" placeholder="Enter a task description..."></textarea>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button type="button" class="btn btn-success">Create</button>                                             
                                        </div>
                                    </section>
                                </section>
                                <section class="panelbg margin30">
                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30">
                                        <div class="text-center col-xs-12">
                                            <h1 class="delh labelsm">Post Announcement</h1> 
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12">
                                                <h1 class="delh titlesm labelsm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="forminput00" style="width: 100%; height: 40px;" placeholder="  << Announcement Title >>  " class="marginlge" /> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh">Message</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea style="width: 100%; height: 100px;" placeholder="  << Announcement Message >>  "></textarea>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button type="button" class="btn btn-info">Post</button>                                             
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        

           @include('layouts.footer')





        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script> 
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>    
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="../js/bskit-scripts.js"></script>     
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/cb-main.js"></script>
       
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>            
        </body>         
    </html>