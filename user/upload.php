<?php
require '../constants/config.php';
require '../constants/check-login.php';
error_reporting(0);

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
<title><?php echo $site_title; ?> - Déposer une annonce</title>

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
<h2 class="product-title">Déposer une annonce</h2>
<ol class="breadcrumb">
<li><a href="../">Accueil /</a></li>
<li class="current" style="color:white">Déposer une annonce</li>
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
<a href="upload" class="active">
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
<h2 class="dashbord-title">Annonce</h2>
</div>
<div class="dashboard-wrapper">
  <form action="app/new-ad.php" method="POST" autocomplete="off" onsubmit="var text = document.getElementById('minle').value; if(text.length > 100) { alert('La description courte ne doit pas comporter plus de 100 caracères'); return false; } return true;">
<div class="form-group mb-3">
<label class="control-label">Titre de l'annonce</label>
<input class="form-control input-md" name="title" placeholder="Entez un titre" required type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Catégorie</label>
<div class="tg-select form-control">
<select name="category" required>
<option value="" selected disabled>Sélectionnez une catégorie</option>
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
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Département</label>
<div class="tg-select form-control">
<select name="city" required>
<option value="" selected disabled>Sélectionnez un département</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
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
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">État</label>
<div class="tg-select form-control">
<select name="condition" required>
<option value="" selected disabled>Sélectionnez un état</option>
<option value="Neuf">Neuf</option>
<option value="Occasion">Occasion</option>
</select>
</div>
</div>


<div class="form-group mb-3">
<label class="control-label">Prix (<?php echo $currency; ?>)</label>
<input class="form-control input-md" name="price" required placeholder="Entrez le prix" type="number">
<div class="tg-checkbox mt-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="fixed" id="tg-priceoncall">
<label class="custom-control-label" for="tg-priceoncall">Négociable</label>
</div>
</div>
</div>

<div class="form-group mb-3">
<label class="control-label">Marque (facultatif)</label>
<input class="form-control input-md" name="brand" placeholder="Entrez la marque" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">Déscription courte (100 caractères)</label>
<textarea maxlength="100" id="minle" class="form-control input-md" name="shortdesc" required></textarea>
</div>


<div class="form-group md-3">
  <label class="control-label">Déscription</label>
<textarea id="summernote" name="description" required></textarea>
</div>

<button type="submit" class="btn btn-common fullwidth mt-4">Soumettre</button>
</form>

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