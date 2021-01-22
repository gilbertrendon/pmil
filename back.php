<?php
$con=mysqli_connect("localhost", "root", "", "pmil");
$Nam=$_POST['Name'];
$LName=$_POST['LName'];

$query="INSERT INTO `user`(`id`, `Name`, `LName`) VALUES (NULL,'$Nam','$LName')";
$Insert=mysqli_query($con,$query);
//echo $query;
if($Insert){
    echo "Se registró correctamente";
}else{
    echo "Error".mysqli_error();
}



?>