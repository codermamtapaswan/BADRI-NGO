<?php
    session_start();
    
/*_______________DEFINE CONSTANTS____________________*/

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', '');

    // For frontent
    define('SITE_URL', 'http://127.0.0.1/CLIENT-PROJECTS/BADRI-NGO/');
    define('ABOUT_IMG_PATH', SITE_URL .'images/about/');
    define('CAROUSEL_IMG_PATH', SITE_URL .'images/carousel/');
    define('FACLITIES_IMG_PATH', SITE_URL .'images/facilities/');

    // For backend 
    define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] .'/CLIENT-PROJECTS/BADRI-NGO/images/');
    define('ABOUT_FOLDER', 'about/');
    define('CAROUSEL_FOLDER', 'carousel/');
    define('FACLITIES_FOLDER', 'facilities/');

/* _______________LINKED PAGES_______________________*/

    // include_once('DatabaseConnection.php');
    // $db = new DatabaseConnection();



/*________________GLOBAL FUNCTIONS_____________________*/

function base_url($slug){
    echo SITE_URL.$slug;
}

function redirect($url){
    echo "<script>
            window.location.href='$url'
        </script>";
}

function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function filteration($data){
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        $data[$key] = $value;
    }
    return $data;
}




?>