<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Library</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1> My E-Book Library</h1>
    <p>
        <a href="books.php">Browse All Books</a> | 
        <a href="search.php">Search Books</a>
    </p>

    <h2>Available Books</h2>
    <?php
    $result = $conn->query("SELECT * FROM books");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='book'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>By: " . htmlspecialchars($row['author']) . "</p>";
        echo "<a href='view_book.php?id=" . $row['book_id'] . "'>View Book →</a>";
        echo "</div>";
    }
    ?>
</body>
</html>