
<?php

/** THis file is the general configuration for the site */

/** SQL server and Database Setting */
$dbhost = 'localhost';
$dbuser = 'akram';
$dbpassword = 'c548mK@nHYgF';
$dbname = 'salsa_app';

// Start of SQL errors messages
//$dbhost general Connection error
$dbhost_con_err = 'Nous sommes désolés, je ne peux pas établir la connexion en ce moment!';

// SQL Connection Statments
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die($dbhost_con_err);

function url(){
	if(isset($_SERVER['HTTPS'])){
		$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	}
	else{
		$protocol = 'http';
	}
	return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/';
}

define('ABSPATH', (dirname(__FILE__ )). '/');

/** APP SPERATORS **/
define('FNS', '-'); // File Name Sperator.
define('EXS', '.'); // Extension Sperator.
define('PS', '/');
define('WPS', '\ ');

/** APP GENERAL RELATINES URL PATHS **/
define('REL_ADMINISTRATOR_PATH', '/administrator');
define('REL_ASSESTS_PATH'      , '/assets');
define('REL_COMPONENTS_PATH'   , '/components');
define('REL_CONTROLLER_PATH'   , '/controler');
define('REL_CORE_PATH'         , '/core');
define('REL_HELPERS_PATH'      , '/helpers');
define('REL_IMAGES_PATH'       , '/images');
define('REL_LIBRARY_PATH'      , '/library');
define('REL_TEMPLATES_PATH'    , '/templates');
define('REL_VENDOR_PATH'       , '/vendor');

$att_base_url = 'http://localhost/components/users/users_core/users_attachments';
$att_url = parse_url($att_base_url, PHP_URL_PATH);
define('CONSTRUCT_INSCR_ATTACH_PATH', $att_url);

$gallrey_base_url = 'http://localhost/components/photo_gallary';
$gallery_url = parse_url($gallrey_base_url, PHP_URL_PATH);
define('CONSTRUCT_GALLERY_PATH', $gallery_url);

$images_base_url = 'http://localhost/components/users/users_core/';
$images_url = parse_url($images_base_url, PHP_URL_PATH);
define('CONSTRUCT_IMAGES_PATH', $images_url);




/** APP GENERAL SERVER URL PATHS **/
define('SERV_ADMINISTRATOR_PATH', url() . 'administrator/');
define('SERV_ASSESTS_PATH'      , url() . 'assets/');
define('SERV_COMPONENTS_PATH'   , url() . 'components');
define('SERV_CONTROLLER_PATH'   , url() . 'controler/');
define('SERV_CORE_PATH'         , url() . 'core/');
define('SERV_HELPERS_PATH'      , url() . 'helpers/');
define('SERV_IMAGES_PATH'       , url() . 'images/');
define('SERV_LIBRARY_PATH'      , url() . 'library/');
define('SERV_TEMPLATES_PATH'    , url() . 'templates/');
define('SERV_VENDOR_PATH'       , url() . 'vendor/');

/** APP GENERAL DOCUMENT URL PATHS **/
define('DOC_ADMINISTRATOR_PATH', ABSPATH . 'administrator');
define('DOC_ASSESTS_PATH'      , ABSPATH . 'assets');
define('DOC_COMPONENTS_PATH'   , ABSPATH . 'components');
define('DOC_CONTROLLER_PATH'   , ABSPATH . 'controler');
define('DOC_CORE_PATH'         , ABSPATH . 'core');
define('DOC_HELPERS_PATH'      , ABSPATH . 'helpers');
define('DOC_IMAGES_PATH'       , ABSPATH . 'images');
define('DOC_LIBRARY_PATH'      , ABSPATH . 'library');
define('DOC_SERVER_TOOLS_PATH' , ABSPATH . 'server-tools');
define('DOC_TEMPLATES_PATH'    , ABSPATH . 'templates');
define('DOC_VENDOR_PATH'       , ABSPATH . 'vendor');

/** APP GALLERY PATHS **/
define('GALLERY_ADMIN_PATH', DOC_COMPONENTS_PATH . '/photo_gallary/administrator/');
define('GALLERY_IMG_UPLOAD_PATH', DOC_COMPONENTS_PATH . '/users/users_core/image_gallary/images/');
define('GALLERY_IMAGE_MAGICK_PATH', DOC_SERVER_TOOLS_PATH . '/image-magick/');
define('GALLERY_FFMPEG_PATH', DOC_SERVER_TOOLS_PATH . '/ffmpeg/');
define('GALLERY_CONVERT_TEMP_PATH', DOC_COMPONENTS_PATH . '/users/users_core/image_gallary/convert-temp/');
define('GALLERY_THUMBS_UPLOAD_PATH', DOC_COMPONENTS_PATH . '/users/users_core/image_gallary/thumbs/');
define('GALLERY_MUSIC_UPLOAD_PATH', DOC_COMPONENTS_PATH . '/users/users_core/users_medias/audio/');
define('GALLERY_VIDEO_UPLOAD_PATH', DOC_COMPONENTS_PATH . '/users/users_core/users_medias/video/');

/** APP INSCRIPTIONS PATHS **/
define('INSCR_PATH', DOC_COMPONENTS_PATH . '/inscription');
define('INSCR_ATTACH_UPLOAD_PATH', DOC_COMPONENTS_PATH . '/users/users_core/users_attachments/');

/** APP PARRIED CONSTANTS **/
define('PARRIED_CERT_PRE', 'Cert-parried');
/** APP STUDENT CONSTANTS **/
define('STUDENT_CERT_PRE', 'Cert-Student');
/** APP STUDENT CONSTANTS **/
define('RSA_CERT_PRE', 'Cert-Rsa');



?>