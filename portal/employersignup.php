<!DOCTYPE html>
<html>
<head><title>EMPLOYER SIGN-UP</title>
    <link rel="stylesheet"  href="empdetails.css">
<script> 
function VALIDATE()
{var pd=document.RegForm.t4.value;
var cpd=document.RegForm.t5.value;
if(pd!=cpd)
{
    alert("Password doesn't match...");
    return false;
   }
   var Email=document.RegForm.Email.value;
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(Email.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
return false;
}
}
                 
 </script>   
</head>
<body>
    <div class="box">
    <h2>SIGN-UP FOR EMPLOYER</h2>
    <form name="RegForm" action="jobgivers.php" onsubmit="return VALIDATE()" method="POST">
       <?php 
        
        
        ?>
        <div class="inputBox">
            <input type="text" name="name" required>
            <label>Name</label>
        <div class="inputBox">
            <input type="text" name="email"  required ="">
            <label>Email</label>
            </div>
            <div class="inputBox">
            <input type="password" name="pass" minlength= "5" maxlength="10" required ="" >
            <label>Password</label>
            </div>
            
            
                <input type="submit" name="Submit" value="Submit">
            </form>
            </div> 
            
            </body>
            </html>