<!-- filepath: includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/assets/js/main.js" defer></script>
</head>
<body>
    <header>
        <h1>Niko's Manga and Manwha WebStore!</h1>
        <button id="theme-toggle" class="theme-toggle">
            <span class="material-icons">wb_sunny</span>
        </button>
        <?php include 'menu.php'; ?>
    </header>
</body>
</html>