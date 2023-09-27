<?php
session_start();
$error_message = "";

// Fungsi untuk memeriksa login
function cekLogin($username, $password) {
    if ($username === 'admin' && $password === 'dicky') {
        $_SESSION['username'] = $username;
        header('Location: admin.php');
        exit;
    } else {
        $GLOBALS['error_message'] = 'Login gagal. Silakan coba lagi.';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    cekLogin($username, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('image/BG.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: darkred;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        table {
            margin: 20px auto;
        }

        table img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Selamat Datang</h1>
        <table>
            <tr>
                <td><img src="image/nama.png" alt="Icon Orang"></td>
            </tr>
        </table>
        <form action="index.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
        <?php
        // Tampilkan pesan kesalahan jika ada
        if (!empty($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        
    </div>
</body>
</html>
