<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

$message = []; // Initialize as an array to store multiple messages

if(isset($_POST['send_message'])){

   $admin_id = $_POST['admin_id'];
   $admin_id = filter_var($admin_id, FILTER_SANITIZE_NUMBER_INT);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $message_content = $_POST['message'];
   $message_content = filter_var($message_content, FILTER_SANITIZE_STRING);

   $insert_message = $conn->prepare("INSERT INTO `message`(user_id, admin_id, name, message) VALUES(?,?,?,?)");
   $insert_message->execute([$user_id, $admin_id, $name, $message_content]);

   $message[] = 'Message sent successfully!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Admin</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="contact">

   <h1 class="title">Contact Admin</h1>

   <?php if(!empty($message)): ?>
      <div class="message">
         <?php foreach($message as $msg): ?>
            <span><?= $msg; ?></span>
         <?php endforeach; ?>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
   <?php endif; ?>

   <form action="" method="POST">
      <select name="admin_id" required>
         <option value="">Select Admin</option>
         <?php
            $select_admins = $conn->prepare("SELECT * FROM `users` WHERE user_type = 'admin'");
            $select_admins->execute();
            while($fetch_admins = $select_admins->fetch(PDO::FETCH_ASSOC)){
               echo '<option value="'.$fetch_admins['id'].'">'.$fetch_admins['name'].'</option>';
            }
         ?>
      </select>
      <input type="text" name="name" placeholder="Enter your name" required class="box">
      <textarea name="message" class="box" placeholder="Enter your message" required></textarea>
      <input type="submit" value="Send Message" class="btn" name="send_message">
   </form>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>