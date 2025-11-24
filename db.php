<?php
// Database settings
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "youth_support_portal"; // Correct variable name

// Function used by contact.php and mood.php
function getDB() {
    global $host, $user, $pass, $dbname;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch (Exception $e) {
        die("DB Connection Failed: " . $e->getMessage());
    }
}
?>
