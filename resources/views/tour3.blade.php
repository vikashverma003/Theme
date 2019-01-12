@extends('layouts.form')

@section('content')


  <!-----main_div---->
	<div class="main_div"> 
            <div class="row">
               	<div class="col-sm-12 main-section">
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!4v1541827602396!6m8!1m7!1sCAoSLEFGMVFpcE5QUTg4X1lXVC1kbGtmdVZUQnpzU1lSZUNCd2tjeUk2QVRiZnF5!2m2!1d40.7525622!2d-73.9931179!3f251.62602693056294!4f-6.717542851739168!5f0.7820865974627469" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe> -->


						<img src="/imgs/uu_1544707447_jpg" style="width:1900px; height:400px; ">
				</div>
			 	<!-- COL-SM-12 END -->
			</div>
	</div>
    
    <div class="clearfix"></div>
     <!-----main_div---->
    
        <!-----main_div---->
	<div class="grid_div"> 
		<div class="container">
            <div class="row">			
               	<div class="col-sm-6">
                    <div class="side_img">
                    	
							<img src="imgs/uu2_1544707447_jpg"> 


                    </div>
				</div>
			 	<div class="col-sm-6 ">
                    <div class="side_div">
							<div class="new_heading">
								<h2> <span class="span_main_1"></span>Utarasar<span class="span_main_2"></span></h2>
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
			 	<!-- ROW 1 END -->
				
            
            <div class="scd_img">
			<div class="row">			
	                  
			 	<div class="col-sm-6 ">
                    <div class="side_div paddinG-side">
							<div class="new_heading">
								<h2> <span class="span_main_1"></span>Kataraa<span class="span_main_2 span_main_4"></span></h2>
							</div>
                            <p class="para_left para_right">
							Lorem ipsum dolor sit amet, consectetur adipiscing 
							elit. Pellentesque consequat mi auctor ante dictum,
							in egestas libero pellentesque. Quisque a faucibus
							sapien. Suspendisse faucibus, sapien sed commodo 
							pulvinar, orci dui convallis orci, id elementum erat 
                            enim eget sem</p>
                    </div>
				</div>
                
                   	<div class="col-sm-6">
                    <div class="side_img">
							<img src="imgs/uu2_1544707447_jpg" class="img-responsive grid_image">
                    </div>
				</div>
			
				
			</div>
            </div>
				<!-- ROW 2 END -->
		</div>
	</div>
    
    <div class="clearfix"></div>
	
	
	<div class="circular_section">
		<div class="container">
			<div class="row">
					<div class="col-sm-6">
						<div id="map-canvas" class="circle-text">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109782.69919865378!2d76.62733955946563!3d30.698452819344894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee906da6f81f%3A0x512998f16ce508d8!2sSahibzada+Ajit+Singh+Nagar%2C+Punjab!5e0!3m2!1sen!2sin!4v1541833647012" width="100%"  frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="something-semantic2">
							<div class="something-else-semantic2">
								<h1>Lorem ipsum dolor sit amet consectetur</h1>
							</div>
						</div>
						</div>
					</div>
			</div>
		</div>
	

     <!-----Pagination---->
    <div class="pagination_div">
		<div class="container">
			<div class="img_headr">
				<h2> <span class="span_main_3"></span>Hotels<span class="span_main_4"></span></h2>
			</div>
			<div class="row">
                <div class="main_desti_img clearfix">


                	@foreach($image as $images)
                	

                	

				<div class="col-sm-3"><img  src="{{ URL::asset('public/imgs'.$images->image) }}"class="img-responsive paginaton"></div>

				endforeach()
				<!--<div class="col-sm-3"><img src="imgs/otty1_1544772514_jpg" class="img-responsive paginaton"></div>
					"imgs/otty_1544772514_jpg"
				<div class="col-sm-3"><img src="imgs/otty3_1544772514_jpg" class="img-responsive paginaton"></div>
                <div class="col-sm-3"><img src="imgs/otty4_1544772538_jpg" class="img-responsive paginaton"></div>
                </div> -->         
			</div>
		<!-- 	<div class="row">
                  <div class="main_desti_img clearfix">
				<div class="col-sm-3"><img src="images/main_img1.jpg" class="img-responsive paginaton"></div>
				<div class="col-sm-3"><img src="images/main_img2.jpg" class="img-responsive paginaton"></div>
				<div class="col-sm-3"><img src="images/main_img3.jpg" class="img-responsive paginaton"></div>
				<div class="col-sm-3"><img src="images/main_img4.jpg" class="img-responsive paginaton"></div>
                </div>
			</div> -->
			
			<div class="row">
				<div class="col-sm-6">&nbsp;</div>
				<div class="col-sm-6 pull-right">
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
		    <!-----container-fluid end---->

    
    <!-----pagination---->
    
	
	
    
	
    <!-----home_slider---->
    <div class="slider_div">
		<div class="container-fluid">
			<div class="main_heading">
				<h2> <span class="span_3"></span>DESTINATION<span class="span_4"></span></h2>
			</div>
			  <!-- <div class="owl-carousel owl-theme">
				<div class="item">
					<div class="overlay">
					   <div class="over_div">
						   <a href="#">
						<i class="fa fa-search" aria-hidden="true"></i>
						   <h5>Rajasthan</h5>
						   <p>Rajas reprehenderit nemo molestias....</p>
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
						   <h5>Himanchal Pradesh </h5>
						   <p>Himanchal reprehenderit 	nemo molestias....</p>
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
						   <h5>Uttarakhand </h5>
						   <p>uttara reprehenderit 	nemo molestias....</p>
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
						   <h5>Kerla</h5>
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
						   <h5>Jharkhand</h5>
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
						   <h5>Bihar</h5>
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
						   <h5>Utty</h5>
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
						   <h5>Santiago</h5>
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
						   <h5>Fransis</h5>
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
						   <h5>Leo</h5>
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
						   <h5>Ladaak</h5>
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
						   <h5>Rajasthan</h5>
						   <p>ipsum reprehenderit 	nemo molestias....</p>
							  </a>
						</div>
					</div>
				 <img src="images/slider_img3.jpg">
				</div>
			  </div>    
		</div> -->
		    <!-----container-fluid end---->
    </div>
  

@endsection
