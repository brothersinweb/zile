<?php
include 'function.php';
include 'db.php';		

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <style>
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; 
        @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }
        @viewport { user-zoom: fixed ; min-zoom: 100% ; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<body>
<?php
  echo  '<form method="POST" action="'.getLogin($conn).'">
        <label for="usernam">Username:</label><br/>
        <input type="text" name="uid" placeholder="Username"/><br/>
        <label for="password">Password:</label><br/>
        <input type="password" name="pwd" placeholder="Pasword"/><br/><br/> 
        <button type="submit" name="loginSubmit">Submit</button>
   </form>';
?>
</body>
</html>
