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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
                      
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
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    </head>     
            
        <body data-spy="scroll" data-target="nav" class="bodybg">
           
           @include('layouts.members.nav')

           <div class="container" data-pg-id="71">
                <div class="row" data-pg-id="72">
                    <h1 id="adminheader" class="header-radius bigtitlesizesm" data-pg-id="73">Admin Panel</h1>
                    
                    @include('layouts.admin.sidebar')

                    <!-- /.sidebar column ends here -->
                    <div class="col-md-9 minh webbbody webbody margin" data-pg-id="92">
                        <div class="well wellpbot minh delbgsm" data-pg-id="93">
                            <div class="list-group minh" data-pg-id="94">
                                <div href="#" class="list-group-item active  titlebox" data-pg-id="95">
                                    <div class="col-xs-12 titlebox" style="height:auto;" data-pg-id="96">
                                        <h4 class="list-group-item-heading spacer-10 text-center" data-pg-id="97">User Options</h4>
                                        <p class="list-group-item-text" data-pg-id="98">Welcome to the user options. <br data-pg-id="99"><br data-pg-id="100">Here you can:<br data-pg-id="101"><br data-pg-id="102">- Delete an Employee's Account<br data-pg-id="103">- Give an Employee Admin Status<br data-pg-id="104">- Revoke an Employee's Admin Status<br data-pg-id="105">- Assign an Employee to a team<br data-pg-id="106">- Create or delete teams</p>
                                    </div>
                                </div>
                                <section class="panelbg margin30 delbgsm" data-pg-id="107">
                                    <section class="col-xs-12 panelbg margin30" data-pg-id="108">
                                        <form id="formdelete" action="/usrdelete" method="POST">
                                            {{ csrf_field() }}
                                            <div class="col-md-3 col-xs-12 col-sm-3" data-pg-id="109">
                                                <h1 class="delh labelsize1 labelsm" data-pg-id="110">Delete User:</h1> 
                                            </div>
                                            <div class="col-md-6 col-xs-12 topspacesm col-sm-6" data-pg-id="111">
                                                <div class="col-xs-12" data-pg-id="112"> 
                                                    <input name="usrname" id="forminput00" type="text" style="width: 100%;  height: 40px;" placeholder="Search for a user" data-pg-id="113" />
                                                    <div style="" id="usrlist"></div>
                                                </div>
                                                 
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-8 col-xs-offset-2 col-sm-offset-0" data-pg-id="114">
                                                <button type="button" style="top:15px" class="confirm col-xs-12 btn btn-danger" data-pg-id="115">Delete</button> 
                                            </div>
                                            </section>
                                        </form>
                                </section>
                                <section class="panelbg margin30 delbgsm" data-pg-id="116">
                                    <section class="col-xs-12 panelbg margin30 makeadminsm" data-pg-id="117">
                                    <form id="formgrant" action="/usrgrant" method="POST">
                                    {{ csrf_field() }}
                                        <div class="col-xs-12 col-sm-3 labelsm" data-pg-id="118">
                                            <h1 class="delh labelsize1" data-pg-id="119">Make Admin:</h1> 
                                        </div>
                                        <div class="col-sm-6 col-xs-12 topspacesm" data-pg-id="120">
                                            <div class="col-xs-12" data-pg-id="121"> 
                                                <input id="forminput01" type="text" style="width: 100%; height: 40px;" placeholder="Search for a user" data-pg-id="122" name="username" />
                                                <div id="usrlist2"></div>
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-0" data-pg-id="123">
                                            <button type="button" style="top:15px" class="col-xs-12 confirm2 btn btn-success" data-pg-id="124">Grant</button> 
                                        </div>
                                        </form>
                                    </section>
                                </section>
                                <section class="panelbg margin30 delbgsm" data-pg-id="125">
                                    <section class="col-xs-12 panelbg margin30" data-pg-id="126">
                                        <div class="col-sm-3 col-xs-12 labelsm" data-pg-id="127">
                                            <h1 class="delh labelsize1" data-pg-id="128">Demote:</h1> 
                                        </div>
                                        <div class="col-sm-6 col-xs-12" data-pg-id="129">
                                            <div class="col-xs-12" data-pg-id="130"> 
                                                <input id="forminput02" type="text" style="width: 100%; height: 40px;" placeholder="Search for a user" class="marginlge" data-pg-id="131" />
                                                <div id="usrlist3"></div>
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-8 col-sm-3 col-xs-offset-2 col-sm-offset-0" data-pg-id="132">
                                            <a href="#" style="top:15px" class="col-xs-12 btn btn-danger" data-pg-id="133">Revoke</a> 
                                        </div>
                                    </section>
                                </section>
                                <section class="panelbg margin30" data-pg-id="134">
                                    <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30" data-pg-id="135">
                                        <div class="text-center col-xs-12" data-pg-id="136">
                                            <h1 class="delh" data-pg-id="137">Team Selection</h1> 
                                        </div>
                                        <div class="col-xs-12" data-pg-id="138">
                                            <div class="col-sm-4 col-xs-12" data-pg-id="139">
                                                <div class="col-xs-12" style="margin-top: 32px" data-pg-id="140">
                                                    <input id="forminput03" type="text" style="width: 100%; height: 40px;" placeholder="Search for a user" data-pg-id="141" />
                                                    <div id="usrlist4"></div> 
                                                </div>                                                 
                                            </div>
                                            <div class="col-sm-4 col-xs-12" data-pg-id="142">
                                                <div class="col-xs-12 marginlge" data-pg-id="143">
                                                    <select id="forminput04" style="width: 100%; height: 40px;" class="marginsm" data-pg-id="144"> 
                                                        <option selected="selected" data-pg-id="145">Select a Team</option>
                                                        <option data-pg-id="146">Team 1</option>
                                                        <option data-pg-id="147">Team 2</option>
                                                        <option data-pg-id="148">Team 3</option>
                                                        <option data-pg-id="149">Team 4</option>
                                                        <option data-pg-id="150">Team 5</option>
                                                        <option data-pg-id="151">Team 6</option>
                                                    </select>                                                     
                                                </div>                                                 
                                            </div>
                                            <div class="col-sm-4 col-xs-12" data-pg-id="152">
                                                <a href="#" style="top:15px" class="col-xs-12 btn btn-info" data-pg-id="153">Assign team</a> 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12" data-pg-id="154">
                                            <hr data-pg-id="155" /> 
                                        </div>
                                        <div class="col-xs-12" data-pg-id="156">
                                            <div class="col-sm-4 col-xs-12 labelsm" data-pg-id="157">
                                                <h1 class="delh labelsize1" data-pg-id="158">Delete Team</h1> 
                                            </div>
                                            <div class="col-sm-4 col-xs-12" data-pg-id="159">
                                                <div class="col-xs-12" data-pg-id="160">
                                                    <select id="forminput05" style="width: 100%; height: 40px;" class="marginlge" data-pg-id="161"> 
                                                        <option selected="selected" data-pg-id="162">Select a Team</option>
                                                        <option data-pg-id="163">Team 1</option>
                                                        <option data-pg-id="164">Team 2</option>
                                                        <option data-pg-id="165">Team 3</option>
                                                        <option data-pg-id="166">Team 4</option>
                                                        <option data-pg-id="167">Team 5</option>
                                                        <option data-pg-id="168">Team 6</option>
                                                    </select>                                                     
                                                </div>                                                 
                                            </div>
                                            <div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2" data-pg-id="169">
                                                <a href="#" style="top:15px" class="col-xs-12 btn btn-danger" data-pg-id="170">Delete</a> 
                                            </div>                                             
                                        </div>
                                        <div class="col-xs-12" data-pg-id="171">
                                            <hr data-pg-id="172" /> 
                                        </div>
                                        <div class="col-xs-12" data-pg-id="173">
                                            <div class="col-sm-4 col-xs-12 labelsm" data-pg-id="174">
                                                <h1 class="delh labelsize1" data-pg-id="175">Create Team</h1> 
                                            </div>
                                            <div class="col-sm-4 col-xs-12 marginlge" data-pg-id="176">
                                                <div class="col-xs-12" data-pg-id="177"> 
                                                    <input type="text" id="forminput00" style="width: 100%; height: 40px;" placeholder="  << Enter Team Name >>  " data-pg-id="178" />
                                                </div>                                                 
                                            </div>
                                            <div class="col-sm-4 col-sm-offset-0 col-xs-12" data-pg-id="179">
                                                <a href="#" style="top:15px" class="col-xs-12 btn btn-info" data-pg-id="180">Create team</a> 
                                            </div>                                             
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           @include('layouts.footer')

        <div class="modal fade" id="ErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
             <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">~~ Notification ~~</h4>
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


        
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
       
        
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>     
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>
        <script src="/js/jquery.confirm.js"></script> 

        <script>


        function firePromote()
        {
            

            var username = "";

            if($('#forminput01').val().length > 0)
            {
                username = $('#forminput01').val();
            }


            //do ajax
            

            $.post(
                $( "#formgrant" ).prop( 'action' ),
                {
                    "_token": $( "#formgrant" ).find( 'input[name=_token]' ).val(),
                    "username": username
                },
                function( data ) 
                {
                    //do something with data/response returned by server
                    
                    $('#usrlist2').html("");
                
                    try 
                    {
                      if(data.grantsuccess) 
                      {
                        $('.modal-body').html(data.grantsuccess);
                        $('#ErrorModal').modal('show');
                      }
                    } 
                    catch(e) 
                    {
                        alert("an error occurred: " + e.getMessage());
                    }

                    try 
                    {
                      if(data.grantfail) 
                      {
                        
                        $('.modal-body').html(data.grantfail);
                        $('#ErrorModal').modal('show');
                      }
                    } 
                    catch(e) 
                    {
                        alert("an error occurred: " + e.getMessage());
                    }

                                  

                },
                'json'
            );
        }

        function fireDelete1()
        {
            var username = "";
            

            if($('#forminput00').val().length > 0)
            {
                username = $('#forminput00').val();
            }
            


            //do ajax
            

            $.post(
                $( "#formdelete" ).prop( 'action' ),
                {
                    "_token": $( "#formdelete" ).find( 'input[name=_token]' ).val(),
                    "username": username
                },
                function( data ) 
                {
                    //do something with data/response returned by server
                    
                    $('#usrlist').html("");
                
                    try 
                    {
                      if(data.delsuccess) 
                      {
                        $('.modal-body').html(data.delsuccess);
                        $('#ErrorModal').modal('show');
                      }
                    } 
                    catch(e) 
                    {
                        alert("an error occurred: " + e.getMessage());
                    }

                    try 
                    {
                      if(data.delfail) 
                      {
                        
                        $('.modal-body').html(data.delfail);
                        $('#ErrorModal').modal('show');
                      }
                    } 
                    catch(e) 
                    {
                        alert("an error occurred: " + e.getMessage());
                    }

                                  

                },
                'json'
            );


        }


        $(".confirm2").confirm({
                text: "Are you sure you want to promote this user to an Admin?",
                title: "Admin Confirmation",
                confirm: function(button) 
                {
                    //send email
                    firePromote();
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


        $(".confirm").confirm({
                text: "Are you sure you want to delete this user?",
                title: "Delete Confirmation",
                confirm: function(button) 
                {
                    //send email
                    fireDelete1();
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


        /*

        $("#forminput00").focus(function() {
            $('#usrlist').fadeIn();

        }).blur(function() {
            
            if(!$('#forminput00').val().length > 0)
            {
                $('#forminput00').val("");
                $('#usrlist').fadeOut();
            }
        });

        */

        $('#forminput03').keyup(function(){



        if($(this).val())
        {
            $.ajax({
              url: "/usrsearch",
              type: 'get',
              dataType: "json",
              //default: Intelligent Guess (Other values: xml, json, script, or html)'
              data: {
                _method: 'PUT',
               search: $('#forminput03').val(),
                _token:     '{{ csrf_token() }}'
              },
              success: function(data)
              {
                
                $('#usrlist4').html("");
                

                

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

                var tmp = '<ul class="usrlist4">';


                for (var i = 0; i < filter.length; ++i) {
                    
                    tmp += "<li class='ulist4'>" + filter[i] + "</li>";
                }


                

                tmp += "</ul>";

                
                $('#usrlist4').append(tmp);
                $('#usrlist4').fadeIn();

                tmp ="";
                filter = [];                                             


              }
            })
        }
        else
        {
            $('#usrlist4').html("");
            $('#usrlist4').fadeOut();
        }

           
         });


        $('#forminput02').keyup(function(){



        if($(this).val())
        {
            $.ajax({
              url: "/usrsearch",
              type: 'get',
              dataType: "json",
              //default: Intelligent Guess (Other values: xml, json, script, or html)'
              data: {
                _method: 'PUT',
               search: $('#forminput02').val(),
                _token:     '{{ csrf_token() }}'
              },
              success: function(data)
              {
                
                $('#usrlist3').html("");
                

                

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

                var tmp = '<ul class="usrlist3">';


                for (var i = 0; i < filter.length; ++i) {
                    
                    tmp += "<li class='ulist3'>" + filter[i] + "</li>";
                }


                

                tmp += "</ul>";

                
                $('#usrlist3').append(tmp);
                $('#usrlist3').fadeIn();

                tmp ="";
                filter = [];                                             


              }
            })
        }
        else
        {
            $('#usrlist3').html("");
            $('#usrlist3').fadeOut();
        }

           
         });






         $('#forminput01').keyup(function(){



        if($(this).val())
        {
            $.ajax({
              url: "/usrsearch",
              type: 'get',
              dataType: "json",
              //default: Intelligent Guess (Other values: xml, json, script, or html)'
              data: {
                _method: 'PUT',
               search: $('#forminput01').val(),
                _token:     '{{ csrf_token() }}'
              },
              success: function(data)
              {
                
                $('#usrlist2').html("");
                

                

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

                var tmp = '<ul class="usrlist2">';


                for (var i = 0; i < filter.length; ++i) {
                    
                    tmp += "<li class='ulist2'>" + filter[i] + "</li>";
                }


                

                tmp += "</ul>";

                
                $('#usrlist2').append(tmp);
                $('#usrlist2').fadeIn();

                tmp ="";
                filter = [];                                             


              }
            })
        }
        else
        {
            $('#usrlist2').html("");
            $('#usrlist2').fadeOut();
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
            })
        }
        else
        {
            $('#usrlist').html("");
            $('#usrlist').fadeOut();
        }

           
        }); 


          function getEventTarget(e) {
                e = e || window.event;
                return e.target || e.srcElement; 
          }   


            $(document).on('click', "li", function(e) {
                //var liId = $(this).parent("li").attr("id");
                $('.usrlist4').fadeOut();
                $('.usrlist3').fadeOut();
                $('.usrlist2').fadeOut();
                $('.usrlist').fadeOut();

                
                
                if($('#forminput03').val().length > 0)
                {
                    $('#forminput03').val($(this).text());
                }
                else if($('#forminput02').val().length > 0)
                {
                    $('#forminput02').val($(this).text());
                }
                else if($('#forminput01').val().length > 0)
                {
                    $('#forminput01').val($(this).text());
                }
                else if($('#forminput00').val().length > 0)
                {
                    $('#forminput00').val($(this).text());
                }
                

              
            });

            
              
            

               

        </script>


        
                
        </body>         
    </html>