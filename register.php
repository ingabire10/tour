<?php
session_start();

$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "tour";
$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registration_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];

    if ($password === $retype_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (username, email, telephone, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $email, $telephone, $hashed_password);

        if ($stmt->execute()) {
            $registration_message = "<p style='color:green;'>Registration successful! You can now log in.</p>";
        } else {
            $registration_message = "<p style='color:red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    } else {
        $registration_message = "<p style='color:red;'>Passwords do not match. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .box h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .error-message, .success-message {
            color: red;
            margin-bottom: 15px;
        }

        .success-message {
            color: green;
        }

        .toggle-link {
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Register</h2>
        <?php if (!empty($registration_message)): ?>
            <div class="<?php echo strpos($registration_message, 'green') !== false ? 'success-message' : 'error-message'; ?>"><?php echo $registration_message; ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="reg_username">Username:</label>
                <input type="text" id="reg_username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="reg_password">Password:</label>
                <input type="password" id="reg_password" name="password" required>
            </div>
            <div class="form-group">
                <label for="retype_password">Retype Password:</label>
                <input type="password" id="retype_password" name="retype_password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
        <a href="login.php" class="toggle-link">Already have an account? Login here</a>
    </div>
</body>
</html>
