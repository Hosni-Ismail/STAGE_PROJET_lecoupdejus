<?php
session_start();
require '../../constants/config.php';
$ques_id = $_GET['node'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("DELETE from tbl_faqs WHERE id = :id");
	$stmt->bindParam(':id', $ques_id);
	$stmt->execute();

	$_SESSION['reply'] = "016";
	header("location:../faq");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
			
?>			