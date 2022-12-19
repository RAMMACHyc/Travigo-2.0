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
	//   _____________________________________________++
	  public function getOneTravell(){
		if (isset($_POST['id'])) {
			$data = array(
				'id' => $_POST['id'],
			);
		$travell = Travigo::getTravell($data);
		return $travell;

		}
	}

	public function updateTravell()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'prix' => $_POST['prix'],
				'date' => $_POST['date'],
			);
	
			// Check if an image was selected
			if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
				// Add the image to the data array
				$data['image'] = file_get_contents($_FILES['image']['tmp_name']);
			} else {
				// Get the old image from the database
				$travell = Travigo::getTravell($data);
				// Add the old image to the data array
				$data['image'] = $travell->image;
			}
	
			$result = Travigo::update($data);
			if ($result === 'ok') {
				Redirect::to('tours');
			} else {
				echo $result;
			}
		}
	}
	public function deleteTravell(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Travigo::delete($data);
			if($result === 'ok'){
				Redirect::to('tours');
			}else{
				echo $result;
			}
		}
	}
}
?>
