<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>4Mation | Read Message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="4Mation Technologies Employee Management Systemn | Read Message" />

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
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">       
        <link href="/css/members.css" rel="stylesheet" type="text/css">
        <link href="/css/tasks.css" rel="stylesheet" type="text/css">
        <link href="/css/messages.css" rel="stylesheet" type="text/css">
        <link href="/css/inbox.css" rel="stylesheet" type="text/css">
        <link href="/css/msgbody.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>


    </head>     
    <body data-spy="scroll" data-target="nav">
    
        <!-- logged in version of nav -->            
        @include('layouts.members.nav')


        <section id="cb-intro-2-5" class="cb-intro-block cb-intro-2-5" data-pg-collapsed>
            <div id="intro15" class="headershade">
                <div class="container shadecleanup"> 
                    <h3 class="editContent headerstyle taskh1 cleanup">From: {{ $message->getUsernameFromId($message->sender_id)->username }}</h3> 
                </div>                 
            </div>
        </section>
        <section class="hab0" id="cb-service-1-4">
            <div class=" col-xs-12 col-sm-12 col-md-4 body-sm" data-pg-collapsed>
                @include('layouts.msgsidemenu')                
            </div>
            <div class="inboxwhitewrap margin-sm stripe col-xs-12 col-sm-12 col-md-8">
                <div id="diffcontent" class="difftouches">
                    <div class="col-xs-12">
                        <div style="" class="col-xs-12">
                            <div class="col-xs-12 col-sm-12">
                                <h3>Date Sent: &nbsp;&nbsp;&nbsp;&nbsp; {{ $message->created_at->format('Y-m-d') }} ({{ $message->created_at->diffForHumans() }})</h3> 
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <h3>Subject: &nbsp;&nbsp;&nbsp; {{ $message->subject }}</h3> 
                            </div>
                            <div style="height: auto;" class="col-xs-12">
                                <textarea class="msgbodycleanup" readonly>{{ $message->body }}</textarea>                                 
                            </div>
                            <div class="ha col-xs-12">
                                <div class="col-xs-hidden col-xs-3"> 
                                </div>
                                
                                <div class="pt25 col-xs-12 col-sm-3">
                                    @if($message->read == 1)
                                    <span class="label label-default msgread msgreadsm">Message Read</span> 
                                    @endif
                                </div>
                                
                                <div class="col-xs-hidden col-xs-3"> 
                                </div>
                                @if($flag == false)
                                <div class="col-xs-12 col-sm-3">
                                    <a href="/messages/compose/{{ $message->getUsernameFromId($message->sender_id)->username }}" class="fw btn btn-info">Reply</a>                 
                                </div>            
                                @endif                     
                            </div>                             
                        </div>                         
                    </div>
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
