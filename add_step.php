<!DOCTYPE html>
<html>
<head>
    <title>Add New Step</title>
</head>
<body>
    <h2>➕ Share a New Step</h2>
    <form action="save_step.php" method="post">
        <input type="text" name="title" placeholder="Title" required><br><br>
        <textarea name="description" placeholder="Description" rows="6" cols="50" required></textarea><br><br>
        <input type="text" name="image_url" placeholder="Image URL (optional)"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>