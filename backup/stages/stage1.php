<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $content = file_get_contents("files/$file");
    echo "<pre>$content</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage 1</title>
    <link rel="stylesheet" href="../css/stage1.css">
</head>
<body>
<header>
        <h1>Welcome to the Path Traversal CTF</h1>
        <p>Test your hacking skills by exploiting path traversal vulnerabilities.</p>
    </header>
    <div class="details">

        <h1>Stage 1: Basic Path Traversal</h1>
        <p>Enter a file name to view its content:</p>
        <form method="GET">
            <input type="text" name="file" placeholder="Enter filename" />
            <button type="submit">View File</button>
        </form>
</div>
</body>
<footer>
        <p>&copy; 2024 Path Traversal CTF Challenge</p>
    </footer>
</html>
