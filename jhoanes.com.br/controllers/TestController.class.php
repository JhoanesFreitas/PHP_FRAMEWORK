<?php

class TestController extends Controller{

	public function index(){
		echo "Ihuuuuuuuuuuull!";
	}

	public function acao(){
		echo "Chamando o Dr. Rancrux, chamando o Dr. Rancrux! ".$this->get_parameter(0);
	}
}