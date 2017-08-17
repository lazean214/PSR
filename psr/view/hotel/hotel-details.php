<?php

if($arg){
	foreach($_SESSION['hotels'] as $one => $two){
		if(array_key_exists(App\Routes::segment(2), $two)){
			foreach($two as $k => $v){
				foreach( $v as $rows => $row){
					if($row->hotelId == App\Routes::segment(2)){
						//var_dump($row);
						$details = json_decode($row->room_details);
?>
<div class="hero-wrapper" style="background-image: url(data:image/jpeg;base64,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); background-position: center center; background-size: cover;"></div>
<div class="negative-space my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top img-fluid" src="data:image/jpeg;base64,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" alt="Card image cap">
					<div class="card-body bg-danger">
						<h4 class="card-title text-light"><?php echo $row->hotel_name; ?></h4>
						<div class="d-flex justify-content-between text-light">
							<div class="w-100"><small><?php echo $row->Address ?></small></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">Per Night</div>
							<div class="p-6"><strong><?php echo $details[0]->Currency ?> <?php echo $details[0]->ItemPrice ?></strong> </div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">Room Type</div>
							<div class="p-6"><strong><?php echo $details[0]->Description ?></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">Meal</div>
							<div class="p-6"><strong><?php echo $details[0]->Meals->Basis ?></strong></div>
						</div>
						<div class="d-flex justify-content-between text-light">
							<div class="p-6">Booking Date</div>
							<div class="p-6"><strong><?php echo $details[0]->startDate ?></strong></div>
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
							<a class="nav-link" href="#options" role="tab" data-toggle="tab"><i class="fa fa-cogs"></i> Room Options</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active mt-4" id="description">
							<h4>About <?php echo $row->hotel_name; ?></h4>
							<p><?php echo $row->desc ?></p>
							<div class="row">
								<div class="col">
									<h4>Hotel Facilities</h4>
									<?php 
							$hotelFac = json_decode($row->hotel_facilities); 
						echo "<ul>";						  
						foreach( $hotelFac as $fac){
							echo "<li>" .$fac. "</li>";
						}
						echo "</ul>";
									?>
								</div>
								<div class="col">
									<h4>Room Amenities</h4>
									<?php 
						$amenities = json_decode($row->room_facilities); 
						echo "<ul>";						  
						foreach( $amenities as $amen){
							echo "<li>" .$amen. "</li>";
						}
						echo "</ul>";
									?></div>
							</div>
							<h4>Cancellation Policy</h4>
							<ul>
								<li><?php echo $details[0]->Conditions[0] ?></li>
								<li><?php echo $details[0]->Conditions[1] ?></li>
								<li><?php echo $details[0]->Conditions[2] ?></li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane fade mt-4" id="options">
							<?php 
								$cat = count($row->room_categories);			
							foreach($row->room_categories as $roomK => $roomV){ ?>
							<div class="card mb-3">
								<div class="card-header bg-facebook">
									<strong><?php echo $roomV->Description ?></strong>
									<span class="pull-right text-light btn btn-danger btn-sm"><strong><?php echo $roomV->Currency ?> <?php echo $roomV->ItemPrice ?></strong></span>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between">
												<div class="p-6">Availability</div>
												<div class="p-6"><?php echo $roomV->Confirmation ?></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between">
												<div class="p-6">Board Base</div>
												<div class="p-6"><?php echo $roomV->Meals->Basis ?></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between">
												<div class="p-6">Date</div>
												<div class="p-6">
													<?php
													$fDate = date_create($roomV->HotelRoomPrices->DateRange->FromDate);
													$tDate = date_create($roomV->HotelRoomPrices->DateRange->FromDate);
													$fromDate = date_format($fDate, 'F d, Y');
													$toDate = date_format($tDate, 'F d, Y');
													echo $fromDate ?> - <?php echo $toDate ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between">
												<div class="p-6">&nbsp;</div>
												<div class="p-6">
													<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo str_replace(" ", "-", $roomV->Description) . "_" . str_replace(" ", "-", $roomV->Meals->Basis) ?>">Cancellation Policy</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="<?php echo str_replace(" ", "-", $roomV->Description) . "_" . str_replace(" ", "-", $roomV->Meals->Basis) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Cancellation Policy</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<ul>
													<?php 
													$conditions = $roomV->ChargeConditions->ChargeCondition[0]->Condition; 
													 foreach($conditions as $k => $v){ 
														$frm = date_create($v->FromDate);
														$to = date_create($v->ToDate);
														 $frmDate = date_format($frm, 'F d, Y');
														 $toDate = date_format($to, 'F d, Y');
													?>
													<li>From <?php echo $frmDate ?>
														<?php if ($v->ChargeAmount == ''){
																				   echo "NO Cancellation Fee.";
																			   }else{
																				   echo " to " . $toDate . ", Cancellation fee is ". $v->Currency . " " . $v->ChargeAmount;
																			   } ?>
														<?php echo $v->Currency ?> <?php echo $v->ChargeAmount ?></li>
													<?php } ?>
												</ul>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
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
					<h4 class="card-title">Hotel Booking Search</h4>
					<div id="siteloader"></div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script>$("#siteloader").html('<object data="https://southtravels.com/widget" style="height: 550px; width: 100%;" />');</script>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php						
					}
				}
			}
		}
	}
}
?>
