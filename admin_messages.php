<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title">Messages</h1>

   <div class="box-container">

      <?php
         $select_messages = $conn->prepare("SELECT * FROM `message` WHERE admin_id = ?");
         $select_messages->execute([$admin_id]);
         if($select_messages->rowCount() > 0){
            while($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="box">
         <p> From : <span><?= $fetch_message['name']; ?></span> </p>
         <p> Message : <span><?= $fetch_message['message']; ?></span> </p>
      </div>
      <?php
            }
         }else{
            echo '<p class="empty">No messages yet!</p>';
         }
      ?>

   </div>

</section>

<script src="js/script.js"></script>

</body>
</html>