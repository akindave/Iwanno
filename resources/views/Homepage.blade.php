<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Isitreal platform</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link rel="shortcut icon" href="img/favicon.png">
		@include('header.styles')
</head>
<body>

	<!-- navbar -->
	@include('header.navigationbar')
	<!-- end navbar -->

	<!-- panel control left -->
		@include('header.panelControl')
	<!-- end panel control left -->
	
	<!-- slider -->
	<div class="slider-slick app-pages">
		<div class="slider-entry">
			
			<img src="{{ asset('assets/img/slider1.jpg') }}" alt="">
			<div class="overlay"></div>
			<div class="caption">
				<div class="container">
					<h2>Validate Informations</h2>
					<p>Get read of internet false Information</p>
					<button class="button">Read More</button>
				</div>
			</div>
		</div>
		<div class="slider-entry">
			<div class="overlay"></div>
			<img src="{{ asset('assets/img/slider2.jpg') }}" alt="">
			<div class="caption">
				<div class="container">
					<h2>Check Article Url</h2>
					<p>Confirm if the article you read is real</p>
					<button class="button">Read More</button>
				</div>
			</div>
		</div>
		<div class="slider-entry">
			<div class="overlay"></div>
			<img src="{{ asset('assets/img/slider3.jpg') }}" alt="">
			<div class="caption">
				<div class="container">
					<h2>Encapsulate Texts</h2>
					<p>Make your text short and easy for people to read anywhere at anytime</p>
					<button class="button">Read More</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end slider -->

	<!-- form search -->
	<div class="form-search">
		<div class="container">
			<div class="form-search-entry">
				<input type="text" id="searchinput" style="padding:30px; border: 5px solid black;color: green;" placeholder="Enter Code..." value="">
				
				<button class="button" id="searchbtn">Search</button>
				<div class="row">
					<span id="loader" style="display: none"><img src="{{ asset('assets/img/loader2.gif') }}" width="80px" height="80px" alt=""></span>
				</div>
				<div class="row" style="display: none" id="searchresult">
					
				</div>
			</div>
		</div>
	</div>
	<!-- end form search -->

	<!-- job category -->
	<div class="job-category app-bg-dark app-section-home">
		<div class="container">
			<div class="app-title">
				<h4>Our Clients Categories</h4>
				<div class="line"></div>
			</div>
			<div class="row">
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-laptop"></i>
							<h5>Technology</h5>
						</div>
					</a>
				</div>
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-internet-explorer"></i>
							<h5>Blogers</h5>
						</div>
					</a>
				</div>
				
			</div>
			<div class="row">
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-bank"></i>
							<h5>Banking</h5>
						</div>
					</a>
				</div>
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-car"></i>
							<h5>Automotive</h5>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-bar-chart"></i>
							<h5>Marketing</h5>
						</div>
					</a>
				</div>
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-balance-scale"></i>
							<h5>Government</h5>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-life-ring"></i>
							<h5>Insurance</h5>
						</div>
					</a>
				</div>
				<div class="col s6">
					<a href="#">
						<div class="entry">
							<i class="fa fa-institution"></i>
							<h5>Institutions</h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end job category -->

	<!-- fuatured job -->
	<div class="jobs app-section-home">
		<div class="container">
			<div class="app-title">
				<h4>FEATURED JOBS</h4>
				<div class="line"></div>
			</div>
			
			<div class="row">
				<div class="col s6">
					<div class="entry">
						<img src="img/job3.jpg" alt="">
						<div class="content">
							<h5><a href="#">UI/UX Design</a></h5>
							<span>2017-06-07</span>
							<div class="long">FULL TIME</div>
							<div class="location"><i class="fa fa-map-marker"></i>London</div>
						</div>
					</div>
				</div>
				<div class="col s6">
					<div class="entry">
						<img src="img/job4.jpg" alt="">
						<div class="content">
							<h5><a href="#">Mobile Apps</a></h5>
							<span>2017-06-07</span>
							<div class="long">FULL TIME</div>
							<div class="location"><i class="fa fa-map-marker"></i>London</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end fuatured job -->
	<!-- footer -->
		@include('footer.footer')
	<!-- end footer -->
	
	<!-- script -->
		@include('footer.script')
		<script>
			//get the element of search button
			const searchBtn =  $('#searchbtn');
			const searchInput =  document.getElementById('searchinput');
			$('body').on('click','#searchbtn',function(){
				$('#searchresult').html("");
				$('#searchbtn').text("Searching...");
				$('#loader').css('display','');
				setTimeout(function(){
				$('#loader').css('display','none');
				$('#searchbtn').text("Search");
					if(searchInput.value.length <= 5){
						$('#searchresult').css('display','');
						$('#searchresult').html("<p style='color:green'>Enter a Valid format of Pin!</p>");
						setTimeout(function(){
							$('#searchresult').fadeOut("slow");
						},2000);
					}else if(searchInput.value==undefined || searchInput.value==null){
						$('#searchresult').css('display','');
						$('#searchresult').html("<p style='color:green'>Empty Value Suppplied!</p>");
						setTimeout(function(){
							$('#searchresult').fadeOut("slow");
						},2000);
					}else{
						let q = searchInput.value;
						$.ajax({
							type:"GET",
							url:"{{ url('search') }}",
							data:{
								code:q
							},
							success:function(response){
								let	html = `
								<div class="col s12">
									<div class="entry">
										<img src="{{ asset('assets/img/app2.png') }}" width="120px" height="120px" style="border-radius:50%" alt="">
										<div class="content">
											<span style="font-weight: bold;margin-top:45px;font-size:1.3em">${response.user.organization_name}<img src="{{ asset('assets/img/app.jpg') }}" width="50px" height="50px"/></span>
											<h5><a href="#"><i>Title:${response.result.post_title}</i></a></h5>
											<span>Date Created: ${response.result.created_at}</span>
										</div>
									</div>
								</div>
								`;
								$('#searchresult').html(html);
								$('#searchresult').css('display','');
							}
						});
					}
				},3000);

				
			});
		</script>
	
</body>
</html>