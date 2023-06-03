<?php
session_start();
include ("connection.php");
if (!isset($_SESSION['code']) && !isset($_SESSION['pwd']) && !isset($_SESSION['uname'])) {
    ?><script>
    location.replace("index.php")
</script>
<?php
die();
  } 
  
    $room=$_SESSION['code'];
    $msg=$_POST['usermsg'];
    $uname=$_SESSION['uname'];
    $ip=$_SERVER['REMOTE_ADDR'];
    $query="INSERT INTO `msg` (`msg`, `room`, `ip`,`uname`) VALUES ( '$msg', '$room', '$ip','$uname');";
    $run_q=mysqli_query($conn,$query);
mysqli_close($conn);
?>