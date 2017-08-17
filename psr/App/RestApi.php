<?php 
namespace App;

use App\Config as Config;

class RestApi {
	
	function getLists($type){

		$authorization = "Authorization: Bearer 32mQCAQxgLYNYOV4nG2jCBx37eMmx2HHtbf61V1X0UcuLKKrLefaPdOCSy05OET";

		$url = Config::API_URL_1 .$type;

		$cURL = curl_init();

		curl_setopt($cURL, CURLOPT_URL, $url);
		curl_setopt($cURL, CURLOPT_HTTPGET, true);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json', $authorization,
		));

		$result = curl_exec($cURL);

		curl_close($cURL);

		$json = json_decode($result);

		return $json;
	}

	function getSubLists($slug){

		$authorization = "Authorization: Bearer 32mQCAQxgLYNYOV4nG2jCBx37eMmx2HHtbf61V1X0UcuLKKrLefaPdOCSy05OET";

		$url = Config::API_URL_2 . $slug;

		$cURL = curl_init();

		curl_setopt($cURL, CURLOPT_URL, $url);
		curl_setopt($cURL, CURLOPT_HTTPGET, true);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json', $authorization,
		));

		$result = curl_exec($cURL);


		curl_close($cURL);

		$json = json_decode($result);

		return $json;
	}

	function getDetails($slug){

		$authorization = "Authorization: Bearer 32mQCAQxgLYNYOV4nG2jCBx37eMmx2HHtbf61V1X0UcuLKKrLefaPdOCSy05OET";

		$url = Config::API_URL_3 . $slug;
		//$url = 'http://laravelapi.dev/api/childDetail/' . $slug;

		$cURL = curl_init();

		curl_setopt($cURL, CURLOPT_URL, $url);
		curl_setopt($cURL, CURLOPT_HTTPGET, true);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json', $authorization,
		));

		$result = curl_exec($cURL);


		curl_close($cURL);

		$json = json_decode($result);

		return $json;
	}
	
	function getHotels($slug){

		

		$url = Config::HOTEL_API . $slug;

		$cURL = curl_init();

		curl_setopt($cURL, CURLOPT_URL, $url);
		curl_setopt($cURL, CURLOPT_HTTPGET, true);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json',
		));

		$result = curl_exec($cURL);


		curl_close($cURL);

		$json = json_decode($result);

		return $json;
	}


	
}