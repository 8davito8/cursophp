<?php
	
	#Clase

	class Automovil{

		#Propiedades

		public $marca;
		public $modelo;

		#Metodo

		public function mostrar(){
			echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";
		}
	}

	#Objeto

	$_automovil = new Automovil();
	$_automovil -> marca = "Toyota";
	$_automovil -> modelo = "Corolla";
	$_automovil -> mostrar();

	$_automovilB = new Automovil();
	$_automovilB -> marca = "Hyundai";
	$_automovilB -> modelo = "Accent Vision";
	$_automovilB -> mostrar();

	$_automovilC = new Automovil();
	$_automovilC -> marca = "Mazda";
	$_automovilC -> modelo = "2";
	$_automovilC -> mostrar();

	?>