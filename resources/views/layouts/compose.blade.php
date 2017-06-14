<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>Pinegrow Bootstrap Blocks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="/ico/favicon.png"> 
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
        <link href="/components/pg.chocka-blocks/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/components/pg.blocks/css/blocks.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/plugins.css">
        <link rel="stylesheet" href="/components/pg.blocks/css/style-library-1.css">
        <link href="/css/tasks.css" rel="stylesheet" type="text/css">
        <link href="/css/messages.css" rel="stylesheet" type="text/css">
    </head>     
    <body data-spy="scroll" data-target="nav" class="min">

        @include('layouts.members.nav')

        <section id="cb-intro-2-5" class="cb-intro-block cb-intro-2-5" data-pg-collapsed>
            <div id="intro15" style="background-image: url('/images/tech.png');">
                <div class="container" style="background: black; opacity: 0.6"> 
                    <h3 class="editContent headerstyle taskh1" style="outline: none; cursor: inherit;">Messages</h3> 
                </div>                 
            </div>
        </section>
        <section id="cb-service-1-4" class="cb-service-block cb-service-1-4 sectionmargin" data-pg-collapsed>
            <div class="stripe gridheight col-xs-12 col-sm-12 col-md-4 body-sm">
                <div class="col-sm-12 borderbottom optionheight sm-optionsize sm-optionheight">
                    <a href="/messages/compose"><h3 class="titles optionsize">Compose</h3></a> 
                </div>
                <div class="col-sm-12 borderbottom optionheight sm-optionsize sm-optionheight">
                    <a href="/messages/inbox"><h3 class="titles optionsize">Inbox</h3></a> 
                </div>
                <div class="col-sm-12 borderbottom optionheight sm-optionsize sm-optionheight">
                    <h3 class="titles optionsize">Tasks</h3> 
                </div>
                <div class="col-sm-12 borderbottom optionheight sm-optionsize sm-optionheight">
                    <h3 class="titles optionsize">Announcements</h3> 
                </div>                 
            </div>
            <div class="gridheight col-xs-12 col-sm-12 col-md-8 overflowauto margin-sm min">
                <div class="col-xs-12 margin-bot1 msgtitle-sm">
                    <h3 class="titles">Message</h3> 
                </div>
                <div class="col-xs-12 margin-bot1">
                    <div class="col-xs-4">
                        <span class="label label-default full-width text-center msglabels">To:</span> 
                    </div>
                    <div class="col-xs-8">
                        <input class="full-width titlepadding msglabels"> 
                    </div>                     
                </div>
                <div class="col-xs-12 margin-bot1">
                    <div class="col-xs-4">
                        <span class="label label-default full-width text-center msglabels">Subject:</span> 
                    </div>
                    <div class="col-xs-8">
                        <input class="full-width titlepadding msglabels"> 
                    </div>                     
                </div>
                <div class="col-xs-12 margin-bot1">
                    <div class="col-xs-12">
                        <textarea style="resize: none; " class="full-width gridheight bodypadding"></textarea>                         
                    </div>                     
                </div>
                <div class="col-xs-12 margin-bot1">
                    <div class="col-sm-4 col-sm-offset-8 col-xs-7 col-xs-offset-5">
                        <button type="submit" class="form-control btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-envelope"></span> Send
                        </button>                         
                    </div>                     
                </div>                 
            </div>             
        </section>
        <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>         
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/bskit-scripts.js"></script>         
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/jquery.easy-pie-chart.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/cb-main.js"></script>         
        <script type="text/javascript" src="/components/pg.chocka-blocks/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/plugins.js"></script>
        <script type="text/javascript" src="/components/pg.blocks/js/bskit-scripts.js"></script>
    </body>
    
    @include('layouts.footer')
      
</html>
