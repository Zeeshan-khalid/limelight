<?php
include 'include/header.php';
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="<?php echo base_url(); ?>home" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>home/about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>home/service" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>home/career" class="nav-link">Career</a></li>
	          <li class="nav-item"><a href="<?php echo base_url(); ?>home/contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo base_url(); ?>images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Welcome to Lime Light International</span>
            <h1 class="mb-4">We Are The Best Consulting Agency</h1>
            <p class="banner"><a href="<?php echo base_url(); ?>home/contact" class="btn btn-primary px-4 py-3 mt-3">Contact us for any query</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo base_url(); ?>images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Todays Talent, Tommorow Success</span>
            <h1 class="mb-4">We Help to Grow New Comers</h1>
            <p class="banner"><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact us for any query</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url(<?php echo base_url(); ?>images/about.jpg); border"></div>
							<div class="text">
								<h3 class="text-center">Recent Oportunities</h3>
								<marquee width="60%" direction="up" height="100px" scrollamount="3">
								<p class="text-danger font-weight-bold">1) Required plumbers </p>
								<p class="text-danger font-weight-bold">2) Required Security guards </p>
								<p class="text-danger font-weight-bold">3) Required Electrition </p>
								</marquee>
								<p><a href="<?php echo base_url(); ?>home/career" class="btn btn-primary py-3 px-4">Learn More...</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4">Our Main Services</h2>
						<p>Lime light Manpower Recruitment has been actively contributing to regional and global growth through the export of highly talented and skilled manpower. Our services incorporate the most professional and stringent quality control policies updating employer of progress at every stage through:</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services  text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
									<div class="text media-body">
										<h3>Organization</h3>
										<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
									<div class="text media-body">
										<h3>Risk Analysis</h3>
										<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
									<div class="text media-body">
										<h3>Marketing Strategy</h3>
										<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
									<div class="text media-body">
										<h3>Capital Market</h3>
										<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(<?php echo base_url(); ?>images/bg_3.jpg) center no-repeat;">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="105">0</strong>
		                <span>Projects Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="809">0</strong>
		                <span>Satisfied Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="335">0</strong>
		                <span>Awwards Received</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
	         	</div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Best Features</h2>
            <p>We supply the workers according to the requirements of our clients, follow all their instructions and comply with all their requirements at the time of recruitment.</p>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
							<div class="text media-body">
								<h3>MEDICAL</h3>
								<p>We arrange the preliminary medical check ups for all selected workers for whom our foreign clients intended to apply the entry visa</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
							<div class="text media-body">
								<h3>LABOUR LAW</h3>
								<p>The worker supplied by our agency will be governed by local labor laws of the country of their deployment.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
							<div class="text media-body">
								<h3>SALARY STANDARD</h3>
								<p>We recruit manpower based upon the category wise prescribed salary structure of our prospective clients and according to law of concerned countries.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
							<div class="text media-body">
								<h3>WORKER IDENTITY</h3>
								<p>We dispatch selected workers to our honourable employers wearing Lime Light International printed cap.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
							<div class="text media-body">
								<h3>DEMAND LETTER</h3>
								<p>We request our clients to issue requirements in the name of our associate agencies mention in the documents.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
							<div class="text media-body">
								<h3>POWER OF ATTORNEY</h3>
								<p>We request our clients to issue us the power of attornies along with demand letter authorizing us to recruit manpower on their behalf in Pakistan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(<?php echo base_url(); ?>images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
          </div>
        </div>	
    	</div>
    </section>



	<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Clients</h2>
            <p>We helps place the right people in the right roles in the most cost-efficient manner. You can outsource your recruitment needs to us for far less than an in-house recruiter would cost</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex"> 
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo1.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo2.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo3.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo14.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo5.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo6.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo7.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo8.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo9.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo10.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo15.jpg)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo12.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo16.png)">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>images/companylogo17.png)">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
      </div>
    </section>
	
		
<?php include 'include/footer.php'; ?>