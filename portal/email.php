

<?php
session_start();
//ini_set('SMTP','smtp.live.com');
//ini_set('smtp_port','995');
//ini_set('sendmail_from','cupgreek20@hotmail.com');
$giverid=$_POST['giverid'];
echo $giverid;
$con=mysqli_connect("localhost","root","","portal");
$id=$_SESSION["id"];
$r="select * from emp where id='$id';";
$f=mysqli_query($con,$r);
while($v=mysqli_fetch_array($f)){
   
    $name=$v[1];
    $email=$v[3];
    $ph=$v[4];
    $addr=$v[5];
    $about=$v[6];
    
}
echo $giverid;

echo    $name;
echo    $email;
echo     $ph;
echo  $addr;
echo    $about;
$g="select * from request where giverid='$giverid',empid='$id';";
$t=mysqli_query($con,$g);
if($t){
    $q="insert into request(giverid,empid,name,email,ph,addr,about) values('$giverid','$id','$name','$email','$ph','$addr','$about');";
$r=mysqli_query($con,$q);
    
if($r){
    echo "inserted";
}
else{
    echo "erro";
}


}
else{
    echo "already applied";
}




?>