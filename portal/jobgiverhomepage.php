<!--
<!DOCTYPE html>
<html>
<head><title>Job-giver form</title>
<link rel="stylesheet"  href="login.css">
</head>

<body>
    <div class="box">
        <h2>JOB-GIVER</h2>
        <form name="RegForm" action="createevent.html" onsubmit="return VALIDATE()" method="POST">
        
            <input type="button" 
            onclick="href = jobs.html" >
            <label></label>
        
        
        
            <input type="submit" name="Submit"  value="Create event">
        </form>
        </div> 
        
</body>
</html>
-->




























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
            margin-left:250px;
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
      <script>
    function myfun(){
        
        alert("logged out successfully");
            
    }
    
    </script>

 <form method="post" action="logout.php">
  <button type="submit" onclick="myfun()"class="btn btn-lg btn-info">LOG OUT</button>
   <br>
   </form>

<div class="col-md-6">
 <div class="box">
        <h2>JOB-GIVER</h2>
        <form name="RegForm" action="createevent.html" onsubmit="return VALIDATE()" method="POST">
        
            <input type="submit" name="Submit"  value="Create event">
        </form>
        </div> 
        <form method="post" action="notification.php">
      <button type="submit">
          
        view notification
      </button>
        </form>
    

  <?php
session_start();    
$con=mysqli_connect("localhost","root","","portal");
    
$email=$_SESSION["email"];
$q="select id from jobgivers where email='$email'";

$result=mysqli_query($con,$q);
while($f=mysqli_fetch_array($result)){
    $id=$f[0];
}
$_SESSION["id"] = $id; 

$q="select * from eventdetails where id='$id';";
  
    
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
        
        </tr>
      
       
<?php
}    
   
}

    
    
    
    
    
    
    


    
    

?>      
    
</table>
</div>
</div>
</body>
</html>



