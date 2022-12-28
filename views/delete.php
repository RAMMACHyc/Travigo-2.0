<?php 
	if (isset($_POST['id'])) {
		$exitTravell = new TravigoController();
		$exitTravell->deleteTravell();
 	}
	 if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
		redirect::to('index');
	  
		}
?>