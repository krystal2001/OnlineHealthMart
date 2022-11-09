<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Online Health Mart was founded on a simple idea: to change the way online customers across the world purchase their medical equipment.Employees of many medical equipment suppliers often lack the training and knowledge required to adequately address customers’ needs and answer all of their questions. The result is often 
            a slow, cumbersome, and frustrating process for busy customers seeking to purchase quality medical equipment.</p>
         <p>Online Health Mart is different. Our knowledgeable sales and service representatives are fully trained to answer all of your questions about the products in our extensive catalog. Our priority is ensuring you feel confident about every purchase. We’re committed to providing you with a worry-free, pleasant experience.
         We value your time and understand that you have many choices when it comes to purchasing medical equipment. Online Health Mart guarantees responsive, efficient, courteous service,that’s our commitment to you. 
         We look forward to helping you with all your medical equipment needs.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>