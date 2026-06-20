<?php include 'config.php'; 
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$result = $conn->query("SELECT * FROM books WHERE book_id = $id");
$book = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $book ? htmlspecialchars($book['title']) : 'Book'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a href="index.php">← Back to Library</a><br><br>

    <?php if ($book): ?>
        <h1><?php echo htmlspecialchars($book['title']); ?></h1>
        <p><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
        <p><?php echo nl2br(htmlspecialchars($book['description'])); ?></p>
        <hr>
        <h2>📖 Read PDF</h2>
        <p><a href="<?php echo htmlspecialchars($book['pdf_path']); ?>" target="_blank">Open PDF File</a></p>
    <?php else: ?>
        <p>Book not found.</p>
    <?php endif; ?>
</body>
</html>