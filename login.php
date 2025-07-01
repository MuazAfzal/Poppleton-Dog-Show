<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define the correct credentials
    $username = "Huddersfield";
    $password = "hud123";
    
    // Check if the username and password match
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        // Store session variable to mark the user as logged in
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Poppleton Dog Show</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@600&display=swap" rel="stylesheet"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('dogPic.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(45deg, #00bcd4, #009688);
            color: white;
            text-align: center;
            padding: 70px 20px;
            border-bottom: 5px solid #00bcd4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease-in-out;
        }
        header:hover {
            background: linear-gradient(45deg, #009688, #00bcd4);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        header h1 {
            font-family: 'Lobster', cursive; 
            font-size: 4rem;
            margin: 0;
            text-transform: uppercase;
        }
        .login-container {
            width: 40%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .login-container:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 5px;
        }
        .form-group input[type="submit"] {
            background-color: #00bcd4;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .form-group input[type="submit"]:hover {
            background-color: #009688;
        }
        .error {
            color: red;
            text-align: center;
            font-size: 1rem;
            font-weight: bold;
            margin-top: 10px;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            letter-spacing: 1px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }
            .login-container {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Poppleton Dog Show</h1>
    </header>

    <div class="login-container">
        <h2>Login to Access</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Enter password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

    <footer>
        &copy; 2024 Poppleton Dog Show. All rights reserved.
    </footer>

</body>
</html>
