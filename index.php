<!DOCTYPE html>
<html>
    <head>

        <?php include 'temp/head.php'; ?>

		<style>
			.banner-one {
				position: relative;
				overflow: hidden;
			}

			.banner-one_image {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-size: cover;
				background-position: center;
				z-index: 1;
			}

			.banner-one .container {
				position: relative;
				z-index: 2;
			}

			.carousel-item {
				height: 100vh;
				min-height: 500px;
			}

			.carousel-indicators [data-bs-target] {
				width: 12px;
				height: 12px;
				border-radius: 100%;
				background-color: white;
				opacity: 0.6;
			}

			.carousel-indicators .active {
				opacity: 1;
				background-color: #ffb400;
			}

			.carousel-indicators {
				bottom: 30px;
			}
		</style>
    
	</head>

    <body>

		<!-- Main Header -->
		<?php include 'temp/header.php'; ?>
		<!-- End Main Header -->

		<!-- Banner One Section with Background Image Slider -->
		<section class="banner-one">
			<div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
				
				<!-- Indicators -->
				<div class="carousel-indicators">
				<button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>

				<div class="carousel-inner">

				<!-- Slide Template (Repeat with different images/text) -->
				<div class="carousel-item active">
					<div class="banner-one_image" style="background-image: url(assets/images/background/bg-1.jpg);"></div>
					<div class="container h-100 d-flex align-items-center">
						<div class="row" style="display: contents;">
							<div class="col-12 col-md-10 col-lg-8">
								<div class="banner-one_content text-white">
									<h1 class="banner-one_title display-4 text-white">Welcome to</h1>
									<div class="banner-one_subtitle my-3">Rs Promoters</div>
									<div class="banner-one_text fs-5 mb-4 text-white">
										We are committed to redefining the construction <br class="d-none d-md-block" />
										industry with innovative solutions.
									</div>
									<div class="banner-one_button">
										<a href="https://whatsapp.com/channel/0029VbApleD89inrFcBXjN02" class="theme-btn btn-style-three">
											<span class="btn-wrap">
												<span class="text-one">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
												<span class="text-two">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item">
					<div class="banner-one_image" style="background-image: url(assets/images/background/bg-2.jpg);"></div>
					<div class="container h-100 d-flex align-items-center">
						<div class="row" style="display: contents;">
							<div class="col-12 col-md-10 col-lg-8">
								<div class="banner-one_content text-white">
									<h1 class="banner-one_title display-4 text-white">Welcome to</h1>
									<div class="banner-one_subtitle my-3">Rs Promoters</div>
									<div class="banner-one_text fs-5 mb-4 text-white">
										We are committed to redefining the construction <br class="d-none d-md-block" />
										industry with innovative solutions.
									</div>
									<div class="banner-one_button">
										<a href="https://whatsapp.com/channel/0029VbApleD89inrFcBXjN02" class="theme-btn btn-style-three">
											<span class="btn-wrap">
												<span class="text-one">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
												<span class="text-two">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item">
					<div class="banner-one_image" style="background-image: url(assets/images/background/bg-3.jpg);"></div>
					<div class="container h-100 d-flex align-items-center">
						<div class="row" style="display: contents;">
							<div class="col-12 col-md-10 col-lg-8">
								<div class="banner-one_content text-white">
									<h1 class="banner-one_title display-4 text-white">Welcome to</h1>
									<div class="banner-one_subtitle my-3">Rs Promoters</div>
									<div class="banner-one_text fs-5 mb-4 text-white">
										We are committed to redefining the construction <br class="d-none d-md-block" />
										industry with innovative solutions.
									</div>
									<div class="banner-one_button">
										<a href="https://whatsapp.com/channel/0029VbApleD89inrFcBXjN02" class="theme-btn btn-style-three">
											<span class="btn-wrap">
												<span class="text-one">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
												<span class="text-two">
													For Enquiry <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				</div>
			</div>
		</section>

		<!-- Fluid One -->
		<section class="fluid-one">
			<div class="outer-container">
				<div class="clearfix">
					<!-- Left Box -->
					<div class="left-box" style="background-image: url(assets/images/resource/fluid-2.jpg);">
						<div class="left-box_inner">
							<div class="fluid-one_image">
								<img src="assets/images/resource/fluid-2.jpg" alt="" />
							</div>
						</div>
					</div>

					<!-- Right Box -->
					<div class="right-box clearfix">
						<div class="right-box_inner">
							<!-- Sec Title -->
							<div class="sec-title title-anim">
								<div class="sec-title_title">About Our Company</div>
								<h2 class="sec-title_heading"><span>RS </span> PROMOTERS</h2>
								<div class="sec-title_text">
									We are committed to redefining the construction industry with innovative solutions, cutting-edge technology, and sustainable practices. Our team of experts ensures every project is crafted We are
									committed to redefining the construction industry with innovative solutions, cutting-edge technology, and sustainable practices. Our team of experts ensures every project is crafted - <b><span>Surendran</span> (Proprietor).<b>
								</div>
							</div>

							<!-- Button Box -->
							<div class="about-one_button">
								<a href="about.php" class="theme-btn btn-style-three">
									<span class="btn-wrap">
										<span class="text-one">
											Read More <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
										</span>
										<span class="text-two">
											Read More <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Fluid One -->

		<!-- Service Two -->
		<section class="service-two">
			<div class="auto-container">
				<div class="sec-title centered">
					<div class="sec-title_title">Our services</div>
					<h2 class="sec-title_heading title-anim">
						Promoter Service <br />
						To Our Clients
					</h2>
				</div>

				<div class="row d-flex flex-wrap clearfix">
					<!-- Service Block One -->
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one_hover-image"></div>
							<div class="service-block_one_image" style="background-image: url(assets/images/background/service-1_bg.jpg);"></div>
							<div class="service-block_one-icon">
								<img src="assets/images/icons/service-1.svg" alt="" />
							</div>
							<h4 class="service-block_one-heading"><a href="#!">Land Acquisition & Site Selection</a></h4>
							<div class="service-block_one-text">Expert guidance on legal verification. Prime locations with high growth potential. Customized options for residential, commercial, or agricultural use.</div>
							<!-- <a href="service-detail.html" class="service-block_one-more"> Read More <i class="fa-classic fa-solid fa-arrow-right fa-fw"></i> </a> -->
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one_hover-image"></div>
							<div class="service-block_one_image" style="background-image: url(assets/images/background/service-1_bg.jpg);"></div>
							<div class="service-block_one-icon">
								<img src="assets/images/icons/service-2.svg" alt="" />
							</div>
							<h4 class="service-block_one-heading"><a href="#!"> Residential & Commercial Plot Development</a></h4>
							<div class="service-block_one-text">Layouts with roads, drainage, and utilities. Legal approvals for hassle-free ownership. Premium amenities in select projects.</div>
							<!-- <a href="service-detail.html" class="service-block_one-more"> Read More <i class="fa-classic fa-solid fa-arrow-right fa-fw"></i> </a> -->
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one_hover-image"></div>
							<div class="service-block_one_image" style="background-image: url(assets/images/background/service-1_bg.jpg);"></div>
							<div class="service-block_one-icon">
								<img src="assets/images/icons/service-3.svg" alt="" />
							</div>
							<h4 class="service-block_one-heading"><a href="#!">Custom Home Construction Services</a></h4>
							<div class="service-block_one-text">Architectural design & construction as per your budget. Quality materials & trusted contractors. End-to-end project management for timely delivery.</div>
							<!-- <a href="service-detail.html" class="service-block_one-more"> Read More <i class="fa-classic fa-solid fa-arrow-right fa-fw"></i> </a> -->
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one_hover-image"></div>
							<div class="service-block_one_image" style="background-image: url(assets/images/background/service-1_bg.jpg);"></div>
							<div class="service-block_one-icon">
								<img src="assets/images/icons/service-4.svg" alt="" />
							</div>
							<h4 class="service-block_one-heading"><a href="#!"> Property Marketing & Sales Support</a></h4>
							<div class="service-block_one-text">Strategic advertising (digital & offline) for faster sales. Transparent pricing & flexible payment plans. Post-sale assistance (documentation, bank loans)</div>
							<!-- <a href="service-detail.html" class="service-block_one-more"> Read More <i class="fa-classic fa-solid fa-arrow-right fa-fw"></i> </a> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Service Two -->

		<!-- Main Footer -->
		<?php include 'temp/footer.php'; ?>
		<!-- End Main Footer -->

    </body>
</html>