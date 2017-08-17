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
		<div class="col mt-5"><h1 class="text-center">DHOW CRUISE CREEK</h1></div>	
	</div>	
	<div class="row">
		<div class="col">
			<?php
		if(App\PageController::pageDetails('dhow-cruise-dubai-creek')){
			$post = App\PageController::pageDetails('dhow-cruise-dubai-creek'); ?>
			<p><?php echo $post->post_content; ?></p>
		<?php } ?>
		</div>
	</div>	
	
	<div class="row my-5">
		<?php foreach($arg['creek'] as $tours):?>
		<div class="col-md-4  my-2">
			<div class="card">
				<img class="card-img-top img-fluid" src="<?php echo $tours->guid ?>" alt="Card image cap">
				<div class="card-body bg-danger">
					<h4 class="card-title text-light"><?php echo $tours->post_title ?></h4>
					<p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="<?php echo App\Routes::base_url() . "creek/" . $tours->post_name ?>" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col mt-5"><h1 class="text-center">DHOW CRUISE MARINA</h1></div>	
	</div>	
	<div class="row">
		<div class="col">
			<?php
		if(App\PageController::pageDetails('dhow-cruise-marina')){
			$post = App\PageController::pageDetails('dhow-cruise-marina'); ?>
			<p><?php echo $post->post_content; ?></p>
		<?php } ?>
		</div>
	</div>	
	<div class="row my-5">
		<?php foreach($arg['marina'] as $tours):?>
		<div class="col-md-4  my-2">
			<div class="card">
				<img class="card-img-top img-fluid" src="<?php echo $tours->guid ?>" alt="Card image cap">
				<div class="card-body bg-danger">
					<h4 class="card-title text-light"><?php echo $tours->post_title ?></h4>
					<p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="<?php echo App\Routes::base_url() . "marina/" . $tours->post_name ?>" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>
