<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="layout/style.css">
  </head>
  <body>

    <!-- header section starts -->
    <section class="header">
      <a href="index.php" class="logo">Nature</a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">

      <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(../Course-Project/Media/Images/home-slide-3.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="../Course-Project/package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(../Course-Project/Media/Images/mountain.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="../Course-Project/package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(../Course-Project/Media/Images/desert.webp) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="../Course-Project/package.php" class="btn">discover more</a>
          </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>

    </section>
    <!-- home section ends -->
    
    <!-- services section starts -->
    <section class="services">
      <h1 class="heading-title">our services</h1>

      <div class="box-container">

        <div class="box">
          <img src="../Course-Project/Media/Images/icon-1.png" alt="">
          <h3>adventure</h3>
        </div>


        <div class="box">
          <img src="../Course-Project/Media/Images/icon-2.png" alt="">
          <h3>tour guide</h3>
        </div>

        <div class="box">
          <img src="../Course-Project/Media/Images/icon-3.png" alt="">
          <h3>trekking</h3>
        </div>

        <div class="box">
          <img src="../Course-Project/Media/Images/icon-4.png" alt="">
          <h3>camp fire</h3>
        </div>

        <div class="box">
          <img src="../Course-Project/Media/Images/icon-5.png" alt="">
          <h3>off road</h3>
        </div>

        <div class="box">
          <img src="../Course-Project/Media/Images/icon-6.png" alt="">
          <h3>camping</h3>
        </div>

      </div>
    </section>
    <!-- services section ends -->

    <!--home about section starts-->

    <section class="home-about">

      <div class="image">
        <img src="../Course-Project/Media/Images/snow.jpg" alt="">
      </div>

      <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Nulla, voluptas libero incidunt dolor iure vitae placeat hic modi facilis amet sed asperiores aut quidem 
          suscipit perspiciatis nesciunt neque illum nobis.</p>
          <a href="about.php" class="btn">read more</a>
      </div>

    </section>

    <!--home about section ends-->

    <!--home packages section starts-->

    <section class="home-packages">

      <h1 class="heading-title">our packages</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="../Course-Project/Media/Images/nature.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, aspernatur eligendi. 
              Porro adipisci quibusdam, fugiat sed repudiandae tenetur ullam? 
              Ad porro impedit libero quo corporis quis blanditiis neque laboriosam assumenda.</p>
              <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="../Course-Project/Media/Images/nature.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, aspernatur eligendi. 
              Porro adipisci quibusdam, fugiat sed repudiandae tenetur ullam? 
              Ad porro impedit libero quo corporis quis blanditiis neque laboriosam assumenda.</p>
              <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="../Course-Project/Media/Images/nature.jpg" alt="">
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, aspernatur eligendi. 
              Porro adipisci quibusdam, fugiat sed repudiandae tenetur ullam? 
              Ad porro impedit libero quo corporis quis blanditiis neque laboriosam assumenda.</p>
              <a href="book.php" class="btn">book now</a>
          </div>
        </div>

      </div>

      <div class="load-more"><a href="package.html" class="btn">load more</a></div>

    </section>

    <!--home packages section ends-->

    <!--home offer section starts-->

    <section class="home-offer">

      <div class="content">
        <h3>up to 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Iste eligendi accusantium quasi facere enim aperiam veritatis ea, est cum nesciunt? 
          Nobis, eveniet non quaerat culpa enim recusandae repellat consequuntur voluptate.</p>
      </div>
      <a href="book.php" class="btn">book now</a>

    </section>

    <!--home offer section ends-->



    <!-- footer section starts -->
    <section class="footer">
      <div class="box-container">

        <div class="box">
          <h3>quick links</h3>
          <a href="index.php"> <i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
          <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i>+353-81-345-4545</a>
          <a href="#"> <i class="fas fa-phone"></i>+353-81-678-8888</a>
          <a href="#"> <i class="fas fa-envelope"></i>email@gmail.com</a>
          <a href="#"> <i class="fas fa-map"></i>Dublin, Ireland</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>

      </div>

      <div class="credit">created by <span>Felicia Fratescu</span> | with love!</div>
    </section>
    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="layout/index.js"></script>
  </body>
</html>