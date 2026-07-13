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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/logo.png" type="image/icon type" />
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"> 
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
        <title>Blog-Page</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">

    <style>
        
nav{
    padding: 1% 6%;
    display: flex;
    justify-content: space-between;
    justify-items: center;
}
.loim{
    width: 150px;
}
nav ul{
    
    display: flex;
    justify-content:right;
    margin-top: 20px;
    margin-right: 20px;
}
nav ul li{
    margin-left: 20px;
    list-style: none;
}
nav ul li a{
    text-decoration: none;
    color: #3C2A21;;
}
li a::after{
  content:'';
  width:0;
  height: 2px;
  background-color:white;;
  margin:auto;
  display:block;
}
li a:hover:after{
    width:100%;
    transition: width 0.3s;
}


/*footer*/
.footer{
  width: 100%;
  text-align: center;
  background-color: #2C3333;
  padding: 25 0 0 0;
}
.footer h4{

  margin-bottom: 18px;
  font-weight: 600;
  color: #f44336;
}
p{
  color:#D8D8D8;
  font-size:14px;
  font-weight:300px;
  line-height: 22px;
  padding: 0 60px
}

.icons .fa{
  color:#f44336;
  margin:0 13px;
  cursor:pointer;
  padding:18px 0;

}
.fa-heart-o{
  color:#f44336;
}
a{
  text-decoration: none;
  color: #354259;
}
        </style>

</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <nav>
        <a href="../first/first.php"><img class="loim" src="image/logo1.png" /></a>
        <ul>
          <li><a href="../first/first.php">HOME</a></li>
          <li><a href="../about/about.php">ABOUT US</a></li>
          <li><a href="../home/logout.php">LOGOUT</a></li>
          <li><img src="https://img.icons8.com/external-others-inmotus-design/67/null/external-User-basic-web-ui-elements-others-inmotus-design.png " width="25px" /></li>
          <li><?php echo"$name" ?> </li>  
        </ul  >
      </nav>


    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Hey Chief,</h3>
                <h1>Let's Exploxer the World of Agri</h1>
                <button class="btn">Let's See</button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-4.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Assam to boost scientific research in natural farming</h3>
                                <button class="btn btn-blog" onclick="document.location='https://economictimes.indiatimes.com/news/economy/agriculture/assam-to-boost-scientific-research-in-natural-farming/articleshow/99038407.cms'">See More</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-3.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Unseasonal rain & crop damage: Clouds gather over RBI's fight against inflation</h3>
                                <button class="btn btn-blog" onclick="document.location='https://www.timesnownews.com/business-economy/economy/unseasonal-rain-crop-damage-clouds-gather-over-rbis-fight-against-inflation-article-98757221'">See More</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-2.jpg" alt="post-2">
                            <div class="blog-title">
                                <h3>Agricultural Tips for Farmers</h3>
                                <button class="btn btn-blog" onclick="document.location='https://www.agrifarming.in/agriculture-tips-for-farmers-farming-tips'">See More</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/post-10.jpg" alt="post-3">
                            <div class="blog-title">
                                <h3>5 Innovative Ways for Farmers to Fight Pests Without Using Any Chemicals</h3>
                                <button class="btn btn-blog" onclick="document.location='https://www.thebetterindia.com/120349/innovative-ways-pests-farmers/'">See More</button>
                                
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="../blog-page/assets/Blog-post/blog1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                             <span>An Case Study:System of Rice Intensification (SRI)</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://journalsofindia.com/system-of-rice-intensification-sri-2/">System of Rice Intensification (SRI)</a>
                            <p>
                                The System of Rice Intensification (SRI) was first developed in Madagascar in the 1980s and since then several countries in the world have been practising it, including India.....
                            </p>
                            <button class="btn post-btn" onclick="document.location='https://journalsofindia.com/system-of-rice-intensification-sri-2/'">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog2.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                             <span>Smart Farming</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">A Future Revolution in Farming : Smart Farming</a>
                            <p>Smart farming centers on growing farm productivity using technology - hardware and software. Smart farming focuses on managing farms, plantations, and all associated farming activities using IoT, drones, robotics, machinery, and artificial intelligence, to determine a path to predictable farm output.......
                            </p>
                            <button class="btn post-btn" onclick="document.location='https://www.cropin.com/smart-farming'
                            ">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    
                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                   
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.thehindubusinessline.com/economy/agri-business/small-tea-growers-made-india-self-reliant-in-production/article66687557.ece">Small tea growers made India self-reliant in production</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.thehindubusinessline.com/economy/agri-business/pepsico-cropin-launch-crop-intelligence-model/article66679531.ece">Precision agriculture. PepsiCo, Cropin launch crop intelligence model</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                   
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="https://www.thehindubusinessline.com/economy/agri-business/egypt-looking-to-buy-indian-rice-through-rupee-route/article66657378.ece">Egypt looking to buy Indian rice through rupee route</a>
                            </div>
                        </div>
                    
                  
                   
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <section class="footer">
        <h4>About Us</h4>
        <p>
          The objective of the farming app is to provide a user-friendly interface
          for farmers to manage their crops and live tracking of expensive. The
          app will allow farmers to track of expensive of the crop, monitor
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
  
    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>