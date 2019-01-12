<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--
<script src="http://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false&key=AIzaSyAviDgiUacxB-JTht3akLsAqc69g32bPV0""></script>> -->


 <script   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAviDgiUacxB-JTht3akLsAqc69g32bPV0 & libraries = places" type="text/javascript"></script>


</head>
<body>
	

<div class="conatiner">
	


	<form method="post" action="">
		

                              <div class="form-group">
                              	 <label for="name">Map</label>
                                <input type="text" class="form-control" id="map" name="map" placeholder="searchbox">

                                <div id="map-canvas"></div>
                              </div>


                             <div class="form-group">
                             	 <label for="name">lat</label>
                                <input type="text" class="form-control" id="lat" name= "lat" >
                              </div>

                       
                             <div class="form-group">
                             	 <label for="name">Lng</label>
                                <input type="text" class="form-control" id="lng" name= "lng" >
                              </div>

                             
                              <label for="name">Address</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="address">
                              </div>



                              	 <button type="submit" class="btn btn-default">Submit</button>


	</form>


	<script>
		

		var	map = new google.maps.Map(document.getElementById('map-camvas'), {
  center: {lat: -34.397, lng: 150.644},
  zoom: 8
});



	</script>





</div>










</body>

</html>