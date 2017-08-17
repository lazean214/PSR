<?php 
error_reporting(0);
session_start();
require('App/Autoloader.php');
use App\Functions as Fn;
use App\Routes as Route;
use App\PageController as Page;
use App\Hotel;
use App\Tours;
Fn::get_header();
?>

<?php 

/*if(Route::segment(1)){
	
	echo Route::segment(1);

}else{
	echo Page::index();
}*/

if(Route::segment(2)){
	if(Route::segment(1) === 'hotel')
	{
		echo Hotel::details();
	}else{
		include('view/details.php'); 
	}
	

}else{
	if(Route::segment(1) == 'hotel'){
		if(Route::segment(2) === null){
			echo Hotel::index();
		}
	}else{
		include('view/index.php');
	//	echo Tours::index();
	}


} ?>


<?php Fn::get_footer(); ?>		
