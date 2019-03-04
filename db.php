<?php
 $conn = mysqli_connect("localhost", "root", "", "php");
 $name= $_POST["name"];
 $phone= $_POST["phone"];
 $email= $_POST["email"];
 $user= $_POST["name"];
 $password= $_POST["pass"];
 $query="INSERT into db (name,phone,email,user,password) values('$name','$phone','$email','$user','$password')";
 mysqli_query($conn,$query);
header('Location:reg.php');
?>
