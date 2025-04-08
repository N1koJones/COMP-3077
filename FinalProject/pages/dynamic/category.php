<!-- filepath: pages/dynamic/post.php -->
<?php
// Include the database connection file to interact with the database
include '../../includes/db.php';

// Retrieve the post ID from the URL query parameter
$id = $_GET['id'];

// Prepare a query to fetch the title and content of the blog post with the given ID
$query = $pdo->prepare("SELECT title, content FROM blog_posts WHERE id = ?");
$query->execute([$id]); // Execute the query with the provided ID
$post = $query->fetch(PDO::FETCH_ASSOC); // Fetch the post as an associative array

// Set the page title dynamically based on the post's title
$pageTitle = $post['title'];

// Include the header file for consistent page structure
include '../../includes/header.php';
?>
<main>
    <!-- Display the post title -->
    <h2><?php echo $post['title']; ?></h2>
    
    <!-- Display the post content -->
    <p><?php echo $post['content']; ?></p>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; 
?>