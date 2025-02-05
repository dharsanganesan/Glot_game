<?php include("header.php"); ?>
<style>
    body {
        background-color: #e0f7fa; /* Light blue background */
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .update-profile-container {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    .update-profile-form {
        background: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
    }

    .update-profile-form h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #333;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 1rem;
        color: #333;
    }

    .form-group input[type="date"] {
        cursor: pointer;
    }

    .form-group .submit-btn {
        background: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }

    .form-group .submit-btn:hover {
        background: #0056b3;
    }

    .back-btn {
        text-align: center;
        margin-top: 20px;
    }

    .back-btn a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .back-btn a:hover {
        color: #0056b3;
    }
</style>
</head>
<body>
    <div class="update-profile-container">
        <div class="update-profile-form">
            <h2>Update Your Profile</h2>
            <form action="save_profile.php" method="POST">
                <!-- Full Name (Read-only) -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="John Doe" readonly>
                </div>

                <!-- Permanent Code (Read-only) -->
                <div class="form-group">
                    <label for="permanent_code">Permanent Code</label>
                    <input type="text" id="permanent_code" name="permanent_code" value="ABC12345" readonly>
                </div>

                <!-- Gender Select -->
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Date of Birth Input -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="1999-01-01" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>

            <!-- Back Link -->
            <div class="back-btn">
                <a href="profile.php">Back to Profile</a>
            </div>
        </div>
    </div>
</body>
</html>
