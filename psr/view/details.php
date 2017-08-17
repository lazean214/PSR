<?php
if(App\PageController::pageDetails(App\Routes::segment(2))){
	$post = App\PageController::pageDetails(App\Routes::segment(2));
} ?>
<div class="hero-wrapper blur-2" style="background-image: url(<?php echo $post->guid ?>); background-position: center center; background-size: cover;"></div>
<div class="negative-space my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top img-fluid" src="<?php echo $post->guid ?>" alt="Card image cap">
					<div class="card-body bg-danger">
						<h4 class="card-title text-light"><?php echo $post->post_title; ?></h4>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">FROM</div>
							<div class="p-6"><strong>USD <?php echo $post->usd ?> <small>Per Adult</small></strong> / <strong>USD <?php echo $post->usd_child ?> <small>Per Child</small></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">CITY</div>
							<div class="p-6"><strong><?php echo $post->city ?></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">DURATION</div>
							<div class="p-6"><strong><?php echo $post->duration ?></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">AVAILABILITY</div>
							<div class="p-6"><strong><?php echo $post->operation ?></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">&nbsp;</div>
							<div class="p-6"><strong>&nbsp;</strong></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 align-self-end hidden-xs">
				<nav class="breadcrumb bg-primary text-white">
					<a class="breadcrumb-item text-capitalize text-white" href="<?php echo App\Routes::base_url(); ?>">Home</a>
					<a class="breadcrumb-item text-capitalize text-white" href="<?php echo App\Routes::base_url(); ?><?php echo App\Routes::segment(1); ?>"><?php echo App\Routes::segment(1); ?></a>
					<span class="breadcrumb-item active text-warning"><?php echo $post->post_title; ?></span>
				</nav>
				<div class="card">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo $post->guid ?>" alt="First slide">
							</div>
							<?php foreach(App\PageController::subList('dhow-cruise-dubai-creek') as $tours):?>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo $tours->guid ?>" alt="Second slide">
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-3">
			<div class="col-md-8 my-4">
				<div>
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#description" role="tab" data-toggle="tab"><i class="fa fa-file-text"></i> DESCRIPTION</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#options" role="tab" data-toggle="tab"><i class="fa fa-cogs"></i> INQUIRE</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active mt-4" id="description">
							<?php echo $post->post_content ?>
						</div>
						<div role="tabpanel" class="tab-pane fade mt-4" id="options">
							<h4 class="card-title">Inquiry Form</h4>
							<form  id="needs-validation" novalidate>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="validationCustom01" class="sr-only">First name</label>
										<input type="text" class="form-control" id="validationCustom01" placeholder="Full name"  required>
										<div class="invalid-feedback">
											Please provide your Name.
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationCustom02" class="sr-only">Email Address</label>
										<input type="email" class="form-control" id="validationCustom02" placeholder="Email Address" required>
										<div class="invalid-feedback">
											Please provide a valid email.
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="validationCustom03" class="sr-only">City</label>
										<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
										<div class="invalid-feedback">
											Please provide a valid city.
										</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationCustom04" class="sr-only">State</label>
										<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
										<div class="invalid-feedback">
											Please provide a valid state.
										</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationCustom05" class="sr-only">Zip</label>
										<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
										<div class="invalid-feedback">
											Please provide a valid zip.
										</div>
									</div>
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
							<script>
								// Example starter JavaScript for disabling form submissions if there are invalid fields
								(function() {
									"use strict";
									window.addEventListener("load", function() {
										var form = document.getElementById("needs-validation");
										form.addEventListener("submit", function(event) {
											if (form.checkValidity() == false) {
												event.preventDefault();
												event.stopPropagation();
											}
											form.classList.add("was-validated");
										}, false);
									}, false);
								}());
							</script>
						</div>
					</div>
				</div>
				<div class="row my-3">
					<div class="col">
						<div class="card">
							<div class="media">
								<img class="d-flex align-self-start mr-3 img-fluid-4" src="https://southtravels.com/uploads/2017/07/DESERT-SAFARI-DUBAI.jpg" alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0">Top-aligned media</h5>
									<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="social my-2">
					<div class="d-inline-block hidden-sm hidden-xs">
						<i class="fa fa-share-alt" title="Share"></i>
					</div>
					<div class="d-inline-block bg-facebook rounded">
						<i class="fa fa-facebook"></i>
					</div>
					<div class="d-inline-block bg-google">
						<i class="fa fa-google-plus"></i>
					</div>
					<div class="d-inline-block bg-twitter">
						<i class="fa fa-twitter"></i>
					</div>
					<div class="d-inline-block bg-vk">
						<i class="fa fa-vk"></i>
					</div>
					<div class="d-inline-block bg-tumblr">
						<i class="fa fa-tumblr"></i>
					</div>
					<div class="d-inline-block bg-whatsapp">
						<i class="fa fa-whatsapp"></i>
					</div>
				</div>
				<div class="card card-body my-3">
					<h4 class="card-title">Hotel Search</h4>
					<div id="siteloader"></div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script>$("#siteloader").html('<object data="https://southtravels.com/widget" style="height: 550px; width: 100%;" />');</script>
				</div>
			</div>
		</div>
	</div>
		</div>	