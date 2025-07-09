<?php
$host = "db";          // ✅ use docker service name
$user = "root";
$pass = "root";        // ✅ match docker-compose password
$db   = "stepshare";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
