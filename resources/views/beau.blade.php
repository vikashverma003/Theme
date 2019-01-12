@extends('layouts.form')

@section('content')

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner beautiful">
    <div class="item active">
      <img src="images/beautiful2.jpg" alt="Los Angeles" style="width:100%">
    </div>

    <div class="item">
      <img src="images/beautiful1.jpg" alt="Chicago" style="width:100%">
    </div>

    <div class="item">
      <img src="images/beautiful.jpg" alt="New York" style="width:100%">
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
  
 <!---part-scd---->
    
	<div class="grid_div"> 
		<div class="container">
            <div class="row">			
               	<div class="col-sm-6">
                    <div class="side_img">
							<img src="images/beautiful-in.jpg">
                    </div>
				</div>
			 	<div class="col-sm-6 ">
                    <div class="side_div">
							<div class="new_heading">
								<h2> <span class="span_main_1"></span>Lorem Ipsum<span class="span_main_2"></span></h2>
							</div>
                            <p class="para_left">
							Lorem ipsum dolor sit amet, consectetur adipiscing 
							elit. Pellentesque consequat mi auctor ante dictum,
							in egestas libero pellentesque. Quisque a faucibus
							sapien. Suspendisse faucibus, sapien sed commodo 
							pulvinar, orci dui convallis orci, id elementum erat 
                            enim eget sem</p>
                    </div>
                
				</div>
				<div class="1"></div>
			</div>
            
        </div>
    </div>
     <!---part-scd---->
    
    <div class="slider_div">
		<div class="container-fluid">
			<div class="main_heading">
				<h2> <span class="span_3"></span>DESTINATION<span class="span_4"></span></h2>
			</div>
			  <div class="owl-carousel owl-theme">
				<div class="item">
					<div class="overlay">
					   <div class="over_div">
						   <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>Paris</h5>
						   <p>ipsum reprehenderit nemo molestias....</p>
						   </a>
						</div>
					</div>
				  <img src="images/slider_img1.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								  <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>London</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				  <img src="images/slider_img2.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								  <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>USA</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				 <img src="images/slider_img3.jpg">
				</div>
							<div class="item">
					<div class="overlay">
					   <div class="over_div">
							   <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>Paris</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
						   </a>
						</div>
					</div>
				  <img src="images/slider_img1.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								  <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>London</h5>
						   <p>ipsum reprehenderit 
							   nemo molestias....</p></a>
						</div>
					</div>
				  <img src="images/slider_img2.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								  <a href="#">                        
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>USA</h5>
						   <p>ipsum reprehenderit  nemo molestias....</p>
							  </a>
						</div>
					</div>
				 <img src="images/slider_img3.jpg">
				</div>
							<div class="item">
					<div class="overlay">
					   <div class="over_div">
							 <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>Paris</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
						   </a></div>
					</div>
				  <img src="images/slider_img1.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								<a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>London</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				  <img src="images/slider_img2.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								<a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>USA</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				 <img src="images/slider_img3.jpg">
				</div>
					 <div class="item">
					<div class="overlay">
					   <div class="over_div">
							 <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>Paris</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
						   </a>
						</div>
					</div>
				  <img src="images/slider_img1.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								<a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>London</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				  <img src="images/slider_img2.jpg">
				</div>
				<div class="item">
					   <div class="overlay">
						  <div class="over_div">
								<a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>USA</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				 <img src="images/slider_img3.jpg">
				</div>
			  </div>    
		</div>
		    <!-----container-fluid end---->
    </div>
    
    <!--filter---->
              
          <!-------searchbar---->
          <div class="search_bar bg_blue">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="srch_bar_right clearfix">
                          <h5>Search Tour</h5>
                       <form action="/action_page.php" class="filter_frm">
                        <input type="text" class="form-control" placeholder="Destination" >
                        <input type="text" class="form-control  small_width"  id="J-demo-01" placeholder="Check In">
                        <input type="text" class="form-control  small_width"  id="J-demo-02"  placeholder="Check out">
                           
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
                         <img src="images/beautiful-in.jpg">  
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
                         <img src="images/beautiful-in1.jpg">  
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
                         <img src="images/beautiful-in2.jpg">  
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
                         <img src="images/beautiful-in4.jpg">  
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
                      
                   
				<div class="pull-right">
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
    
        <div class="circular_section1">
		  <div class="container">
			<div class="row">
				
					<div class="col-sm-6">
						<div class="something-semantic2">
							<div class="something-else-semantic2">
								<h1>Lorem ipsum dolor sit amet consectetur</h1>
							</div>
						</div>
						</div>
                	<div class="col-sm-6">
						<div id="map-canvas" class="circle-text">
							<video autoplay muted loop id="myVideo1">
                                              <source src="images/2.mp4" type="video/mp4">
                                            </video>
						</div>
					</div>
					</div>
			</div>
		</div>
	
    @endsection

  