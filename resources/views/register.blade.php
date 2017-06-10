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
    </head>     
    <body data-spy="scroll" data-target="nav">

        @include('layouts.nav')
        
        <section id="cb-title-1-5" class="cb-title-block cb-title-1-5"> 
            <div id="title5"> 
                `     
                <h1 style="padding-bottom: 10px">Register an Account</h1>
            </div>
        </section>
        <section id="cb-form-1-3" class="cb-form-block cb-form-1-3">
            <div id="pageloginregister1"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2"> 
                            <div style="background: #d7c57d;" class="lr-box"> 
                                
                                <form method="POST" action="/register"> 
                                {{ csrf_field() }}

                                    <p class="dark editContent" style="outline: none; cursor: inherit;">Username</p> 
                                    <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                                    <br> 
                                    <p class="dark editContent" style="outline: none; cursor: inherit;">First name</p> 
                                    <input type="text" name="firstname" class="form-control" placeholder="Enter your first name" required>
                                    <br> 
                                    <p class="dark editContent" style="outline: none; cursor: inherit;">Last name</p> 
                                    <input type="text" name="lastname" class="form-control" placeholder="Enter your last name" required>
                                    <br> 
                                    <p class="dark editContent" style="outline: none; cursor: inherit;">Email</p> 
                                    <input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required>
                                    <br> 
                                    <p class="dark editContent" style="outline: none; cursor: inherit;">Password</p> 
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                                    <br>
                                    <p class="dark editContent" style="outline: none; cursor: inherit;">Confirm Password</p> 
                                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm your password" required>
                                    <br>
                                    <input type="submit" class="btn btn-default-green editContent" value="Register">


                                    @include('layouts.errors')                                     
                                </form>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>
        <section id="cb-content-2-7" class="content-block cb-content-2-7">
            <div id="content17" data-pgc-define="content-17" data-pgc-define-name="content-17" data-pgc-define-auto-update="false" data-pgc-section="Content"> 
                <div class="row row-eq-height"> 
                    <div class="col-md-12 nopaddingnomargin"> 
                        <div class="col-md-4 nopaddingnomargin"> 
                            <div class="content"> 
                                <div class="icon"> 
                                    <span class="fa fa-hashtag" style="outline: none; cursor: inherit;"></span> 
                                </div>                                 
                                <h3 style="outline: none; cursor: inherit;" class="sectiontitle">rECEIVE AND COMPLETE TASKS</h3> 
                                <p style="outline: none; cursor: inherit;">Employees are to use this system to log in and complete their tasks. A manager will post daily tasks and it is up to the employee to complete them and sign off on them. All tasks will appear on the task list on each employees accounts and are assigned to each individual employee.</p>
                            </div>                             
                        </div>                         
                        <div class="col-md-4 nopaddingnomargin"> 
                            <div class="content"> 
                                <div class="icon"> 
                                    <span class="fa fa-hashtag" style="outline: none; cursor: inherit;"></span> 
                                </div>                                 
                                <h3 style="outline: none; cursor: inherit;" class="sectiontitle">messaging system</h3> 
                                <p style="outline: none; cursor: inherit;">Our staff management system also has a private messaging system. Every Employee including Managers and Administrators can send messages to one another within the system.</p>
                            </div>                             
                        </div>                         
                        <div class="col-md-4 nopaddingnomargin"> 
                            <div class="content"> 
                                <div class="icon"> 
                                    <span class="fa fa-hashtag" style="outline: none; cursor: inherit;"></span> 
                                </div>                                 
                                <h3 style="outline: none; cursor: inherit;" class="sectiontitle">aDMIN AND MANAGER TOOLS</h3> 
                                <p style="outline: none; cursor: inherit;">Administrators can log in with full permission and access control over the entire staff management system. They can do everything Managers and Employees can do. Managers also have a higher level of Access control, however they may only assign and delete tasks for every individual Employee.</p>
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>

        @include('layouts.footer')

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="components/pg.chocka-blocks/js/cb-main.js"></script>         
        <script type="text/javascript" src="components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
    </body>     
</html>
