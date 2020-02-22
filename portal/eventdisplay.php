
<?php 
session_start();
if(isset($_POST['but'])){
$role=$_POST['role'];
$salary=$_POST['salary'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
              
  <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="stylesheet" href="bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <style>
       table, th, td {
  border-style: hidden;
}
            body{
   
            
            }
        th{
            background-color:black;
            padding: 10px;
            color:white;
        }
        table{
            text-align: center;
            color:black;
        }
        tr{
            
            background-color: bisque;
        }
        td{
            margin-left: 35px;
            padding: 50px;
        }
        th{
            margin-left: 70px;
            padding: 30px;
        }
        .cen{
            text-align: center;
        margin-right: 40px;
        }
        .sp{
            text-align: center;
            align-content: center;
            align-items: center;
            margin-left:75px;
        }
            
            body{
                border: 15px;
            }
            table{
                border: 4px;
                align-content: center;
                text-align: center;
            }
            a{
                float: right;
            }
    </style>

</head>
<body class="container">
<a href="home.php"><button class=" b btn btn-lg btn-outline-dark">Back</button></a>
<form method="post" action="eventdisplay.php">
<div class="col-md-6">
<div class="form-group">
    Role:
    <input type="text" name="role" class="form-control" >
    
    
</div>
<br>
<div class="form-group">
    Salary:
    <input type="text" name="salary" class="form-control" >
    
    
</div>
    <button type="submit" name="but" class="btn btn-lg btn-outline-dark" >Search</button>      
</div>      
</form>                 
                  <?php
       $con=mysqli_connect("localhost","root","","portal");
    
    
        
echo $_SESSION["email"]; 
echo $_SESSION["id"];    
    
    
    
    
    
    
if(isset($_POST['but'])){

//$q="(select * from eventdetails) MINUS (select * from eventdetails where role == '$role' and salary  '$salary';))";

//$q="select * from eventdetails where role == '$role' AND salary >= '$salary';";    
    
$q="select * from eventdetails where role='$role' AND salary>='$salary';";    
$res=mysqli_query($con,$q);
    
if(mysqli_num_rows($res)==0) {
    ?>
    <h3 class="cen">NO result</h3>
    <?php
}
else{    
    ?>
    <div class="">
    
  <div class="container cen">
   <h3 >Search History</h3>
    <div class="sp">
    <table  class="table-striped ">
        <th>
           Role
        </th>
        
        <th>
            Event Name
        </th>
        <th>
            Salary
        </th>
        
        <th>
           Duration
        </th>
        <th>
            Description
        </th>
        
        <th>
          Apply
        </th>
        
    <?php
        while($f=mysqli_fetch_array($res)){
           
?>      <tr>
       
        <td>
        <h4>
            <?php echo $f[2]?>
        </h4>
        
        </td>
        
        <td>
         <h4>
            <?php echo $f[1]?>
        </h4>
        </td>
        
        <td>
         <h4>
            <?php echo $f[3]?>
        </h4>
        <td>
         <h4>
            <?php echo $f[4]?>
        </h4>
    
        </td>
            <td>
         <h4>
            <?php echo $f[5]?>
        </h4>
    
        </td>
        
        <td>
        <form method="POST" action="email.php">
        <input type="hidden" value="<?php echo $f[0]?>" name="giverid">
        <button class="btn btn-lg btn-outline-dark" >Apply</button>
        </form>
        </td>
         
        
        </tr>
      
       
<?php
}    
   
}

    
    
    
    
    
    
    
}

else{
 $q="select * from eventdetails;";
  
    
$res=mysqli_query($con,$q);
    
if(mysqli_num_rows($res)==0){
    ?>
    <h3 class="cen">NO result</h3>
    <?php
}
else{    
    ?>
    <div class="">
  <div class="container cen">
   <h3 >Current Activities</h3>
    <div class="sp">
    <table  class="table-striped ">
        <th>
        EVENT NAME
        </th>
        
        <th>
        ROLE
        </th>
        <th>
        Duration
        </th>
        
        <th>
           Amount
        </th>
         <th>
           Description
        </th>
        <th>
          More
        </th>
        
    <?php
        while($f=mysqli_fetch_array($res)){
?>      <tr>
        <td>
        <h4>
            <?php echo $f[1]?>
        </h4>
        
        </td>
        
        <td>
         <h4>
            <?php echo $f[2]?>
        </h4>
        </td>
        
        <td>
         <h4>
            <?php echo $f[4]?>
        </h4>
        </td>
        <td>
         <h4>
            <?php echo $f[3]?>
        </h4>
         </td>
         <td>
          <h4>
            <?php echo $f[5]?>
        </h4>
        </td>
         
         <td>
        <form method="POST" action="email.php">
        <input type="hidden" value="<?php echo $f[0]?>" name="giverid">
        <button class="btn btn-lg btn-outline-dark" >Apply</button>
        </form> </td>
        
        
        
        </tr>
      
     
<?php       
    
}

    
    
}
}
?>      
    
</table>
</div>
</div>

</body>
</html>