<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        
        <meta charset="utf-8"> 
        <title>4Mation Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 



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













        <!-- Core CSS -->         
               
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
                    <div class="col-md-3">
                        <div style="text-align: center;" class="well">
                            <strong>ADMIN OPTIONS</strong> 
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Pages<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></a></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <div style="text-align: center;" class="list-group">
                                            <div class="col-xs-12">
                                                <a href="http://">Admin Inbox</a> 
                                            </div>
                                            <div class="col-xs-12">
                                                <a href="http://">User Options</a> 
                                            </div>
                                            <div class="col-xs-12">
                                                <a href="http://">Tasks/Announcements</a> 
                                            </div>                                             
                                        </div>
                                        <!-- List Group End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- first Panel start Here -->                             
                            <!-- first Panel End Here -->
                            <!-- second Panel start Here -->                             
                            <!-- second Panel End Here -->
                            <!-- third  Panel start Here -->                             
                            <!-- third Panel End Here -->
                            <!-- fouth Panel start Here -->                             
                            <!-- fouth Panel End Here -->
                            <!-- Fifth Panel start Here -->
                            <!-- Fifth Panel End Here -->
                        </div>
                    </div>
                    <!-- /.sidebar column end here -->
                    <div class="col-md-9">
                        <div style="height: auto; min-height: 500px;" class="well wellpbot">
                            <div class="list-group">
                                <div href="#" class="list-group-item active  titlebox">
                                    <div class="col-xs-12 titlebox" style="height:auto;">
                                        <h4 class="list-group-item-heading spacer-10 text-center">Admin Mail</h4>
                                        <p class="list-group-item-text">Welcome to the mail section of the admin page. Here is where all the mail arrives from the front page. Anyone as long as they have Admin access levels, can view and delete these messages. Any incoming messages will appear below.</p>
                                    </div>
                                </div>
                                <hr>
                                <div style="height: 280px;" class="list-group-item active  msgheight">
                                    <div class="media col-md-4">
                                        <figure class="pull-left picposition">
                                        <img class="media-object img-rounded img-responsive imgcenter" src="/images/envelope.gif" alt="placehold.it/350x250">
                                        </figure>
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="list-group-item-heading spacer-10 subcenter">Message Subject</h4>
                                        <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. </p>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h3 class="h3margin h3m1">Ramteen</h3>
                                        <h3 class="h3margin">Taheri</h3>
                                        <h6 style="font-size:13px" class="h3margin h3m1">happinin@gmail.com</h6>
                                        <button type="button" class="btn btn-danger btn-md btn-block">Delete</button>
                                        <p class="dater">Sent: 20/07/1985</p>
                                    </div>
                                </div>
                                <hr>
                                <div style="height: 280px;" class="list-group-item active  msgheight">
                                    <div class="media col-md-4">
                                        <figure class="pull-left picposition">
                                        <img class="media-object img-rounded img-responsive imgcenter" src="/images/envelope.gif" alt="placehold.it/350x250">
                                        </figure>
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="list-group-item-heading spacer-10 subcenter">Message Subject</h4>
                                        <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. </p>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h3 class="h3margin h3m1">Ramteen</h3>
                                        <h3 class="h3margin">Taheri</h3>
                                        <h6 style="font-size:13px" class="h3margin h3m1">happinin@gmail.com</h6>
                                        <button type="button" class="btn btn-danger btn-md btn-block">Delete</button>
                                        <p class="dater">Sent: 20/07/1985</p>
                                    </div>
                                </div>
                                <hr>
                                <div style="height: 280px;" class="list-group-item active  msgheight">
                                    <div class="media col-md-4">
                                        <figure class="pull-left picposition">
                                        <img class="media-object img-rounded img-responsive imgcenter" src="/images/envelope.gif" alt="placehold.it/350x250">
                                        </figure>
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="list-group-item-heading spacer-10 subcenter">Message Subject</h4>
                                        <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. </p>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h3 class="h3margin h3m1">Ramteen</h3>
                                        <h3 class="h3margin">Taheri</h3>
                                        <h6 style="font-size:13px" class="h3margin h3m1">happinin@gmail.com</h6>
                                        <button type="button" class="btn btn-danger btn-md btn-block">Delete</button>
                                        <p class="dater">Sent: 20/07/1985</p>
                                    </div>
                                </div>
                                <hr>
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
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
            
        </body>         
    </html>
    
