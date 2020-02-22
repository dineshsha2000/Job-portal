<?php 
session_start();
$name=$_POST['email'];
$pass=$_POST['pass'];
$af=$_POST['role'];

    

 $con=mysqli_connect("localhost","root","","portal");

if($af==1){
    
    $q="select empname,email from jobgivers where email='$name' AND password='$pass'";
    $result=mysqli_query($con,$q);
  
    if(mysqli_num_rows($result)>0) 
        
{
        
echo "successfully login";
$_SESSION["email"] = $name; 
               
        header("location:jobgiverhomepage.php");
    }
else{
    echo "sorry invalid";

}

    
    
    
    
    
    
}
else{
    

    

$q="select id from emp where email='$name' AND pass='$pass'";
    $result=mysqli_query($con,$q);
  
    if(mysqli_num_rows($result)>0) 
        
{
  while($v=mysqli_fetch_array($result)){
      $id=$v[0];
  }
echo "successfully login";
$_SESSION["email"] = $name; 
$_SESSION["id"] = $id;         
header("location:eventdisplay.php");               
        
    }
else{
    echo "sorry invalid";

}
}
?>