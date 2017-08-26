<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/13/2017
 * Time: 12:54 PM
 */

session_start();
$id = isset($_SESSION['id']);
// If user loged in go to page (normal) if no go to login page.
if(!$_SESSION['user_login_session']){
    header("Location:components/users/login/login.php");
}
else{
    ?>

    <html>
    <head>
        <?php include'includes/header/header_include.php'; ?>
    </head>
    <body>

    <div id="id_admin_home_container" class="div_admin_home_container"><!-- Start of (div_admin_home_container) -->

        <div id="id_admin_home_header" class="div_admin_home_header"><!-- Start of (div_admin_home_header) -->
            <?php include 'includes/menus/menus/menu.admin-home/menu.admin-home.php';  ?>
        </div><!--  End of (div_admin_home_header) -->

        <div id="id_admin_home_contents" class="div_admin_home_contents"><!-- Start of (div_admin_home_contents) -->

        </div><!--  End of (div_admin_home_contents) -->

        <div id="id_admin_home_footer" class="div_admin_home_footer"><!-- Start of (div_admin_home_footer) -->

        </div><!-- End of (div_admin_home_footer) -->

    </div><!-- End of (div_admin_home_container) -->

    </body>
    </html>


    <?php

}

?>

