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
   <title>About Us</title>

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
         <h3>Why Choose Us?</h3>
         <p>We are committed to providing the freshest produce directly from local farmers to your table. Our platform ensures quality and transparency in every transaction.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What We Provide?</h3>
         <p>We offer a wide range of fresh fruits, vegetables, and other farm products. Our goal is to support local farmers and provide healthy options for our customers.</p>
         <a href="shop.php" class="btn">Our Shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"The quality of the produce is outstanding, and the service is excellent. I highly recommend Farmers Fairway!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Doe</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I love the variety of products available. It's great to know I'm supporting local farmers with every purchase."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jane Smith</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"Farmers Fairway has made it so easy to get fresh produce delivered to my door. The quality is always top-notch."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Johnson</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"The customer service is fantastic, and the produce is always fresh. I can't recommend them enough!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Brown</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"A wonderful service that brings the best of local farming to my home. The quality and selection are unmatched."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah Wilson</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I appreciate the ease of ordering and the freshness of the products. Farmers Fairway is my go-to for groceries."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Lee</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>