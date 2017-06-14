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
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>  
    </head>     
    <body data-spy="scroll" data-target="nav">

        @include('layouts.members.nav')

        <section id="cb-contact-1-1" class="cb-contact-block cb-contact-1-1">
            <div id="contact1"> 
                <div class="container"> 
                    <h3 id="ephead" class="editContent" style="outline: none; cursor: inherit;">Edit Profile</h3> 
                    <div class="row mt40 mb40"> 
                        <div id="pbox1" class="col-sm-12"> 
                            <form action="/updateprofile" method="POST"> 
                                {{ csrf_field() }}
                                <div class="col-sm-6"> 
                                    <input type="text" class="form-control" placeholder="First Name" name="fname" value="{{ Auth::user()->firstname }}" required> 
                                </div>                                 
                                <div class="col-md-6 col-sm-6"> 
                                    <input type="text" class="form-control" placeholder="Surname" name="lname" value="{{ Auth::user()->lastname }}" required> 
                                </div>                                 
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
                                    <input type="email" class="form-control" placeholder="Enter your E-mail" value="{{ Auth::user()->email }}" name="email" required> 
                                </div>                                 
                                <div class="col-md-12 col-sm-12"> 
                                    <textarea name="aboutme" class="form-control textarea" placeholder="Please tell us a bit about yourself...">{{ Auth::user()->about }}</textarea>                                     
                                </div>
                                <div style="margin-bottom: 30px" class="col-md-12 col-sm-12">
                                    <h1 style="text-align: center; font-weight: 800;">What programming languages do you know?</h1> 
                                </div>
                                
                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[0] == 1)
                                        <input name="cb1" class="control-label" type="checkbox" checked>&nbsp; &nbsp; PHP &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                        @else
                                        <input name="cb1" class="control-label" type="checkbox">&nbsp; &nbsp; PHP &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                        @endif
                                    </label>                                     
                                </div>


                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[1] == 1)
                                        <input name="cb2" class="control-label" type="checkbox" checked>&nbsp; &nbsp; NodeJS &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                        @else
                                        <input name="cb2" class="control-label" type="checkbox">&nbsp; &nbsp; NodeJS &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                        @endif
                                    </label>                                     
                                </div>                                  
                                



                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[2] == 1)
                                        <input name="cb3" class="control-label" type="checkbox" checked>&nbsp; &nbsp;C# &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb3" class="control-label" type="checkbox"->&nbsp; &nbsp;C# &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>


                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[3] == 1)
                                        <input name="cb4" class="control-label" type="checkbox" checked>&nbsp; &nbsp;C/C++ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb4" class="control-label" type="checkbox"->&nbsp; &nbsp;C/C++ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[4] == 1)
                                        <input name="cb5" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Java &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb5" class="control-label" type="checkbox"->&nbsp; &nbsp;Java &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>
                                
                              
                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[5] == 1)
                                        <input name="cb6" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Ruby &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb6" class="control-label" type="checkbox"->&nbsp; &nbsp;Ruby &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[6] == 1)
                                        <input name="cb7" class="control-label" type="checkbox" checked>&nbsp; &nbsp;JavaScript &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb7" class="control-label" type="checkbox"->&nbsp; &nbsp;JavaScript &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>


                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[7] == 1)
                                        <input name="cb8" class="control-label" type="checkbox" checked>&nbsp; &nbsp;ASP.NET &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb8" class="control-label" type="checkbox"->&nbsp; &nbsp;ASP.NET &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                
                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[8] == 1)
                                        <input name="cb9" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Python &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb9" class="control-label" type="checkbox"->&nbsp; &nbsp;Python &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                
                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[9] == 1)
                                        <input name="cb10" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Perl &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb10" class="control-label" type="checkbox"->&nbsp; &nbsp;Perl &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>


                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[10] == 1)
                                        <input name="cb11" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Jquery &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb11" class="control-label" type="checkbox"->&nbsp; &nbsp;Jquery &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                <div class="text-left col-sm-3">
                                    <label> 
                                        @if($skills[11] == 1)
                                        <input name="cb12" class="control-label" type="checkbox" checked>&nbsp; &nbsp;Visual Basic &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @else
                                        <input name="cb12" class="control-label" type="checkbox"->&nbsp; &nbsp;Visual Basic &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        @endif
                                    </label>                                     
                                </div>

                                <div class="col-sm-4 col-sm-offset-4"> 
                                    <button type="submit" class="form-control btn btn-success col-sm-7">Update Profile</button>                                     
                                </div>                                 
                            </form>                             
                        </div>

                        <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title">~~ Password Error ~~</h4>
                                     </div>
                                     <div class="modal-body">
                                         <p>{{$errors->first()}}</p>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                     </div>
                                   </div>
                                  </div>
                        </div>

                        <div class="modal fade" id="getCodeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title">~~ Password ~~</h4>
                                     </div>
                                     <div class="modal-body">
                                         <p>Password Successfully changed!</p>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                     </div>
                                   </div>
                                  </div>
                        </div>

                        <div class="modal fade" id="getCodeModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title">~~ Password Error ~~</h4>
                                     </div>
                                     <div class="modal-body">
                                         <p>Password Incorrect!</p>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                     </div>
                                   </div>
                                  </div>
                        </div>


                        @if($flash = session('chpass'))
                            <script>
                                    $(function() {
                                        $("#getCodeModal2").modal('show');


                                    });
                                </script>
                        @endif

                        @if($flash = session('passwrong'))
                            <script>
                                    $(function() {
                                        $("#getCodeModal3").modal('show');


                                    });
                                </script>
                        @endif



                        @if(count($errors))
                            @foreach($errors->all() as $error)
                                
                                
                                <script>
                                    $(function() {
                                        $("#getCodeModal").modal('show');


                                    });
                                </script>
                            @endforeach

                        @endif

                        <div id="pbox2" class="col-sm-12"> 
                            <form action="/changepass" method="POST">
                                {{ csrf_field() }}
                                <div class="col-sm-12">
                                    <h3 style="font-weight: 800;">Change Your Password</h3> 
                                </div>                                 
                                <div class="text-left col-sm-12 col-md-6">
                                    <input type="password" class="form-control" placeholder="Old Password..." name="oldpass" required> 
                                </div>
                                <div class="text-left col-sm-12 col-md-6">
                                    <input type="password" class="form-control" placeholder="New Password..." name="newpass" required> 
                                </div>
                                <div class="col-sm-4 col-sm-offset-4"> 
                                    <button type="submit" class="form-control btn btn-success col-sm-7">Change Password</button>                                     
                                </div>                                 
                            </form>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>

        @include('layouts.footer')

        
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="components/pg.chocka-blocks/js/cb-main.js"></script>
        <script type="text/javascript" src="components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
    </body>     
</html>
