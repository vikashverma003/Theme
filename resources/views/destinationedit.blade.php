@extends('layouts.form')

@section('content')


<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">


                       	             <h1 style="margin-left:50%">Destination form </h1>    
                       	             
                       	             <br><b><br><b>     	


                       <form method="post" action="store">

                       	@csrf

                       		<label for="name">Destination_Name</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="des" name="des" placeholder="destination">
                              </div>

                              <label for="name">Discryption</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="dis" name="dis" placeholder="discryption">
                              </div>

                              <!--<label for="name">Address</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address"placeholder="address">
                              </div>
 							-->


 							<select name="address">
 								<option>erew</option>
 								<option>erew</option>

										


 							</select>
                              <label for="name">Latitude</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="lat" name="lat" placeholder="latitude">
                              </div>

                              <label for="name">Longitude</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="long" name= "long" placeholder="longitude">
                              </div>

                              <label for="name">Title</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="title">
                              </div>

                              <label for="name">Price</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="price" name="price" placeholder="price">
                              </div>

                              <label for="name">City</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="city">
                              </div>

                              <label for="name">State</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="state" name="state" placeholder="state">
                              </div>

                              <label for="name">Country</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="country" name="country" placeholder="country">
                              </div>
                         
                              <button type="submit" class="btn btn-default">Submit</button>
                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
