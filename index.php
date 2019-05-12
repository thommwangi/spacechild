<?php 
    include 'head1.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/index.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      
    <nav id="nav">
      <button id="prev" class="nav-item" data-increment="-1">
        <img src="images/index/icon-prev.png" alt="prev" />
      </button>
      <button id="next" class="nav-item" data-increment="1">
        <img src="images/index/icon-next.png" alt="next" />
      </button>
    </nav>
     
    <section class="carousel">
      <div class="stage">
        
        <!-- coidea:slideshow:item START -->
      
          
        <div class="item">
          <div class="bcg" style="background-image: url(images/index/astro.jpg);"></div>
          <div class="content">
            <div class="description">
              <h2 class="description-target">Welcome</h2>
            </div>
            <div class="headline">
              <h1 class="headline-target">To Starchild</h1>
            </div>
            <div class="discover-more">
              <a href="home.php" class="discover-more-target">Discover More</a>
            </div>
            <div class="signup">
              <a href="cool6/FullscreenForm/signup.php" class="discover-more-target">Sign Up</a>
            </div>
            <div class="login">
              <a href="cool6/FullscreenForm/login.php" class="discover-more-target">Login</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="bcg" style="background-image: url(images/index/view2.jpg);"></div>
          <div class="content">
            <div class="description">
              <h2 class="description-target">Welcome</h2>
            </div>
            <div class="headline">
              <h1 class="headline-target">To Starchild</h1>
            </div>
            <div class="discover-more">
              <a href="home.php" class="discover-more-target">Discover More</a>
            </div>
            <div class="signup">
              <a href="cool6/FullscreenForm/signup.php" class="discover-more-target">Sign Up</a>
            </div>
            <div class="login">
              <a href="cool6/FullscreenForm/login.php" class="discover-more-target">Login</a>
            </div>
          </div>
        </div>
   
        <div class="item">
          <div class="bcg" style="background-image: url(images/index/cat.jpg);"></div>
          <div class="content">
            <div class="description">
              <h2 class="description-target">Welcome</h2>
            </div>
            <div class="headline">
              <h1 class="headline-target">To Starchild</h1>
            </div>
            <div class="discover-more">
              <a href="home.php" class="discover-more-target">Discover More</a>
            </div>
            <div class="signup">
              <a href="cool6/FullscreenForm/signup.php" class="discover-more-target">Sign Up</a>
            </div>
            <div class="login">
              <a href="cool6/FullscreenForm/login.php" class="discover-more-target">Login</a>
            </div>
          </div>
        </div>
       
      </div>
    </section>
    

    
    <?php
            include 'footer.php';
        ?>
    

  </body>
</html>