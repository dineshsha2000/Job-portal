<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","portal");

if($con){
    echo "connected";
}
else{
    echo "error";
}
$r="insert into jobgivers (empname,email,password) values('$name','$email','$pass');";
$f=mysqli_query($con,$r);
if($f){
    echo "inserted sucessfully";
   header("location:login.php");
}
else{
    echo "error ";
}





?>