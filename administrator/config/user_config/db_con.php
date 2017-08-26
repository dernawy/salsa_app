<?php
$error_msg = 'Nous sommes désolés, je ne peux pas établir la connexion en ce moment!';
$con = mysqli_connect("localhost", "akram", "c548mK@nHYgF", "salsa_app") or die($error_msg);
    global $con;
?>