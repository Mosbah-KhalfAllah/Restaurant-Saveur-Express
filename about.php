<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/rest.jpg" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Experience an unforgettable culinary journey at "Saveur Express" since its establishment in 1998. Nestled in the heart of the historic district, our restaurant welcomes you to a warm and elegant setting inspired by the romantic era of the early 20th century.
         Our diverse menu features authentic French cuisine, prepared with fresh, seasonal ingredients. From delicate starters to exquisite desserts, each dish is carefully crafted to tantalize your taste buds and delight your senses.
         With attentive service and a refined ambiance, "Saveur Express" is the perfect place to celebrate special moments, host business dinners, or simply enjoy a memorable meal with friends and family.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>


   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p> Michael Lohscheller is the CEO of Opel since 2017. He has a strong background in finance and has been instrumental in leading Opel through its restructuring and transformation process. Under his leadership, Opel has been focusing on product development.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Michael Lohscheller</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpeg" alt="">
         <p>CEO of Mercedes since May 2019. Known for his extensive experience in the automotive industry and his focus on innovation and sustainability. Under his leadership, Mercedes-Benz has been driving advancements in electric mobility and autonomous driving technology.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Ola Källenius</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpeg" alt="">
         <p>Akio Toyoda is the CEO of Toyota Motor Corporation, serving in this position since 2009. He is known for his commitment to innovation and quality, leading Toyota's efforts in sustainable mobility, including the development of hybrid and hydrogen fuel cell vehicles.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Akio Toyoda</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpeg" alt="">
         <p> CEO of Renault Group since July 2020. Formerly CEO of SEAT and a member of the Executive Committee of the Volkswagen Group. Recognized for his expertise in automotive strategy and brand development.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luca de Meo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.jpeg" alt="">
         <p> Linda Jackson is the CEO of Peugeot since May 2020. She brings extensive experience in the automotive industry, particularly in strategic management and international business development. Under her leadership, Peugeot has been focusing on innovation and sustainable mobility solutions.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Linda Jackson</h3>
      </div>


      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>CEO of BMW AG, appointed in August 2019. Joined BMW in 1991, held multiple leadership roles including Head of Technical Planning and Production Strategy. Known for strategic vision and innovation in automotive industry.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Oliver Zipse</h3>
      </div>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView:1,
      },
      768: {
         slidesPerView: 2,
      },
      991: {
         slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>