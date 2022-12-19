<?php 
	if (isset($_POST['id'])) {
		$exitTravell = new TravigoController();
		$exitTravell->deleteTravell();
 	}
?>