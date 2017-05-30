<?php
if(isset($_POST['logoutSubmit'])){
	
session_destroy();
header("Location: index.php");
}
?>