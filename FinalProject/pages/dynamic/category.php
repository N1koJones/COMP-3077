<!-- filepath: pages/dynamic/post.php -->
<?php
include '../../includes/db.php';

$id = $_GET['id'];
$query = $pdo->prepare("SELECT title, content FROM blog_posts WHERE id = ?");
$query->execute([$id]);
$post = $query->fetch(PDO::FETCH_ASSOC);

$pageTitle = $post['title'];
include '../../includes/header.php';
?>
<main>
    <h2><?php echo $post['title']; ?></h2>
    <p><?php echo $post['content']; ?></p>
</main>
<?php include '../../includes/footer.php'; ?>