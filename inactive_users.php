<?php

include("connection.php");

?>
<body><div> DELETING</div></body>
<?php

while(TRUE){
    $q1="select * from users";
    $r_q=mysqli_query($conn,$q1);
    $num=mysqli_num_rows($r_q);
    if($num<=1){
        continue;
    }
    sleep(2);
    $time=time()+5;
    $res=mysqli_query($conn,"update users set last_login='$time' where username='default' && room_id='default'");
    $q ="delete from users where last_login < $time;";
    $run_q=mysqli_query($conn,$q);
    }
    ?>