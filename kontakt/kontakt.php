<?php
    if(isset($_POST['submit'])){
        $message = 'Name:' . $_POST['name'] . "\n"
            . 'Email:' . $_POST['email'] . "\n"
            . 'Poruka:' . $_POST['message'];
        mail()
     } else {
        header('Location:index.php');
        exit();
    }
?>