<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Balasan Quary</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                        <!--      <img src="images/logo.jpg"  width="15% "/> --> Balasan Quary</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Mission</h2>
                <p class="lead">A job in which strength , power and perseverance is the only key to have a stable income .</p>
            </div>
            <div class="center wow fadeInDown">
                <h2>Vision</h2>
                <p class="lead">We , the people in that place promote team work and human force inable for us to provide the needs of our family. With the help of the owner of that quarrying we can able to produce future of our children </p>
               
            </div>
            <div class="center wow fadeInDown">
            <!--
                <h2>Core Values</h2>
                <p class="lead">Christ-centered<br>Passionate for result<br>Enterprenuetal Spirit<br>Committed to the organization<br>Growth oriented</p>
            -->
            </div>
        
            <div class="center wow fadeInDown">
            <!--
                <h2>FoodOrderingSystem Profile</h2>
                <p class="lead">FoodOrderingSystem (FOS) Services aim to provide excellent quality service to client ensuring customer satisfaction through a service with value and personalization performed by a highly knowledgeable and experienced professional. My concentration shall and always will be to assist the clients in achieving their dream of a perfect food eating while maintaining my ideas and integrity in the line of customer.</p>
            -->
            </div>
        </section>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>