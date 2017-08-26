<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 8/23/2017
 * Time: 2:19 PM
 */

	session_start();
?>
<html>
<head>
    <?php include("../../../../core/site_head/head.php");?>
</head>
<body>

<div class = "container">
    <div class = "div_pagetitle_container">
        <div class = "div_pagetitle">
            <div class = "div_pagetitle_text">
                <h1>Connectez vous</h1>
            </div>
        </div>
    </div>
    <div class = "div_pagetitle_info_container">
        <div class = "div_info">
            <div class = "alert alert-info">
                <strong>Remarques! </strong><small>Remplissez le formulaire avec toutes les informations nécessaires</small>
            </div>
        </div>
    </div>
    <div class = "div_login_form">
        <?php include ( "form/form_login.php" );?>
    </div>

</div>
</body>
</html>