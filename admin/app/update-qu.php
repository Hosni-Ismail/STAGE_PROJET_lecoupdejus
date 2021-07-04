<?php
session_start();
require '../../constants/config.php';

$qid = $_POST['id'];
$que = ucwords($_POST['question']);
$ans = $_POST['about'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_faqs SET quest = :ques, answ = :answ WHERE id = :id");
	$stmt->bindParam(':ques', $que);
	$stmt->bindParam(':answ', $ans);
	$stmt->bindParam(':id', $qid);

	$stmt->execute();

	$_SESSION['reply'] = "016";
	header("location:../edit-quest?node=$qid");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
			
?>	