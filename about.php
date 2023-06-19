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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section id="banner" class="section-m1">
    <div class="aboutUS">
        <h2>About us</h2>

        <p class="p1"> One brand, many companies, and many, many people – that’s us in a nutshell. Spread all over the
            world, we have a passion for electronics and an inspiring shared vision: to create a better
            everyday life for the many people. This, together with our straightforward business idea, shared
            values, and a culture based on the spirit of togetherness, guides us in everything we do.</p>
   </div> 
   <div class="image">
        <img src="images/ecommerce.webp" alt="">
   </div>
   <div class="aboutUS">
    <p class="p2">To offer a wide range of well-designed,<br>
         functional home furnishing products at prices<br>
          so low, that as many people as possible will be<br>
          able to afford them.</p><br>
        <i>CARA business idea</i><br><br>
        
   </div>
   <div class="stores">
    <p>
        <span class="sp1" style="font-size: 40px;"><b>460 CARA stores in 62 markets</b></span> <br><br>
        
        Updated: 22 December 2022
        </p>
        
   </div>
   <div class="worldmap">
    <img src="images/worldmap.png">

        <ul>
            <li><span class="sp2">The first</span> CARA store opened in 1991 in Munich, Germany.</li>
            <li><span class="sp2">The last</span> CARA store to open is Casablanca, Morocco.</li>
            <li>England has <span class="sp2">The most</span> CARA stores in the world.</li>
            <li><span class="sp2">The biggest</span> CARA store is Moscow City, Russia.</li>
        </ul>

   </div>
   <div class="images">
    <div class="content-p1-imgs">
        <img class="imgs" id="img1" src="images/img1.jpg">
        <p class="p1-imgs"><span class="sp3">Together, all over the world</span><br>
            The CARA Brand unites thousands of co-workers and hundreds 
            of companies with different owners around the world. The retail 
            business is organised in a franchise system with 12 franchisees 
            in 62 markets that – together with the franchisor and other parts 
            of the business – continuously improve and develop the brand.</p>
    </div>
    <div class="p2-imgs-background">
        <div class="content-p2-imgs">
        <img class="imgs" id="img2" src="images/img2.jpg">
        <p class="p2-imgs" id="img2"><span class="sp4">The history of CARA</span><br>
            CARA reaches millions of hearts and homes all over the world. And it all began in a small Germany town in the 1990s.</div>
        </p>
        </div>
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