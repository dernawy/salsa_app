<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/13/2017
 * Time: 1:50 PM
 */

include '../../../../classes/class.user_manager.php';

include '../../../../config/user_config/usermanager_config.php';
session_start();
$id = isset($_SESSION['id']);

// If user loged in go to page (normal) if no go to login page.
if(!$_SESSION['user_login_session']){
	header("Location:../login/login.php");
}
else {

	$usermanager = new UserManager();

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
	$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead

	$userinfo = array('ID', 'User Name', 'Email', 'Active', 'Level', 'Loged', 'Banned', 'Confirmed', 'Last visit', 'Operations');

	?>

	<html>
	<head>
		<?php include '../../../../includes/header/header_include.php'; ?>
	</head>
	<body>
	<div id="" class="container-fluid"><!-- Start of (container-fluid) -->

		<div id="" class=""><!-- Start of (container) -->

			<div id="id_admin_delusers_container" class="div_admin_delusers_container">
				<!-- Start of (div_admin_delusers_container) -->

				<div id="id_div_deluser_headernews" class="div_deluser_headernews">
					<!-- Start of (div_deluser_headernews) -->

					<h4 id="id_deluser_headernews" class="h1_deluser_headernews">
						<!-- Start of (h4_deluser_headernews) -->
						Header news
					</h4><!-- End of (h4_deluser_headernews) -->

				</div><!-- End of (div_deluser_headernews) -->

				<div id="id_admin_delusers_header" class="div_admin_delusers_header">

				</div><!--  End of (div_admin_delusers_header) -->

				<div id="id_div_deluser_pagetitle" class="div_deluser_pagetitle">
					<!-- Start of (div_deluser_pagetitle) -->

					<h1 id="id_deluser_pagetitle" class="h1_deluser_pagetitle"><!-- Start of (h1_deluser_pagetitle) -->
						User Manager
					</h1><!-- End of (h1_deluser_pagetitle) -->

				</div><!-- End of (div_deluser_pagetitle) -->
				<div id="id_div_adduser" class="div_adduser"><!-- Start of (div_deluser_pagetitle) -->
					<a class="btn btn-outline-unban" href="add_form.php">Add User</a><br/><br/>
				</div>
				<div id="id_admin_delusers_contents" class="div_admin_delusers_contents panel panel-info">
					<!-- Start of (div_admin_delusers_contents) -->
					<!-- Default panel contents -->
					<div class="panel-heading">Mange Registred Users (Users Manager Dashboard, UMD)</div>
					<div class="" style="overflow-x:auto;">
						<?php
						$usermanager->viewUsersBoard();
						?>
					</div>
				</div><!--  End of (div_admin_delusers_contents) -->
				<div id="id_div_deluser_table_below" class="div_deluser_table_below">
					<div class="alert alert-info" role="alert">
						<p><span
								class='del_status_users_no glyphicon glyphicon-user'></span> <?php echo "<span class='del_status_users_no_txt1'>" . "There are" . "</span><span class='stattstic_users_count'>" . (mysqli_num_rows($result)) . "</span>" ?>
							<span class="del_status_users_no_txt2">User(s) in database.</span></p>
					</div>
				</div>
				<div id='id_admin_delusers_footer' class='div_admin_delusers_footer'>
					<!-- Start of (div_admin_delusers_footer) -->

				</div><!-- End of (div_admin_delusers_footer) -->
			</div><!-- End of (div_admin_delusers_container) -->
		</div><!-- End of (container) -->
	</div><!-- End of (container-fluid) -->

	</body>
	</html>

	<?php
}
?>