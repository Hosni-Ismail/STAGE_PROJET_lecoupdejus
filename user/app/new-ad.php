<?php
require '../../constants/config.php';
require '../../constants/check-login.php';
require '../../constants/uniques.php';

$ad_id = 'AN'.get_rand_numbers(8).'';
$ad_title = ucwords($_POST['title']);
$ad_category = $_POST['category'];
$ad_city = $_POST['city'];
$condition = $_POST['condition'];
$price = $_POST['price'];

if (isset($_POST['fixed'])) {
$fixed = "OUI";
}else{
$fixed = "NON";	
}

if (isset($_POST['brand'])) {
$brand = ucwords($_POST['brand']);
}else{
$brand = "";	
}

$desc = $_POST['description'];
$short_desc = ucfirst($_POST['shortdesc']);
setlocale(LC_TIME, "fr_FR", "French");
$datepost = date(' d M, Y');

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("INSERT INTO tbl_ads (ad_id, author, title, category, city, ad_condition, price, short_desc, fixed, brand, description, date_posted) VALUES (:adid, :author, :title, :category, :city, :adcond, :price, :shortdesc, :fixed, :brand, :description, :datepost)");
    $stmt->bindParam(':adid', $ad_id);
    $stmt->bindParam(':author', $myid);
    $stmt->bindParam(':title', $ad_title);
    $stmt->bindParam(':category', $ad_category);
    $stmt->bindParam(':city', $ad_city);
    $stmt->bindParam(':adcond', $condition);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':shortdesc', $short_desc);
    $stmt->bindParam(':fixed', $fixed);
    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':description', $desc);
    $stmt->bindParam(':datepost', $datepost);
    mkdir("../../uploads/ans/$ad_id");
    header("location:../images?node=$ad_id");

    $stmt->execute();
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }