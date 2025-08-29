<?php
include 'db_connect.php';
session_start();

if (isset($_POST['reset'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows === 1) {
        $conn->query("UPDATE users SET password='$new_password' WHERE email='$email'");
        echo "<script>
                alert('Password reset successful. Please login.');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>alert('Email not found.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #ff9a9e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .forgot-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        h3 { text-align: center; margin-bottom: 30px; color: #333; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
        input[type="email"], input[type="password"] {
            width: 100%; padding: 12px; margin-bottom: 20px;
            border: 1px solid #ccc; border-radius: 6px; font-size: 16px;
        }
        button {
            width: 100%; padding: 12px; background-color: #dc3545;
            color: white; border: none; border-radius: 6px; font-size: 16px;
            cursor: pointer; transition: background-color 0.3s ease;
        }
        button:hover { background-color: #c82333; }
        p { text-align: center; margin-top: 15px; font-size: 14px; }
        a { color: #007BFF; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="forgot-container">
        <form method="POST">
            <h3>Reset Your Password</h3>
            <label for="email">Registered Email</label>
            <input type="email" name="email" required placeholder="Enter your email">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" required placeholder="Enter new password">
            <button type="submit" name="reset">Reset Password</button>
            <p>Remembered your password? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>