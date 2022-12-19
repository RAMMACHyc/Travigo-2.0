<?php 
	if (isset($_POST['id'])) {
		$existTravell = new TravigoController();
		$travell = $existTravell->getOneTravell();
 	}
	if(isset($_POST['submit'])){
		$existTravell = new TravigoController();
		$existTravell-> updateTravell();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta data -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Include font awesome stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<!-- Start Header Navigation -->

 <div class="container">
	<div class="row my-4">
	<div class="col-md-8 mx-auto">
		<div class="card">
			<div class="card-header"> Modifier un Tour</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>tours" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fa fa-home"></i>
					</a>
					<form method="post" enctype="multipart/form-data">
					  <div class="form-group">
							<input type="hidden" name="id" value="<?php echo $travell->id;?>">
						</div>
						<div class="form-group">
							<label for="name">name*</label>
							<input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $travell->name; ?>">
						</div>
						<div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="prix" class="form-control" placeholder="Prix"
							value="<?php echo $travell->prix; ?>"
							>
						</div>
						<div class="form-group">
							<label for="image">image*</label>
							<input type="file" name="image" class="form-control" placeholder="image" >
						</div>
                        <div class="form-group">
							<label for="image">date*</label>
							<input type="date" name="date" class="form-control"  >
						</div>
		
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Modifier</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
 </div>
 
</body>
        

</html>
