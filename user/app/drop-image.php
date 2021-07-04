<?php
$file = $_GET['lnk'];
$post = $_GET['id'];

$file = '../'.$file.'';
if (!unlink($file))
  {
  header("location:../images.php?node=$post");
  }
else
  {
  header("location:../images.php?node=$post");
  }
  ?>