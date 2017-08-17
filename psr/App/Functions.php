<?php 
namespace App;

class Functions {
	
	function get_header(){
		include('view/header.php');
	}
	
	function get_footer(){
		include('view/footer.php');
	}
	
	function get_sidebar() {
		include('view/sidebar.php');
	}
	
	
}