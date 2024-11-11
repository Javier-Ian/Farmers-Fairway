<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Farmers Fairway connects you to high-quality products straight from local farms. By choosing us, you're supporting sustainable agriculture and building connections between growers and buyers.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Farmers Fairway offers a simple platform for farmers to post fresh products directly for buyers. We ensure quality, transparency, and easy transactions, connecting local farms to your table with every purchase.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/yed.jpg" alt="">
         <p>I love knowing exactly where my food comes from. Farmers Fairway makes it so easy to buy fresh, local produce directly from nearby farms. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yed Francois Cagang</h3>
      </div>

      <div class="box">
         <img src="images/ian.jpg" alt="">
         <p>As a farmer, this platform has been a game-changer. It’s simple to post my products, and I’ve been able to reach so many new customers. A great tool for local farmers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ian Dave Javier</h3>
      </div>

      <div class="box">
         <img src="images/rey.jpg" alt="">
         <p>Buying directly from farmers has never been easier. The quality of the products is fantastic, and the process is super straightforward. Great experience!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Reynante Baldivino</h3>
      </div>

      <div class="box">
         <img src="images/nilo.jpg" alt="">
         <p>Farmers Fairway gives me peace of mind. I know I’m getting fresh products and supporting local growers. It’s a win-win! For me!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nilo Garciano Jr.</h3>
      </div>

      <div class="box">
         <img src="images/shamel.jpg" alt="">
         <p>The site is user-friendly and efficient. I’ve been able to find a variety of fresh produce, and it always feels good to know my money goes to local farmers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shamel Omo</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I appreciate the transparency Farmers Fairway offers. You can really tell the difference in quality and taste. It’s now my go-to place for fresh food!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kirk Cajardo</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>