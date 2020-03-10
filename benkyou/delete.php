<?php
session_start();
include_once 'conect.php';
$id = $_SESSION['id'];

$filename="uploads/image".$id."*";
$fileinfo=glob($filename);
$fileext=explode(".",$fileinfo[0]);
$fileactualext=$fileext[1];

$file="uploads/image".$id.".".$fileactualext;

if(!unlink($file))
   echo "File was not deleted!";
else
  echo "File was deleted!";

$sql="UPDATE profileimg SET status=1 WHERE userid='$id';";
mysqli_query($conn, $sql);
header("Location: profil.php?deletesuccess");
?>