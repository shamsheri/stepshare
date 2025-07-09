<?php
include 'db.php';
$result = $conn->query("SELECT * FROM steps ORDER BY id DESC");
?>

<h2>📚 All Shared Steps</h2>
<a href="index.php">🏠 Home</a><br><br>

<?php while($row = $result->fetch_assoc()): ?>
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <h3><?= $row['title'] ?></h3>
        <p><?= $row['description'] ?></p>
        <?php if ($row['image_url']): ?>
            <img src="<?= $row['image_url'] ?>" width="300">
        <?php endif; ?>
    </div>
<?php endwhile; ?>