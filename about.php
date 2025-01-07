<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa memilih kami?</h3>
         <p>Kami memahami bahwa memulai perjalanan belajar pemrograman bisa terasa menantang. Oleh karena itu, platform kami dirancang khusus untuk pemula yang ingin menguasai dasar-dasar pengembangan web dengan pendekatan yang sederhana, interaktif, dan mendalam.</p>
         <a href="courses.php" class="inline-btn">kursus kami</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Platform ini benar-benar membantu saya yang pemula memahami HTML, CSS, dan JavaScript. Materinya mudah dipahami, dan saya suka bagaimana setiap topik disertai dengan latihan interaktif. Kini saya bisa membuat website sederhana sendiri!</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Rizky A., Mahasiswa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Kursusnya sangat terstruktur. Saya suka proyek akhirnya yang membuat saya merasa seperti seorang developer sungguhan. Terima kasih untuk pengalaman belajar yang luar biasa ini!</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Siti N., Freelance Web Designer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Penjelasan yang diberikan sangat mudah dimengerti, bahkan untuk pemula seperti saya. Latihan langsungnya membantu saya memahami konsep lebih cepat. Sangat direkomendasikan!</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Lina M., Mahasiswi Informatika</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Belajar di sini sangat menyenangkan! Komunitasnya mendukung, dan saya selalu bisa bertanya jika mengalami kesulitan. Sertifikatnya juga membantu saya mendapat kepercayaan lebih saat melamar kerja</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Dimas K., Fresh Graduate</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Fleksibilitas belajar adalah nilai tambah besar. Saya bisa belajar kapan pun saya punya waktu luang. Penjelasan instruktur sangat jelas, membuat coding terasa lebih mudah</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Annisa P., Ibu Rumah Tangga</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Platform ini bukan hanya tentang teori. Saya suka cara mereka mengajarkan dengan praktik langsung. Berkat kursus ini, saya sekarang bekerja sebagai junior web developer!</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3> Bagas S., Junior Web Developer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>