<?php
session_start();
$room=$_POST['room'];
include ('connection.php');
if(isset($_SESSION['uname']) && isset($_SESSION['code']) ){
    $uname=$_SESSION['uname'];
    $code=$_SESSION['code'];
}
else{

die();
}
$time=time();

$temp=1;
$s="select * from users where room_id='$code'";
        $run=mysqli_query($conn,$s);
        while($row=mysqli_fetch_assoc($run)){ 
            if($row['username']==$uname){
                $temp=1;
            }}

            if($temp==1){

$sql="select msg,stime,uname from msg where room='$room';";
$res ="";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
    if($row['uname']==$_SESSION['uname']){
        $res =$res . ' <li class="clearfix">';
        $res =$res . '                                    <div class="message-data text-right">';
        $res =$res . '                                        <span class="message-data-time">'.$row['uname'].' | ' .$row['stime'].'</span>';
        $res =$res . '                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">';
        $res =$res . '                                    </div>';
        $res =$res . '                                    <div class="message other-message float-right"> '.$row['msg'].'</div>';
        $res =$res . '                                </li>';
        $res =$res . ' <br>';
    }else{
        $res =$res . ' <li class="clearfix">';
        $res =$res . '                                    <div class="message-data">';
        $res =$res . '                                        <span class="message-data-time">'.$row['uname'].' | ' .$row['stime'].'</span>';
        $res =$res . '                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">';
        $res =$res . '                                    </div>';
        $res =$res . '                                    <div class="message my-message">'.$row['msg'].'</div>';
        $res =$res . '                                </li>';
        $res =$res . ' <br>';
    }
}}
echo $res;

    $temp=0;
}
?>