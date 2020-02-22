<?php
    session_start();
    $email=$_SESSION["email"];
    $q="select id from jobgivers where email='$email'";
    $con=mysqli_connect("localhost","root","","portal");
    
    if($con){
        echo "Connected";
    }
    else{
        echo "connection error";
    }
    $result=mysqli_query($con,$q);
    while($f=mysqli_fetch_array($result)){
        $id=$f[0];
    }
    $role=$_POST['role'];
    $eventname=$_POST['eventname'];
    $dur=$_POST['dur'];
    $salary=$_POST['salary'];
    $des=$_POST['des'];

 echo $dur;
    $ins="insert into eventdetails(id,role,eventname,salary,dur,des) values('$id','$role','$eventname','$salary','$dur','$des')";

    $done=mysqli_query($con,$ins);
    if($done){
        echo "Successfully Inserted";
    }
    else{
        echo "Error";
    }
?>