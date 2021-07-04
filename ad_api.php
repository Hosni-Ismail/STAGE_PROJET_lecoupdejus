<?php
require 'constants/config.php';
require 'constants/check-login.php';
require 'constants/fetch-ad-info.php';
error_reporting(0);



	if ($logged == "1") {
	   if ($myrole == "admin") {

	   	$preview_allowed = "YES";

	   }else{

	   	if ($myid == $authid) {

	   		$preview_allowed = "YES";

	   	}else{

	   		$preview_allowed = "YES";
	   	}

       

	   }

	}else{

		if ($adstatus == "active") {

			$preview_allowed = "YES";

		}else{

			$preview_allowed = "NO";

		}

	

	}




?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - <?php echo $title; ?></title>
<?php
if ($preview_allowed == "YES") {

      $directory = "uploads/ans/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

	?>

	<meta property="og:image" content="http://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:secure_url" content="https://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $short_des; ?>" />

    <?php

}

?>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><a href="../contact" style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="../<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
       <?php

	}else{

		?>
		<a href="../login" class="header-top-button"><i class="lni-lock"></i> Connexion</a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> Inscription</a>
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
<a href="../" id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Accueil
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../listings">
Annonces
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
À propos
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="../user/upload"><i class="lni-pencil-alt"></i> Déposer une annonce</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Connectez-vous pour déposer une annonce </a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a href="../">
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

</header>


<div class="page-header" style="background: url(../assets/img/paris.png);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title"><?php echo $title; ?></h2>
<ol class="breadcrumb">
<li><a href="../">Accueil /</a></li>
<li style="color:white;" class="current"><?php echo $ad_id; ?></li>
</ol>
</div>
</div>
</div>
</div>
</div>

<?php
if ($not_found == "YES") {

	require 'constants/404.php';

}else{

if ($preview_allowed == "YES") {

	?>
	<style>
		.image-resize {
    width: auto;
    height: 600px;}
	</style>

	<div class="section-padding">
<div class="container">

<div class="product-info row">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="ads-details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
	<?php
$dir = 'uploads/ans/'.$ad_id.'/*.png';

$fileList = glob($dir);

foreach($fileList as $filename){
print '
<div class="item">
<div class="">
<img class="img-fluid image-resize img-detail"  src="../'.$filename.'" alt="" onclick="window.open(this.src)">


</div>
<span class="price">'.number_format($price).' '.$currency.'</span>
</div>

';


}


?>

</div>
</div>
<div class="details-box">
<div class="ads-details-info" style="margin-top: 0px;">
<h2><?php echo $title; ?></h2>
<div class="details-meta">
<span><a><i class="lni-alarm-clock"></i> <?php echo $post_date; ?></a></span>
<span><a><i class="lni-map-marker"></i> <?php echo $city; ?></a></span>
<span><a><i class="lni-files"></i> <?php echo $ad_id; ?></a></span>
<span><a>Prix négociable : <strong> <?php echo $fixed; ?></strong></a></span>
</div>
<p class="mb-4"><?php echo $des; ?></p>


</div>
<div class="tag-bottom">
<div class="float-left">
<ul class="advertisement">
<li>
<p><strong><i class="lni-folder"></i> Catégorie :</strong> <a><?php echo $category; ?></a></p>
</li>
<li>
<p><strong><i class="lni-archive"></i> État :</strong> <a><?php echo $adcond; ?></a></p>
</li>
<li>
<p><strong><i class="lni-package"></i> Marque :</strong> <a><?php echo $brand; ?></a></p>
</li>
</ul>
</div>
<div class="float-right">
<div class="share">
<div class="social-link">
<a class="facebook" data-toggle="tooltip" data-placement="top" title="Partager sur facebook" href="<?php echo $fbshare; ?>"target="_blank"><i class="lni-facebook-filled"></i></a>
<a class="twitter" data-toggle="tooltip" data-placement="top" title="Partager sur twitter" href="<?php echo $twshare; ?>"target="_blank"><i class="lni-twitter-filled"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Annonce publiée par</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#">
	<?php 
	if ($avatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$avatar.'" alt="">';

	}

	?>
</div>
<div class="agent-details">
<h3><a href="#"><?php echo $author; ?> <?php if ($verified == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?></a></h3>
<span><i class="lni-envelope"></i><?php echo $email; ?></span>
</div>
</div>
<?php
if (isset($_SESSION['reply'])) {

if ($_SESSION['reply'] == "012") {
	print '<strong>Votre message a pas été envoyé</strong>';
}

if ($_SESSION['reply'] == "011") {
	print '<strong>Votre message a été envoyé</strong>';
}

unset($_SESSION['reply']);

}else{

}

?>
<form action="../app/send-ad-message.php" method="POST" autocomplete="OFF">
<input type="hidden" name="mailto" value="<?php echo $email; ?>">
<input type="hidden" name="ref" value="<?php echo $title; ?>">
<input type="hidden" name="adid" value="<?php echo $ad_id; ?>">
<input type="email" name="email" required class="form-control" placeholder="Votre e-mail">
<input type="text" name="phone" required class="form-control" placeholder="Votre téléphone">
<textarea style="resize: none;" class="form-control" name="message" required >Je suis intéressé par votre annonce [<?php echo $title; ?>] et j'aimerais en savoir plus.</textarea>
<button class="btn btn-common fullwidth mt-4">Envoyer le message</button>
</form>
</div>
</div>

<div class="widget">
<h4 class="widget-title">Plus d'annonces du vendeur</h4>
<ul class="posts-list">

	<?php
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND ad_id != :adid AND status = 'active' order by rand() LIMIT 6");
$stmt->bindParam(':author', $authid);
$stmt->bindParam(':adid', $ad_id);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ans/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

    	?>
    	<li>
<div class="widget-thumb">
<a href="../ad/<?php echo $row['ad_id']; ?>"><img class="more-ads" src="../<?php echo $firstFile; ?>" alt="" /></a>
</div>
<div class="widget-content">
<h4 class="limit-text"><a href="../ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>

</div>
<h4 class="price"><?php echo number_format($row['price']); ?> <?php echo $currency; ?></h4>
</div>
<div class="clearfix"></div>
</li>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>

</ul>
</div>
</aside>

</div>
</div>

</div>
</div>







	<?php

}else{

	?>
<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>

	     <div class="alert alert-danger closeable">
          <h3>Cette annonce n'est pas disponible pour le moment</h3>
          <p style="margin-left:30px;">L'annonce <strong><?php echo $title; ?></strong> attend l'approbation de l'administrateur</p>
            <a class="close" href="#"></a>
        </div>


</div>
</div>

</div>
</div>
</section>



	<?php

}

}

?>

<?php require 'user/constants/include_footer.php';?>

<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>

<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/summernote.js"></script>
</body>

</html>