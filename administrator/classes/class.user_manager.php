<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/13/2017
 * Time: 3:58 PM
 */

require_once 'administrator/config/user_config/usermanager_config.php';

class UserManager{// Start of class UserManager.

    public $setUsreTable;
    public $setInscTable;

    public function __construct(){ // Start of class function __construct().

    }// End of class function __construct().

    public function setUsreTable($UserTable){// Start of class function setUsrTable($UserTable).
        $this->setUsreTable = $UserTable;
    }// End of class function setUsrTable($UserTable).

    public function setInscTable($InscTable){// Start of class setInscTable($InscTable).
        $this->setInscTable = $InscTable;
    }// End of class setInscTable($InscTable).

    /**
     *
     */
    public function viewUsersBoard()
    {
        global $mysqli;
        global $id;

        $id = $_SESSION['id'];

        //fetching data in descending order (lastest entry first)
        //$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
        $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
        $userinfo = array('ID', 'User Name', 'Email', 'Active', 'Level', 'Loged', 'Banned', 'Confirmed', 'Last visit', 'Operations');

        echo " <table class='table table-responsive'>";
        echo "<tr class='tr_user_table_header_row'>";
        foreach ($userinfo as $info) {
            echo "<th class='td_users_table_header'>" . $info . "</th>";
        }

        echo "</tr>";
        if (mysqli_num_rows($result) > 0) {

            while($res = mysqli_fetch_array($result)) {

                $_SESSION['admin-usr-id'] = $res['id'];
                $_SESSION['admin-usr-username'] = $res['user_username'];
                $_SESSION['admin-usr-email'] = $res['user_email'];
                $_SESSION['admin-usr-active'] = $res['user_active'];
                $_SESSION['admin-usr-level'] = $res['user_level'];
                $_SESSION['admin-usr-loged'] = $res['is_login'];
                $_SESSION['admin-usr-baned'] = $res['user_banned'];
                $_SESSION['admin-usr-confirmed'] = $res['user_confirmed'];
                $_SESSION['admin-usr-lastvisit'] = $res['user_lastvisit_date'];

                $res_id_text        = $_SESSION['admin-usr-id'];
                $res_username_text  = $_SESSION['admin-usr-username'];
                $res_email_text     = $_SESSION['admin-usr-email'];
                $res_level_text     =  $_SESSION['admin-usr-level'];
                $res_lastvisit_text = $_SESSION['admin-usr-lastvisit'];

                $ses_active    = $_SESSION['admin-usr-active'];
                $ses_level     = $_SESSION['admin-usr-level'];
                $ses_loged     = $_SESSION['user_login_session'];
                $ses_baned     = $_SESSION['admin-usr-baned'];
                $ses_confirmed = $_SESSION['admin-usr-confirmed'];

                if($ses_active == 1){
                    $res_active_text = 'Yes';
                }
                else
                {
                    $res_active_text = 'No';
                }

                if($ses_level == 1){
                    $res_level_text = 'Site Owner';
                }
                elseif($ses_level == 2)
                {
                    $res_level_text = 'Administrator';
                }
                elseif($ses_level == 3)
                {
                    $res_level_text = 'Moderator';
                }
                elseif($ses_level == 4)
                {
                    $res_level_text = 'Registred';
                }
                elseif($ses_level == 5)
                {
                    $res_level_text = 'Pending';
                }

                if($ses_loged != 0){
                    $res_loged_text = 'Online';
                }
                else
                {
                    $res_loged_text = 'Offline';
                }

                $hide_ban = 'display:inline-block;';
                $hide_unban = 'display:none;';

                if($ses_baned == 1){
                    $hide_ban = 'display:none;';
                    $hide_unban = 'display:inline-block;';
                    $res_baned_text = 'Banned';

                }
                else
                {
                    $hide_ban = 'display:inline-block;';
                    $hide_unban = 'display:none;';
                    $res_baned_text = 'Unbaned';
                }

                if($ses_confirmed == 1){
                    $res_confirmed_text = 'Confirmed';
                }
                else
                {
                    $res_confirmed_text = 'Unonfirmed';
                }
                echo "<tr>";
                    echo "<td>" . $res_id_text .        "</td>";
                    echo "<td>" . $res_username_text .  "</td>";
                    echo "<td>" . $res_email_text .     "</td>";
                    echo "<td>" . $res_active_text .    "</td>";
                    echo "<td>" . $res_level_text .     "</td>";
                    echo "<td>" . $res_loged_text .     "</td>";
                    echo "<td>" . $res_baned_text .    "</td>";
                    echo "<td>" . $res_confirmed_text . "</td>";
                    echo "<td>" . $res_lastvisit_text . "</td>";
                    echo "<td id='id_td_operation_btns' class='td_operation_btns'>
                            <div id='id_div_edit_btn' class='div_edit_btn'><a class=\"btnout btn-outline-edit\" href=\"edit.php?id=$res[id]\"><span id='id-edit-icon' class=\"edit-icon glyphicon glyphicon-edit\"></span>Edit</a></div>
                            <div id='id_div_del_btn' class='div_del_btn'><a class=\"btnout btn-outline-del\" href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><span id='id-edit-icon' class=\"del-icon glyphicon glyphicon-trash\"></span>Delete</a></div>
                            <div style='$hide_ban' id='id_div_ban_btn' class='div_ban_btn'><a class=\"btnout btn-outline-ban\" id='id_bane_btn' href=\"banne.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to bane this user?')\"><span id='id-edit-icon' class=\"ban-icon glyphicon glyphicon-ban-circle\"></span>Bane</a></div>
                            <div style='$hide_unban' id='id_div_unban_btn' class='div_unban_btn'><a class=\"btnout btn-outline-unban\" id='id_unbane_btn' href=\"unbanne.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to unbane this user?')\"><span id='id-edit-icon' class=\"unban-icon glyphicon glyphicon-ok\"></span>Unane</a></div>

                          </td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "<div class='div_usr_del_add_section1'>";
            echo "<p class='p_usr_del_add_section_taxt1'>";
            echo 'The Database Table (Users) containes (0) row. That mean that there are no users on your site.';
            echo "</p>";
            echo "</div>";
            echo "<div class='div_usr_del_add_section2'>";
            echo "<p class='p_usr_del_add_section_taxt2'>";
            echo 'To add new user(s) you can do that by clicking on this ';
            echo "</p>";
            echo "<p class='p_usr_del_icon_add'>";
            echo "<a class='a_usr_del_icon_add' href=''><span class='glyphicon glyphicon-user p_usr_del_icon_add'></span> </a>";
            echo "</p>";
            echo "<p class='p_usr_del_add_section_taxt3'>";
            echo 'icon. For more information about how to add new user click on this ';
            echo "</p>";
            echo "<p class='p_usr_del_icon_info'>";
            echo "<a class='a_usr_del_icon_info' href=''><span class='glyphicon glyphicon-info-sign'></span> </a>";
            echo "</p>";
            echo "<p class='p_usr_del_add_section_taxt4'>";
            echo 'icon.';
            echo "</p>";
            echo "</div>";
        }
        echo "</tr>";
        echo "</table>";
    }

    public function addUser(){// Start of class function addUser().

        global $mysqli;
        global $id;

        if(isset($_POST['Submit'])) {
            $user_lastname   = mysqli_real_escape_string($mysqli, $_POST['lastname']);
            $user_firstname  = mysqli_real_escape_string($mysqli, $_POST['firstname']);
            $user_username   = mysqli_real_escape_string($mysqli, $_POST['username']);
            $user_password   = mysqli_real_escape_string($mysqli, $_POST['password']);
            $user_email      = mysqli_real_escape_string($mysqli, $_POST['email']);
            $user_joindate   = mysqli_real_escape_string($mysqli, $_POST['joindate']);
            $user_activ      = mysqli_real_escape_string($mysqli, $_POST['useractiv']);
            $user_level      = mysqli_real_escape_string($mysqli, $_POST['userlevel']);
            $user_islogin    = mysqli_real_escape_string($mysqli, $_POST['islogin']);

            $user_banned     = mysqli_real_escape_string($mysqli, $_POST['isbaned']);
            $user_confirmed  = mysqli_real_escape_string($mysqli, $_POST['isconfirmed']);

            $user_lastvisit  = mysqli_real_escape_string($mysqli, $_POST['lastvisit']);
            $user_parameters = mysqli_real_escape_string($mysqli, $_POST['parameters']);
            $user_lastreset  = mysqli_real_escape_string($mysqli, $_POST['lastreset']);
            $user_resetcount = mysqli_real_escape_string($mysqli, $_POST['resetcount']);

            // checking empty fields
            if(empty($user_lastname) || empty($user_firstname) || empty($user_username) || empty($user_password) || empty($user_email) || empty($user_joindate) || empty($user_activ) || empty($user_level) || empty($user_islogin) || empty($user_banned) || empty($user_confirmed) || empty($user_lastvisit) || empty($user_parameters) || empty($user_lastreset) || empty($user_resetcount)) {

                if(empty($user_lastname)) {
                    echo "<font color='red'>Last Name field is empty.</font><br/>";
                }

                if(empty($user_firstname)) {
                    echo "<font color='red'>First Name field is empty.</font><br/>";
                }

                if(empty($user_username)) {
                    echo "<font color='red'>Username field is empty.</font><br/>";
                }

                if(empty($user_password)) {
                    echo "<font color='red'>Password field is empty.</font><br/>";
                }

                if(empty($user_email)) {
                    echo "<font color='red'>Email field is empty.</font><br/>";
                }

                if(empty($user_joindate)) {
                    echo "<font color='red'>Join Date field is empty.</font><br/>";
                }

                if(empty($user_activ)) {
                    echo "<font color='red'>User Acrive field is empty.</font><br/>";
                }

                if(empty($user_level)) {
                    echo "<font color='red'>User Level field is empty.</font><br/>";
                }

                if(empty($user_islogin)) {
                    echo "<font color='red'>Is Login field is empty.</font><br/>";
                }

                if(empty($user_banned)) {
                    echo "<font color='red'>User Banned field is empty.</font><br/>";
                }

                if(empty($user_confirmed)) {
                    echo "<font color='red'>Confirmed field is empty.</font><br/>";
                }

                if(empty($user_lastvisit)) {
                    echo "<font color='red'>Last Visit field is empty.</font><br/>";
                }

                if(empty($user_parameters)) {
                    echo "<font color='red'>Parameters field is empty.</font><br/>";
                }

                if(empty($user_lastreset)) {
                    echo "<font color='red'>Last Reset field is empty.</font><br/>";
                }

                if(empty($user_resetcount)) {
                    echo "<font color='red'>Reset Count field is empty.</font><br/>";
                }


                //link to the previous page
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            } else {
                // if all the fields are filled (not empty)


                //insert data to database
                $result = mysqli_query($mysqli, "INSERT INTO users(user_lastname,user_firstname,user_username,user_password,user_email,user_joindate,user_active,user_level,is_login,user_banned,user_confirmed,user_lastvisit_date,user_params,user_lastreset_time,user_reset_count) VALUES('$user_lastname','$user_firstname','$user_username','$user_password','$user_email','$user_joindate','$user_activ','$user_level','$user_islogin','$user_banned','$user_confirmed','$user_lastvisit','$user_parameters','$user_lastreset','$user_resetcount')");
                mysqli_close($mysqli);
                //display success message
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='index.php'>View Result</a>";
            }
        }
    }// End of class function addUser().

    public function editUser(){// Start of class function editUser().
        global $mysqli;
        global $id;

        if(isset($_POST['update'])) {
            $id 			 = mysqli_real_escape_string($mysqli, $_POST['id']);
            $user_lastname   = mysqli_real_escape_string($mysqli, $_POST['lastname']);
            $user_firstname  = mysqli_real_escape_string($mysqli, $_POST['firstname']);
            $user_username   = mysqli_real_escape_string($mysqli, $_POST['username']);
            $user_password   = mysqli_real_escape_string($mysqli, $_POST['password']);
            $user_email      = mysqli_real_escape_string($mysqli, $_POST['email']);
            $user_joindate   = mysqli_real_escape_string($mysqli, $_POST['joindate']);
            $user_activ      = mysqli_real_escape_string($mysqli, $_POST['useractiv']);
            $user_level      = mysqli_real_escape_string($mysqli, $_POST['userlevel']);
            $user_islogin    = mysqli_real_escape_string($mysqli, $_POST['islogin']);
            $user_banned     = mysqli_real_escape_string($mysqli, $_POST['isbanned']);
            $user_confirmed  = mysqli_real_escape_string($mysqli, $_POST['isconfirmed']);
            $user_lastvisit  = mysqli_real_escape_string($mysqli, $_POST['lastvisit']);
            $user_parameters = mysqli_real_escape_string($mysqli, $_POST['parameters']);
            $user_lastreset  = mysqli_real_escape_string($mysqli, $_POST['lastreset']);
            $user_resetcount = mysqli_real_escape_string($mysqli, $_POST['resetcount']);

            // checking empty fields
            if(empty($user_lastname) || empty($user_firstname) || empty($user_username) || empty($user_password) || empty($user_email) || empty($user_joindate) || empty($user_activ) || empty($user_level) || empty($user_islogin) || empty($user_banned) || empty($user_confirmed) || empty($user_lastvisit) || empty($user_parameters) || empty($user_lastreset) || empty($user_resetcount)) {

                if(empty($user_lastname)) {
                    echo "<font color='red'>Last Name field is empty.</font><br/>";
                }

                if(empty($user_firstname)) {
                    echo "<font color='red'>First Name field is empty.</font><br/>";
                }

                if(empty($user_username)) {
                    echo "<font color='red'>Username field is empty.</font><br/>";
                }

                if(empty($user_password)) {
                    echo "<font color='red'>Password field is empty.</font><br/>";
                }

                if(empty($user_email)) {
                    echo "<font color='red'>Email field is empty.</font><br/>";
                }

                if(empty($user_joindate)) {
                    echo "<font color='red'>Join Date field is empty.</font><br/>";
                }

                if(empty($user_activ)) {
                    echo "<font color='red'>User Acrive field is empty.</font><br/>";
                }

                if(empty($user_level)) {
                    echo "<font color='red'>User Level field is empty.</font><br/>";
                }

                if(empty($user_islogin)) {
                    echo "<font color='red'>Is Login field is empty.</font><br/>";
                }

                //if(empty($user_banned)) {
                //echo "<font color='red'>User Banned field is empty.</font><br/>";
                //}

                //if(empty($user_confirmed)) {
                //echo "<font color='red'>User Confirmed field is empty.</font><br/>";
                //}

                if(empty($user_lastvisit)) {
                    echo "<font color='red'>Last Visit field is empty.</font><br/>";
                }

                if(empty($user_parameters)) {
                    echo "<font color='red'>Parameters field is empty.</font><br/>";
                }

                if(empty($user_lastreset)) {
                    echo "<font color='red'>Last Reset field is empty.</font><br/>";
                }

                if(empty($user_resetcount)) {
                    echo "<font color='red'>Reset Count field is empty.</font><br/>";
                }
            } else {
                //updating the table
                $result = mysqli_query($mysqli, "UPDATE users SET user_lastname='$user_lastname',user_firstname='$user_firstname',user_username='$user_username',user_password='$user_password',user_email='$user_email',user_joindate='$user_joindate',user_active='$user_activ',user_level='$user_level',is_login='$user_islogin',user_banned='$user_banned',user_confirmed='$user_confirmed',user_lastvisit_date='$user_lastvisit',user_params='$user_parameters',user_lastreset_time='$user_lastreset',user_reset_count='$user_resetcount' WHERE id=$id");
                //close connections

                //redirectig to the display page. In our case, it is index.php
                header("Location: index.php");
            }
        }
    }// End of class function editUser().

    public function baneUser(){// Start of class function baneUser().

        global $mysqli;
        global $id;

        $id = $_GET['id'];

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($mysqli,"SELECT user_banned FROM users WHERE id = $id");
        while($row = mysqli_fetch_array($result)){
            $banned = $row['user_banned'];

            if($banned == 1){

                echo "<div>";
                echo "<div><p>This user already banned</p></div>";
                echo "</div>";
            }
            else
            {
                $banned = "1";
                print_r($banned);
                $result = mysqli_query($mysqli, "UPDATE users SET user_banned='$banned' WHERE id=$id");
                mysqli_close($mysqli);
                header("Location:banne_ok.php");
            }
        }
    }// End of class function baneUser().

    public function unBaneUser(){// Start of class function unBaneUser().

        global $mysqli;
        global $id;

        $id = $_GET['id'];

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($mysqli,"SELECT user_banned FROM users WHERE id =$id");
        while($row = mysqli_fetch_array($result)){
            $banned = $row['user_banned'];

            if($banned == 0){
                echo "<div>";
                echo "<div><p>This user already unbaned</p></div>";
                echo "</div>";
            }
            else
            {
                $banned = "0";
                $result = mysqli_query($mysqli, "UPDATE users SET user_banned='$banned' WHERE id=$id");
                mysqli_close($mysqli);
                header("Location:unbanne_ok.php");
            }
        }
    }// End of class function unBaneUser().

    public function delUser(){// Start of class function delUser().

        global $mysqli;
        global $id;

        //getting id of the data from url
        $id = $_GET['id'];

        //deleting the row from table
        $result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
        mysqli_close($mysqli);
        //redirecting to the display page (index.php in our case)
        header("Location:index.php");
    }// End of class function delUser().
}// End of class UserManager.
