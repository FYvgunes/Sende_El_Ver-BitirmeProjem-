<?php
echo !defined("INDEX") ? header("Location: " . URL . "/en/404.php") : null;

session_start();
ob_start();

error_reporting(0);
$host = "localhost";
$dbname = "Bitirme";
$dbuser = "root";
$dbpass = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
} catch (PDOException $e) {
    print $e->getMessage();
}

$setting = $db->query("SELECT * FROM setting")->fetch(PDO::FETCH_ASSOC);

$site_url = "http://localhost:8080/Bitirme"; // Sonunda slash olmadan girin...
$images_url = "http://localhost:8080/Bitirme/assets/images"; // Sonunda slash olmadan girin...

define("PATH", realpath("."));
define("URL", $site_url);
define("IMG_URL", $images_url);

require_once "function.php";
