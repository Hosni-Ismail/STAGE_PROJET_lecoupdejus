<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="fr">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Inscirption</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="icon" href="assets/icon/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<header id="header-wrap">

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
<li class="nav-item">
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
<a href="./">
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


<div class="page-header" style="background: url(assets/img/paris.png);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Créer un compte</h2>
<ol class="breadcrumb">
<li><a href="./">Accueil /</a></li>
<li style="color:white;" class="current">Inscription</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>
Inscription
</h3>
<form name="frm1" class="login-form" action="app/register.php" method="POST" autocomplete="off" onsubmit="return checkall();">
	<?php require 'constants/check_reply.php'; ?>
	<span id="name_status"></span>
	 <span id="email_status"></span>
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" id="UserName" class="form-control" name="user_name" required placeholder="Pseudo" onkeyup="checkname();">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="email" id="UserEmail" class="form-control" name="user_email" required placeholder="Adresse mail" onkeyup="checkemail();">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password" required class="form-control" placeholder="Mot de passe" id="password">
<i class="bi bi-eye-slash" id="togglePassword" style="margin-left :88%; cursor:pointer"></i>
</div>
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="confirmpassword" required class="form-control" placeholder="Saisisez une nouvelle fois le mot de passe">
</div>
</div>

<div class="text-center">
<div class="g-recaptcha" data-sitekey="6LeCVGcbAAAAAMqOy5uiz7s0YGEBoMEoUiy3LcmK" style="margin: 0 auto; width: 304px;"></div><br>
<input id="btnSubmit" type="submit"  onclick="return val_a();" value="Soumettre" class="btn btn-common log-btn">
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">À propos</h3></div>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instagram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>
<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Lien rapide</h3>
<ul class="menu">
<li><a href="./">- Accueil</a></li>
<li><a href="listings">- Annonces</a></li>
<li><a href="faqs">- FAQ</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="about">- À propos</a></li>
<li><a href="mentions">- Mentions Légales</a></li>
    <?php
	if ($logged == "1") {
print '<li><a href="'.$myrole.'">- Mon compte</a></li>
       <li><a href="logout">- Se déconnecter</a></li>';

	}else{
print '<li><a href="login">- Connexion</a></li>
       <li><a href="register">- Inscription</a></li>';

	}

	?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contactez-nous</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
</div>
</div>
</div>
</div>
</div>

</footer>


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
<script src="assets/js/password-validate.js"></script>

<script type="text/javascript">

function checkname()
{
 var name=document.getElementById( "UserName" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'constants/check-data.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response == '<div class="alert alert-warning">Username is already registered</div>')	
   {
   
   	 
    return false;	
   }
   else
   {

    return true;		
   }
  }
  });
 }
 else
 {

 }
}

function checkemail()
{
 var email=document.getElementById( "UserEmail" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'constants/check-data.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response == '<div class="alert alert-warning">Email is already registered</div>')	
   {

   	
   	 
    return false;

   }
   else
   {


    
    return true; 


   }
  }
  });
 }
 else
 {

 }
}


function checkall() {


var titleElement = document.getElementById("UserName");

    if(titleElement.innerHTML.length>3){
        return false;
    }


}


</script>

</body>

</html>