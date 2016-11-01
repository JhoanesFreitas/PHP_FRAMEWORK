<?php

class ServiceServer{

	protected function displayJSON($data){
		header("Content-Type: text/plain");
		echo json_encode($data);
		return;
	}

}