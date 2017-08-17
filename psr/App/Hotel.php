<?php 
namespace App;

use App\RestApi as Api;
use App\Controller;
class Hotel extends Controller {

	public function index()
	{
		//session_destroy();
		$d1 = date('Y-m-d', strtotime(' + 3 days'));
		$d2 =  date('Y-m-d', strtotime(' + 4 days')); 
		$location = 'Dubai, United Arab Emirates';
		$var = $location .";".$d1.";".$d2.";2;0";
		$arg = Api::getHotels($var);
		return Controller::view('view/hotel/list', $arg);
	}
	
	public function details(){
		$arg = $_SESSION['hotels'];
		return Controller::view('view/hotel/hotel-details', $arg);
	}
}