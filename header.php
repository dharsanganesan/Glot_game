<html>
<head>
  <meta charset="UTF-8">
  <meta viewport="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Language Learning App</title>
</head>
<body>
  <?php
  // Get the current file name
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>
  <header>
    <navbar>
      <div class="container">
        <div class="nav">
          <div class="main-toggle"></div>
          <ul class="list">
            <li>
              <!-- <img src="images/logo-image.png" alt="learn" width="50px" height="50px"> -->
            </li>
            <li class="list-icon <?php echo ($current_page == 'home.php') ? 'active' : ''; ?>" style="--color:white;">
              <a href="home.php">
                <span class="icon">
                  <i class="fa fa-home" aria-hidden="true"></i>
                </span>
                <span class="text">Home</span>
              </a>
            </li>
            <li class="list-icon <?php echo ($current_page == 'profile.php') ? 'active' : ''; ?>" style="--color:white;">
              <a href="profile.php">
                <span class="icon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <span class="text">Profile</span>
              </a>
            </li>
            <li class="list-icon <?php echo ($current_page == 'language.php') ? 'active' : ''; ?>" style="--color:white;">
              <a href="language.php">
                <span class="icon">
                  <i class="fa fa-language" aria-hidden="true"></i>
                </span>
                <span class="text">Language</span>
              </a>
            </li>
            <li class="list-icon <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" style="--color:white;">
              <a href="about.php">
                <span class="icon">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </span>
                <span class="text">About</span>
              </a>
            </li>
            <li class="list-icon <?php echo ($current_page == 'supercoins.php') ? 'active' : ''; ?>" style="--color:white;">
              <a href="video.php">
                <span class="icon">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </span>
                <span class="text">Video</span>
              </a>
            </li>
            <li class="list-icon" style="--color:white;">
              <a href="log-in.php">
                <span class="icon">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                </span>
                <span class="text">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </navbar>
  </header>
</body>
<script src="js/header-script.js"></script>
</html>
