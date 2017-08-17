<?php

namespace App;

use App\RestApi as Api;
use App\Model\Test_model as Test;
use App\Controller;

class PageController extends Controller {
	
	function subList($var){
		return Api::getSubLists($var);
	}
	
	function pageDetails($var){
		return Api::getDetails($var);
	}
	
	function hotels($var){
		return Api::getHotels($var);
	}
	
	
// The real controllers	
	public function index()
	{
		$t1 = Test::test('tours');
		
		$test = "test";
		
		$arg = array($t1, $test);
		
		return Controller::view('view/test', $arg);
	}
	

	
}