<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
    <title>Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

    .background {
            font-family: "Quicksand";
            background: linear-gradient(to right bottom, #003366, #0066cc); /* Blue Gradient */
            overflow: hidden;
            height: 100%;
        }

        .login-field {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-background {
            background: rgba(255, 255, 255, 0.8);
            z-index: 25;
            min-height: auto !important;
            min-width: 400px;
            background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.8));
            backdrop-filter: blur(20px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            box-shadow: 0 0 5px rgba(22, 22, 22, 0.1);
        }

        .login-title {
            color: #003366; 
            text-align: center;
            margin-bottom: 30px;
        }

        .login-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
            letter-spacing: 3px;
        }

        .login-title p {
            font-size: 14px;
            color:red;
            font-weight: 600;
            margin-bottom: 30px;

        }

        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }

        .login-form .field {
            width: 100%;
            text-align: center;
        }

        .login-form .field input {
            font-family: Quicksand;
            border: none;
            padding: 16px 40px;
            border-radius: 10px;
            outline: none;
            text-align: center;
            box-shadow: 0 2px 5px rgba(50, 50, 50, 0.2);
            background: rgba(255, 255, 255, 0.9); 
            color: #333;
            font-size: 16px;
            width: 100%;
            max-width: 300px;
        }

        ::placeholder {
            color: #666;
            letter-spacing: 2px;
        }
        .login-form .field button {
    font-family: Quicksand;
    padding: 16px 50px;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    margin-top: 10px;
    transition: 1s;
    font-weight: bold;
    font-size: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 300px;
    background: black;
    color: #fff;
    box-shadow: 0 2px 5px rgba(50, 50, 50, 0.2);
}
        .login-form .field button:hover {
            transform: translateY(-3px);
        }
        .square {
            height: 100vh;
            width: 50vw;
            display: table;
            position: absolute;
            background: rgba(0, 0, 0, 0.1);
            transform: rotate(45deg);
        }
        .circle.circle-center {
    top: 6%;
    left: 61vh;
    background: rgba(0, 0, 0, 0.1);
}

.circle {
    height: 88vh;
    width: 43vw;
    display: table;
    position: absolute;
    background: rgba(0, 0, 0, 0.1);
    transform: rotate(45deg);
    animation: bounce 10s infinite ease-in-out;
    border-radius: 313vh;
}
@keyframes bounce {
    0% {
        transform: translate(-50%, -50%) rotate(45deg);
    }
    50% {
        transform: translate(-50%, -50%) rotate(45deg) scale(1.1); 
    }
    100% {
        transform: translate(-50%, -50%) rotate(45deg);
    }
}


        .square.square-tl {
            top: -80%;
            left: -10%;
            animation: bounce 6s infinite ease-in-out;
            background: rgb(0, 0, 0, 0.1); 
            z-index: 50;
        }

        .square.square-tr {
            top: 0%;
            right: -30%;
            animation: bounce 5s infinite ease-in-out;
        }

        .square.square-bl {
            bottom: -70%;
            left: -15%;
            animation: bounce 4s infinite ease-in-out;
        }

        .square.square-br {
            bottom: 0%;
            right: -40%;
            animation: bounce 3s infinite ease-in-out;
            background: rgb(0, 0, 0, 0.1);
        }

        @keyframes bounce {
            0% { transform: translateY(0px) rotate(45deg) }
            50% {
                transform: translateY(20px) rotate(45deg);
                border-radius: 50px;
            }
            100% { transform: translateY(0px) rotate(45deg) }
        }

        .star {
            height: 50px;
            width: 50px;
            display: table;
            position: absolute;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5); /* Black */
            transition: 0.5s;
        }

        .star1 {
            bottom: -10%;
            left: -30%;
            transform: rotate(-30deg);
            animation: sweep 15s infinite;
            background: rgba(0, 0, 0, 0.5); /* Black */
        }

        .star2 {
            bottom: -30%;
            left: -10%;
            transform: rotate(-30deg);
            animation: sweep 10s infinite;
            background: rgba(255, 255, 255, 0.5); /* White */
        }

        @keyframes sweep {
            100% { bottom: 120%; left: 120%; transform: rotate(360deg); }
        }
    </style>
</head>
<body class="background">
    <div class="login-field">
        <div class="login-background">
            <div class="login-title">
                <h2>Sign Up</h2>
                <p>Give your Username uniquely or else you cannot log in to this website.</p>
                <div class="login-form">
    <form action="signup_process.php" method="POST">
        <div class="field">
            <input type="text" name="username" placeholder="Enter Username" required>
        </div>
        <div class="field">
            <button type="submit">Sign Up</button>
        </div>
    </form>
    <!-- Display the message -->
    <?php if (!empty($message)) : ?>
        <p style="color: <?php echo (strpos($message, 'successful') !== false) ? 'green' : 'red'; ?>; text-align: center; margin-top: 10px;">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>
</div>
            </div>
        </div>
    </div>
    <span class="circle circle-center"></span>
    <span class="square square-tl"></span>
    <span class="square square-tr"></span>
    <span class="square square-bl"></span>
    <span class="square square-br"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    
</body>
</html>
