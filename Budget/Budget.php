<?php
    include('../home/session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo.png" type="image/icon type" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <title>Budget App</title>
</head>
<body>

    <nav>
        <a href="../first/first.php"><img class="loim" src="logo1.png" /></a>
        <ul>
          <li><a href="../first/first.php">HOME</a></li>
          <li><a href="../about/about.php">ABOUT US</a></li>
          <li><a href="../home/logout.php">LOGOUT</a></li>
          <li><img src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/000000/external-user-social-media-ui-tanah-basah-glyph-tanah-basah.png " width="25px" /></li>
          <li style="color:#fff;"><?php echo"$name" ?> </li>  
        </ul  >
      </nav>

    <h1 style="text-align: center;">BUDGET TRACKING FOR FARMERS</h1>
    <div class="container">
        <div class="budget__numbers">
            <div id="earned" class="number">
                <small>Money Earned</small>
                <div class="amount__container">
                    <p id="earned__symbol">Rs</p>
                    <span id="amount__earned"></span>
                </div>
            </div>
            <div id="available" class="number">
                <small>Money Available</small>
                <div class="amount__container">
                    <p>Rs</p>
                    <span id="amount__available"></span>
                </div>
            </div>
            <div id="spent" class="number">
                <small>Money Spent</small>
                <div class="amount__container">
                    <p id="spent__symbol">Rs</p>
                    <span id="amount__spent"></span>
                </div>
            </div>
        </div>
        <div class="input__area">
            <input type="text" id="description" placeholder="Description">
            <input type="number" id="amount" placeholder="Amount">
        </div>
        <div class="buttons__area">
            <button id="add__income">Add Income</button>
            <button id="add__expense">Add Expense</button>
        </div>
        <div class="items__container">
            <div id="income__container" class="container">
                <h2>Income</h2>
                <!-- <div class="item income">
                    <h4>Stuff sold</h4>
                    <div class="item__income">
                        <p class="symbol">Rs</p>
                        <span class="income__amount">200</span>
                    </div>
                    <i class="far fa-trash-alt"></i>
                </div> -->
                
            </div>
            <div id="expenses__container" class="container">
                <h2>Expenses</h2>
                <!-- <div class="item expense">
                    <h4>Stuff bought</h4>
                    <div class="item__expense">
                        <p class="symbol">Rs</p>
                        <span class="expense__amount">200</span>
                    </div>
                    <i class="far fa-trash-alt"></i>
                </div> -->
            </div>
        </div>
        <a href="Budget.php"><i class="far fa-trash-alt fa-lg" style="colo:red;"></i></a>
    </div>

    
    <script src="main.js"></script>
    <h2>Wanna Know if its a Profit / Loss ?</h2>
    <form action="index2.html">
        <button class = "button_np" type="submit">
            YES
        </button>
    </form>
    <h2>Visualise your expenses here</h2>
    <form action="index3.html">
        <button class = "button_np" type="submit">
            I'm in
        </button>
    </form>
</body>
</html>











	


