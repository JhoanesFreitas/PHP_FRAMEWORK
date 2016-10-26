<?php

class TestController extends Controller{

	public function index(){
		echo "Ihuuuuuuuuuuull!";
	}

	public function acao(){
		//echo "Chamando o Dr. Rancrux, chamando o Dr. Rancrux! ".$this->get_parameter(0);

		$v = new View("test/acao");
		//$v->add_variable("fruta", $this->get_parameter(0));

		$c = $this->load_model("Car");
		$c->setWheel(20);
		
		$v->add_variable("car", $c);
		$v->show();
	}
}