<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<html>

<head>
    <title>ORENDA</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <meta charset="utf-8">
   <!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
    <script src="../jquery/jquery3.2.1.min.js"></script>
   <!--<script src="../bootstrap/js/bootstrap.min.js"></script>-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
   <link rel="stylesheet" href="house.css">
    <style>
   

.footer{
    bottom: 0;
}
.border {
    border: 1px solid #dee2e6!important;
    box-shadow: 0 4px 30px rgb(0 0 0 / 30%);
    backdrop-filter: blur(3.7px);
    border-radius: 16px;
}
    </style>
</head>

<body>
    <nav>
        <a href="home.html"><img class="loim" src="logo1.png" /></a>
        <ul>
          <li><a href="home.php">HOME</a></li>
      <li>     
                    <!-- ur dropdown-->
                        <div class="dropdown">
                            <a>HISTORY</a>
                            <div class="dropdown-content">
                            <a href="user_ques.php">Questions</a>
                            <a href="user_answer.php">Answers</a>
                        </div>
                        </div>
            </li>
            <li>
                        <a href="user_notifications.php">
                            <?php
                            $q="SELECT count(*) FROM user_notifications where userid='".$_SESSION['username']."'";
                            $d=mysqli_query($conn,$q);
                            $notif_count=mysqli_fetch_row($d);
                            ?>
                            NOTIFICATION<b><i><span style='background-color:grey;color:white;padding: 2px 5px; margin-left: 2px;
                            border-radius: 4px;'><?php echo"$notif_count[0]";?></span></i></b>
                        </a>
            </li>
          <li><a href="../about/about.php">ABOUT US</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
<section style="margin-top:115px;">
    <div class="out">
        <h2>Questions Asked By You</h2>
        <div class="out_b1">
            <!--<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">-->
            <div class="out_b2">
                 <p>
                    <?php
                        
                        $ques=mysqli_query($conn,"SELECT `question`,`date`  FROM questions where userid='".$_SESSION['username']."' order by `date` desc");
                        
                        while($q=mysqli_fetch_array($ques))
                        {
                           
                            
                            
                            print ("<div class='left'><small style='color:blue; font-size:0.16in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                            print ("Question: <i>".$q['question']."</i><br/><hr/></div>");
                            
                            
                            
                           
                        }

                    ?>

                </p>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
                    </section>
    <section class="footer">
      <h4>About Us</h4>
      <p>
        The objective of the farming app is to provide a user-friendly interface
        for farmers to manage their crops and live tracking of expenses. The
        app will allow farmers to track of expenses of the crop, monitor
        weather conditions and soil testing, and receive alerts for pest and
        disease out breaks
      </p>
      <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </div>

      <p>Made for <i class="fa fa-heart-o"></i> lovely farmers</p>
    </section>
</body>

</html>