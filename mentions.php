<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Mentions Légales</title>

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
<li class="nav-item">
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
<a class="active"  href="faq">
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
<h4 class="product-title">Mentions Légales</h4>
<ol class="breadcrumb">
<li><a href="./">Accueil /</a></li>
<li style="color:white;" class="current">Mentions Légales</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div class="faq section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="head-faq text-center">
<h4 class="section-title">Mentions Légales</h4>
</div>
<br><h4>Informations légales</h4>
<br><h4>1. Présentation du site.</h4>
<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
<p><strong>Propriétaire</strong> : Quovadev – SARL - 820 597 797 00019 – 75013<br />
<strong>Créateur</strong> : <a target="blank" href="">Moussa Timera</a><br />
<strong>Responsable publication</strong> : Moussa Timera – mtimera@protonmail.com<br />
Le responsable publication est une personne physique ou une personne morale.<br />
<strong>Webmaster</strong> : ISMAIL Hosni – hosni.ismail@protonmail.com<br />
<strong>Hébergeur</strong> : OVH – 75017<br />

<br><h4>2. Conditions générales d’utilisation du site et des services proposés.</h4>
<p>L’utilisation du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> sont donc invités à les consulter de manière régulière.</p>
<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Quovadev, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
<p>Le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> est mis à jour régulièrement par ISMAIL Hosni. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
<br><h4>3. Description des services fournis.</h4>
<p>Le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
<p>Quovadev s’efforce de fournir sur le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
<p>Tous les informations indiquées sur le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
<br><h4>4. Limitations contractuelles sur les données techniques.</h4>
<p>Le site utilise la technologie JavaScript.</p>
<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
<br><h4>5. Propriété intellectuelle et contrefaçons.</h4>
<p>Quovadev est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Quovadev.</p>
<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
<br><h4>6. Limitations de responsabilité.</h4>
<p>Quovadev ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.lecoupdejus.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
<p>Quovadev ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a>.</p>
<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Quovadev se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Quovadev se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
<br><h4>7. Gestion des données personnelles.</h4>
<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
<p>A l'occasion de l'utilisation du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
<p> En tout état de cause Quovadev ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> l’obligation ou non de fournir ces informations.</p>
<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
<p>Aucune information personnelle de l'utilisateur du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Quovadev et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a>.</p>
<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
<br><h4>8. Liens hypertextes et cookies.</h4>
<p>Le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Quovadev. Cependant, Quovadev n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
<p>La navigation sur le site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
  Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

<br><h4>9. Droit applicable et attribution de juridiction.</h4>
<p>Tout litige en relation avec l’utilisation du site <a href="//www.lecoupdejus.fr/">www.lecoupdejus.fr</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
<br><h4>10. Les principales lois concernées.</h4>
<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
<br><h4>11. Lexique.</h4>
<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
</div>
</div>
</div>
</div>

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