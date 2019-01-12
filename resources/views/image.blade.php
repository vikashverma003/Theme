@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">


                       	             <h1 style="margin-left:50%">Hotel Files </h1>    
                       	             
                       	             <br><b><br>    	


                       <form method="post" action="/store3" enctype="multipart/form-data">

                       	@csrf

                       		<label for="name">Image</label>
                             <div class="form-group">
                                <input type="file" class="form-control" id="image" name="image" placeholder="
                                image">

                              </div>

                              <label for="name">Video</label>
                             <div class="form-group">
                                <input type="file" class="form-control" id="video" name="video" placeholder="

                                video">

                              </div>

                              <label for="name">view</label>

                             <div class="form-group">
                                <input type="file" class="form-control" id="view" name="view" placeholder="view">
                              </div>            
                              
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
