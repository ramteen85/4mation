<!-- logged in version of nav -->

<!-- if something wrong with navbar, class cleanup is from custom.css -->


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
                            <a class="navbar-brand cleanup" href="/members">
                                <img src="/images/logo.png" alt="Logo" class="cleanup">
                            </a>                             
                        </div>                         
                        <!-- Collect the nav links, forms, and other content for toggling -->                         
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                            <ul class="nav navbar-nav pull-right"> 
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle cleanup" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}&nbsp;<span class="caret"></span></a> 
                                    <ul class="dropdown-menu text-center"> 
                                        <li>
                                            <a href="/members" class="cleanup">Home</a>
                                        </li>
                                        @if(Auth::user()->role == 1)
                                        <li>
                                            <a href="/admin" class="cleanup">Administrator</a>
                                        </li>
                                        @endif
                                        <li>
                                            <a href="/eprofile" class="cleanup">Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="/profile/{{ Auth::user()->username }}" class="cleanup">View Profile</a>
                                        </li>
                                        <li>
                                            <a href="/messages/inbox" class="cleanup">Messages</a>
                                        </li>
                                        <li>
                                            <a href="/tasks" class="cleanup">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="/findmates" class="cleanup">Find Workmates</a>
                                        </li>
                                        <li>
                                            <a href="/getteams" class="cleanup">View Teams</a>
                                        </li>
                                        <li>
                                            <a href="/video" class="cleanup">Video</a>
                                        </li>
                                        <li>
                                            <a href="/logout" class="cleanup">Logout</a>
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