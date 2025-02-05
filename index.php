<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language learning </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            overflow: hidden;
            position: relative;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
            z-index: 2;
            position: relative;
        }

        .container h1 {
            font-size: 28px;
            color: black;
            margin-bottom: 20px;
        }

        .btn-container button {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            cursor: pointer;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            letter-spacing: 1px;
        }

        .signup-btn {
            background: blue;
        }

        .signup-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 255, 0.5);
        }

        .login-btn {
            background: black;
        }

        .login-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .new-user-container h4,
        .existing-user-container h4 {
            font-size: 20px;
            color: black;
            margin-bottom: 10px;
        }

        /* Rotating book animation */
        .rotating-book {
            position: absolute;
            background: linear-gradient(45deg, blue, black);
            border-radius: 5px;
            animation: rotateBook 5s infinite linear;
            opacity: 0.8;
        }

        /* Rotating animation */
        @keyframes rotateBook {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Books in different sizes */
        .rotating-book.small {
            width: 30px;
            height: 30px;
        }

        .rotating-book.medium {
            width: 50px;
            height: 50px;
        }

        .rotating-book.large {
            width: 80px;
            height: 80px;
        }

        /* Floating text animation */
        .floating-text {
            position: absolute;
            font-size: 24px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.8);
            animation: floatText 6s infinite ease-in-out;
            opacity: 0;
            pointer-events: none;
        }

        @keyframes floatText {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }
            50% {
                transform: translateY(-10px);
                opacity: 1;
            }
            100% {
                transform: translateY(-50px);
                opacity: 0;
            }
        }

        /* Custom colors for text */
        .text-color-1 { color: #1e90ff; }
        .text-color-2 { color: #ff4500; }
        .text-color-3 { color: #32cd32; }
        .text-color-4 { color: #6a5acd; }
        .text-color-5 { color:rgb(94, 255, 20); }
        .text-color-6 { color:rgb(50, 3, 221); }
        .text-color-7 { color:rgb(255, 20, 20); }
        .s1{top: 10%; left: 5%; animation-duration: 4s;}
        .s2{top: 20%; right: 10%; animation-duration: 6s;}
        .s3{bottom: 15%; left: 20%; animation-duration: 5s;}
        .s4{bottom: 30%; right: 25%; animation-duration: 7s;}
        .s5{top: 5%; right: 35%; animation-duration: 8s;}
        .m1{top: 15%; left: 25%; animation-duration: 6s;}
        .m2{top: 50%; right: 5%; animation-duration: 4s;}
        .m3{bottom: 10%; left: 50%; animation-duration: 7s;}
        .m4{top: 15%; right: 45%; animation-duration: 5s;}
        .m5{bottom: 5%; left: 5%; animation-duration: 6s;}
        .l1{top: 40%; left: 10%; animation-duration: 10s;}
        .l2{bottom: 20%; right: 15%; animation-duration: 9s;}
        .lan-1{top: 20%; left: 30%;}
        .lan-2{top: 40%; left: 50%; animation-delay: 1s;}
        .lan-3{top: 60%; left: 20%; animation-delay: 2s;}
        .lan-4{top: 50%; right: 10%; animation-delay: 3s;}
        .lan-5{top: 30%; right: 25%; animation-delay: 4s;}
        .lan-6{top: 85%; right: 22%; animation-delay: 5s;}
        .lan-7{top: 25%; left: 5%; animation-delay: 6s;}
    </style>
</head>
<body>
    <!-- Background books -->
    <div class="rotating-book small s1"></div>
    <div class="rotating-book small s2"></div>
    <div class="rotating-book small s3"></div>
    <div class="rotating-book small s4"></div>
    <div class="rotating-book small s5"></div>

    <div class="rotating-book medium m1"></div>
    <div class="rotating-book medium m2"></div>
    <div class="rotating-book medium m3"></div>
    <div class="rotating-book medium m4"></div>
    <div class="rotating-book medium m5"></div>

    <div class="rotating-book large l1"></div>
    <div class="rotating-book large l2"></div>

    <!-- Floating text animation -->
    <div class="floating-text text-color-1 lan-1">Hello</div>
    <div class="floating-text text-color-2 lan-2">Hola</div>
    <div class="floating-text text-color-3 lan-3">Bonjour</div>
    <div class="floating-text text-color-4 lan-4">你好</div>
    <div class="floating-text text-color-5 lan-5">こんにちは</div>
    <div class="floating-text text-color-6 lan-6">স্বাগত</div>
    <div class="floating-text text-color-7 lan-7">வணக்கம்</div>

    <!-- Main content -->
    <div class="container">
        <h1>Welcome to the Language Game!</h1>

        <!-- New User Container -->
        <div class="new-user-container">
            <!-- <h4>New Player</h4> -->
            <div class="btn-container">
                <button class="signup-btn">
                    <a href="signup.php">New Player</a>
                </button>
            </div>
        </div>

        <!-- Existing User Container -->
        <div class="existing-user-container">
            <!-- <h4>Returning Player</h4> -->
            <div class="btn-container">
                <button class="login-btn">
                    <a href="log-in.php">Existing Player</a>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
