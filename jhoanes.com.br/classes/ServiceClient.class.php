<?php

class ServiceClient {

	/**
	* variavel=valor&variavel2=valor2&variavel3=valor3...
	*/
	protected function doPostRequest($url, $params){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$return = curl_exec($ch);
		return $return;
	}

	protected function doGetRequest($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$return = curl_exec($ch);
		return $return;
	}
}