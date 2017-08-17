<?php

namespace App;

class Controller {
	
	
	public function view($file, $arg)
	{
		$arg = $arg;
		return include($file .'.php');
	}
	
	 
	
}