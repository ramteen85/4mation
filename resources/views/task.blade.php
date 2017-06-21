<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>4Mation | Tasks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="4Mation Technologies Employee Management System | Task Page" />
     
        <!-- Core CSS -->         
        <!-- Style Library -->         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->         

        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="/css/style-library-1.css" rel="stylesheet" type="text/css">
        <link href="/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="/css/blocks.css" rel="stylesheet" type="text/css">
        <link href="/components/pg.chocka-blocks/css/cb-style.css" rel="stylesheet" type="text/css">     
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/style-library-1.css">
        <link href="/css/tasks.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav">

        @include('layouts.members.nav')

         <section id="cb-intro-2-5" class="cb-intro-block cb-intro-2-5">
            <div id="intro15" style="background-image: url('images/tech.png');"> 
                <div class="container" style="background: black; opacity: 0.6"> 
                    <h3 class="editContent headerstyle taskh1 cleanup">Your Tasks</h3> 
                    <p class="editContent headerstyle cleanup">Checklist</p>
                </div>                 
            </div>
        </section>
        <section class="tasksheader">
            <h1>Tasks Due</h1>
        </section>
        <section id="cb-service-1-4" class="cb-service-block cb-service-1-4">
            <div id="services4"> 
                <div class="container"> 
                    

                    @foreach($tasks as $task)
                        <div class="col-md-4 taskborder" data-pg-collapsed> 
                            <div class="services-box"> 
                                <div class="icon">
                                    <i class="fa fa-service fa-2x glyphicon glyphicon-list-alt"></i> 
                                </div>                                 
                                <h2 class="editContent" style="outline: none; cursor: inherit;">{{ $task->title }}</h2>
                                <h4>Issued By: <a href="/profile/{{ $task::getSenderById($task->issue_id)->username }}">{{ $task::getSenderById($task->issue_id)->username }}</a></h4>
                                <h5>{{ $task->timeago() }}</h5>
                                <div class="col-xs-12">
                                    <form action="/checktask" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="boolval" value="1">
                                    <input type="hidden" name="taskid" value="{{$task->id}}">
                                    <button class="form-control btn btn-success">Check off 
                                        <span class="glyphicon glyphicon-check"></span>
                                    </button>
                                    </form>        
                                </div>
                                                             
                                <p class="editContent cleanup">{{ $task->body }}</p> 
                            </div>                             
                        </div>
                    @endforeach                      
                </div>                 
            </div>             
        </section>
        <section class="tasksheader">
            <h1>Recently completed Tasks</h1>
        </section>
        <section id="cb-service-1-4" class="cb-service-block cb-service-1-4">
            <div id="services4"> 
                <div class="container"> 
                    
                    @foreach($tasks2 as $task)
                        <div class="col-md-4 taskborder" data-pg-collapsed> 
                            <div class="services-box"> 
                                <div class="icon">
                                    <i class="fa fa-service fa-2x glyphicon glyphicon-list-alt"></i> 
                                </div>                                 
                                <h2 class="editContent cleanup">{{ $task->title }}</h2>
                                <h4>Issued By: <a href="/profile/{{ $task::getSenderById($task->issue_id)->username }}">{{ $task::getSenderById($task->issue_id)->username }}</a></h4>
                                <h5>{{ $task->timeago() }}</h5>
                                <div class="col-xs-12">
                                    
                                    <button style="display: none;" class="checkoffbtn form-control btn btn-success">Check off 
                                        <span class="glyphicon glyphicon-check"></span>
                                    </button>       
                                                                  
                                </div>
                                <div class="col-xs-12">
                                    <form action="/checktask" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="boolval" value="0" />
                                    <input type="hidden" name="taskid" value="{{$task->id}}">
                                    <button class="form-control btn btn-danger">Uncheck 
                                        <span class="glyphicon glyphicon-check"></span>
                                    </button>
                                    </form>                                     
                                </div>                                 
                                <p class="editContent cleanup">{{ $task->body }}</p> 
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
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>         
        <script type="text/javascript" src="/components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/bskit-scripts.js"></script>
    </body>     
</html>
