<?php 
session_destroy();
?>
<div class="alert alert-warning" role="alert">
    LOGGED OUT
</div>
<?php
header("location:home.html");
?>