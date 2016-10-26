<?php

class Car extends Model{

	private $wheel;

	public function getWheel(){
		return $this->wheel;
	}

	public function setWheel($wheel){
		$this->wheel = $wheel;
	}

}