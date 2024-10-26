<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $safe_path = realpath("files/$file");
    if (strpos($safe_path, realpath("files")) === 0) {
        $content = file_get_contents($safe_path);
        echo "<script>alert(" . json_encode($content) . ");</script>";
    } else {
        echo "<script>alert('Access denied!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage 5</title>
    <link rel="stylesheet" href="../css/stage5.css">
</head>
<body>

    <header>
        <h1>Welcome to the Path Traversal CTF</h1>
        <p>Test your hacking skills by exploiting path traversal vulnerabilities.</p>
    </header>

    <div class="details">

    <h1>Stage 5: Final Challenge</h1>
    <p>Enter a file name to view its content:</p>
    <form method="GET">
        <input type="text" name="file" placeholder="Enter filename" />
        <button type="submit">View File</button>
    </form>
    <button onclick="location.href='../index.php'">Home</button>
    </div>
</body>
<footer>
        <p>&copy; 2024 Path Traversal CTF Challenge</p>
    </footer>
</html>
