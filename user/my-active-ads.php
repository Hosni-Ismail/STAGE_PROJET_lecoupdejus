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

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}         
}else{
$page1 = 0;
$page = 1;  
}


?>

<!DOCTYPE html>
<html lang="fr">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Annonces en ligne</title>

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

<?php require 'constants/include_header.php'?>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Annonces en ligne</h2>
<ol class="breadcrumb">
<li><a href="../">Accueil /</a></li>
<li class="current" style="color:white">Annonces en ligne</li>
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
<a href="my-active-ads" class="active">
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
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Annonce en ligne</h2>
</div>
<div class="dashboard-wrapper">
<?php require 'constants/check_reply.php'; ?>
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>

<th>Photo</th>
<th>Titre</th>
<th>Catégorie</th>
<th>Statut</th>
<th>Prix</th>
<th>Option</th>
</tr>
</thead>
<tbody>

<div id="all_rows">
  <?php

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND status = 'active' ORDER BY enc_id DESC LIMIT $page1,10");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "../uploads/ans/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

      $status = $row['status'];
      if ($status == "active") {
        $st_p = '<span class="adstatus adstatusactive">En ligne</span>';
      }
            if ($status == "inactive") {
        $st_p = '<span class="adstatus adstatusexpired">En attente</span>';
      }

      ?>
      <tr data-category="active">

<td class="photo"><img class="img-fluid img-list-dash" src="<?php echo $firstFile; ?>" alt=""></td>
<td data-title="Title">
<h3><?php echo $row['title']; ?></h3>
<span>Annonce ID: <?php echo $row['ad_id']; ?></span>
</td>
<td data-title="Category"><span class="adcategories"><?php echo $row['category']; ?></span></td>
<td data-title="Ad Status"><?php echo $st_p; ?></td>
<td data-title="Price">
<h3><?php echo number_format($row['price']); ?></h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" target="_blank" href="../ad/<?php echo $row['ad_id']; ?>"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="edit-ad?node=<?php echo $row['ad_id']; ?>"><i class="lni-pencil"></i></a>
<a onclick = "return confirm('confirmer la suppression ?'); " class="btn-action btn-delete" href="app/drop-ad.php?node=<?php echo base64_encode($row['ad_id']); ?>"><i class="lni-trash"></i></a>
</div>
</td>
</tr>

<?php
    

    }
            
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



  ?>

</tbody>
</table>
</div>




</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">
  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author  AND status = 'active' ORDER BY enc_id DESC");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /10;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

          print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="my-active-ads?page='.$b.'">'.$b.'</a></li>';

        }
                                 

    }

            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</ul>
</nav>
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


</body>

</html>