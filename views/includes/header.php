

	 
<head>
    <title>Travel Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../travigo2.0/views/css/style1.css">
    <link rel="stylesheet" type="text/css" href="../../travigo2.0/views/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://allfont.net/allfont.css?fonts=poetsen" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<!--header--->
<header>
    <a href="#" class="logo"><b>Travigo</b></a>
    <div class="bx bx-menu" id="menu-icon"></div>
<?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true){ ?>

	            <li><a href="logout"><?php echo $_SESSION['username']; ?></a></li>
<?php } ?>
<?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){ ?>
	            <li><a href="logout">login</a></li>
<?php } ?>

    <ul class="navbar">
            <li><a href="index">Home</a></li>
            <li><a href="tours">Tours</a></li>
            <li><a href="about">About</a></li>
            <li><a href="travi">Contact Us</a></li>
    </ul>
</header>
