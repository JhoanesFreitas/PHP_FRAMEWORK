<?php

/**
* Classe responsável por carregar o framework e executá-lo.
* @author Jhoanes Freitas
*/
class MVC{

	private $controller;
	private $action;
	private $parameters;

	private $not_found = "/includes/404.php";

	public function __construct(){
		$this->get_url_data();

		
		if(!$this->controller){
			require_once ABSPATH."/controllers/HomeController.class.php";
			$this->controller = new HomeController();
			$this->controller->index();
			return;
		}
	}

	public function get_url_data(){
		if(isset($GET['path'])){
			$path = $GET['path'];

			$path = rtrim($path, '/');
			$path = filter_var($path, FILTER_SANITIZE_URL);

			$path = explode('/', $path);

			$this->controller = (isset($path[0]) && !empty($path[0])) ? ucfirst(strtolower($path[0])) : NULL;
			$this->controller .= "Controller";

			$this->action = (isset($path[1]) && !empty($path[1])) ? strtolower($path[1]): NULL;

			if(isset($path[2]) && !empty($path[2])){
				unset($path[0]);
				unset($path[1]);

				$this->parameters = array_values($path);
			}
		}
	}
	
}