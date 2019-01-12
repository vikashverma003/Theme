@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                       	                       <div class="col-sm-6">


                       	             <h1 style="margin-left:50%">Hotel Data </h1>    
                       	             
                       	             <br><b><br><b>     	


                       <form class="contact-form" method="post" action="/store2">

                       	@csrf

                       		<label for="name">owner</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="owner" name="owner" placeholder="

                                owner">

                              </div>

                              <label for="name">location</label>
                             <div class="form-group">
                                <input type="text" class="form-control" id="location" name="location" placeholder="

                                location">

                              </div>

                              <label for="name">Name</label>

                             <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                              </div>       

                              
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
