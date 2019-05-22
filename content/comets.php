<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="sun.css"> 
   
    <title>Comets</title>

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
   p{
    
	text-shadow:
		-1px -1px 0 #000,
		1px -1px 0 #000,
		-1px 1px 0 #000,
		1px 1px 0 #000;
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
            <video src="videos/comets2.mp4" autoplay="true"
            loop="true" controls muted></video>
        </div>
        <div class="header-overlay">
            <div class="header-content">
                <h1 style="color:white;font-size:10vw;">Comets</h1>
                <p style="color:white;font-size:2vw;">A comet's tail can be millions of kilometers in length, but the amount of matter it contains can be held in a large bookbag. 
                Scientists believe that comets are made up of material left over from when the Sun and the planets were formed. They think that about 100,000 million comets orbit the Sun. Some comets orbit the Sun like planets. Their orbits take them very close to and very far away from the Sun.
                    Watch the video below to learn more or click to read more.</p>
                     <a href="#modal" class="modal-open">Read More</a>
                     
               <div class="modal" id="modal">  
                   <div class="modal__content">    
                   <a href="#" class="modal__close">&times;</a>
                   <h2 class="modal__heading">Comets</h2>
                   <p class="modal__paragraph">A comet is made of dirty ice, dust, and gas. When a comet gets close to the Sun, part of the ice starts to melt. The solar winds then push the dust and gas released by the melting ice away from the comet. This forms the comet's tail. Every time a comet comes close to the Sun, a part of it melts. Over time, it will completely disappear.

A comet does not give off any light of its own. What seems to be light from the comet is actually a reflection of our Sun's light. Sunlight bounces off the comet's ice particles in the same way light is reflected by a mirror.

A few comets come close enough to the Earth for us to see them with our eyes. Halley's Comet, for example, can be seen from Earth every 76 years.
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