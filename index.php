<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title> Dern-Support</title>
</head>
<body>
  <!-- Start Navigation -->
  <header >
    

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo"><span>Dern-Support</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#products">Products</a>
        <a class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></a>
        <a href="#contact">Contact</a>
       
    </nav>

   
</header>

<section class="home" id="home" style=" background:url(images/gh7.jpg) no-repeat; background-size: cover;">

    <div class="content">
        
     <marquee behavior="alternate" direction="right" style="font-size: 30px;"
     >Welcome to <span style="color: rgb(226, 43, 180); font-size: 1.0em;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> Dern-Support</span></marquee>
     <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
     <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="./images/com.mp4" loop autoplay muted></video>
            <h3>Dern-Support</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Dern-Support is an small IT technical support company that repairs computer systems for businesses and individual customers.
                The company provides on-site support for business customers. Individuals must either drop their computer off at one of the company’s offices or arrange for it to be delivered by a courier.</p>
            <a href="#review" class="btn">learn more</a>
        </div>

    </div>

</section> 
<section id="services">
<h1 class="heading"> Ser<span>vices</span> </h1>
</section>

<section class="icons-container" id="services">
   
    <div class="icons">
        
        <div class="info">
            <h3>Data recovery</h3>
            
        </div>
    </div>

    <div class="icons">
        <div class="info">
            <h3>Computer repair</h3>
        </div>
    </div>

    <div class="icons">
        <div class="info">
            <h3>Mobile service</h3>
        </div>
    </div>

    <div class="icons">
        <div class="info">
            <h3>Network solution</h3>
        </div>
    </div>

</section>


<section class="products" id="products">

    <h1 class="heading"> Prod<span>ucts </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./images/rr.gif" alt="">
                <div class="icons">
                  
                </div>
            </div>
            <div class="content">
                <h3>Laptop</h3>
               
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/er (2).jpeg" alt="">
                <div class="icons">
              
                </div>
            </div>
            <div class="content">
                <h3>Rajasthan</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/er (2).jpg "style="width: 40em;" alt="">
                <div class="icons">
                    
                </div>
            </div>
            <div class="content">
                <h3>Keyboard</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/93qR.gif" alt="">
                <div class="icons">
                  
                </div>
            </div>
            <div class="content">
                <h3>Printer</h3>
               
            </div>
        </div>

   
       

        <div class="box">
            <div class="image">
                <img src="./images/er (1).jpeg" alt="">
                <div class="icons">
                    
                    
                </div>
            </div>
            <div class="content">
                <h3>Speaker system</h3>
               
            </div>
        </div>

       

    </div>

</section>

<?php include('userRegistration.php') ?>

<div class="jumbotron " id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h1 class="heading"> <span>Cust</span>omers </h1>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt 
                .</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt
               .</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt
              </p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt
                </p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

 


<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="./images/business-women-pointing-PNG.png" alt="" style="width: 40em;">
        </div>

    </div>

</section>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#">About </a>
          
            <a href="#">Review</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
           
        </div>

      

        
            <img src="./images/payment.png" alt="">
        </div>
    </div>

    <div class="credit">&copy;2024 Habiba Nashat</div>

</section>



</body>
</html>
