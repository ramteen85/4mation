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
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
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
                                        <form id="updeltaskform" action="/selecttask" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-xs-12 labelsm">
                                            <div class="col-sm-4 col-xs-12">
                                                <h1 class="delh titlesm bigtitlesm">Task ID:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12 marginlge">
                                                <div class="col-xs-12 col-sm-12">
                                                    <input id="taskidselector" name="taskidselector" type="text" style="width: 100%; height: 40px;" placeholder="Enter Task ID"> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="delh titlesm bigtitlesm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="tasktitleselector" name="tasktitleselector" style="width: 100%; height: 40px;" placeholder="    << Task Title >>" class="marginlge" disabled /> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh titlesm">Details</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea id="taskdescselector" name="taskdescselector" style="width: 100%; height: 100px;" placeholder="  << Task Description >>" disabled></textarea>                                             
                                        </div>
                                        <div class="text-center col-xs-6 btnleftxs">
                                            <button id="taskdel" type="button" class="btn btn-danger conf-del" disabled>Delete</button>                                             
                                        </div>
                                        <div class="text-center col-xs-6 btnleftxs">
                                            <button id="taskup" type="submit" class="btn btn-success" disabled>Update</button>                                             
                                        </div>
                                        </form>
                                    </section>
                                </section>
                                <section class="panelbg margin30">

                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30">
                                        <form id="input00" action="/createtask" method="POST">
                                        {{ csrf_field() }}
                                        <div class="text-center col-xs-12">
                                            <h1 class="delh">Create a Task</h1> 
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="bigtitlesm delh titlesm  labelsm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input name="title" style="width: 100%; height: 40px;" placeholder="Enter a task title..." class="marginlge" /> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12 labelsm">
                                                <h1 class="delh titlesm bigtitlesm labelsm">To:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input id="forminput00" name="to_user" type="text" style="width: 100%; height: 40px;" placeholder="Enter Username or E-mail" autocomplete="off" class="marginlge"> 
                                                    <div class="clickoff" style="" id="usrlist"></div>
                                                </div>                                                 
                                            </div>                                             
                                        </div>

                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh labelsm">Details</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea name="description" style="width: 100%; height: 100px;" placeholder="Enter a task description..."></textarea>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button type="submit" class="btn btn-success">Create</button>                                             
                                        </div>
                                        </form>
                                    </section>
                                </section>
                                <section class="panelbg margin30">
                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30">
                                    <form action="/postannouncement" method="POST">
                                    {{ csrf_field() }}
                                        <div class="text-center col-xs-12">
                                            <h1 class="delh labelsm">Post Announcement</h1> 
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-sm-4 col-xs-12">
                                                <h1 class="delh titlesm labelsm">Title:</h1> 
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="col-xs-12">
                                                    <input name="title" style="width: 100%; height: 40px;" placeholder="  << Announcement Title >>  " class="marginlge" /> 
                                                </div>                                                 
                                        </div>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <h1 class="delh">Message</h1> 
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <textarea name="body" style="width: 100%; height: 100px"; placeholder=" << Place Announcement Message >> "></textarea>                                             
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button type="submit" class="btn btn-info">Post</button>                                             
                                        </div>
                                        </form>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @if($flash = session('posted'))
            <script>
            $(function() {
               
                $('.modal-body').html("Your Announcement has been posted!");
                $('#getCodeModal2').modal('show');

            });
            </script>
            @endif

         @if($flash = session('tasked'))
            <script>
            $(function() {
               
                $('.modal-body').html("Your task has been Assigned! Your task id is  {{ Session::get('tasked') }} . Please write this down in case you need to update this task in future." );
                $('#getCodeModal2').modal('show');

            });
            </script>
        @endif


        @if($flash = session('nouser'))
            <script>
            $(function() {
               
                $('.modal-body').html("User does not exist!");
                $('#getCodeModal2').modal('show');

            });
            </script>
        @endif

        @if(count($errors))
            @foreach($errors->all() as $error)
                
                
            <script>
                $(function() {
                   
                    $('.modal-body').html("{{ $error }}");
                    $('#getCodeModal2').modal('show');

                });
            </script>
            @endforeach

        @endif
        

        <div class="modal fade" id="getCodeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title">~~ Announcement Notification ~~</h4>
                 </div>
                 <div class="modal-body">
                     <p id="custmodal"></p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                 </div>
               </div>
              </div>
        </div> 
        

           @include('layouts.footer')

        


         
          


        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
       
        
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>     
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>
        <script src="/js/jquery.confirm.js"></script> 

        <script> 


            $("input").focus(function() {
            //do nothing

        }).blur(function() {          
                
            $('.clickoff').fadeOut();
            
        });



        function fireDeleteTask()
        {
            //fire off ajax to delete the task!

            $.ajax(
            {


                  url: "/taskdel",
                  type: 'get',
                  dataType: "json",
                  //default: Intelligent Guess (Other values: xml, json, script, or html)'
                  data: {
                            _method: 'PUT',
                            taskid: $('#taskidselector').val(),
                            _token: '{{ csrf_token() }}'
                  },
                  success: function(data)
                  {
                    
                            if(data.grantsuccess)
                            {
                                //unlock boxes and buttons
                              
                                 $('.modal-body').html(data.grantsuccess);
                                 $('#ErrorModal').modal('show');
                                 //lock boxes and buttons
                                    $('#tasktitleselector').prop('disabled',true);
                                    $('#taskdescselector').prop('disabled',true);
                                    $('#taskdel').prop('disabled',true);
                                    $('#taskup').prop('disabled',true);

                                    $('#tasktitleselector').val("");
                                    $('#taskdescselector').val("");
                                    $('#taskidselector').val("");


                            }   
                            if(data.grantfail)
                            {
                                //lock boxes and buttons
                               

                                 $('.modal-body').html(data.grantfail);
                                 $('#ErrorModal').modal('show');

                                 //lock boxes and buttons
                                    $('#tasktitleselector').prop('disabled',true);
                                    $('#taskdescselector').prop('disabled',true);
                                    $('#taskdel').prop('disabled',true);
                                    $('#taskup').prop('disabled',true);

                                    $('#tasktitleselector').val("");
                                    $('#taskdescselector').val("");

                            }                          


                  }
            });


        }



        $(".conf-del").confirm({
            text: "Delete Task?",
            title: "Team Confirmation",
            confirm: function(button) 
            {
                //send email
                fireDeleteTask();
            },
            cancel: function(button) {
                // nothing to do
            },
            confirmButton: "Yes",
            cancelButton: "No",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-info",
            dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
        });


        $('#taskidselector').keyup(function(){

            if($(this).val())
            {

               


                $.ajax(
                {


                      url: "/idcheck",
                      type: 'get',
                      dataType: "json",
                      //default: Intelligent Guess (Other values: xml, json, script, or html)'
                      data: {
                                _method: 'PUT',
                                taskid: $('#taskidselector').val(),
                                _token: '{{ csrf_token() }}'
                      },
                      success: function(data)
                      {
                        
                                if(data.unlock)
                                {
                                    //unlock boxes and buttons
                                    $('#tasktitleselector').prop('disabled',false);
                                    $('#taskdescselector').prop('disabled',false);
                                    $('#taskdel').prop('disabled',false);
                                    $('#taskup').prop('disabled',false);

                                    $('#tasktitleselector').val(data.title);
                                    $('#taskdescselector').val(data.desc);



                                }   
                                if(data.lock)
                                {
                                    //lock boxes and buttons
                                    $('#tasktitleselector').prop('disabled',true);
                                    $('#taskdescselector').prop('disabled',true);
                                    $('#taskdel').prop('disabled',true);
                                    $('#taskup').prop('disabled',true);

                                    $('#tasktitleselector').val("");
                                    $('#taskdescselector').val("");



                                }                          


                      }
                });
            }
            else
            {
                //lock boxes and buttons
                $('#tasktitleselector').prop('disabled',true);
                $('#taskdescselector').prop('disabled',true);
                $('#taskdel').prop('disabled',true);
                $('#taskup').prop('disabled',true);

                $('#tasktitleselector').val("");
                $('#taskdescselector').val("");
            }

        });

        $('#forminput00').keyup(function(){



        if($(this).val())
        {
            $.ajax({
              url: "/usrsearch",
              type: 'get',
              dataType: "json",
              //default: Intelligent Guess (Other values: xml, json, script, or html)'
              data: {
                _method: 'PUT',
               search: $('#forminput00').val(),
                _token:     '{{ csrf_token() }}'
              },
              success: function(data)
              {
                
                $('#usrlist').html("");
                

                

                var filter = [];

                $.each(data, function(index,jsonObject){
                    $.each(jsonObject, function(key,val){


                        //get rid of duplicates
                        if(key === 'username')
                        {
                            if($.inArray(val, filter) == -1)
                            {
                                filter.push(val); 


                                
                            }

                        }
                    });

                
                
                });

                var tmp = '<ul class="usrlist">';


                for (var i = 0; i < filter.length; ++i) {
                    
                    tmp += "<li class='ulist'>" + filter[i] + "</li>";
                }


                

                tmp += "</ul>";

                
                $('#usrlist').append(tmp);
                $('#usrlist').fadeIn();

                tmp ="";
                filter = [];                                             


              }
            });
        }
        else
        {
            $('#usrlist').html("");
            $('#usrlist').fadeOut();
        }

           
        }); 




             $(document).on('click', "li", function(e) {
                //var liId = $(this).parent("li").attr("id");
                $('.usrlist4').fadeOut();
                $('.usrlist3').fadeOut();
                $('.usrlist2').fadeOut();
                $('.usrlist').fadeOut();

                
                
            
                if($('#forminput00').val().length > 0)
                {
                    $('#forminput00').val($(this).text());
                }
                

              
            });

      
        </script>

       
        </body>         
    </html>