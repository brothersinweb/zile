<?php

include 'db.php';		

?>



<!DOCTYPE html>
<html>
<head>
    <title>Blank Standard HTML5 Web App Template</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <style>
        /* following two viewport lines are equivalent to meta viewport statement above, and is needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
        /*@-ms-viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }   @viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }*/
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<body>
    <form method="POST" action="admin-log.php">
        <label for="usernam">Username:</label><br/>
        <input type="text" name="uid" placeholder="Username"/><br/>
        <label for="password">Password:</label><br/>
        <input type="password" name="pwd" placeholder="Pasword"/><br/><br/> 
        <button type="submit" name="loginSubmit">Submit</button>
   </form>
   <?php
    if (isset($_POST['loginSubmit'])) {
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $sql = "SELECT * FROM admin WHERE uid = '$uid' AND pwd = '$pwd'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
            if($row = $result->fetch_assoc()) {
                    $_SESSION['id'] = $row['id'];
                    header("Location:index.php");
                    exit();
            }       
        }else{
             echo 'Pogresan username ili password !<br/><br/>';
          
           
        }
    }

   ?>
</body>
</html>
