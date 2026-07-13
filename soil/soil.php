<?php
    include('../home/session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?><html>
<head>
    <title>Soil Detection</title>
    <link rel="icon" href="logo.png" type="image/icon type" />
    <link href="soil.css" rel="stylesheet">

</head>
<body>
    <section class="s1">
        <div class="header">
        <nav>
            <a href="../first/first.php"><img class="loim" src="logo1.png"></a>
            <ul>
                <li><a href="../first/first.php">HOME</a></li>
                <li><a href="../about/about.php">ABOUT US</a></li>
                <li><a href="../home/logout.php">LOGOUT</a></li>
                <li><img src="https://img.icons8.com/external-others-inmotus-design/67/null/external-User-basic-web-ui-elements-others-inmotus-design.png " width="25px" /></li>
                <li><?php echo"$name" ?> </li>  
    
    
            </ul>
        </nav>
        </div>
    <div class="move">
        
    <div class="content">
        <iframe height="400" width="600" src="https://thingspeak.com/channels/2040470">
        </iframe>
    </div>
          
    <div class="right">
       <div class="h1">
        <span class="soil">
          <h1 style="text-align: end;">Soil </h1>
        </span>
        <span class="detection">
          <h2 style="text-align: end;">Detection</h2>
        </span>
        </div>
    </div>
    </div>

</section>

</body>

</html>