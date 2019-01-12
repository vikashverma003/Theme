@extends('layouts.form')

@section('content')

   <div class="filter_div">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <div class="hdr_tab">
                         
<div id="exTab1">   
<ul  class="nav nav-pills">
            <li class="active">
        <a  href="#1a" data-toggle="tab">Photo</a>
            </li>
            <li><a href="#2a" data-toggle="tab">Video</a>
            </li>
            <li><a href="#3a" data-toggle="tab">Hidden Destinations</a>
            </li>
        <li><a href="#4a" data-toggle="tab">360<sup>0</sup>View</a>
            </li>

        </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
         
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/left_img.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images/left_img.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="images/left_img.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
                
                
                <div class="tab-pane" id="2a">
                  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <video autoplay muted loop id="myVideo">
  <source src="images/2.mp4" type="video/mp4">
</video>
    </div>

    <div class="item">
      <video autoplay muted loop id="myVideo">
  <source src="images/2.mp4" type="video/mp4">
</video>
    </div>

    <div class="item">
     <video autoplay muted loop id="myVideo">
  <source src="images/2.mp4" type="video/mp4">
</video>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
                
                
                
        <div class="tab-pane" id="3a">
                       <div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
   <img src="images/filter_hidden.jpg">
    </div>

    <div class="item">
  <img src="images/filter_hidden2.jpg">
    </div>

    <div class="item">
<img src="images/filter_hidden.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
                
                
                
                
          <div class="tab-pane" id="4a">
        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel3" data-slide-to="1"></li>
    <li data-target="#myCarousel3" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
   <iframe src="https://www.google.com/maps/embed?pb=!4v1541762689114!6m8!1m7!1sCAoSLEFGMVFpcE05V0NmRFZXa1IyUDZZcENLU2JOd2p2MXo4bkxVRHhnY0FMZGNB!2m2!1d37.7247541!2d-119.5333877!3f117.0769505045107!4f-34.6775645838761!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="item">
 <iframe src="https://www.google.com/maps/embed?pb=!4v1541762689114!6m8!1m7!1sCAoSLEFGMVFpcE05V0NmRFZXa1IyUDZZcENLU2JOd2p2MXo4bkxVRHhnY0FMZGNB!2m2!1d37.7247541!2d-119.5333877!3f117.0769505045107!4f-34.6775645838761!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="item">
<iframe src="https://www.google.com/maps/embed?pb=!4v1541762689114!6m8!1m7!1sCAoSLEFGMVFpcE05V0NmRFZXa1IyUDZZcENLU2JOd2p2MXo4bkxVRHhnY0FMZGNB!2m2!1d37.7247541!2d-119.5333877!3f117.0769505045107!4f-34.6775645838761!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel3" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
            </div>
  </div>


                   
                   
                   </div>
                   
                
                
                </div>
            <div class="col-sm-4">
            
                        
                        <!-- heading -->
                        <h3 class="heading">Related  Videos</h3>                        
                        <ul class="right-information row">
                        <!-- item-video-1 -->
                        <li class="left-image"><img src="images/left_img.jpg" class="minimal_image"></li>
                        <li class="right_content">
                            <p class="description">Lorem Ipsum is simply the dummy the printing...<b></b></p>
                            <p class="destination_category"><small>Bars &  Restaurents</small></p>
                        </li>
                        <!-- item-video-2 -->
                        <div class=" norm clearfix"></div>
                        <li class="left-image"><img src="images/left_img.jpg" class="minimal_image"></li>
                        <li class="right_content">
                            <p class="description">Lorem Ipsum is simply the dummy the printing...<b></b></p>
                            <p class="destination_category"><small>Bars &  Restaurents</small></p>
                        </li>
                        <!-- item-video-3 -->
                        <div class="norm clearfix"></div>
                        <li class="left-image"><img src="images/left_img.jpg" class="minimal_image"></li>
                        <li class="right_content">
                            <p class="description">Lorem Ipsum is simply the dummy the printing...<b></b></p>
                            <p class="destination_category"><small>Bars &  Restaurents</small></p>
                        </li>
                        <!-- item-video-4 -->
                        <div class="norm clearfix"></div>
                        <li class="left-image"><img src="images/left_img.jpg" class="minimal_image"></li>
                        <li class="right_content">
                            <p class="description">Lorem Ipsum is simply the dummy the printing...<b></b></p>
                            <p class="destination_category"><small>Bars &  Restaurents</small></p>
                        </li>
                        
                        </ul>
                    
             </div>
          </div>
    </div>
    </div>
    
    
    <!-----filter_div---->
    
    
    
          
          <!-------searchbar---->
          <div class="search_bar">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="srch_bar_right clearfix">
                          <h5>Search Tour</h5>
                       <form action="/action_page.php" class="filter_frm">
                        <input type="text" class="form-control" placeholder="Destination" >
                        <input type="text" class="form-control small_width" placeholder="Check In" id="J-demo-01">
                        <input type="text" class="form-control  small_width" placeholder="Check out" id="J-demo-02">
                           
                           <select class="select_guest">
                              <option>Guest</option>
                              <option>  1</option>
                              <option>  2</option>
                              <option>  3</option>
                              <option>  4</option>
                           </select>
                    </form>
    
                    <div data-role="page">

                      <div data-role="main" class="ui-content">
                        <form method="post" action="/action_page_post.php">
                          <div data-role="rangeslider">
                            <label for="price-min">Price:</label>
                            <input type="range" class="K_in" name="price-min" id="price-min" value="0" min="0" max="1000">
                            <input type="range" name="price-max" id="price-max" value="1000" min="0" max="1000">
                            </div>
                          </form>
                      </div>
                    </div> 
                        
                        </div>
                      <div class="srch_bar_right clearfix">
                          <h5>Facility</h5>
                           <div class="check_box">
                            <label class="chk_in">Swimming Pool
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Gym/Fitness
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Car Park
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Pet-friendly
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                               <label class="chk_in">Airport Transfer
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                               <label class="chk_in">Free Wifi
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                                 <label class="chk_in">Spa/Sauna
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>                     
                    </div>
                        
                        <div class="srch_bar_right clearfix">
                          <h5>Desinations</h5>
                           <div class="check_box">
                            <label class="chk_in">Villa
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Honeymoon
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Hotel
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                            <label class="chk_in">Homestay
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                               <label class="chk_in">Camping
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                               <label class="chk_in">River Crossing
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>                     
                    </div>
                  </div>
                      
                      
                      <div class="col-sm-8">
                        <div class="filter_destination">
                           <div id="exTab1">    
<ul  class="nav nav-pills scd_nav-pill">
            <li class="active">
        <a  href="#5a" data-toggle="tab">ALL</a>
            </li>
            <li><a href="#6a" data-toggle="tab">G.H</a>
            </li>
            <li><a href="#7a" data-toggle="tab">VILLA</a>
            </li>
             <li><a href="#8a" data-toggle="tab">P.G</a>
            </li>
            <li><a href="#9a" data-toggle="tab">HOTEL</a>
            </li>
             <li class="max-width"><a href="#10a" data-toggle="tab">HONEYMOON</a>
            </li>
             <li class="max-width"><a href="#11a" data-toggle="tab">BAG PACKERS</a>
            </li>
           <li class="max-width"><a href="#12a" data-toggle="tab">HOMESTAY</a>
            </li>

        </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="5a"> 
                 <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/h1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/m2.jpg"><img src="images/v3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/p4.jpg"><img src="images/b5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                </div>
                
                
                  <div class="tab-pane" id="6a"> 
                  <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/g1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/g2.jpg"><img src="images/g3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/g4.jpg"><img src="images/g5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                  <div class="tab-pane" id="7a"> 
                        <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/v1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/v2.jpg"><img src="images/v3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/v4.jpg"><img src="images/v5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                  <div class="tab-pane" id="8a"> 
                <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/p1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/p2.jpg"><img src="images/p3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/p4.jpg"><img src="images/p5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                
                
                
                <div class="tab-pane" id="9a"> 
                <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/h1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/h2.jpg"><img src="images/h3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/h4.jpg"><img src="images/h5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                
                
                
                
                
                <div class="tab-pane" id="10a"> 
                <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/m1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/m2.jpg"><img src="images/m3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/m4.jpg"><img src="images/m5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near1.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                
                
                
                <div class="tab-pane" id="11a"> 
                <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/b1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/b2.jpg"><img src="images/b3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/b4.jpg"><img src="images/b5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                
                
                
                <div class="tab-pane" id="12a"> 
                <div class="destination_select">
                     <ul>
                        <li class="img1"><a href="#"><img src="images/p1.jpg"></a></li>
                        <li class="img2"><a href="#"><img src="images/p2.jpg"><img src="images/p3.jpg"></a></li>
                     
                        <li class="img4"><a href="#"><img src="images/p4.jpg"><img src="images/p5.jpg"></a></li>
                     
                     </ul>
                  </div>
                  
                     <div class="neadesti">
                  <h2> <span class="span_1 span_5"></span>NEARBY DESTINATION<span class="span_2 span_6"></span></h2>
                       
                    <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                         
                                <div class="near_desti">
                      <div class="near_img">
                         <img src="images/near.jpg">  
                       </div>   
                         
                        <div class="near-txt">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply the dummy
                            the printing and the text is very Lorem 
                            ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed id porta elit. 
                            Suspendisse venenatis tellus eli</p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </div>
                         
                     </div>
                  
                                <div class="pagination">
                      <a href="#" class="inner-paginate">Previous</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#" class="inner-paginate">Next</a>
                    </div>
                     </div>
                  
                  
                </div>
                
                
                
                
                               </div>
                               
                               
                            </div>
                          
                          
                          
                          
                          </div>
                      
                      
                      
                      
                      </div>
                      
                      
              </div>
          </div>
    </div>
   


@endsection
