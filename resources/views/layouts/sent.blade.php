<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
      <meta charset="utf-8"> 
        <title>4Mation | Sent Messages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="4Mation Technologies Employee Management Systemn | Sent Messages" />
    
        <!-- Core CSS -->  
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->  
        
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">           
        <link href="/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="/css/blocks.css" rel="stylesheet" type="text/css">
        <link href="/components/pg.chocka-blocks/css/cb-style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">        
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">        
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/style-library-1.css">
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/members.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">       
        <link href="/css/tasks.css" rel="stylesheet" type="text/css">
        <link href="/css/messages.css" rel="stylesheet" type="text/css">
        <link href="/css/inbox.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    </head>     
    <body data-spy="scroll" data-target="nav">
        <!-- logged in version of nav -->
        @include('layouts.members.nav')
        <section id="cb-intro-2-5" class="cb-intro-block cb-intro-2-5">
            <div id="intro15" style="background-image: url('/images/tech.png');">
                <div class="container" style="background: black; opacity: 0.6"> 
                    <h3 class="editContent headerstyle taskh1" style="outline: none; cursor: inherit;">Sent Messages</h3> 
                </div>                 
            </div>
        </section>
        <section style="height: auto; bottom: 0;" id="cb-service-1-4">
            <div class=" col-xs-12 col-sm-12 col-md-4 body-sm">
                @include ('layouts.msgsidemenu')               
            </div>
            <div style="word-wrap: break-word;" class="margin-sm col-xs-12 col-sm-12 col-md-8">
                <div id="diffcontent" style=" background: white; height: 700px; margin-bottom: 20px;">
                    


                   

                   @foreach($messages as $message)
                                      
                    <div style=" border: 2px solid grey;" class="col-xs-12 read" data-pg-collapsed>
                        <div style="margin-bottom: 20px;" class="col-xs-12 col-sm-2">
                           <form  method="POST" action="/messages/deletesender/{{$message->id }}">
                                {{ csrf_field() }} 
                                <button type="submit" class="col-xs-12 btn btn-danger">delete</button>
                            </form>                             
                        </div>
                        <div class="marbot20 col-xs-12 col-sm-10">
                            <div class="col-sm-3 col-xs-12">
                                <h4 style="text-align: center; margin-top: 26px;"><a href="/profile/{{ $message->getUsernameFromId($message->sender_id)->username }}"><span class="marleft20 readlink">{{ $message->getUsernameFromId($message->sender_id)->username }}</span></a></h4> 
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <a href="/messages/message/{{ $message->id }}/"><h4 class="msgh4"><span class="readlink">{{ $message->subject }}</span></h4></a> 
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <h4 class="msgh4"><span class="readtext">{{ $message->created_at->diffForHumans() }}</span></h4> 
                            </div>                             
                        </div>                         
                    </div>

                    

                    @endforeach
                </div>                 
            </div>             
        </section>
        @include('layouts.footer')
         <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>    
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/bskit-scripts.js"></script>
    </body>
</html>
