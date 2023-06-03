<?php
session_start();
include("connection.php");
if (!isset($_SESSION['code']) && !isset($_SESSION['pwd']) && !isset($_SESSION['uname'])) {
  header("Location:index.php");
  die();
} else {
  $code = $_SESSION['code'];
  $uname = $_SESSION['uname'];
  $sql = "select * from reg where room_name='$code'";
  $run = mysqli_query($conn, $sql);
  $result_own= mysqli_fetch_assoc($run);
  $res = mysqli_num_rows($run);
  if ($res == 1) {
    $owner=$result_own['owner_name'];
    $sql1 = "select * from users where  room_id='$code' and username='$uname'";
    $run1 = mysqli_query($conn, $sql1);
    $res1 = mysqli_num_rows($run1);
    if ($res1 == 0) {
      $query = "INSERT INTO `users` (`username`, `room_id`) VALUES ('$uname', '$code');";
      $run = mysqli_query($conn, $query);
      $sql = "select * from users where room_id='$code'";
      $run = mysqli_query($conn, $sql);
      $time = time();
    }
  } else {
    echo "Room ID Not Found";
    header("Location:index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>ChatRoom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #f4f7f6;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        .chat-app .people-list {
            width: 280px;
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px;
            z-index: 7
        }

        .chat-app .chat {
            margin-left: 280px;
            border-left: 1px solid #eaeaea
        }

        .people-list {
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s
        }

        .people-list .chat-list li {
            padding: 10px 15px;
            list-style: none;
            border-radius: 3px
        }

        .people-list .chat-list li:hover {
            background: #efefef;
            cursor: pointer
        }

        .people-list .chat-list li.active {
            background: #efefef
        }

        .people-list .chat-list li .name {
            font-size: 15px
        }

        .people-list .chat-list img {
            width: 45px;
            border-radius: 50%
        }

        .people-list img {
            float: left;
            border-radius: 50%
        }

        .people-list .about {
            float: left;
            padding-left: 8px
        }

        .people-list .status {
            color: #999;
            font-size: 13px
        }

        .chat .chat-history {
            height: 500px;
            padding: 20px;
            border-bottom: 2px solid #fff;
            max-height: 500px;
            overflow-y: scroll;

        }

        .chat .chat-header img {
            float: left;
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-header .chat-about {
            float: left;
            padding-left: 10px
        }

        .chat .chat-history {
            padding: 20px;
            border-bottom: 2px solid #fff
        }

        .chat .chat-history ul {
            padding: 0
        }

        .chat .chat-history ul li {
            list-style: none;
            margin-bottom: 30px
        }

        .chat .chat-history ul li:last-child {
            margin-bottom: 0px
        }

        .chat .chat-history .message-data {
            margin-bottom: 15px
        }

        .chat .chat-history .message-data img {
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-history .message-data-time {
            color: #434651;
            padding-left: 6px
        }

        .chat .chat-history .message {
            color: #444;
            padding: 18px 20px;
            line-height: 26px;
            font-size: 16px;
            border-radius: 7px;
            display: inline-block;
            position: relative
        }

        .chat .chat-history .message:after {
            bottom: 100%;
            left: 7%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .my-message {
            background: #efefef
        }

        .chat .chat-history .my-message:after {
            bottom: 100%;
            left: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #efefef;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .other-message {
            background: #e8f1f3;
            text-align: right
        }

        .chat .chat-history .other-message:after {
            border-bottom-color: #e8f1f3;
            left: 93%
        }

        .chat .chat-message {
            padding: 20px
        }

        .online,
        .offline,
        .me {
            margin-right: 2px;
            font-size: 8px;
            vertical-align: middle
        }

        .online {
            color: #86c541
        }

        .offline {
            color: #e47297
        }

        .me {
            color: #1d8ecd
        }

        .float-right {
            float: right
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        @media only screen and (max-width: 767px) {
            .chat-app .people-list {
                height: 127px;
                width: 100%;
                overflow-x: auto;
                background: #fff;
                left: -2px;
                display: block;
                margin-top: 587px;
            }

            .chat-app .people-list.open {
                left: 0
            }

            .chat-app .chat {
                margin: 0
            }

            .chat-app .chat .chat-header {
                border-radius: 0.55rem 0.55rem 0 0
            }

            .chat-app .chat-history {
                height: 300px;
                overflow-x: auto
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            .chat-app .chat-list {
                height: 650px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: 600px;
                overflow-x: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
            .chat-app .chat-list {
                height: 480px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: calc(100vh - 350px);
                overflow-x: auto
            }
        }

        .overflow {
            overflow-y: scroll;
            max-height: 500px;
            /* Adjust the max-height value as needed */
        }

        .btn {
            margin-top: 2px;
            margin-right: 10px;
            background-color: rgb(255, 30, 30);
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 10px;
        }


        .btn:hover {
            background-color: rgb(235, 68, 68);
        }
        #usermsg {
        /* Styles for the text input */
        width: 45vw;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    
    #submitmsg {
        /* Styles for the submit button */
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    #submitmsg,
    #enter {

      color: white;
      padding: 4px 10px;
      font-weight: bold;
      border-radius: 4px;
    }
    
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <div class="overflow">
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <div class= 'userstatus'>

                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">Room Name -  <?php echo $_SESSION['code']; ?> </h6>
                                        <small>Owner Name - <?php echo $owner; ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                    <button class="btn" onclick="logout()"><i class="fa fa-close"></i> Close</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="chat-history">
                            <ul class="m-b-0">
                                <div class='anyclass'>
                                <!-- MSG -->
                                </div>
                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                                <form method="POST" id="msg">
                                    <div class="input-group-prepend">
                                    <input name="usermsg" id="usermsg" type="text" class="form-control"
                                    placeholder="Enter text here..." required onkeypress="handleKeyPress(event)">
                                        <input type="submit" value="Submit" name="submitmsg" id="submitmsg">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        function logout(){
            location.replace('logout.php');
        }
      function updateUserStatus() {
        jQuery.ajax({
          url: 'update_user_status.php',
          success: function() {
  
          },
        });
      }
  
      setInterval(function() {
          updateUserStatus();
        }, 1000
  
      )
  
      setInterval(runFunction, 1000);
  
      function runFunction() {
        $.post("htcont.php", {
            room: '<?php echo $code ?>'
          },
          function(data, status) {
            document.getElementsByClassName('anyclass')[0].innerHTML = data;
          },
          
        )
  
      }
      
      setInterval(getFunction, 1000);
  
      function getFunction() {
        $.post("get_user_status.php", {
            room: '<?php echo $code ?>',
            uname: '<?php echo $uname ?>'
          },
          function(data, status) {
          document.getElementsByClassName('userstatus')[0].innerHTML = data;
        }
        )
      }
      
      $(document).ready(function() {
  
        $('#msg').submit(function(event) {
        event.preventDefault();
        var clientmsg =1 ;
        $.ajax({
            url: 'chat_data.php',
            type: 'POST',
            data: $('#msg').serialize(),
            room: '<?php echo $_SESSION['code'] ?>',
            uname: '<?php echo $_SESSION['uname'] ?>'
          });
          var form = document.getElementById("msg");
          form.reset();
          return false;
          
        }
        );
      });
      function handleKeyPress(event) {
        if (event.shiftKey && event.keyCode === 13) {
          event.preventDefault();
  
          var input = document.getElementById('usermsg');
          var startPos = input.selectionStart;
          var endPos = input.selectionEnd;
  
          // Insert a line break or space at the current cursor position
          var newValue = input.value.substring(0, startPos) + ' ' + input.value.substring(endPos);
          input.value = newValue;
  
          // Move the cursor position to the appropriate location
          input.selectionStart = input.selectionEnd = startPos + 1;
        }
      }
    </script>

</body>

</html>