<?php 
    include 'head1.php';
?>
<!DOCTYPE html>
<html>
        <head>
            <title>StarChild</title>
           
        </head>
    <body>
    <style>
          .feedback {
            background-color : #31B0D5; 
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border-color: #46b8da;
          }

          #mybutton a{
            
            
            border: none;
            font-size: 28px;
            color: #FFFFFF;
            padding: 20px;
            width: 200px;
            text-align: center;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            cursor: pointer;
            z-index: 3;
            position: fixed;
            bottom: -4px;
            right: 10px;
          }
          #mybutton:after {
          content: "";
          background: #f1f1f1;
          display: block;
          position: absolute;
          padding-top: 300%;
          padding-left: 350%;
          margin-left: -20px !important;
          margin-top: -120%;
          opacity: 0;
          transition: all 0.8s
        }

        #mybutton:active:after {
          padding: 0;
          margin: 0;
          opacity: 1;
          transition: 0s
        }
        </style>
    <header> 
        <div class="container">
      
      <div class="navigation-wrapper">
          <div class="navigation-button">
            <i class="fa fa-bars"></i>
              </div>
                <div class="navigation-menu">
                  <ul>
                      <li><a href="home.php">Home</a></li><br>
                      <li><a href="solarsystem.php">Solar System</a></li><br>
                      <li><a href="universe.php">Universe</a></li><br>
                      <li><a href="spacestuff.php">Space Stuff</a></li><br>
                      <li><a href="index.php">Log Out</a></li><br>
          
                  </ul>
              </div>
        </div>
        </header>
        <section class="slideshow">
 
      <ul class="navigation">
 
        <!-- <li class="navigation-item active">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/solar2.jpg);"></span>
        </li> -->
        <!-- slideshow:navigation:item END -->

        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/sun.jpg);"></span>
        </li>
        
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/moon.jpg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/planets.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/asteroids.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/meteorites.jpg);"></span>
        </li>
        
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/solarsystem/comet.jpg);"></span>
        </li>
         
        

      </ul>
      
      <div class="detail">
       
        <div class="detail-item active">
          <div class="headline">THE SUN</div>
          <div class="background" style="background-image: url(images/solarsystem/sun2.jpg); height: 100vh;"></div>
          <div class="background" style="background-image: url(images/solarsystem/sun2.jpg); height: 100vh; background-size: cover; background-position: center;"></div>
          <div id="mybutton">
          <a href="content/sun.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
       
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">THE MOON</div>
          <div class="background" style="background-image: url(images/solarsystem/moon2.jpg);"></div>
          <div id="mybutton">
          <a href="content/moon.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">PLANETS</div>
          <div class="background" style="background-image: url(images/solarsystem/planets3.jpg);"></div>
          <div id="mybutton">
          <a href="content/planets.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">ASTEROIDS</div>
          <div class="background" style="background-image: url(images/solarsystem/asteroids.jpg);"></div>
          <div id="mybutton">
          <a href="content/asteroids.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">METEORITES</div>
          <div class="background" style="background-image: url(images/solarsystem/meteorites.jpg);"></div>
          <div id="mybutton">
          <a href="content/meteorites.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">COMETS</div>
          <div class="background" style="background-image: url(images/solarsystem/comet.jpg);"></div> 
          <div id="mybutton">
          <a href="content/comets.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
     
        
      </div>
  
    </section>
        <?php
            include 'footer.php';
        ?>
    </body>
</html> 