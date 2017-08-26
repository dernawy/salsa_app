<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/13/2017
 * Time: 1:13 PM
 */
session_start();
$id = isset($_SESSION['id']);
// If user loged in go to page (normal) if no go to login page.
if(!$_SESSION['user_login_session']){
    header("Location:../login/login.php");
}
else {
    ?>

    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.7">

        <?php include '../../includes/header/header_include.php'; ?>
    </head>
    <body>

    <div id="id_admin_users_container" class="div_admin_users_container"><!-- Start of (div_admin_home_container) -->

        <div id="id_admin_users_header" class="div_admin_users_header"><!-- Start of (div_admin_home_header) -->
            <?php include 'administrator/includes/menus/menus/menu.users-home/menu.users-home.php';  ?>
        </div><!--  End of (div_admin_home_header) -->

        <div id="id_admin_users_contents" class="div_admin_users_contents"><!-- Start of (div_admin_home_contents) -->
            <?php print_r($id); ?>
        </div><!--  End of (div_admin_home_contents) -->

        <div id="id_admin_users_footer" class="div_admin_users_footer"><!-- Start of (div_admin_home_footer) -->

        </div><!-- End of (div_admin_home_footer) -->

    </div><!-- End of (div_admin_home_container) -->

    </body>
    </html>

    <?php
}
    ?>
