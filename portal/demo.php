<?php 
session_start();
$name=$_POST['email'];
$pass=$_POST['pass'];
$af=$_POST['opt'];

    

 $con=mysqli_connect("localhost","root","","portal");

if(af==1){
    
    $q="select name,email from jobgivers where email='$name' AND pass='$pass'";
    $result=mysqli_query($con,$q);
  
    if(mysqli_num_rows($result)>0) 
        
   {
        
echo "successfully login";
//$_SESSION["email"] = $name; 
               
        
    }
    
    else{
        echo "error";
    }

    
}
else{
    

    

$q="select name,email from emp where email='$name' AND pass='$pass'";
    $result=mysqli_query($con,$q);
  
    if(mysqli_num_rows($result)>0) 
        
{
        
echo "successfully login";
//$_SESSION["email"] = $name; 
               
        
    }
else{
    echo "sorry invalid";

}
}
?>