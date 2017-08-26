<?php
// including the database connection file
include '../../../../classes/class.user_manager.php';
session_start();



	//getting id from url
	$id = $_GET['id'];
	print_r($id);
	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id='$id'");

	while($res = mysqli_fetch_array($result)) {
		$user_lastname   = $res['user_lastname'];
		$user_firstname  = $res['user_firstname'];
		$user_username   = $res['user_username'];
		$user_password   = $res['user_password'];
		$user_email      = $res['user_email'];
		$user_joindate   = $res['user_joindate'];
		$user_activ      = $res['user_active'];
		$user_level      = $res['user_level'];
		$user_islogin    = $res['is_login'];
		$user_banned     = $res['user_banned'];
		$user_confirmed  = $res['user_confirmed'];
		$user_lastvisit  = $res['user_lastvisit_date'];
		$user_parameters = $res['user_params'];
		$user_lastreset  = $res['user_lastreset_time'];
		$user_resetcount = $res['user_reset_count'];
	}


$usermanager = new UserManager();

$usermanager->setUsreTable("users");

$usermanager->setInscTable("inscription");

$usermanager->editUser();
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_form.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="lastname" value="<?php echo $user_lastname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="firstname" value="<?php echo $user_firstname;?>"></td>
			</tr>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $user_username;?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $user_password;?>"></td>
			</tr>
			 <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $user_email;?>"></td>
            </tr>
            <tr> 
                <td>Join Date</td>
                <td><input type="text" name="joindate" value="<?php echo $user_joindate;?>"></td>
            </tr>
			<tr> 
                <td>User Active</td>
                <td><input type="text" name="useractiv" value="<?php echo $user_activ;?>"></td>
            </tr>
			<tr> 
                <td>User Level</td>
                <td><input type="text" name="userlevel" value="<?php echo $user_level;?>"></td>
            </tr>
			<tr> 
                <td>Is Login</td>
                <td><input type="text" name="islogin" value="<?php echo $user_islogin;?>"></td>
            </tr>
			<tr>
				<td>Is Banned</td>
				<td><input type="text" name="isbanned" value="<?php echo $user_banned;?>"></td>
			</tr>
			<tr>
				<td>Is Confirmed</td>
				<td><input type="text" name="isconfirmed" value="<?php echo $user_confirmed;?>"></td>
			</tr>
			<tr> 
                <td>Last Visite</td>
                <td><input type="text" name="lastvisit" value="<?php echo $user_lastvisit;?>"></td>
            </tr>
			<tr> 
                <td>User Parameters</td>
                <td><input type="text" name="parameters" value="<?php echo $user_parameters;?>"></td>
            </tr>
			<tr> 
                <td>Last Reset</td>
                <td><input type="text" name="lastreset" value="<?php echo $user_lastreset;?>"></td>
            </tr>
			<tr> 
                <td>Reset Count</td>
                <td><input type="text" name="resetcount" value="<?php echo $user_resetcount;?>"></td>
            </tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
