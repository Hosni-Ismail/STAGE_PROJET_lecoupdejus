<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/ad-img-fetch.php';
error_reporting(0);

if (isset($_GET['node'])) {

}else{
 header('location:../');
}

if ($ad_rec == "1") {

}else{
   header('location:../');
}

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}


?>

<!DOCTYPE html>
<html lang="fr">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Gérer les images de vos annonces</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="../assets/css/summernote.css">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>

<?php require 'constants/include_header.php'?>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Gérer les images de vos annonces</h2>
<ol class="breadcrumb">
<li><a href="../">Accueil /</a></li>
<li class="current" style="color:white">Gérer les images de vos annonces</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a >
	<?php 
	if ($myavatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';

	}

	?>
	
</a>
</figure>
<div class="usercontent">
<h3>@<?php echo $myusername; ?>
	<?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
</h3>
<h4>ID: <?php echo $myid; ?></h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a  href="./">
<i class="lni-user"></i>
<span>Mon compte</span>
</a>
</li>

<li>
<a href="myads">
<i class="lni-layers"></i>
<span>Mes annonces</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
<span>Mes annonces actives</span>
</a>
</li>
<li>
<a href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>Mes annonces en attente</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>Mes annonces vedettes</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Déposer une annonce</span>
</a>
</li>
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Se déconnecter</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-12 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title"><?php echo $ad_title; ?></h2>
</div>
<div class="dashboard-wrapper">
  <?php require 'constants/check_reply.php'; ?>
<form action="app/send-image.php" method="POST"  enctype="multipart/form-data">
<input accept="image/*" type='file' onchange="readURL(this);" required name="image" /><br><br>
<input type="hidden" name="uploadlink" value="<?php echo $add_id; ?>">
<img id="blah"class="image-preview" src="../assets/img/blank.png" alt="Image Preview" /><br><br>
<button class="btn btn-common" type="submit">Soumettre</button>
<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  
      </script>  
    </form>
<hr>
<h5 class="dashbord-title">Images téléchargées</h5>
<strong>N:B Cliquez sur l'image pour supprimer</strong><br><br>

<center>
<?php
$dir = '../uploads/ans/'.$add_id.'/*.png';

$fileList = glob($dir);

foreach($fileList as $filename){
    print '<a'; ?> onclick = "retour confirmer('Etes-vous sûr que vous voulez supprimer ?')" <?php print ' href="app/drop-image.php?id='.$add_id.'&lnk='.$filename.'"><img id="blah"class="image-list" src="'.$filename.'" alt="Image Preview" /></a>';

}


?>
</center>
<hr>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<?php require './constants/include_footer.php';?>

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
<script src="../assets/js/password-validate.js"></script>

<script>
      $('#summernote').summernote({
          height: 250, // set editor height
          minHeight: null, // set minimum height of editor
          maxHeight: null, // set maximum height of editor
          focus: false // set focus to editable area after initializing summernote
      });
    </script>
</body>

</html>