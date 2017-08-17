<?php 
namespace App;

use App\Config as Config;

class Routes {

	public function base_url()
	{
		$url = Config::BASE_URL;
		return $url;
	}
	
	public function segment($value){
		
		$currentURL = $_SERVER["REQUEST_URI"];
		
		$parse = parse_url($currentURL);
		
		$path = $parse['path'];
		
		$uri = explode('/', $path);

		if($value <= count($uri)){
			return $uri[$value];
		}
		
		
			
	}
	
	
//Calling Controllers
	public function call($controller)
	{
		require_once($controller . '.php');
		
	}
	
}