<?php
    include('../home/session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Section Project</title>
    <link rel="icon" href="image/logo.png" type="image/icon type" />
    <link rel="stylesheet" href="about.css" />
    <link rel="stylesheet" href="./Font-Awesome/all.min.css" />
  </head>

  <body>
    <nav>
      <a href="../first/first.php"><img class="loim" src="image/logo1.png" /></a>
      <ul>
        <li><a href="../first/first.php">HOME</a></li>
        <li><a href="../about/about.php">ABOUT US</a></li>
        <li><a href="../home/logout.php">LOGOUT</a></li>
        <li>
          <img
            src="https://img.icons8.com/external-others-inmotus-design/67/null/external-User-basic-web-ui-elements-others-inmotus-design.png "
            width="25px"
          />
        </li>
        <li><?php echo"$name" ?></li>
      </ul>
    </nav>

    <h1 class="tm">Team Members</h1>

    <div class="main">
      <div class="profile-card">
        <div class="img">
          <img src="image/saro.jpeg" />
        </div>
        <div class="caption">
          <h3>Saravana Iyyappan</h3>
          <p>Developer</p>
          <div class="social-links">
            <a href="https://www.instagram.com/joker._.pamda/"
              ><i class="fab fa-instagram"></i>
              <img
                src="https://img.icons8.com/color/96/null/instagram-new--v1.png"
                width="30"
                height="30"
              />
            </a>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="img">
          <img src="image/khushika.jpeg" />
        </div>
        <div class="caption">
          <h3>Khushika Reddy</h3>
          <p>Developer</p>
          <div class="social-links">
            <a href="https://www.instagram.com/justt.khushika/"
              ><i class="fab fa-instagram"></i>

              <img
                src="https://img.icons8.com/color/96/null/instagram-new--v1.png"
                width="30"
                height="30"
              />
            </a>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="img">
          <img src="image/rasu.jpeg" />
        </div>
        <div class="caption">
          <h3>Mohanraj E</h3>
          <p>Developer</p>
          <div class="social-links">
            <a href="https://www.instagram.com/mohanraj.e28/"
              ><i class="fab fa-instagram"></i>
              <img
                src="https://img.icons8.com/color/96/null/instagram-new--v1.png"
                width="30"
                height="30"
              />
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="./Font-Awesome/all.min.js"></script>
  </body>
</html>
