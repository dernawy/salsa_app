<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/22/2017
 * Time: 4:42 PM
 */

include '../../../../classes/class.user_manager.php';

$usermanager = new UserManager();

$usermanager->setUsreTable("users");

$usermanager->setInscTable("inscription");

$usermanager->addUser();

?>

<html>
<head>
    <title>Add Data</title>
    <?php include'../../../../includes/header/header_include.php'; ?>
</head>

<body>

<div id="" class="container">

    <div id="id_admin_delusers_header" class="div_admin_delusers_header"><!-- Start of (div_admin_delusers_header) -->
        <?php include '../../../../includes/menus/users_menu/menu.user_add.php'; ?>
    </div><!--  End of (div_admin_delusers_header) -->

    <div id="" class="add_form_container container">
        <div id="" class="container"><h1 class="h1_deluser_pagetitle">Add User</h1></div>
        <form class="form_add_user form-inline" action="#" method="post" name="form1">
            <div class="div_row_1">
                <div class="div_add_lastname">
                    <div id="" class="add_form_group">
                        <label for="id_input_lastname">Last Name</label>
                        <input id="id_input_lastname" class="add-form-control" type="text" name="lastname"/>
                    </div>
                </div>

                <div class="div_add_firstname">
                    <div class="add_form_group">
                        <label for="id_input_firstname">First Name</label>
                        <input id="id_input_firstname" class="add-form-control" type="text" name="firstname"/>
                    </div>
                </div>

                <div class="div_add_username">
                    <div class="add_form_group">
                        <label for="id_input_username">Username</label>
                        <input id="id_input_username" class="add-form-control" type="text" name="username"/>
                    </div>
                </div>
            </div>
            <br>
            <div class="div_row_2">
                <div class="div_add_password">
                    <div class="add_form_group">
                        <label for="id_input_password">Password</label>
                        <input id="id_input_password" class="add-form-control" type="text" name="password"/>
                    </div>
                </div>

                <div class="div_add_email">
                    <div class="add_form_group">
                        <label for="id_input_email">Email</label>
                        <input id="id_input_email" class="add-form-control" type="text" name="email"/>
                    </div>
                </div>

                <div class="div_add_joindate">
                    <div class="add_form_group">
                        <label for="id_input_joindate">Join Date</label>
                        <input id="id_input_joindate" class="add-form-control" type="text" name="joindate"/>
                    </div>
                </div>
            </div>

            <br>

            <div class="div_row_3">
                <div class="div_add_isactiv">
                    <div class="add_form_group">
                        <label for="id_input_useractiv">User Active</label>
                        <input id="id_input_useractiv" class="add-form-control" type="text" name="useractiv"/>
                    </div>
                </div>

                <div class="div_add_level">
                    <div class="add_form_group">
                        <label for="id_input_userlevel">User Level</label>
                        <input id="id_input_userlevel" class="add-form-control" type="text" name="userlevel"/>
                    </div>
                </div>

                <div class="div_add_loged">
                    <div class="add_form_group">
                        <label for="id_input_islogin">Is Login</label>
                        <input id="id_input_islogin" class="add-form-control" type="text" name="islogin"/>
                    </div>
                </div>
            </div>

            <br>

            <div class="div_row_4">
                <div class="div_add_baned">
                    <div class="add_form_group">
                        <label for="id_input_isbaned">Is Baned</label>
                        <input id="id_input_isbaned" class="add-form-control" type="text" name="isbaned"/>
                    </div>
                </div>

                <div class="div_add_conf">
                    <div class="add_form_group">
                        <label for="id_input_isconfirmed">Is Confirmed</label>
                        <input id="id_input_isconfirmed" class="add-form-control" type="text" name="isconfirmed"/>
                    </div>
                </div>

                <div class="div_add_lastvisit">
                    <div class="add_form_group">
                        <label for="id_input_lastvisit">Last Visite</label>
                        <input id="id_input_lastvisit" class="add-form-control" type="text" name="lastvisit"/>
                    </div>
                </div>
            </div>

            <br>

            <div class="div_row_4">
                <div class="div_add_param">
                    <div class="add_form_group">
                        <label for="id_input_parameters">Parameters</label>
                        <input id="id_input_parameters" class="add-form-control" type="text" name="parameters"/>
                    </div>
                </div>

                <div class="div_add_lastreset">
                    <div class="add_form_group">
                        <label for="id_input_lastreset">Last Reset</label>
                        <input id="id_input_lastreset" class="add-form-control" type="text" name="lastreset"/>
                    </div>
                </div>

                <div class="div_add_resetcount">
                    <div class="add_form_group">
                        <label for="id_input_resetcount">Reset Count</label>
                        <input id="id_input_resetcount" class="add-form-control" type="text" name="resetcount"/>
                    </div>
                </div>
            </div>

            <br>

            <div class="div_add_btn">
                <div class="div_add_btn add_form_group">
                    <input id="id_input_add_btn" class="add-form-control btn-outline-unban" type="submit" name="Submit" value="Add user"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="" class="div_add_user_footer">
    FOOTER
</div>
</body>
</html>
