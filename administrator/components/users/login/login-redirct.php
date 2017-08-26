<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 7/7/2017
 * Time: 2:54 PM
 */



session_start();

// Including the class
	require_once("../../../../classes/user_classes/class_login.php");

// You must establish a connection to the mysql database before using this class


	if (isset($_POST['login'])) {



		// Instantiating the class object

		$login = new Login();

		# Class configuration methods:

		// Setting the user table of mysql database
		$login->setDatabaseUsersTable ( 'users' );

		// Setting the crypting method for passwords, can be set as 'sha1' or 'md5'
		$login->setCryptMethod ( 'sha1' );

		// Setting if class messages will be shown
		$login->setShowMessage ( true );

		# Setting login session:

		$login->setLoginSession ();

		$login->getUserId();
		$uid = $_SESSION['id'];

		$login->getMessage ('','', '','',true);


		header ( "location:../../../index.php?user-id=$uid" );
	}
?>