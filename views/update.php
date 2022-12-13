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
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travigo - Travel for everyone</title>
    <link rel="stylesheet" type="text/css" href="../../travigo2.0/views/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://allfont.net/allfont.css?fonts=poetsen" rel="stylesheet" type="text/css" />
</head>

<body>


	<!-- Start Header Navigation -->

 <div class="container">
	<div class="row my-4">
	<div class="col-md-8 mx-auto">
		<div class="card">
			<div class="card-header">Modifier un Tour</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" enctype="multipart/form-data">
					  <div class="form-group">
							<input type="text" name="id" value="<?php echo $travell->id;?>">
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
