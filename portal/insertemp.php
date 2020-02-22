<?php 
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$addr=$_POST['addr'];
$about=$_POST['about'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
//$cert=$_POST['cert'];
echo $name;
echo $dob;
echo $email;
echo $ph;
echo $about;
echo $pass;
echo $addr;
$cert=0;
echo $cert;

$con=mysqli_connect("localhost","root","","portal");
if($con){
    echo " connected";
}
else{
    echo "error";
}

$r="insert into emp(name, dob, email, ph, addr, about, pass, qualification) values('$name','$dob','$email','$ph','$addr','$about','$pass','$cert');";

$f=mysqli_query($con,$r);
if($f){
    echo "insert";
}
else{
    echo "eror";
}

$q="select id from emp where email = '$email'";
$v=mysqli_query($con,$q);


?>




