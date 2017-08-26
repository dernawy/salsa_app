<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 7/8/2017
 * Time: 5:09 AM
 */



if(empty($_SESSION)){ // if the session not yet started
	session_start();

	unset($_SESSION['user_id']);
	unset($_SESSION['user_username' ]);
	unset($_SESSION['user_firstname']);
	unset($_SESSION['user_lastname']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_joindate']);
	unset($_SESSION['user_level']);
	unset($_SESSION['user_active']);
	unset($_SESSION['is_login']);

	$_SESSION['user_login_session']='0';

	session_destroy();

	header("Location:login/login.php");
exit;
}

?>

<html>
<head>

</head>
<body>


</body>
</html>
