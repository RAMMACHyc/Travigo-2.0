<?php 
	if(isset($_POST['submit'])){
		$newFurniture = new TravigoController();
		$newFurniture->addTravell();
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

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title></title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="../../Satoru-MVC1/views/assets/logo/sinewhite.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/responsive.css">
		<!-- mon style css  -->
		<link rel="stylesheet" href="../../Satoru-MVC1/views/assets/css/monstyle.css">
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
<body>

<div class="container" style="margin-right: 0px; margin-top:8%">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter un travell</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>touls" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fa fa-home"></i>
					</a>
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">name*</label>
							<input type="text" name="name" class="form-control" placeholder="name">
						</div>
						<div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="prix" class="form-control" placeholder="prix">
						</div>
						<div class="form-group">
							<label for="image">image*</label>
							<input type="file" name="image" id="image" class="form-control" placeholder="image">
						</div>
                        <div class="form-group">
							<label for="date">date*</label>
							<input type="date" name="date"  class="form-control">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../../Satoru-MVC1/views/assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="../../Satoru-MVC1/views/assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="../../Satoru-MVC1/views/assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="../../Satoru-MVC1/views/assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="../../Satoru-MVC1/views/assets/js/custom.js"></script>
</body>
</html>