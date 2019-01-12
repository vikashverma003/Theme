 <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class=" profle_hdr">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle responsive" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Vedio </a></li>
                            <li><a href="beautiful_destination.html">Beautiful Distination</a></li>
                            <li class="active"><a href="beautiful_destination.html">John Doe</a></li>
                            <li class="logout_butn">

                               <!-- <a href="#">Logout</a> -->

                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf

                                    </form>



                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </nav>

    </header>
