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
          <span class="background-holder" style="background-image: url(content/universe/galaxy.jpg);"></span>
        </li>
        
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(content/universe/stars.jpg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(content/universe/blackhole.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(content/universe/quasars.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(content/universe/milkyway.jpg);"></span>
        </li>
        
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(content/universe/cosmology.jpg);"></span>
        </li>
         
        

      </ul>
      
      <div class="detail">
       
        <div class="detail-item active">
          <div class="headline">Galaxies</div>
          <div class="background" style="background-image: url(content/universe/galaxy2.jpg); height: 100vh;"></div>
          <div class="background" style="background-image: url(content/universe/galaxy2.jpg); height: 100vh; background-size: cover; background-position: center;"></div>
          <div id="mybutton">
          <a href="content/galaxies.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
       
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Stars</div>
          <div class="background" style="background-image: url(content/universe/stars2.jpg);"></div>
          <div id="mybutton">
          <a href="content/stars.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Black Holes</div>
          <div class="background" style="background-image: url(content/universe/blackhole2.jpg);"></div>
          <div id="mybutton">
          <a href="content/blackholes.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Quasars</div>
          <div class="background" style="background-image: url(content/universe/quasars2.jpg);"></div>
          <div id="mybutton">
          <a href="content/quasars.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">The Milky Way</div>
          <div class="background" style="background-image: url(content/universe/milkyway2.jpg);"></div>
          <div id="mybutton">
          <a href="content/milkyway.php">
          <button class="feedback">Click Me</button>
          </a>
        </div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Cosmology</div>
          <div class="background" style="background-image: url(content/universe/cosmology2.jpg);"></div> 
          <div id="mybutton">
          <a href="content/cosmology.php">
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