<?php
/*======================PROBA===================================*/
function adminLogout(){
	if(isset($_POST['logoutSubmit'])){
		session_start();
		session_destroy();
		header("Location:index.php");
		exit();
	}
}



?>