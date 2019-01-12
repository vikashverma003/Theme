@extends('layouts.form')

@section('content')

<div class="conatiner">
                       <div class="col-md-12">

                                               <div class="col-sm-6">


                                     <h1 style="margin-left:50%">Hotel Files </h1>    
                                     
                                     <br><b><br>      


                       <form method="post" action="/des4" enctype="multipart/form-data">

                        @csrf

                          <label for="name"></label>

                             <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="
                                name">

                              </div>

                              <label for="name">Des</label>
                             <div class="form-group">
                                <input type="file" class="form-control" id="image" name="image" placeholder="

                                video">

                              </div>

                              
                              <button type="submit" class="btn btn-default">Submit</button>

                       </form>


                   </div>
                </div>
            
            
            </div>
        
        
        
        </div>
    
    
    
    

@endsection
