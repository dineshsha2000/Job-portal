<?php
$con=mysqli_connect("localhost","root","","portal");
$v=$_POST['but'];
$id=$_POST['hid'];
echo "id is $id";
if($con){
    echo "connection succesful";
}
if($v==1){
    echo "successfully accepted";
    $m="ACCEPTED";
}
elseif($v==2){
echo "successfully rejected";
     $m="REJECTED";   
             
    }

//echo "value is '$m'";
$q="update request SET status='$v',result='$m' where autoid='$id';";

$res=mysqli_query($con,$q);


if($res){
    echo "successful";
    header("Location: notification.php");
}
else{
    echo "sorry";
}
