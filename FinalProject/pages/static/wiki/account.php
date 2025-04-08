<!-- filepath: c:\Users\NikoJ\Desktop\Programming\School\COMP-3077\FinalProject\pages\static\wiki\account.php -->
<?php
// Set the page title for the current page
$pageTitle = "Account Guide";

// Include the header file for consistent page structure
include '../../../includes/header.php'; // Ensures the header is displayed on the page
?>
<main>
    <!-- Main heading of the page -->
    <h1>Account Guide</h1>
    <p>
        <!-- Introduction to the Account Guide -->
        Welcome to the Account Guide! This page will walk you through the steps to create an account, 
        log in, log out, and explore the different account-related functions available on our website.
    </p>

    <section>
        <!-- Section explaining how to create an account -->
        <h2>Creating an Account</h2>
        <p>To create an account, follow these steps:</p>
        <ol>
            <li>Click on the <strong>Login & Register</strong> option in the <strong>Account</strong> menu.</li>
            <li>Fill in the registration form with your desired username and password.</li>
            <li>Click the <strong>Register</strong> button to create your account.</li>
            <li>Once registered, you can log in using your new credentials.</li>
        </ol>
    </section>

    <section>
        <!-- Section explaining how to log in -->
        <h2>Logging In</h2>
        <p>To log in to your account, follow these steps:</p>
        <ol>
            <li>Click on the <strong>Login & Register</strong> option in the <strong>Account</strong> menu.</li>
            <li>Enter your username and password in the login form.</li>
            <li>Click the <strong>Login</strong> button to access your account.</li>
        </ol>
        <p>
            <!-- Additional features available after logging in -->
            Once logged in, you will have access to additional features such as submitting recommendations 
            and viewing your profile.
        </p>
    </section>

    <section>
        <!-- Section explaining how to log out -->
        <h2>Logging Out</h2>
        <p>To log out of your account, follow these steps:</p>
        <ol>
            <li>Click on the <strong>Logout</strong> option in the <strong>Account</strong> menu.</li>
            <li>You will be securely logged out and redirected to the homepage.</li>
        </ol>
    </section>

    <section>
        <!-- Section explaining account-related functions -->
        <h2>Account Functions</h2>
        <p>Once logged in, you can access the following account-related functions:</p>
        <ul>
            <li>
                <!-- Profile management -->
                <strong>Profile:</strong> View and manage your account details.
            </li>
            <li>
                <!-- Submitting recommendations -->
                <strong>Submit Recommendations:</strong> Share your favorite manga recommendations 
                with the community.
            </li>
            <li>
                <!-- Admin tools for administrators -->
                <strong>Admin Tools (Admins Only):</strong> Access administrative tools to manage the website.
            </li>
        </ul>
    </section>

    <section>
        <!-- Section providing help for account-related actions -->
        <h2>Account Help</h2>
        <p>
            If you need assistance with logging in or managing your account, please watch the following instructional video:
        </p>
        <!-- Embed the video for account help -->
        <video controls width="640" height="360">
            <source src="../../../assets/videos/Login.mp4" type="video/mp4">
            Your browser does not support the video tag. Please download the video <a href="../../../assets/videos/Login.mp4">here</a>.
        </video>
    </section>
</main>
<?php 
// Include the footer file for consistent page structure
include '../../../includes/footer.php'; // Ensures the footer is displayed on the page
?>