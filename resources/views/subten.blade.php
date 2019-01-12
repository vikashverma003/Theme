@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">


                       	             <h1 style="margin-left:50%">Near by Locations Files </h1>    
                       	             
                       	             <br><b><br>    	


                       <form method="post" action="/subten/m/save3" enctype="multipart/form-data">

                       	@csrf

                       		<label for="name">Name</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="dname" name="dname" placeholder="
                                name">

                              </div>

                             

                              <label for="name">Image</label>

                             <div class="form-group">
                                <input type="file" class="form-control" id="dimage" name="dimage" placeholder="view">
                              </div>            
                              
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
