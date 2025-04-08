<!-- filepath: includes/menu.php -->
<?php
// Start the session to check user login status
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
$isAdmin = $isLoggedIn && isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
?>
<nav>
    <button id="menu-toggle" class="menu-toggle">☰ Menu</button>
    <ul class="menu">
        <li><a href="/index.php">Home</a></li>
        <li>
            <a href="#">Books</a>
            <ul>
                <li><a href="/pages/books/action.php">Action</a></li>
                <li><a href="/pages/books/fantasy.php">Fantasy</a></li>
                <li><a href="/pages/books/fiction.php">Fiction</a></li>
                <li><a href="/pages/books/romance.php">Romance</a></li>
                <li><a href="/pages/books/shonen.php">Shonen</a></li>
                <li><a href="/pages/books/sliceoflife.php">Slice of Life</a></li>
            </ul>
        </li>
        <li><a href="/pages/dynamic/recommendations.php">Recommendations</a></li>
        <li><a href="/pages/static/about.php">About Us</a></li>
        <li>
            <a href="#">Wiki</a>
            <ul>
                <li><a href="/pages/static/wiki/account.php">Account</a></li>
                <li><a href="/pages/static/wiki/navigation.php">Navigation</a></li>
                <li><a href="/pages/static/wiki/series.php">Series</a></li>
                <li><a href="/pages/static/wiki/book.php">Books</a></li>
                <li><a href="/pages/static/wiki/reccomendation.php">Recommendations</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Account</a>
            <ul>
                <?php if (!$isLoggedIn): ?>
                    <!-- If the user is not logged in -->
                    <li><a href="/pages/account/login.php">Login & Register</a></li>
                <?php elseif ($isAdmin): ?>
                    <!-- If the user is logged in and is an admin -->
                    <li><a href="/pages/account/profile.php">Profile</a></li>
                    <li><a href="/pages/account/logout.php">Logout</a></li>
                    <li><a href="/pages/admin/tools.php">Admin Tools</a></li>
                    <li><a href="/pages/admin/guide.php">Admin Guide</a></li>
                <?php else: ?>
                    <!-- If the user is logged in but not an admin -->
                    <li><a href="/pages/account/profile.php">Profile</a></li>
                    <li><a href="/pages/account/logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </li>
    </ul>
</nav>