<?php
header("Content-Type: application/json; charset=UTF-8");
require '../php/db.php';
require '../php/classes.php';

error_reporting(0);
$db=new database();

$token=$_GET['api'];
$city=$_GET['city'];
$get_city=$_GET['allcity'];


if (isset($get_city)) {
    $API = new api($db->Connect());
    echo $API->getCity();
    die();
}

$pattern = "/^[a-zA-Z]+$/";

if (isset($token) && isset($city)) {
    if (strlen($token) != 100) {
        echo json_encode(array("Message" => "Invalid API!!!"));
        die();
    } elseif (preg_match("/^[\w]+$/", $token) && preg_match($pattern, $city)) {
        $API = new api($db->Connect());

        if ($API->validateApi($token)) {
            echo $API->getData($token, $city);
            die();
        } else {
            echo json_encode(array("Message" => "Token is out of calls, upgrade to premium or wait for tomorrow else token is incorrect!!!"));
            die();
        }
    } else {
        echo json_encode(array("Message" => "Invalid data provided!!!"));
        die();
    }

} else {
    echo json_encode(array("Message" => "Invalid Request!!!"));
    die();
}
?>