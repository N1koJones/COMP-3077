<!-- filepath: reviews/reviews.php -->
<?php
$pageTitle = "Reviews";
include '../includes/header.php';
include '../includes/db.php';

// Fetch reviews from the database
$query = $pdo->query("SELECT name, review FROM reviews");
$reviews = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <h2>Student Reviews</h2>
    <ul>
        <?php foreach ($reviews as $review): ?>
            <li>
                <strong><?php echo $review['name']; ?>:</strong>
                <p><?php echo $review['review']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include '../includes/footer.php'; ?>