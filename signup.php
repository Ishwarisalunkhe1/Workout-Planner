<?php
include 'db_connect.php';
session_start();

if (isset($_POST['signup'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Email already registered. Please login.');</script>";
    } else {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql)) {
            $_SESSION['user'] = $name;
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['just_signed_up'] = true;

            echo "<script>
                    alert('Signup successful!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>alert('Signup failed: " . $conn->error . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* Same styling as login page for consistency */
        body {
            font-family: 'Poppins', sans-serif;
            background: #ff9a9e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        h3 { text-align: center; margin-bottom: 30px; color: #333; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 12px; margin-bottom: 20px;
            border: 1px solid #ccc; border-radius: 6px; font-size: 16px;
        }
        button {
            width: 100%; padding: 12px; background-color: #dc3545;;
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
    <div class="signup-container">
        <form method="POST">
            <h3>Create Your Account</h3>
            <label for="name">Full Name</label>
            <input type="text" name="name" required placeholder="Enter your name">
            <label for="email">Email Address</label>
            <input type="email" name="email" required placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" required placeholder="Create a password">
            <button type="submit" name="signup" id="submitBtn">Sign Up</button>
            <p>Already have an account? <a href="index.php">Login</a></p>
        </form>
    </div>
    <script src="script.js">

    </script>
</body>
</html>