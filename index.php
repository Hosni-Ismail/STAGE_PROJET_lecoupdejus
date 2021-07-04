<?php
require 'constants/config.php';
require 'constants/check-login.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Petites annonces</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="icon" href="assets/icon/favicon.ico">
</head>
<body>

<header id="header-wrap">
<?php
header('Content-type: text/html; charset=utf-8');
?>

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><a href="contact" style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a> |
       <a href="logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
       <?php

	}else{

		?>
		<a href="login" class="header-top-button"><i class="lni-lock"></i> Connexion</a> |
       <a href="register" class="header-top-button"><i class="lni-pencil"></i> Inscription</a>
   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="./" id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item active">
<a class="nav-link" href="./">
Accueil
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="listings">
Annonces
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about">
À propos
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Déposer une annonce</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Connectez-vous pour déposer une annonce </a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="active" href="./">
Accueil
</a>
<li>
<a href="listings">
Annonces
</a>
<li>
<li>
<a  href="faq">
FAQ
</a>
<li>
<li>
<a href="contact">
Contact
</a>
<li>
<li>
<a class="about" href="about">
À propos
</a>
<li>
</ul>

</nav>


<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 col-lg-9 col-xs-12 text-center">
<div class="contents">
<h1 class="head-title">Bienvenue, vendez ou achetez librement vos engins de mobilité électrique sur lecoupdejus !</h1>
<p>Achetez et vendez des engins de mobilité électrique d'occasion ou neuf dans votre région</p>
<div class="search-bar">
<div class="search-inner">
<form class="search-form" action="listings" autocomplete="off">
<div class="form-group">
<input type="text" name="keyword" class="form-control" placeholder="Que recherchez-vous ?">
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="city" required>
<option value="all">Tout les Département</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	header("Content-Type: text/html; charset=utf-8");

	
	$stmt = $conn->prepare("SELECT * FROM tbl_departement ORDER BY departement_id");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['departement_nom'].'">'.$row['departement_nom'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-target"></i>
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="category" required>
<option value="all">Toutes les Catégories</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['category'].'">'.$row['category'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-menu"></i>
</div>
<button type="submit" name="search" value="✓" class="btn btn-common" type="button"><i class="lni-search"></i> Rechercher</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>





<section class="featured section-padding">
<div class="container">
<h1 class="section-title">Dernières annonces</h1>
<div class="row">

	<?php require 'constants/fetch-latest-ads.php'; ?>


</div>
</div>
</section>


<section class="featured-lis section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
<h3 class="section-title">Annonces populaires</h3>
<div id="new-products" class="owl-carousel owl-theme">

<?php require 'constants/fetch-featured-ads.php'; ?>

</div>
</div>
</div>
</div>
</section>


<section class="works section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="section-title">Comment ça fonctionne?</h3>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-users"></i>
</div>
<p>Créer un compte</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-bookmark-alt"></i>
</div>
<p>Déposer une annonce gratuitement</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-thumbs-up"></i>
</div>
<p>Affaire conclue</p>
</div>
</div>
<hr class="works-line">
</div>
</div>
</section>

<?php require 'constants/include_footer.php';?>

<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>

</html>
