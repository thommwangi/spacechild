<html>
<head>
  <link href="sun.css" rel="stylesheet" type="text/css">
  <title>Asteroids</title>
  <style>

*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
  }
  body{ 
   font-family: sans-serif;
  }
  a:link,
  a:visited{
   text-decoration: none;
  }
  .modal{
   background-color: rgba(0,0,0, .8);
   width:100%;
   height: 100vh;
   position: absolute;
   top: 0;
   left: 0;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  .modal__content{
   width: 75%;
   height: 65%;
   background-color: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 2em;
   border-radius: 1em;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  .modal__close{
   color: #363636;
   font-size: 2em;
   position: absolute;
   top: .5em;
   right: 1em;
  }
  .modal__heading{
   color: dodgerblue;
   margin-bottom: 1em;
  }
  .modal__paragraph{
   line-height: 1.5em;
   color:black;
  }
.modal-open{
 display: inline-block;
 
 margin: 2em;
 background: #34b3a0;
    color:#fff;
    font-size:1.2rem;
    padding:1rem 2rem;
    text-decoration: none;
}


    .wrapper{
    margin: 0;
    width:1000px;
    
    
}
.videowrapper{
    position:relative;
    padding-bottom:56.25%;
    padding-top:25px;
    height:0px;

    
}
.videowrapper iframe{
    position:absolute;
    left:0px;
    top:0px;
    right:0px;
    bottom:0px;
    height:100%;
    width:100%;
    align:middle;
   
   
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

body {
  background-image: url(ooo.jpeg);
        background-size: cover;
   font-family: 'Roboto Condensed', sans-serif;
  font-weight: bold;
        height: 100vh;
}

/* .container {
  width: 80%;
  height: 40px;
  position: relative;
  top: 40px;
  margin: 0 auto;
} */

#logo {
  position: absolute;
  top: 0;
  left: 0;
  color: white;
 
 
}
.navigation-wrapper {
  position: relative;
}
.navigation-button {
  will-change: transform;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: fixed;
  z-index: 3;
  top: 40px;
  right: 100px;
  background: transparent;
  cursor: pointer;
}
.navigation-button .fa {
  border: 2px solid white;
  border-radius: 3px;
  padding: 10px;
    color: white;
}
 

.navigation-menu ul li {
  list-style: none;
  font-family: impact;
  font-weight: 300;
  color: hsl(0,0%,70%);
}

.navigation-menu {
  content: '';
  position: fixed;
  top: 0;
  right: 0;
  width: 50%;
  background: #fff;
  height: 100%;
  transform: skewX(0deg) translate(100%,0);
  transform-origin: top right;
  transition: all .2s ease-in;
  z-index: 4;
}
.navigation-menu ul {
  transform: skewX(-8deg);
  transform-origin: top left;
  position: fixed;
  right: 120px;
  top: 120px;
  width: 400px;
  text-align: right;

}
.navigation-menu ul li {
  position: relative;
    z-index: 999;
  font-size: 32px;
  color: hsl(0,0%,10%);
  line-height: 64px;
}
.navigation-menu ul li  a {
  border: none;
  color: hsl(0,0%,10%);
  text-decoration: none;
}
.navigation-menu.active {
  transform: skewX(8deg) translate(0,0);
    
}

.navigation-menu li {
  opacity: 0;
  transform: translate(0, 10px);
  transition: all .0s ease-in .3s;
  
}
.navigation-menu.active li {
  opacity: 1;
  transform: translate(0,0);
  transition: all .2s ease-in 0s;
}
.navigation-menu.active li:nth-child(1) {
  transition-delay: .3s;
}
.navigation-menu.active li:nth-child(2) {
  transition-delay: .4s;
}
.navigation-menu.active li:nth-child(3) {
  transition-delay: .5s;
}
.navigation-menu.active li:nth-child(4) {
  transition-delay: .6s;
}
.navigation-menu.active li:nth-child(5) {
  transition-delay: .7s;
}
.navigation-menu.active li:nth-child(6) {
  transition-delay: .8s;
}
       
  </style>
</head>
<header class="v-header container">
    <div class="fullscreen-video-wrap">

    <div class="navigation-wrapper">
        <div class="navigation-button">
        <i class="fa fa-bars"></i>
            </div>
            <div class="navigation-menu">
                <ul>
                    <li><a href="../home.php">Home</a></li><br>
                    <li><a href="../solarsystem.php">Solar System</a></li><br>
                    <li><a href="../universe.php">Universe</a></li><br>
                    <li><a href="../spacestuff.php">Space Stuff</a></li><br>
                    <li><a href="../index.php">Log Out</a></li><br>
         
                </ul>
            </div>
        </div>
      
      <video src="videos/Asteroid-Belt.mp4" autoplay="" loop="" controls muted>
    </video>
    </div>
    <div class="header-overlay">
            <div class="header-content">
                <h2 style="color:white;font-size:10vw;">The Asteroid Belt</h2>
                <p style="color:white;font-size:2vw;">An asteroid is a bit of rock. It can be thought of as what was "left over" after the Sun and all the planets were formed. 
                The dwarf planet called Ceres orbits the Sun in the asteroid belt.Most of the asteroids in our solar system can be found orbiting the Sun between the orbits of Mars and Jupiter.
                    Watch the video below to learn more or click to read more.</p>
                     <a href="#modal" class="modal-open">Read More</a>
                     
               <div class="modal" id="modal">  
                   <div class="modal__content">    
                   <a href="#" class="modal__close">&times;</a>
                   <h2 class="modal__heading">The Asteroid Belt</h2>
                   <p class="modal__paragraph"> This area is sometimes called the "asteroid belt". Think about it this way: the asteroid belt is a big highway in a circle around the Sun. Think about the asteroids as cars on the highway. Sometimes, the asteroid cars run into one another. When this happens, the asteroids may break up into smaller asteroids. Scientists think that most asteroids are the result of collisions between larger rocky space bodies.
Asteroids can be a few feet to several hundred miles wide. The belt probably contains at least 40,000 asteroids that are more than 0.5 miles across.

If an asteroid is captured by the gravitational pull of a planet, the asteroid can be pulled out of the belt and go into orbit as a moon around the planet that pulled on it.
                            </p>
                        </div>
                    </div>      
                </div>

            </div>
        </div>
  </header>

  <!-- <div class="wrapper">
  
        <div class="videowrapper">
          
        <iframe src="https://www.youtube.com/embed/6FB0rDsR_rc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
          align="middle"></iframe>
        </div>
    </div> -->

    <div style="position:relative;padding-top:56.25%;">
            <iframe src="https://www.youtube.com/embed/6FB0rDsR_rc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe> 
    </div>

  <section class="section section-b">
    <div class="container">
      <h2>Quiz About The Asteroid Belt</h2>
      <button class="button" onclick="window.location.href = 'quizes/asteroidquiz.php';">Click Here</button>
    </div>
  </section>
  <script>
    var navButton = document.querySelector('.navigation-button');
var navMenu = document.querySelector('.navigation-menu');
var win = window;

function openMenu(event) {
  
  navButton.classList.toggle('active');
  navMenu.classList.toggle('active');

  event.preventDefault();
  event.stopImmediatePropagation();
}
  
function closeMenu(event) {
  if (navButton.classList.contains('active')) {
    navButton.classList.remove('active');
    navMenu.classList.remove('active');
  }
}
  navButton.addEventListener('click', openMenu, false);

win.addEventListener('click',closeMenu, false);
    
</script>
  </html>