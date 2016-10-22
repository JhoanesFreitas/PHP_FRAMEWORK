<?php

class Controller{

	private $parameters;

	public function __construct($parameters){
		$this->parameters = $parameters;
	}

	public function get_parameter($index){
		if(isset($this->parameters[$index]) && !empty($this->parameters[$index])){
			return $this->parameters[$index];
		}
		return null;
	}
}