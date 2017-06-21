<!DOCTYPE html> 
<html lang="en" style="height:100%;">
<head> 
    
    <meta charset="utf-8"> 
    <title>4Mation | Admin User Options</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="keywords" content="pinegrow, blocks, bootstrap" />
    <meta name="description" content="Employee Management System for 4mation Technologies" />

    <!-- Core CSS -->         
    <!-- Style Library -->         
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->  

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
                                        <div class="formcover col-md-3 col-xs-12 col-sm-3" data-pg-id="109">
                                            <h1 class="delh labelsize1 labelsm" data-pg-id="110">Delete User:</h1> 
                                        </div>
                                        <div class="col-md-6 col-xs-12 topspacesm col-sm-6" data-pg-id="111">
                                            <div class="col-xs-12" data-pg-id="112"> 
                                                <input autocomplete="off" name="usrname" id="forminput01" type="text" style="width: 100%;  height: 40px;" placeholder="Search for a user" data-pg-id="113" />
                                                <div class="clickoff" style="" id="usrlist"></div>
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
                                            <input autocomplete="off" id="forminput02" type="text" style="width: 100%; height: 40px;" placeholder="Search for a user" data-pg-id="122" name="username" />
                                            <div class="clickoff" id="usrlist2"></div>
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
                                    <form id="formrevoke" action="/usrrevoke" method="POST">
                                        {{ csrf_field() }}
                                    <div class="col-sm-3 col-xs-12 labelsm" data-pg-id="127">
                                    
                                        <h1 class="delh labelsize1" data-pg-id="128">Demote:</h1> 
                                    </div>
                                    <div class="col-sm-6 col-xs-12 topspacesm" data-pg-id="129">
                                        <div class="col-xs-12" data-pg-id="130"> 
                                            <input autocomplete="off" id="forminput03" type="text" style="width: 100%; height: 40px;" placeholder="Search for a user" data-pg-id="122" name="username" />
                                            <div class="clickoff" id="usrlist3"></div>
                                        </div>                                             
                                    </div>
                                    <div class="col-xs-8 col-sm-3 col-xs-offset-2 col-sm-offset-0" data-pg-id="132">
                                        <button style="top:15px" class="confirm4 col-xs-12 btn btn-danger" data-pg-id="133">Revoke</button> 
                                    </div>
                                    </form>
                                </section>
                            </section>
                            <section class="panelbg margin30" data-pg-id="134">
                                <section style="padding-bottom: 30px" class="col-xs-12 panelbg margin30" data-pg-id="135">
                                    <div class="text-center col-xs-12" data-pg-id="136">
                                        <h1 class="delh" data-pg-id="137">Team Selection</h1> 
                                    </div>
                                    <div class="col-xs-12" data-pg-id="138">
                                    <form id="assignform" action="/assignteam" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-sm-4 col-xs-12" data-pg-id="139">
                                            <div class="col-xs-12" style="margin-top: 32px" data-pg-id="140">
                                                <input autocomplete="off"  id="forminput00" type="text" style="width: 100%; height: 40px;" name="username" placeholder="Search for a user" data-pg-id="141" />
                                                <div class="clickoff" id="usrlist0"></div> 
                                            </div>                                                 
                                        </div>
                                        <div class="col-sm-4 col-xs-12" data-pg-id="142">
                                            <div class="col-xs-12 marginlge" data-pg-id="143">
                                                <select id="assignselect" name="teamid" style="width: 100%; height: 40px;" class="teamselect marginsm" data-pg-id="144"> 
                                                    <option selected="selected" data-pg-id="145">Select a Team</option>
                                                    @foreach($teams as $team)
                                                        @if($team->name !== "Not Assigned")
                                                            <option value="{{ $team->id }}" class="{{ $team->id }}" data-pg-id="146">{{ $team->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>                                                     
                                            </div>                                                 
                                        </div>
                                        <div class="col-sm-4 col-xs-12" data-pg-id="152">
                                            <button type="button" style="top:15px" class="col-xs-12 btn btn-info confirm6" data-pg-id="153">Assign team</a> 
                                        </div>  
                                     </form>                                              
                                    </div>
                                    <div class="col-xs-12" data-pg-id="154">
                                        <hr data-pg-id="155" /> 
                                    </div>
                                    <div class="col-xs-12" data-pg-id="156">
                                        <div class="col-sm-4 col-xs-12 labelsm" data-pg-id="157">
                                            <h1 class="delh labelsize1" data-pg-id="158">Delete Team</h1> 
                                        </div>
                                        <form id="delteamform" action="/delteam" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-sm-4 col-xs-12" data-pg-id="159">
                                            <div class="col-xs-12" data-pg-id="160">
                                                <select id="teamselect1" style="width: 100%; height: 40px;" class="teamselect marginlge" data-pg-id="161"> 
                                                    <option value ="notselected" selected="selected" data-pg-id="162">Select a Team</option>
                                                    @foreach($teams as $team)
                                                        @if($team->name !== "Not Assigned")
                                                        <option class="{{ $team->id }}" value="{{ $team->id }}" data-pg-id="146">{{ $team->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                <!-- $( "#myselect" ).val(); for ID and $( "#myselect option:selected" ).text(); for text --> 

                                               
                                            </div>                                                 
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2" data-pg-id="169">
                                            <button type="button" style="top:15px" class="confirm5 col-xs-12 btn btn-danger" data-pg-id="170">Delete</button> 
                                        </div>  
                                        </form>                                           
                                    </div>
                                    <div class="col-xs-12" data-pg-id="171">
                                        <hr data-pg-id="172" /> 
                                    </div>
                                    
                                        <div class="col-sm-4 col-xs-12 labelsm" data-pg-id="174">
                                            <h1 class="delh labelsize1" data-pg-id="175">Create Team</h1> 
                                        </div>
                                        <form id="formcreateteam" method="POST" action="/createteam">
                                        {{ csrf_field() }}
                                        <div class="col-sm-4 col-xs-12 marginlge" data-pg-id="176">
                                            <div class="col-xs-12" data-pg-id="177"> 
                                                <input type="text" style="width: 100%; height: 40px;" autocomplete="off" placeholder="  << Enter Team Name >>  " id="tname" data-pg-id="178" />
                                            </div>                                                 
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-0 col-xs-12" data-pg-id="179">
                                            <input autocomplete="off" type="text" id="tdesc" style="width: 100%; height: 40px;" placeholder="  << Enter Team Description >>  " data-pg-id="178" />
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-0 col-xs-12" data-pg-id="179">
                                            <button type="button" style="top:15px" class="confirm3 col-xs-12 btn btn-info" data-pg-id="180">Create team</button> 
                                        </div>
                                        </form>                                             
                                    
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>        
    <script type="text/javascript" src="/js/plugins.js"></script>   
    <script type="text/javascript" src="/js/bskit-scripts.js"></script>     
    <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>
    <script src="/js/jquery.confirm.js"></script> 
    <script type="text/javascript">
         function fireRevoke()
 {
  

    var username = "";

    if($('#forminput03').val().length > 0)
    {
        username = $('#forminput03').val();
    }


    //do ajax
    

    $.post(
        $( "#formrevoke" ).prop( 'action' ),
        {
            "_token": $( "#formrevoke" ).find( 'input[name=_token]' ).val(),
            "username": username
        },
        function( data ) 
        {
            //do something with data/response returned by server
            
            $('#usrlist3').html("");
        
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

function firePromote()
{
    

    var username = "";

    if($('#forminput02').val().length > 0)
    {
        username = $('#forminput02').val();
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
    

    if($('#forminput01').val().length > 0)
    {
        username = $('#forminput01').val();
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

function fireTeamDelete()
{
    //$( "#selectteam1" ).val(); for ids text() for texts

    var id = $( "#teamselect1 option:selected" ).val();
    var text = $( "#teamselect1  option:selected" ).text();


    //do ajax
    

    $.post(
        $( "#delteamform" ).prop( 'action' ),
        {
            "_token": $( "#delteamform" ).find( 'input[name=_token]' ).val(),
            "id": id,
            "text": text
        },
        function( data ) 
        {
            //do something with data/response returned by server
            
           
        
            try 
            {
              if(data.tsuccess) 
              {
                $('.modal-body').html(data.tsuccess);
                $('#ErrorModal').modal('show');

                $('select').load("/getteams2");






              }
            } 
            catch(e) 
            {
                alert("an error occurred: " + e.getMessage());
            }

            try 
            {
              if(data.tfail) 
              {
                
                $('.modal-body').html(data.tfail);
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

function fireTeamAssign()
{
    var user = $('#forminput00').val();
    var teamid = $('#assignselect option:selected').val();
    var team = $('#assignselect option:selected').text();



    $.post(
        $('#assignform').prop( 'action' ),
        {
            "_token": $('#assignform').find( 'input[name=_token]' ).val(),
            "username": user,
            "teamid": teamid,
            "team": team
        },
        function( data ) 
        {
            //do something with data/response returned by server
            
          
        
            try 
            {
              if(data.grantsuccess) 
              {
                $('.modal-body').html(data.grantsuccess);
                $('#ErrorModal').modal('show');

                
                $('#forminput03').val("");

                $('select').load("/getteams2");


              }
            } 
            catch(e) 
            {
                alert("an error occurred: " + e);
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


            try 
            {
              if(data.errors) 
              {
                if(data.errors.username)
                {
                    $('.modal-body').html(data.errors.username);
                    $('#ErrorModal').modal('show');
                }
                else if(data.errors.team)
                {
                    $('.modal-body').html(data.errors.team);
                    $('#ErrorModal').modal('show');
                }
                else if(data.errors.teamid)
                {
                    $('.modal-body').html(data.errors.teamid);
                    $('#ErrorModal').modal('show');
                }
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



 function fireCreateTeam()
{
    var tname = "";
    var tdesc = "";
    

  
    tname = $('#tname').val();
    tdesc = $('#tdesc').val();
    


    //do ajax
    

    $.post(
        $( "#formcreateteam" ).prop( 'action' ),
        {
            "_token": $( "#formcreateteam" ).find( 'input[name=_token]' ).val(),
            "tname": tname,
            "tdesc": tdesc
        },
        function( data ) 
        {
            //do something with data/response returned by server
            
            $('#usrlist').html("");
        
            try 
            {
              if(data.tsuccess) 
              {
                $('.modal-body').html(data.tsuccess);
                $('#ErrorModal').modal('show');

                
                $('#tname').val("");
                $('#tdesc').val("");

                //update team lists


                 $('select').load("/getteams2");


              }
            } 
            catch(e) 
            {
                alert("an error occurred: " + e);
            }

            try 
            {
              if(data.tfail) 
              {
                
                $('.modal-body').html(data.tfail);
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




$(".confirm6").confirm({
        text: "Assign user to team?",
        title: "Team Confirmation",
        confirm: function(button) 
        {
            //send email
            fireTeamAssign();
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





$(".confirm5").confirm({
        text: "Delete Selected Team?",
        title: "Team Confirmation",
        confirm: function(button) 
        {
            //send email
            fireTeamDelete();
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




$(".confirm4").confirm({
        text: "Revoke users admin privelages?",
        title: "Admin Confirmation",
        confirm: function(button) 
        {
            //send email
            fireRevoke();
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




 $(".confirm3").confirm({
        text: "You are about to create a new team. Are you satisfied with the team name and description?",
        title: "Team Confirmation",
        confirm: function(button) 
        {
            //send email
            fireCreateTeam();
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




$("input").focus(function() {
    //do nothing

}).blur(function() {          
        
    $('.clickoff').fadeOut();
    
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
        
        $('#usrlist0').html("");
        

        

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

        var tmp = '<ul class="usrlist0">';


        for (var i = 0; i < filter.length; ++i) {
            
            tmp += "<li class='ulist0'>" + filter[i] + "</li>";
        }


        

        tmp += "</ul>";

        
        $('#usrlist0').append(tmp);
        $('#usrlist0').fadeIn();

        tmp ="";
        filter = [];                                             


      }
    });
}
else
{
    $('#usrlist0').html("");
    $('#usrlist0').fadeOut();
}

   
}); 

function getEventTarget(e) 
{
    e = e || window.event;
    return e.target || e.srcElement; 
}

$(document).on('click', "li", function(e) 
{
    //var liId = $(this).parent("li").attr("id");
    $('.usrlist5').fadeOut();
    $('.usrlist4').fadeOut();
    $('.usrlist3').fadeOut();
    $('.usrlist2').fadeOut();
    $('.usrlist').fadeOut();
    $('.usrlist0').fadeOut();

     /*
    
    if($('#forminput04').val().length > 0)
    {
        $('#forminput04').val($(this).text());
        //this might be a bug was 3 now 4


    }

     */
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