<?php

function userLogout(){
	if(isset($_POST['logout'])){
		session_start();
		session_destroy();
		header("Location:index.php");
		exit();
	}
}

 function getLogin($conn){
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
}


?>