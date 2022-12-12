<?php

class TravigoController
{

	public function getAllTravell()
	{
		$travigos = Travigo::getAll();
		return $travigos;
	}

	public function addTravell() {
		if (isset($_POST['submit'])) {
		  // Check if any of the form fields are empty
		  if (empty($_POST['name']) || empty($_POST['prix']) || empty($_FILES['image']) || empty($_POST['date'])) {
			// Display error message
			echo "All form fields are required. Please fill out the form and try again.";
		  } else {
			$data = array(
			  'name' => $_POST['name'],
			  'prix' => $_POST['prix'],
			  'date' => $_POST['date'],
			  'image' => file_get_contents($_FILES['image']['tmp_name']),
			);
			

			$result = Travigo::add($data);
			if($result === 'ok'){
			  // Form was submitted successfully
			}else{
			  echo $result;
			}
		  }
		}
	  }

}
?>
