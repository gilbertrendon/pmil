<?php
$con=mysqli_connect("localhost", "root", "", "pmil");
$Nam=$_POST['Name'];
$LName=$_POST['LName'];


//Miramos si hay usuario(s)
//$sqlsel = "SELECT * FROM user;

  //$aSDF = "CREATE TABLE IF NOT EXISTS `pmil`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(100) NOT NULL , `LName` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB
$query0 = "CREATE TABLE IF NOT EXISTS `pmil`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(100) NOT NULL , `LName` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
$query="INSERT INTO `user`(`id`, `Name`, `LName`) VALUES (NULL,'$Nam','$LName')";
$Create=mysqli_query($con,$query0);
$Insert=mysqli_query($con,$query);
//echo $query;
if($Insert){
    echo "Se registró correctamente";
}else{
    echo "Error".mysqli_error();
}



?>