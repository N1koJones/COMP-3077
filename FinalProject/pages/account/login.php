<?php
// Set the page title for the Login/Register page
$pageTitle = "Login/Register";

// Include the header file for consistent page structure
include '../../includes/header.php';

// Include the database connection file to interact with the database
include '../../includes/db.php';

// Start the session to manage user authentication
session_start();

// Initialize variables for error and success messages
$loginError = ''; // Variable to store login error messages
$registerError = ''; // Variable to store registration error messages
$registerSuccess = ''; // Variable to store registration success messages

// Handle Login Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username']; // Get the username from the login form
    $password = $_POST['password']; // Get the password from the login form

    // Fetch the user from the database
    $query = $pdo->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
    $query->execute([$username]); // Execute the query with the provided username
    $user = $query->fetch(PDO::FETCH_ASSOC); // Fetch the user as an associative array

    // Verify the password and check if the user exists
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables for the logged-in user
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Store the user's role in the session

        // Redirect to the homepage after successful login
        header('Location: /index.php');
        exit; // Stop further execution
    } else {
        $loginError = 'Invalid username or password.'; // Set login error message
    }
}

// Handle Register Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['reg_username']; // Get the username from the registration form
    $password = password_hash($_POST['reg_password'], PASSWORD_DEFAULT); // Hash the password for security

    try {
        // Insert the new user into the database
        $query = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $query->execute([$username, $password]); // Execute the query with the provided username and hashed password
        $registerSuccess = 'Registration successful! You can now log in.'; // Set registration success message
    } catch (PDOException $e) {
        $registerError = 'Username already exists.'; // Set registration error message if the username is taken
    }
}
?>
<main>
    <div class="auth-container">
        <!-- Login Form -->
        <div class="auth-box">
            <h2>Login</h2>
            <?php if ($loginError): ?>
                <!-- Display login error message if any -->
                <p style="color: red;"><?php echo htmlspecialchars($loginError); ?></p>
            <?php endif; ?>
            <form method="POST">
                <!-- Hidden input to identify the login form submission -->
                <input type="hidden" name="login" value="1">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Register Form -->
        <div class="auth-box">
            <h2>Register</h2>
            <?php if ($registerError): ?>
                <!-- Display registration error message if any -->
                <p style="color: red;"><?php echo htmlspecialchars($registerError); ?></p>
            <?php endif; ?>
            <?php if ($registerSuccess): ?>
                <!-- Display registration success message if any -->
                <p style="color: green;"><?php echo htmlspecialchars($registerSuccess); ?></p>
            <?php endif; ?>
            <form method="POST">
                <!-- Hidden input to identify the registration form submission -->
                <input type="hidden" name="register" value="1">
                <label for="reg_username">Username:</label>
                <input type="text" id="reg_username" name="reg_username" required>
                <br>
                <label for="reg_password">Password:</label>
                <input type="password" id="reg_password" name="reg_password" required>
                <br>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../includes/footer.php'; 
?>