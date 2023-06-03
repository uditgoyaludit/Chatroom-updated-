<?php
session_start();
include ("connection.php");
$uname=$_SESSION['uname'];
$q ="delete from users where username='$uname'";
$run_q=mysqli_query($conn,$q);
unset($_SESSION['code'],$_SESSION['pwd']);
?><script>
    location.replace("index.php")
</script>
<?php
die();
?>