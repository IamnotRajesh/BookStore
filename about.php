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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
    <h3>About Us</h3>
    <p><a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="Img/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Welcome to Book Carnival, where literature comes to life. We are more than just a bookstore; we are a haven for book lovers, where the written word thrives, and stories come alive. Our story began with a simple dream of fostering a space where book enthusiasts could find solace in the magic of storytelling. 
         What started as a small corner bookstore has grown into a beloved literary destination, attracting bibliophiles from all walks of life.</p>
         <p>At Book Carnival, we pride ourselves on curating a diverse collection of literary treasures from around the world. From classic masterpieces to contemporary bestsellers, our shelves boast an exquisite selection that caters to every reader's taste. 
         Our team of avid readers and literature enthusiasts are always eager to assist you in finding the perfect book. Whether you seek a gripping mystery, an inspiring memoir, or a thought-provoking essay, our knowledgeable staff is here to guide you on a literary journey like no other.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

<h1 class="title">Client's Review</h1>

<div class="box-container">

<div class="box">
    <img src="Img/pic-1.png" alt="">
    <p>With the allure of a grand library, Book Carnival offered an enchanting journey. Their curated collection, intuitive website, and meticulous packaging created a literary indulgence. A beacon of elegance and sophistication, their dedication to literature and readers is unparalleled. Grateful for this experience, I eagerly anticipate more literary adventures with them.</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Lucerian D. Steelwaters</h3>
</div>

<div class="box">
    <img src="Img/pic-2.png" alt="">
    <p>Celestial literary experience! Book Carnival weaves tales into a masterpiece. Refined browsing, personalized recommendations, and impeccable service—poetry in motion. A nostalgic packaging unraveled a cherished keepsake. A true connoisseur of classics, they foster a close-knit reading community through captivating events and discussions. Endless gratitude for kindling my passion for literature; I'm spellbound and eagerly await my next chapter with them.</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Emilia Valyrie</h3>
</div>

<div class="box">
    <img src="Img/pic-3.png" alt="">
    <p>A bibliophile's dream come true! Book Carnival exudes an aura of sophistication and literary finesse. Their selection of books reads like an opus, enchanting readers with stories from every realm. The virtual aisles invite exploration, and their prompt service ensures an impeccable reading journey. A bibliophilic sanctuary that nourishes the soul and ignites imagination. A masterpiece in the world of online bookstores.</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Lucifero Morningstar</h3>
</div>

<div class="box">
    <img src="Img/pic-4.png" alt="">
    <p>A literary voyage like no other! Book Carnival sails the seas of storytelling with finesse. Their artful curation celebrates literary diversity, catering to every reader's heart's desire. Their customer service, a harmonious duet of efficiency and charm, elevates the book-buying experience. They've crafted a sanctuary for literary aficionados, where every chapter unravels a new world of wonder. Bravo!</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Katie Poppins</h3>
</div>

<div class="box">
    <img src="Img/pic-5.png" alt="">
    <p>A sanctuary for the soul, Book Carnival embraces the art of storytelling. Their treasure trove of literary gems rivals any ancient library, offering an enriching experience for avid readers and novice book explorers alike. Customer service, akin to a rare manuscript's preservation, ensures each reader feels valued. A bibliophilic haven where dreams are penned and imaginations soar.</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Sam Malrovich</h3>
</div>

<div class="box">
    <img src="Img/pic-6.png" alt="">
    <p>A literary voyage that bewitches and enthralls! Book Carnival orchestrates an unforgettable melody of literary wonders. Their eloquent collection captivates every taste, from those seeking epic sagas to those yearning for lyrical prose. Their attentiveness to customers is akin to a literary guardian, guiding readers to the perfect narrative. With each book, they compose a literary symphony that resonates with the soul.</p>
    <div class="stars">
    <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
    </div> 
    <h3>Cheng Xuwan</h3>
</div>

</div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="Img/Rajesh.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rajesh Adhikari</h3>
      </div>

      <div class="box">
         <img src="Img/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Salrina Malveriant</h3>
      </div>

      <div class="box">
         <img src="Img/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Brandon Walers</h3>
      </div>

      <div class="box">
         <img src="Img/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Julie Chestchkov</h3>
      </div>

      <div class="box">
         <img src="Img/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Judas Vulcan</h3>
      </div>

      <div class="box">
         <img src="Img/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sofia Claire</h3>
      </div>

   </div>

</section>






<?php include 'footer.php'; ?>

<!--custom js file link-->
<script src="script.js"></script>

</body>
</html>