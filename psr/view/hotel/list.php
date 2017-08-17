<div class="hero-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12 bg-transparent text-center my-5">
				<h1 class=""><?php echo App\Routes::base_url(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col mt-5"><h1 class="text-center">DUBAI HOTELS</h1></div>	
	</div>	
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<?php 

				//$_SESSION['hotels'] = $post;
				if(!$_SESSION['hotels']){
					$_SESSION['hotels'] = $arg;
				}else{
					
					foreach($arg as $k => $v){
						foreach($v as $k1 => $v1){
							
				?>
				<div class="col-md-6 col-sm-12 col-xs-12 mb-3">
					<a href="hotel/<?php echo $k1 . "/" . str_replace(" ", "-", $v1[0]->hotel_name) ?>">
						<div class="card">
							<div class="row">
								<div class="col-3">
									<img src="<?php echo $v1[0]->thumb ?>">
								</div>
								<div class="col-9">
									<div class="d-flex justify-content-between pt-2">
										<div class="0">
											<?php
											$star = $v1[0]->star_rating;
											for ($i = 0; $i < $star; $i ++) {
												echo '<i class="fa fa-star"></i>';
											}
											?>
										</div>
										<div class="pr-3"><?php echo $v1[0]->currency . " " . $v1[0]->minAverPublishPrice ?></div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="w-100"><small><?php echo $v1[0]->hotel_name ?></small></div>
									</div>
								</div>
							</div>
							
						</div>
					</a>	
				</div>
				<?php
						}
					}	
				}
				?>


			</div>
		</div>	
		<div class="col-md-4">
			<div id="siteloader"></div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script>$("#siteloader").html('<object data="https://southtravels.com/widget" style="height: 520px; width: 100%;" />');</script>
		</div>	
	</div>	
</div>
