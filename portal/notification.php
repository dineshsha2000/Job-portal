<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
              
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="bootstrap.min.css">-->
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
            margin-left: 0px;
/*            text-align: center;*/
            color:black;
        }
        tr{
            
            background-color: bisque;
        }
        td{
            margin-left: 0px;
            padding: 50px;
        }
        th{
            margin-left: 0px;
            padding: 30px;
        }
        .cen{
/*            text-align: center;*/
        margin-right: 0px;
        }
        .sp{
/*
            text-align: center;
            align-content: center;
            align-items: center;
*/
            margin-left:100px;
        }
            
            body{
                border: 15px;
            }
            table{
                border: 4px;
                align-content: center;
/*                text-align: center;*/
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

  <?php
session_start();    
$con=mysqli_connect("localhost","root","","portal");
    


$v=$_SESSION["id"];
$con=mysqli_connect("localhost","root","","portal");
$r="select * from request where giverid='$v'";
$res=mysqli_query($con,$r);
if(mysqli_num_rows($res)==0){
    ?>
    <h4>No result</h4>
    <?php
}
else{    
    ?>
    <div class="">
  <div class="container cen">
   <h3 >Request</h3>
    <div class="sp">
    <table  class="table-striped ">
        <th>
         NAME
        </th>
        
        <th>
        Email
        </th>
        <th>
        phone
        </th>
        
        <th>
        Address
        </th>
        
        <th>
          About
        </th>
            <th>
        Result
        </th>
    
        <th>
          ACCEPT?Reject
        </th>
                   
    <?php
        while($f=mysqli_fetch_array($res)){
?>      
       <tr>
        <td>
        <h4>
            <?php echo $f[3]?>
        </h4>
        
        </td>
        
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
         <h4>
            <?php echo $f[6]?>
        </h4>
         </td>
         <td>
          <h4>
            <?php echo $f[7]?>
        </h4>
        </td>
         <td>
          <h4>
            <?php echo $f[9]?>
        </h4>
        </td>
         <td>
      <form method="post" action="status.php">
        <button class="btn btn-outline-dark" value="1" 
         name="but">
            ACCEPT
        </button>
        <br><br>
        <button class="btn btn-outline-dark" value="2" 
        name="but">
            REJECT
        </button>
        <input type="hidden" name="hid" 
        value="<?php echo $f[0];?>">
        </form>  
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



