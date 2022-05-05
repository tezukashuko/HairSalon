<?php
session_start();

include __DIR__ . "/included/header.php" ?>

<section class="hero-wrap js-fullheight" id="index" style="background-image: url(images/bg-2.jpg);   background-size: cover;" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<input type="hidden" value="<?php echo isset($_SESSION['username_barbershop_Xw211qAAsq4']) ? 1 : 0; ?>">

	<div class="container">
		<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
			<div class="col-lg-12 ftco-animate d-flex align-items-center">
				<div class="text text-center">
					<div class="mx-auto mb-3" style="
						height: 15rem;
						max-height: 15rem;
						width: fit-content;
					"> <img src="logo.png" class="m-auto w-100 h-100" alt=""></div>
					<h1 class="mb-4">We are professional care<br>for your hair</h1>
					<p><a href="#booking" class="btn btn-primary btn-outline-primary px-4 py-2 font-weight-bold">Book now</a></p>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-md text-center d-flex align-items-stretch">
				<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/formen.jpg);">
					<div class="text">
						<h3>For Men</h3>
						<p><a href="#" class="btn-custom">See service <span class="ion-ios-arrow-round-forward"></span></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-items-stretch">
				<div class="text-about py-5 px-4">
					<h1 class="logo">
						<a href="#"><img src="logo.png" style="width: 90%;" alt=""></a>
					</h1>
					<h2><strong>Est. 2020</strong></h2>
					<p class="text-justify"> <strong>The Shear Brilliance</strong> is a popular salon in <strong>Winnipeg Manitoba</strong>, operating by <strong>Vietnamese</strong>. From haircut, styling to color and other hair treatments, and spa services, the salon offers numerous services for its clients. We offer high-quality hair services to make your day!
					</p>
					<p class="mt-3"><a href="#service" class="btn btn-primary btn-outline-primary">Read more</a></p>
				</div>
			</div>
			<div class="col-md text-center d-flex align-items-stretch">
				<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/forwomen.jpg);">
					<div class="text">
						<h3>For Women</h3>
						<p><a href="#" class="btn-custom">See service <span class="ion-ios-arrow-round-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="services-section ftco-section" id="service">
	<div class="container">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<span class="subheading">Services</span>
				<h2 class="mb-4">Services Menu</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<span class="my-1">
			<div class="text-center ftco-animate">
				<p class="h4 font-weight-bold"><ins>Man Services</i></p>
			</div>
			<div class="row no-gutters d-flex">
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img src="images/services/haircut-man1.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Haircut &amp; Styling</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img src="images/services/dyeing-man.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Hair Dyeing</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img src="images/services/straightener-man.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Hair Straightening</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
			</div>
		</span>
		<span class="my-1">
			<div class="text-center ftco-animate">
				<p class="h4 font-weight-bold"><ins>Woman Services</i></p>
			</div>
			<div class="row no-gutters d-flex">
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img src="images/services/haircut-woman.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Haircut &amp; Styling</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img style="margin-left: 10px;" src="images/services/dyeing-woman.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Hair Dyeing</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="icon my-1"><img src="images/services/curl-woman.svg" alt=""></div>
						<div class="media-body">
							<h3 class="heading mb-3">Hair Curling</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
				</div>
			</div>
		</span>
	</div>
</section>

<section class="ftco-section ftco-booking " id="booking">
	<div class="container ftco-relative">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<span class="subheading">Booking</span>
				<h2 class="mb-4">Make an Appointment</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<h3 class="vr">Call Us: 012-3456-7890</h3>
		<div class="row justify-content-center">
			<div class="col-md-10 ftco-animate">
				<form action="#" class="appointment-form">
					<div id="smartwizard" class="shadow rounded">

						<ul class="nav rounded-lg rounded-top ">
							<li>
								<a class="nav-link" href="#step-1">
									Information
								</a>
							</li>
							<li>
								<a class="nav-link" href="#step-2">
									Services
								</a>
							</li>
							<li>
								<a class="nav-link" href="#step-3">
									DateTime
								</a>
							</li>


						</ul>

						<div class="tab-content">
							<div id="step-1" class="tab-pane" role="tabpanel">
								<div class="row mt-3 mx-3">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="email" class="form-control" id="appointment_email" placeholder="Email">
											<!-- <small id="emailHelp" class="form-text text-muted ml-2">Email first if you have already booked before</small> -->
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="phone" class="form-control" id="appointment_phone" placeholder="Phone">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="name" class="form-control" id="appointment_name" placeholder="Name">
										</div>
									</div>
								</div>
							</div>
							<div id="step-2" class="tab-pane" role="tabpanel">
								<?php
								$sql = "Select * from services";
								$result = $conn->query($sql);
								$rows = $result->fetch_all(MYSQLI_ASSOC);
								foreach ($rows as $row)
								{
									echo "<div class='itemListElement text-dark'>";
									echo "<div class = 'item_details d-flex justify-content-between'>";
									echo "<div>";
									echo $row['service_name'];
									echo "</div>";
									echo "<div class = 'item_select_part d-flex'>";
									echo "<span class = 'service_duration_field mx-3'>";
									echo $row['service_duration'] . " min";
									echo "</span>";
								?>
									<div class="select_item_bttn">
										<div class="btn-group-toggle" data-toggle="buttons">
											<label class="service_label item_label btn btn-secondary">
												<input type="checkbox" name="selected_services" value="<?php echo $row['service_id'] ?>" autocomplete="off">Select
											</label>
										</div>
									</div>
								<?php
									echo "</div>";
									echo "</div>";
									echo "</div>";
								}
								?>

							</div>
							<div id="step-3" class="tab-pane" role="tabpanel">
								<div class="px-3">
									<p class="text-dark mx-2 my-0 mt-2" style="font-weight: 500;">Artist</p>
									<div class="form-group m-0">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="artist" id="artist" class="form-control">
											</select>
										</div>
									</div>
								</div>

								<div class="d-flex flex-wrap">
									<div class="col-12 col-md-6">
										<p class="text-dark mx-2 my-0 mt-2" style="font-weight: 500;">Date</p>
										<div class="form-group m-0">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="date" id="bookingdate" class="form-control">
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<p class="text-dark mx-2 my-0 mt-2" style="font-weight: 500;">Time</p>
										<div class="form-group m-0">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="time" id="bookingtime" class="form-control text-gray bg-primary">
												</select>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</form>


			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-team" id="artists">
	<div class="container-fluid px-md-5">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<span class="subheading">Artistic Director</span>
				<h2 class="mb-4">Makeup Artist</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="carousel-team owl-carousel m-auto">
					<div class="item">
						<a href="#" class="team text-center">
							<div class="img" style="background-image: url(images/stylist-1.jpg);"></div>
							<h2>Danica Lewis</h2>
							<span class="position">Hair Stylist</span>
						</a>
					</div>
					<div class="item">
						<a href="#" class="team text-center">
							<div class="img" style="background-image: url(images/stylist-2.jpg);"></div>
							<h2>Nicole Simon</h2>
							<span class="position">Nail Master</span>
						</a>
					</div>
			
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery">
	<div class="container">
		<div class="row no-gutters justify-content-center mb-5 pb-2">
			<div class="col-md-6 text-center heading-section ftco-animate">
				<span class="subheading">Gallery</span>
				<h2 class="mb-4">Our gallery</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the
					necessary regelialia.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Stylist</span>
						<h3><a href="project.html">Beard</a></h3>
					</div>
					<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Haircut</a></h3>
					</div>
					<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Hairstylist</a></h3>
					</div>
					<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Haircut</a></h3>
					</div>
					<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Makeup</a></h3>
					</div>
					<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Fashion</span>
						<h3><a href="project.html">Model</a></h3>
					</div>
					<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Makeup</a></h3>
					</div>
					<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="text">
						<span>Beauty</span>
						<h3><a href="project.html">Makeup</a></h3>
					</div>
					<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="my-3 text-center ftco-animate">
			<p><a href="#booking" class="btn btn-primary btn-outline-primary px-4 py-2 font-weight-bold">See more</a></p>
		</div>
	</div>
</section>

<!-- <section class="ftco-section ftco-pricing">
		<div class="container">
			<div class="row justify-content-center pb-3">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading">Pricing</span>
					<h2 class="mb-4">Our Prices</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Hair Style</h3>
							<p><span class="price">$50.00</span> <span class="per">/ session</span></p>
						</div>
						<ul>
							<li>Hair Dryer</li>
							<li>Hair Coloring</li>
							<li>Hair Cut</li>
							<li>Hair Dresser</li>
							<li>Hair Spa</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Manicure Pedicure</h3>
							<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
						</div>
						<ul>
							<li>Manicure</li>
							<li>Pedicure</li>
							<li>Coloring</li>
							<li>Nails</li>
							<li>Nail Cut</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry active pb-5 text-center">
						<div>
							<h3 class="mb-4">Makeup</h3>
							<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
						</div>
						<ul>
							<li>Makeup</li>
							<li>Professional Makeup</li>
							<li>Blush On</li>
							<li>Facial Massage</li>
							<li>Facial Spa</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="pricing-entry pb-5 text-center">
						<div>
							<h3 class="mb-4">Body Treatment</h3>
							<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
						</div>
						<ul>
							<li>Massage</li>
							<li>Spa</li>
							<li>Foot Spa</li>
							<li>Body Spa</li>
							<li>Relaxing</li>
						</ul>
						<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

<section class=" ftco-section testimony-section bg-light ">
	<div class="container">
		<div class="row ftco-animate justify-content-center">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="testimony-img" style="background-image: url(images/testimony-img.jpg);"></div>
			</div>
			<div class="col-md-6 col-lg-7 py-5 pl-md-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate">
						<span class="subheading">Testimony</span>
						<h2 class="mb-0">Happy Customer</h2>
					</div>
					<div class="carousel-testimony owl-carousel ftco-animate">
						<div class="item">
							<div class="testimony-wrap pb-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
								</div>
								<div class="d-flex">
									<div class="user-img" style="background-image: url(images/stylist-1.jpg)">
									</div>
									<div class="pos ml-3">
										<p class="name">Jeff Nucci</p>
										<span class="position">Businessman</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap pb-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
								</div>
								<div class="d-flex">
									<div class="user-img" style="background-image: url(images/stylist-2.jpg)">
									</div>
									<div class="pos ml-3">
										<p class="name">Jeff Nucci</p>
										<span class="position">Businessman</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap pb-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
								</div>
								<div class="d-flex">
									<div class="user-img" style="background-image: url(images/stylist-3.jpg)">
									</div>
									<div class="pos ml-3">
										<p class="name">Jeff Nucci</p>
										<span class="position">Businessman</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap pb-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
								</div>
								<div class="d-flex">
									<div class="user-img" style="background-image: url(images/stylist-4.jpg)">
									</div>
									<div class="pos ml-3">
										<p class="name">Jeff Nucci</p>
										<span class="position">Businessman</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap pb-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
								</div>
								<div class="d-flex">
									<div class="user-img" style="background-image: url(images/stylist-5.jpg)">
									</div>
									<div class="pos ml-3">
										<p class="name">Jeff Nucci</p>
										<span class="position">Businessman</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include __DIR__ . "/included/footer.php" ?>