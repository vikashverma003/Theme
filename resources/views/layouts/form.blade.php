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

    <link rel="stylesheet" href="css/owl.carousel.css">

     <link rel="stylesheet" href="css/responsive.css">


  <!--  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />  -->


</head>
<body>
    
    @include('inc.header')
    

        <!----banner---->
    <!----banner---->

         <main>

          @yield('content')

          </main>   

    @include('inc.footer')
    


   <!-----footer----->
    <!-----footer----->  
    
    
    
    
    
<!----script---->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    navigation : true
  });
 
});</script>
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
   
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  }
                }
              })
            })
          </script>
</body>
</html>