<header>
    <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/"><img src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="{{ request()->is('vedio') ? 'active' : '' }}"><a href="/vedio" >Vedio </a></li>

        <!-- <li class="{{ request()->is('sites/*/edit') ? 'active' : '' }}" -->

         <li class="{{ request()->is('beautiful_destination') ? 'active' : '' }}"><a href="/beautiful_destination">Beautiful Distination</a></li>
        <li class="dropdown" >

          <a class="dropdown-toggle" data-toggle="dropdown" href="#"  >Sign in<span > <i class="fa fa-angle-down" aria-hidden="true"></i></span></a> 

                                  <!--  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf

                                    </form> -->

             <ul class="dropdown-menu" >
            <li><a href="#">Hotel</a></li>
            <li class="{{ request()->is('register') ? 'active' : '' }}"><a href="/register">Custmor</a></li>
            <li><a href="/profile">Local Travel Agent</a></li>  
            <li><a href="#">Cab Services</a></li>
            <li>

             
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
        </li>  

      </ul>
    </div>
  </div>
</nav>
</header>
