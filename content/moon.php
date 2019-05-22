<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="sun.css"> 
   
    <title>The Moon</title>

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
   
   
}
 </style>

</head>
<body>
<header> 
    <div class="container">

        <div class="navigation-wrapper">
            <div class="navigation-button">
            <i class="fa fa-bars"></i> </div>
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
    <header class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="videos/moon2.mp4" autoplay="true"
            loop="true" controls muted></video>
        </div>
        <div class="header-overlay">
            <div class="header-content">
                <h1 style="color:white;font-size:10vw;">The Moon</h1>
                <p style="color:white;font-size:2vw;">The Moon is the only place in our solar system, other than Earth, where humans have visited. On July 20, 1969, astronauts Neil Armstrong and Edwin Aldrin landed the Lunar Module of Apollo 11 on the Moon's surface. Neil Armstrong was the first human to set foot on the Moon.
                    Watch the video below to learn more or click to read more.</p>
                     <a href="#modal" class="modal-open">Read More</a>
                     
               <div class="modal" id="modal">  
                   <div class="modal__content">    
                   <a href="#" class="modal__close">&times;</a>
                   <h2 class="modal__heading">The Moon</h2>
                   <p class="modal__paragraph">TThe Moon is like a desert with plains, mountains, and valleys. It also has many craters, which are holes created when space objects hit the Moon's surface at a high speed. There is no air to breathe on the Moon. Recently water ice was discovered at the poles (or top and bottom) of the Moon. The ice is buried beneath some of the dust of the Moon's surface. Scientists think the ice may be left over from a comet that once collided with the Moon.

Moon
The Moon travels around the Earth in an oval shaped orbit. Scientists think the Moon was formed long ago when Earth collided with another space object. The collision may have caused a big chunk of rocky material to be thrown out into space to form the Moon.

The Moon is a little lopsided. Its crust is thicker on one side than the other. The Moon is much smaller than the Earth. However, the pull of its gravity can still affect the Earth's ocean tides.

We always see the same side of the Moon from Earth. You have to go into space to see the other side.
                            </p>
                        </div>
                    </div>      
                </div>

            </div>
        </div>
    </header>
   
        <div class="wrapper">
        
            <div class="videowrapper">
            
            </div>
        </div>
    
    <section class="section section-b">
        <div class="container">
            <h1>part 2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consequuntur eaque 
                accusantium expedita incidunt quaerat odio nesciunt commodi ratione qui minus distinctio 
                corrupti dolore dolor nostrum libero eius dolorem, porro impedit quibusdam ex quod ut cum. 
                Neque optio fugiat repellat inventore unde non consequatur assumenda. In quod accusamus 
                ipsam tempore.</p>
                
        </div>
    </section>
    <!-- <script src="../js/nav.js"></script> -->
</body>

</html>