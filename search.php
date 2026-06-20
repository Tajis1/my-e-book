<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Books</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>🔍 Search Books</h1>
    <a href="index.php">← Back to Home</a><br><br>

    <form method="GET">
        <input type="text" name="q" placeholder="Search title or author..." style="width:300px; padding:10px;">
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $search = $conn->real_escape_string($_GET['q']);
        $result = $conn->query("SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%'");
        echo "<h2>Results for: " . htmlspecialchars($_GET['q']) . "</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='book'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<a href='view_book.php?id=" . $row['book_id'] . "'>View →</a>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>