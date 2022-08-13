<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['admin_id'])) {
   $message[] = 'You are logged in as admin';

   header('location:admin/dashboard.php');

}
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg" style="background: linear-gradient(to bottom right,rgba(42, 142, 182, 0.841),white);">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide"> 
         <div class="content">
            <h3>T-Shirts For Summer</h3>
            <!-- <a href="shop.php" class="btn">Shop Now</a> -->
            <div class="content"> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, minima?</p></div>
           
         </div>
         <div class="image">
            <img src="images/t-shirt.png" alt="">
         </div>
      </div>

      <div class="swiper-slide slide"> 
         <div class="content">
            <h3>Denim Jackets</h3>
            <!-- <a href="shop.php" class="btn">Shop Now</a> -->
            <div class="content"> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, minima?</p></div>
         </div>
         <div class="image">
            <img src="images/jacket.png" alt="">
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="content">
            <h3>Fasionable Shoes</h3>
            <!-- <a href="shop.php" class="btn">Shop Now</a> -->
            <div class="content"> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, minima?</p></div>
         </div>
         <div class="image">
            <img src="images/imgbg-removebg-preview.png" alt="">
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veritatis minus et similique doloribus? Harum molestias tenetur eaque illum quas? Obcaecati nulla in itaque modi magnam ipsa molestiae ullam consequuntur.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 
var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
   },
});

</script>

</body>
</html>