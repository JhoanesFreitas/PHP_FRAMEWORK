<?php
	
	//var_dump($_GET);

	$imc = $_GET['peso'] / ($_GET['altura'] * $_GET['altura']);

	if($imc < 16){
		echo "Magreza grave!";
	}elseif($imc >= 16 && $imc < 17){
		echo "Magreza moderada!";
	}elseif($imc >= 17 && $imc < 18.5){
		echo "Magreza leve!";
	}elseif($imc >= 18.5 && $imc < 25){
		echo "Saudável!";
	}elseif($imc >= 25 && $imc < 30){
		echo "Saudável!";
	}elseif($imc >= 30 && $imc < 35){
		echo "Gordo!";
	}else{
		echo "Gordo fazendo gordices!";
	}

	//echo $imc;
	//$_GET['peso'];
	//$_GET['altura'];
