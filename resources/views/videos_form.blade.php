@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">


                       	             <h1 style="margin-left:50%">Destination Files </h1>    
                       	             
                       	             <br><b><br><b>     	


                       <form method="post" action="" enctype="multipart/form-data">

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

                              <label for="name">three_sixtyview</label>

                             <div class="form-group">
                                <input type="file" class="form-control" id="image1" name="image1" placeholder="image">
                              </div>            
                              
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
