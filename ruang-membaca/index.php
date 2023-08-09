<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: ./regisform/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    
  <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link href="./css/style.css" rel="stylesheet">
    <title>Ruang Membaca</title>
</head>
<body>

    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">ruang<span>membaca</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Kategori</a>
            <a href="#footer">Contact</a>

        </div>

        <div class="navbar-extra">
            <a href="./regisform/index.php" id="users"><i data-feather="users"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Mulai Membaca <span>Novel</span></h1>
            <p>membaca adalah nafas hidup dan jembatan emas ke masa depan.</p>
            <a href="#product" class="cta">Mulai Membaca</a>
        </main>
    </section>
    <!-- Hero section end -->
    
    <!-- About section start -->
    <section id="about" class="about">
        <h2><span>Kategori</span> Novel</h2>

        <div class="row">
            <div class="about-img">

            </div>
            <div class="content">
                
            </div>
        </div>
    </section>
    <!-- About section end -->

<!-- carousel img start -->

<div class="text">

<h2 class="nama-genre"> Action</h2>

    <div class="btn" style="margin-left: 90rem;">
        <a href="#">
            <p>View More</p>
        </a>
    </div>

</div>

<section class="product" id="product"> 
        <div class="product-container1">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container2">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container3">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

        <div class="product-container4">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container5">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container6">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

</section>





<div class="text" >

<h2 class="nama-genre"> Comedy</h2>

    <div class="btn" style="margin-left: 88rem;">
        <a href="#">
            <p>View More</p>
        </a>
    </div>

</div>


<div class="product" id="product"> 
        <div class="product-container1">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container2">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container3">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

        <div class="product-container4">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container5">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container6">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

</div>




<div class="text">

<h2 class="nama-genre"> Horor</h2>

    <div class="btn" style="margin-left: 91rem;">
        <a href="#">
            <p>View More</p>
        </a>
    </div>

</div>






<div class="product" id="product"> 
        <div class="product-container1">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container2">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container3">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

        <div class="product-container4">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container5">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container6">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

</div>


<div class="text">

<h2 class="nama-genre"> Romance</h2>

    <div class="btn" style="margin-left: 87rem;">
        <a href="#">
            <p>View More</p>
        </a>
    </div>

</div>


<div class="product" id="product"> 
        <div class="product-container1">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container2">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container3">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

        <div class="product-container4">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container5">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container6">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

</div>


<div class="text">

<h2 class="nama-genre"> Sci-fi</h2>

    <div class="btn" style="margin-left: 91.3rem;">
        <a href="#">
            <p>View More</p>
        </a>
    </div>

</div>


<div class="product" id="product"> 
        <div class="product-container1">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container2">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container3">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

        <div class="product-container4">
            <div class="product-card">
                <div class="product-image">
                <a href="./komik/index.php">
                    <img src="./img/a12.jpg" class="product-thumb" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bocchi The Rock</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container5">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/kimi no nawa.jpg" class="product-thumb" alt="">
    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kimi No Nawa</h2> <br>
                </div>
            </div>
        </div>   

        <div class="product-container6">
            <div class="product-card">
                <div class="product-image">
                    <img src="./img/rock star wannabe.jpg" class="product-thumb" alt="">

                </div>
                <div class="product-info">
                    <h2 class="product-brand">Rock Star Wannabe</h2>

                </div>
            </div>
        </div>   

</div>


<!-- carousel img end  -->




    <!-- Footer start -->
    <footer id="footer">
        <div class="socials">
            <a href="https://www.instagram.com/mhmmdynnsthr/"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="send"></i></a>
            <a href="https://www.facebook.com/yannas.tihar.35"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#kategori">Kategori</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">ruangmembaca</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->





    <!-- Feather Icons -->
    <script>
      feather.replace()
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>
</html>

































