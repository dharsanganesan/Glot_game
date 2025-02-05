<?php 
// Include the header
include("header.php"); 

// Start the session to access updated profile data
session_start();
?>

<style>
    body {
        background-color: #e0f7fa; /* Light blue background */
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .profile-container {
        display: flex;
        justify-content: center;
        padding: 20px;
        flex-wrap: wrap;
    }

    /* Profile Card (Pale Yellow) */
    .profile-card {
        background: #FAFAD2; /* Pale Yellow */
        color: black;
        width: 30%;
        max-width: 300px;
        margin: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .profile-card img {
        width: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-info {
        margin-top: 15px;
    }

    .profile-info h3 {
        margin: 0;
        font-size: 1.5rem;
        color: black;
    }

    .profile-info p {
        margin: 5px 0;
        color: black;
    }

    .update-profile {
        margin-top: 15px;
    }

    .update-profile a {
        display: inline-block;
        padding: 10px 15px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.3s;
    }

    .update-profile a:hover {
        background: #0056b3;
    }

    /* Supercoins Container (Pale Orange) */
    .supercoins-container {
        background: #FFDAB9; /* Pale Orange */
        color: black;
        width: 30%;
        max-width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        margin: 20px;
        text-align: center;
    }

    .supercoins-container h3 {
        margin-bottom: 15px;
        color: black;
    }

    .supercoins-container img {
        width: 8em;
        height: 5cm;
        margin-top: 1cm;
    }

    .supercoins-container .total-supercoins {
        margin-top: 3cm;
        font-size: 1.2rem;
    }

    @media only screen and (max-width: 600px) {
        .profile-container {
            flex-direction: column;
            align-items: center;
        }

        .profile-card, .supercoins-container {
            width: 100%;
            margin: 20px 0;
        }
    }
</style>

</head>
<body>
    <div class="profile-container">
        <!-- Profile Card (Pale Yellow) -->
        <div class="profile-card">
            <img src="<?php echo 'images/profile.png'; ?>" alt="learning language">
            <div class="profile-info">
                <!-- Display Name from Session -->
                <h3 id="user-name"><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'John Doe'; ?></h3>

                <!-- Display Permanent Code -->
                <p><strong>Permanent Code:</strong> <?php echo isset($_SESSION['permanent_code']) ? $_SESSION['permanent_code'] : 'ABC12345'; ?></p>

                <!-- Display Gender from Session -->
                <p><strong>Gender:</strong> <?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : 'Male'; ?></p>

                <!-- Display Date of Birth from Session -->
                <p><strong>Date of Birth:</strong> <?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : '1999-01-01'; ?></p>

                <!-- Update Profile Link -->
                <div class="update-profile">
                    <a href="update_profile.php">Update Profile</a>
                </div>
            </div>
        </div>

        <!-- Supercoins Container -->
        <div class="supercoins-container">
            <h3>Supercoins</h3>
            <img src="images/supercoins.png.jpg" alt="supercoins image">
            <p class="total-supercoins">Total Supercoins earned: </p>
            <p>25</p>
        </div>
    </div>
</body>
</html>
