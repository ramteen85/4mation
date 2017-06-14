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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="css/style-library-1.css" rel="stylesheet" type="text/css">
        <link href="css/plugins.css" rel="stylesheet" type="text/css">
        <link href="css/blocks.css" rel="stylesheet" type="text/css">
        <link href="components/pg.chocka-blocks/css/cb-style.css" rel="stylesheet" type="text/css">
        <link href="components/pg.chocka-blocks/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>  
    </head>     
    <body data-spy="scroll" data-target="nav">
        

         

        <div class="modal fade" id="getCodeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
             <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Registration Notification</h4>
             </div>
             <div class="modal-body">
                 <p><strong>Thanks for registering! You may now sign in.</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
             </div>
           </div>
          </div>
        </div> 

        @if($flash = session('regd'))
            <script>
            $(function() {
                $("#getCodeModal2").modal('show');


            });
            </script>
        @endif
        
        
            
            
            
            
            
        
        @include('layouts.nav')

        <section id="cb-title-1-5" class="cb-title-block cb-title-1-5"> 
            <div id="title5"> 
                `     
                <h1 style="padding-bottom: 10px">Staff Management System</h1>
            </div>
        </section>
        <section id="cb-team-1-3" class="cb-team-block cb-team-1-3">
            <div id="team3"> 
                <div class="container"> 
                    <div class="title"> 
                        <h3 class="editContent" style="outline: none; cursor: inherit;">Meet THE Team</h3> 
                        <p class="editContent" style="outline: none; cursor: inherit;">NULLI SECUNDUS</p>
                    </div>                     
                    <div class="row"> 
                        <!-- TEAM MEMBER -->                         
                        <div class="col-sm-6 col-md-3 col-lg-3"> 
                            <div class="text-center team-box"> 
                                <div class="team-image"> 
                                    <span class="imghover-effect-team"></span> 
                                    <img src="images/pete.jpg" alt="Image" style="outline: none; cursor: inherit;"> 
                                    <div class="social-icons-team"> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><span class="fa fa-google-plus" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="fa fa-twitter"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><span class="fa fa-youtube" style="outline: none; cursor: inherit;"></span></a> 
                                    </div>                                     
                                </div>                                 
                                <h4 class="editContent" style="outline: none; cursor: inherit;">PETE aXTON</h4> 
                                <p class="editContent" style="outline: none; cursor: inherit;">hEAD OF SOLUTIONS</p>
                            </div>                             
                        </div>                         
                        <!-- END / TEAM MEMBER -->                         
                        <!-- TEAM MEMBER -->                         
                        <div class="col-sm-6 col-md-3 col-lg-3"> 
                            <div class="text-center team-box"> 
                                <div class="team-image"> 
                                    <span class="imghover-effect-team"></span> 
                                    <img src="images/ed.jpg" alt="Image" style="outline: none; cursor: inherit;"> 
                                    <div class="social-icons-team"> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><span class="fa fa-google-plus" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><span class="fa fa-youtube" style="outline: none; cursor: inherit;"></span></a> 
                                    </div>                                     
                                </div>                                 
                                <h4 class="editContent" style="outline: none; cursor: inherit;">ed blackshaw</h4> 
                                <p class="editContent" style="outline: none; cursor: inherit;">head of sales</p>
                            </div>                             
                        </div>                         
                        <!-- END / TEAM MEMBER -->                         
                        <!-- TEAM MEMBER -->                         
                        <div class="col-sm-6 col-md-3 col-lg-3"> 
                            <div class="text-center team-box"> 
                                <div class="team-image"> 
                                    <span class="imghover-effect-team"></span> 
                                    <img src="images/tom.jpg" alt="Image" style="outline: none; cursor: inherit;"> 
                                    <div class="social-icons-team"> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><span class="fa fa-google-plus" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><span class="fa fa-youtube" style="outline: none; cursor: inherit;"></span></a> 
                                    </div>                                     
                                </div>                                 
                                <h4 class="editContent" style="outline: none; cursor: inherit;">tom somerville</h4> 
                                <p class="editContent" style="outline: none; cursor: inherit;">Web development team leader</p>
                            </div>                             
                        </div>                         
                        <!-- END / TEAM MEMBER -->                         
                        <!-- TEAM MEMBER -->                         
                        <div class="col-sm-6 col-md-3 col-lg-3"> 
                            <div class="text-center team-box"> 
                                <div class="team-image"> 
                                    <span class="imghover-effect-team"></span> 
                                    <img src="images/drew.jpg" alt="Image" style="outline: none; cursor: inherit;"> 
                                    <div class="social-icons-team"> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><span class="fa fa-google-plus" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a> 
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><span class="fa fa-youtube" style="outline: none; cursor: inherit;"></span></a> 
                                    </div>                                     
                                </div>                                 
                                <h4 class="editContent" style="outline: none; cursor: inherit;">drew barnard</h4> 
                                <p class="editContent" style="outline: none; cursor: inherit;">business development manager</p>
                            </div>                             
                        </div>                         
                        <!-- END / TEAM MEMBER -->                         
                    </div>                     
                </div>                 
            </div>
        </section>
        <section id="cb-contact-1-2" class="cb-contact-block cb-contact-1-2">
            <div id="contact2" style="background-image:url('images/contactform.jpg');"> 
                <div class="container"> 
                    <h6 class="editContent" style="outline: none; cursor: inherit;">Contact us</h6> 
                    <h3 class="editContent" style="outline: none; cursor: inherit;">Leave us a message</h3> 
                    <div class="row mt40 mb40"> 
                        <div class="col-md-8 col-md-offset-2"> 
                            <form action="#"> 
                                <div class="col-md-6"> 
                                    <input type="text" class="form-control" placeholder="Your Name"> 
                                </div>                                 
                                <div class="col-md-6"> 
                                    <input type="text" class="form-control" placeholder="Surname"> 
                                </div>                                 
                                <div class="col-md-6"> 
                                    <input type="email" class="form-control" placeholder="Email *" required=""> 
                                </div>                                 
                                <div class="col-md-6"> 
                                    <input type="text" class="form-control" placeholder="Subject"> 
                                </div>                                 
                                <div class="col-md-12"> 
                                    <textarea name="message" class="form-control textarea" placeholder="Message"></textarea>                                     
                                </div>                                 
                                <div class="text-center mb20"> 
                                    <a href="#" class="btn btn-default-green">Send Message</a> 
                                </div>                                 
                            </form>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>

        @include('layouts.footer')
               
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="components/pg.chocka-blocks/js/cb-main.js"></script>         
    </body>     
</html>
