<!DOCTYPE html>
<html>
<head>
<title>Trip2in</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    
<header>
    <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Vedio </a></li>
         <li><a href="beautiful_destination.html">Beautiful Distination</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign In<span > <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
             <ul class="dropdown-menu ">
            <li><a href="#">Hotel</a></li>
            <li><a href="#">Custmor</a></li>
            <li><a href="#">Local Travel Agent</a></li>  
            <li><a href="#">Cab Services</a></li>
          </ul>
        </li>
          

      </ul>
    </div>
  </div>
</nav>
</header>
    
        
  <div class="banner_in">
    <div class="bg_video">
      <video autoplay muted loop id="myVideo">
  <source src="images/2.mp4" type="video/mp4">
</video>
        <div class="sign_banner">
           <div class="sign_in">
              <h3>Sign in</h3>
               <p><i>Access your account information and manage your bookings.</i></p>
            <form action="/action_page.php">
  <div class="form-group sign_out">
    <input type="email" class="form-control" id="email" placeholder="Email address:">
  </div>
  <div class="form-group sign_out">
    <input type="password" class="form-control" id="pwd" placeholder="Password:">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
            
            </div>
            
                 <div class="sign_in sign_in2">
              <h3>Sign up</h3>
               <p><i>Sign up now and receive exclusive offers with huge discounts</i></p>
            <form action="/action_page.php">
                  <div class="form-group sign_out">
    <input type="text" class="form-control" id="email" placeholder="First Name">
  </div>
                  <div class="form-group sign_out ">
    <input type="text" class="form-control" id="email" placeholder="Last Name">
  </div>
  <div class="form-group sign_out">
    <input type="email" class="form-control" id="email" placeholder="Email address:">
  </div>
  <div class="form-group sign_out">
    <input type="password" class="form-control" id="pwd" placeholder="Password:">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
            
            </div>
        </div>

      </div> 
    </div>
    <!----banner---->

    
    
    
    

    <footer>
       <div class="container">
           <div class="row">
              <div class="col-sm-4">
                   <div class="ftr-div">
                      <img src="images/logo.png">
                       
                       <p>Go to travel us ("Gototravel Us") is a leading tour
                            operator and travel agency in the Northeast region 
                            of the United States. Established in 1978, Go to travel 
                            us has been providing high quality and high value 
                            services to millions of travelers and tourists from all
                            over the world. We are proud to bring memorable and 
                            exhilarating travel experiences to our customers and 
                            become their most trusted brand.</p>
                  </div>
               </div>
        
                      <div class="col-sm-4">
                   <div class="ftr-div ftr_left">
                    <h4>CONTACT INFO</h4>
                       <ul>
                          <li><a href="#"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Lorem ipsum #123</a></li>
                            <li><a href="#"><span><i class="fa fa-phone" aria-hidden="true"></i></span>1234567890</a></li>
                            <li><a href="#"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>abc@gmail.com</a></li>  <li><a href="#"><span><i class="fa fa-globe" aria-hidden="true"></i></span>abc.com</a></li>
                       </ul>
                  </div>
               </div>
               
                     <div class="col-sm-4">
                   <div class="ftr-div ftr_last">
                    <h4>TAGS</h4>
                       <ul>
                           <li><a href="#">Hotel</a></li>
                           <li><a href="#">Distination</a></li>
                           <li><a href="#">Mall</a></li>
                           <li><a href="#">Bars</a></li>
                           <li><a href="#">Lansscape</a></li>
                           
                           
                       </ul>
                  </div>
               </div>
           </div>
        </div>
        
        <div class="footer_outer">
           <div class="container">
               <div class="ftr_left_in">
                 <p>© COPYRIGHT THEME BY TRIP2IN</p>
               </div>
               
               <div class="ftr_right">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                   </ul>
               
               </div>
            
            
            </div>
        
        
        </div>
        
    </footer>
  
    
    
    
    
    
        
<!----script---->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
</script>


</body>
</html>    
    