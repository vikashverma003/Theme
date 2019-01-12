@extends('layouts.form')

@section('content')
<div class="banner">
		<div class="bg_video">
			<video autoplay muted loop id="myVideo">
	<source src="images/2.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">
<h1>BEST AVAILABLE CHOICE IN TOWN</h1>
	 <form>
<div class="form-group banner_frm">
	<label for="usr">SEARCH</label>
	<input type="text" class="form-control" id="usr">
		 <button class="small_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
		
		</form>
</div>  
			
			
			</div> 
		
		
		</div>
		<!----banner---->
		
		<!----choose_div---->
		<div class="choose_div">
			 <div class="container">
					<div class="main_heading">
						<h2> <span class="span_1"></span>WHY CHOOSE US?  <span class="span_2"></span></h2>
					 </div>
					 <div class="icn_div">
					 
					 <div class="row">
						 <div class="col-sm-4">
								<div class="box_inner">
										<div class="box_div">
											 <div class="box_circle"> 
													 <img src="images/orange_img1.png" class="orng">
													 <img src="images/blue_img1.png" class="blue">
												</div>
												<h4>Beautiful Places</h4>
										</div>
								 </div> 
							</div>
														<div class="col-sm-4">
								<div class="box_inner">
										<div class="box_div">
											 <div class="box_circle"> 
													 <img src="images/orange_img2.png" class="orng">
													 <img src="images/blue_img2.png" class="blue">
												</div>
												<h4>Diverse Destinations</h4>
										</div>
								 </div> 
							</div>
														<div class="col-sm-4">
								<div class="box_inner">
										<div class="box_div">
											 <div class="box_circle"> 
													 <img src="images/orange_img3.png" class="orng">
													 <img src="images/blue_img3.png" class="blue">
												</div>
												<h4>Passionate Travel</h4>
										</div>
								 </div> 
							</div>
							 </div>
					 
					 </div>
				</div>
		</div>
		<!----choose_div---->
		
		
		
		
		<!-----home_slider---->
		<div class="slider_div">
									<div class="main_heading">
						<h2> <span class="span_3"></span>DESTINATION<span class="span_4"></span></h2>
					 </div>



					<div class="owl-carousel owl-theme">

					@foreach($des as $dess)

						<div class="item">

							
								<div class="overlay">


									<div class="over_div">

					

											 <a href="/{{$dess->id}}">
										<h3>{{$dess->name}}</h3>
			
										 <p>reprehenderit nemo molestias....</p>
											 </a> 
										</div>


						


							<!--<img src="images/slider_img1.jpg"> -->
	
								</div>


<img src="{{asset('/imgs/') }}/{{$dess->destination}}" style="width:440px; height:440px;">
						

						</div>


							@endforeach
						<!--<div class="item">
									 <div class="overlay">
											<div class="over_div">
															<a href="/tour1">
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Himanchal Pradesh</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
													</a>
										</div>
								</div>
							<img src="images/slider_img2.jpg">
						</div>
						<div class="item">
									 <div class="overlay">
											<div class="over_div">
															<a href="/tour2">
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Uttarakhand</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
													</a>
										</div>
								</div>
						 <img src="images/slider_img3.jpg">
						</div>
												<div class="item">
								<div class="overlay">
									 <div class="over_div">
													 <a href="/tour4">
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Utty</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
											 </a>
										</div>
								</div>
							<img src="images/slider_img1.jpg">
						</div>
						<div class="item">
									 <div class="overlay">
											<div class="over_div">
															<a href="/tour">
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Ladak</h5>
											 <p>ipsum reprehenderit 
													 nemo molestias....</p></a>
										</div>
								</div>
							<img src="images/slider_img2.jpg">
						</div>
						<div class="item">
									 <div class="overlay">
											<div class="over_div">
															<a href="/tour">                        
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Santiago</h5>
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
											 <h5>Fransis</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
											 </a></div>
								</div>
							<img src="images/slider_img1.jpg">
						</div>
						<div class="item">
									 <div class="overlay">
											<div class="over_div">
														<a href="#">
										<i class="fa fa-search" aria-hidden="true"></i>
											 <h5>Sonerita</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
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
											 <h5>Uganda</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
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
											 <h5>Serby</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
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
											 <h5>Uttarakhand</h5>
											 <p>ipsum reprehenderit 
nemo molestias....</p>
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
											 <p>ipsum reprehenderit 
nemo molestias....</p>
													</a>
										</div>
								</div>
						 <img src="images/slider_img3.jpg">
						</div> -->
					</div>  
		
		
		</div>


@endsection
