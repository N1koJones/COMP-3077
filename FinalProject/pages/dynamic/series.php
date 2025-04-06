<?php
include '../../includes/header.php';
include '../../includes/db.php';

// Get the series title from the query parameter
$title = isset($_GET['title']) ? $_GET['title'] : '';

// Fetch all volumes of the same series from the database
$query = $pdo->prepare("
    SELECT * 
    FROM books 
    WHERE title = ?
    ORDER BY volume ASC
");
$query->execute([$title]);
$books = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <a href="javascript:history.back()" class="back-button">Back</a>
    <h2><?php echo htmlspecialchars($title); ?></h2>
    <ul class="book-list">
        <?php if (count($books) > 0): ?>
            <?php foreach ($books as $book): ?>
                <li class="book-container">
                    <div class="book-card">
                        <img src="../../<?php echo htmlspecialchars($book['cover_image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
                        <h3><?php echo htmlspecialchars($book['title']) . "<br>Volume " . htmlspecialchars($book['volume']); ?></h3>
                        <form action="../dynamic/book.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($book['id']); ?>">
                            <button type="submit" class="view-series">See Volume</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No volumes found for this series.</p>
        <?php endif; ?>
    </ul>
</main>
<?php include '../../includes/footer.php'; ?>