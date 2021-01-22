<?php
$con=mysqli_connect("localhost", "root", "", "pmil");
$Nom=$_POST['Name'];
$Ape=$_POST['LName'];

$Insert=mysqli_query($con,"INSERT INTO `User`(`id`, `Name`, `LName`) VALUES ('','$Name','LName')");

if($Insert){
    echo "Se registró correctamente";
}else{
    echo "Error".mysqli_error();
}



?>