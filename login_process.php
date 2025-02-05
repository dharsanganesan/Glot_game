<?php
include 'db.php';

$message = ''; // Variable to store success or error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $permanent_code = $_POST['permanent_code'];

    // Check if the username and code match
    $login_query = "SELECT * FROM users WHERE username='$username' AND permanent_code='$permanent_code'";
    $result = $conn->query($login_query);

    if ($result->num_rows > 0) {
        // $message = "<div class='container success'>Login successful!</div>";
        header("Location:home.php");
    } else {
        $message = "<div class='container error'>Invalid username or permanent code.</div>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .container {
            margin-top: 20px;
            padding: 15px;
            width: 300px;
            border-radius: 5px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

    <!-- Display success or error message -->
    <?php if ($message) echo $message; ?>

</body>
</html>
