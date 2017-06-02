<?php/*MORA DA SE PROVERI ONLINE DA LI RADI SLANJE EMAIL-A*/
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
            if(empty($_POST['name'])){
                echo 'morate popuniti sva polja!';
                exit();
            }
    } else {
        $message = 'Name:' . $_POST['name'] . "\n"
            . 'Email:' . $_POST['email'] . "\n"
            . 'Poruka:' . $_POST['message'];
        mail('funkerkv@gmail.com', 'test', $message, 'From:ns@lsadjf.com');
        $email = test_input($_POST["email"]);
        header('Location:index.php');
     } else {
        header('Location:inde.php');
        exit();
    }
}
?>