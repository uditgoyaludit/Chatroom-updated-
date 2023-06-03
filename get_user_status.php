<?php
error_reporting(0);
session_start();
include("connection.php");
$uname=$_SESSION['uname'];
$code=$_SESSION['code'];
$time=time();
$sql="select * from users where room_id='$code'";
        $run=mysqli_query($conn,$sql);
$res="";
while($row=mysqli_fetch_assoc($run)){ 
    if($row['last_login']>$time){
      if($row['username']==$uname){
      $res =$res . '<li class="clearfix">';
      $res =$res . '                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">';
      $res =$res . '                                    <div class="about">';
      $res =$res . '                                        <div class="name" style="color: green;"> You </div>';
      $res =$res . '                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>';
      $res =$res . '                                    </div>';
      $res =$res . '                                </li>';
      }
    else{
      $res =$res . '<li class="clearfix">';
      $res =$res . '                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">';
      $res =$res . '                                    <div class="about">';
      $res =$res . '                                        <div class="name">'.$row['username'].'</div>';
      $res =$res . '                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>';
      $res =$res . '                                    </div>';
      $res =$res . '                                </li>';

    }}}
    
    echo $res;
    
?>