<?php
// Include database connection
include 'db.php';

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ''; // Variable to store success or error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $permanent_code = substr(md5(uniqid(mt_rand(), true)), 0, 8); // Generate an 8-character unique code

    // Check if the username already exists
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $message = "<div class='container error'>Username already exists!</div>";
    } else {
        // Insert the new user
        $insert_query = "INSERT INTO users (username, permanent_code) VALUES ('$username', '$permanent_code')";
        if ($conn->query($insert_query) === TRUE) {
            $message = "<div class='container success'>
                            <p>Sign-up successful!</p>
                            <p>Your permanent code is: <strong>$permanent_code</strong></p>
                        </div>";
        } else {
            $message = "<div class='container error'>Error: " . $conn->error . "</div>";
        }
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        h1 {
            font-size: 36px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            animation: bounce 2s infinite ease-in-out;
        }

        .container {
            margin-top: 20px;
            padding: 15px;
            width: 320px;
            border-radius: 10px;
            text-align: center;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s;
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

        .log-in {
    display: inline-block;
    border-radius: 4px;
    background-color: black;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 10px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    margin-top: 30px;
}

.log-in span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.log-in span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.log-in:hover span {
  padding-right: 25px;
}

.log-in:hover span:after {
  opacity: 1;
  right: 0;
}

        a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .star {
            position: absolute;
            width: 15px;
            height: 15px;
            background: #fff;
            opacity: 0.8;
            border-radius: 50%;
            animation: twinkle 5s infinite ease-in-out;
        }

        .star:nth-child(2n) {
            animation-duration: 4s;
        }

        .star:nth-child(3n) {
            animation-duration: 6s;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes twinkle {
            0%, 100% {
                opacity: 0.5;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <h1>Welcome to the Kids Zone!</h1>
    <?php if ($message) echo $message; ?>
    <a href="log-in.php"><button class="log-in" style="vertical-align:middle"><span>Log in</span></button></a>
    <div class="stars">
        <?php for ($i = 0; $i < 50; $i++) {
            $top = rand(0, 100);
            $left = rand(0, 100);
            echo "<div class='star' style='top: {$top}%; left: {$left}%;'></div>";
            
        } ?>
    </div>
</body>
</html>
