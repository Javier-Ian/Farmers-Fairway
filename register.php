<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
   $cpass = $_POST['cpass'];
   $user_type = $_POST['user_type'];
   $user_type = filter_var($user_type, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'user email already exists!';
   }else{
      if(!password_verify($cpass, $pass)){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         if(move_uploaded_file($image_tmp_name, $image_folder)){
            $insert = $conn->prepare("INSERT INTO `users`(name, email, password, user_type, image) VALUES(?,?,?,?,?)");
            $insert->execute([$name, $email, $pass, $user_type, $image]);

            if($insert){
               $message[] = 'registered successfully!';
               header('location:login.php');
               exit;
            }
         } else {
            $message[] = 'Failed to upload image. Please check directory permissions.';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/components.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
   
<section class="form-container">
   <form action="" method="POST" enctype="multipart/form-data">
      <h3>register now</h3>
      
      <div class="form-grid">
         <!-- Row 1: Name and Email -->
         <div class="input-group">
            <input type="text" name="name" class="box" placeholder="enter your name" required>
         </div>
         <div class="input-group">
            <input type="email" name="email" class="box" placeholder="enter your email" required>
         </div>
         
         <!-- Row 2: Password and Confirm Password -->
         <div class="input-group">
            <input type="password" name="pass" class="box" placeholder="enter your password" required>
         </div>
         <div class="input-group">
            <input type="password" name="cpass" class="box" placeholder="confirm your password" required>
         </div>
         
         <!-- Row 3: Role Selection and File Upload -->
         <div class="input-group">
            <select name="user_type" class="box" required>
               <option value="">select your role</option>
               <option value="user">Buyer</option>
               <option value="admin">Seller</option>
            </select>
         </div>
         <div class="input-group">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png" required>
         </div>
         
         <!-- Register Button -->
         <div class="input-group full-width">
            <input type="submit" value="register now" class="btn" name="submit">
         </div>
         
         <!-- Login Link -->
         <div class="input-group full-width">
            <p>already have an account? <a href="login.php">login now</a></p>
         </div>
      </div>
   </form>
</section>

</body>
</html>