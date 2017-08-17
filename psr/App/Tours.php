<?php
namespace App;

use App\RestApi as Api;

class Tours extends Controller {
	
	public function index()
	{
		$arg['creek'] = Api::getSubLists('dhow-cruise-dubai-creek');
		$arg['marina'] = Api::getSubLists('dhow-cruise-marina');
		return Controller::view('view/tours/list', $arg);
	}
	
	public function parent($var)
	{
		$arg = Api::getLists('tours');
		return Controller::view('view/tours/list', $arg);
	}
}