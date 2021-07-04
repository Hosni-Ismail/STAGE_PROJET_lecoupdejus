<?php
session_start();
require '../../constants/config.php';

$que = ucwords($_POST['question']);
$ans = $_POST['about'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("INSERT INTO tbl_faqs (quest, answ) VALUES (:quest, :answ)");
	$stmt->bindParam(':quest', $que);
	$stmt->bindParam(':answ', $ans);
	$stmt->execute();

	$_SESSION['reply'] = "017";
	header("location:../add-faq");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
			
?>			