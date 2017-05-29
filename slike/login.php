<?php

$conn = mysqli_connect('localhost','root','','zile');

if(!$conn){
	die("konekcija ne uspela!");

}


	if (isset($_POST['loginSubmit'])) {
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		$sql = "SELECT * FROM admin WHERE uid = '$uid' AND pwd = '$pwd'";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			if($row = $result->fetch_assoc()) {
				    $_SESSION['id'] = $row['id'];
					echo 'ulogovan';
                    #header("Location:index.php?loginsuccess");
					exit();
			
		}
		}else{
			#header("Location:index.php?loginfaeild");
			#exit();
            echo 'uspesno';
		}
	}		

?>


	if(isset($_POST['logoutSubmit'])){
		session_start();
		session_destroy();
		header("Location:index.php");
		exit();
	}
