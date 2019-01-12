@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">

                       	             <h1 style="margin-left:50%">Sub destination files Files </h1>    
                       	             
                       	             <br><b><br>    	

                       <form method="post" action="/subdes/save1" enctype="multipart/form-data">

                       	@csrf

                       		<label for="name">Subname</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="subname" name="subname" placeholder="
                                image">

                              </div>

                              <label for="name">subimage</label>
                             <div class="form-group">
                                <input type="file" class="form-control" id="subimage" name="subimage" placeholder="

                                video">

                              </div>

                                      
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
