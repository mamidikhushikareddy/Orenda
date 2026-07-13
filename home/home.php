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
    <link rel="icon" href="image/logo.png" type="image/icon type">
    <!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
--><link rel="stylesheet" href="house.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
   <script src="../jquery/jquery3.2.1.min.js"></script>
   <!-- <script src="../bootstrap/js/bootstrap.min.js"></script>-->
    <style>
    #headerWrapper {
        position: fixed;
        width: 100%;
        top: 0;
        height: whatever;
        margin-top: -10px;
    }
    
body
{
 background-color: beige;

}
.border {
    border: 1px solid #dee2e6!important;
    box-shadow: 0 4px 30px rgb(0 0 0 / 30%);
    backdrop-filter: blur(3.7px);
    border-radius: 16px;
}

/*drop the effect for history*/
.dropbtn {
  background-color: #4caf50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
  background-color: #f1f1f1;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

/*header css  mine */
    </style>
</head>

<body>
    <nav>
        <a href="home.html"><img class="loim" src="logo1.png" /></a>
        <ul>
          <li><a href="../first/first.php">HOME</a></li>
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
          <li><img src="https://img.icons8.com/external-others-inmotus-design/67/null/external-User-basic-web-ui-elements-others-inmotus-design.png " width="25px" /></li>
          <li><?php echo"$name" ?> </li>  
        </ul>
      </nav>
<section style="margin-top:105px;">
<div>
        <div class="qn">
            <h1>FARMER VOICE</h1>

            <form method="post" action="post_ques.php">
                <div class="form-group">
                    <input type="hidden" name="uid" value="$_SESSION['$name']">
                    <textarea name="question" class="qn_ta" rows="3" required
                        placeholder="Ask your Question?"></textarea>
                </div>
                <button type="submit" class="qn_btn">Ask ?</button><br>
            </form>
        </div>
        
        <div class="out">
            <h2>Recent Post</h2>
            <div class="out_b1">
               
                <div class="out_b2">
                    <p>
                        <?php
                        
                        $ques=mysqli_query($conn,"SELECT *  FROM questions order by `date` desc");
                        
                        while($q=mysqli_fetch_array($ques))
                        {
                            $qid=$q['qid'];
                            print("<div class='left'>");
                            print ("<h4>".$q['userid']."&nbsp;&nbsp;&nbsp;");
                            print ("<small style='color:blue; font-size:0.16in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                            print ("<u>Question:</u> <i style='color:darkblue;'>".$q['question']."</i><br/>");
                            print("</div>");
                            $ans=mysqli_query($conn,"SELECT answer,userid FROM answers WHERE qid='$qid'");
                            while($a=mysqli_fetch_row($ans)){
                                print("<div class='right'>");
                                print ("<u>Answered</u> by <b>".$a[1]."</b>: <span><i>".$a[0]."</i></span>");
                                print("</div>");
                                
                            }
                            
                            print("<div class='ri_b1'>");
                            print ("<br/></br><div class='.ri_b2'>
                                    <form method='post' action='post_answer.php?qid=$qid'>
                                        <textarea class='ri_ans' name='ans' row='3' placeholder='Answer here' required/></textarea>
                                        
                                        <button class='ri_btn' type='submit' value='submit'> <span>Submit</span></button>
                                    </form>
                                    </div>");
                                    print("</div>");
                                }

                    ?>

                    </p>
                </div>
            </div>
        </div>

        </div>
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
