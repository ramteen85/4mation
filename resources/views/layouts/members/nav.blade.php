<!-- logged in version of nav -->


<section id="cb-navigation-1-2" class="cb-navigation-block cb-navigation-1-2">
            <div id="navigation2"> 
                <nav class="navbar navbar-default"> 
                    <div class="container"> 
                        <!-- Brand and toggle get grouped for better mobile display -->                         
                        <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                            <a class="navbar-brand" href="members" style="outline: none; cursor: inherit;">
                                <img src="images/logo.png" alt="Logo" style="outline: none; cursor: inherit;">
                            </a>                             
                        </div>                         
                        <!-- Collect the nav links, forms, and other content for toggling -->                         
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                            <ul class="nav navbar-nav pull-right"> 
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" role="button" aria-haspopup="true" aria-expanded="false" style="outline: none; cursor: inherit;">{{ Auth::user()->username }}&nbsp;<span class="caret"></span></a> 
                                    <ul class="dropdown-menu text-center"> 
                                        <li>
                                            <a href="/members" style="outline: none; cursor: inherit;">Home</a>
                                        </li>
                                        <li>
                                            <a href="/admin" style="outline: none; cursor: inherit;">Administrator</a>
                                        </li>
                                        <li>
                                            <a href="/eprofile" style="outline: none; cursor: inherit;">Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="/profile/{{ Auth::user()->username }}" style="outline: none; cursor: inherit;">View Profile</a>
                                        </li>
                                        <li>
                                            <a href="/inbox" style="outline: none; cursor: inherit;">Messages</a>
                                        </li>
                                        <li>
                                            <a href="/tasks" style="outline: none; cursor: inherit;">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="/findmates" style="outline: none; cursor: inherit;">Find Workmates</a>
                                        </li>
                                        <li>
                                            <a href="/logout" style="outline: none; cursor: inherit;">Logout</a>
                                        </li>
                                    </ul>                                     
                                </li>                                 
                            </ul>                             
                        </div>
                        <!-- /.navbar-collapse -->                         
                    </div>
                    <!-- /.container -->                     
                </nav>                 
            </div>
        </section>