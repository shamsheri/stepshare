<?php
include 'db.php';

$title = $_POST['title'];
$desc = $_POST['description'];
$image = $_POST['image_url'];

$sql = "INSERT INTO steps (title, description, image_url) VALUES ('$title', '$desc', '$image')";
if ($conn->query($sql) === TRUE) {
    echo "✅ Step added successfully! <a href='view_steps.php'>View Steps</a>";
} else {
    echo "❌ Error: " . $conn->error;
}
$conn->close();
?>