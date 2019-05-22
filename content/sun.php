<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="sun.css"> 
   
    <title>The Sun</title>

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
            <video src="videos/sunbeach.mp4" autoplay="true"
            loop="true" controls muted></video>
        </div>
        <div class="header-overlay">
            <div class="header-content">
                <h1 style="color:black;font-size:10vw;">The Sun</h1>
                <p style="color:black;font-size:2vw;">The Sun is our closest star. It is a member of the Milky Way galaxy. 
                    The Sun is a yellow dwarf star, which means it is a medium size star. 
                    It is believed to be over 4 billion years old. 
                    Watch the video below to learn more or click to read more.</p>
                     <a href="#modal" class="modal-open">Read More</a>
                     
               <div class="modal" id="modal">  
                   <div class="modal__content">    
                   <a href="#" class="modal__close">&times;</a>
                   <h2 class="modal__heading">The Sun</h2>
                   <p class="modal__paragraph">The center, or core, of the Sun is very hot. A process called "nuclear fusion" takes place there.
                        Nuclear fusion produces a lot of energy. Some of this energy travels out into space as heat and light. Some of it arrives 
                        at Earth! Streams of gas particles known as the solar wind also flow out from the Sun.
                        On the Sun's surface, we can see storms. We call these storms "sunspots" because they look like 
                        dark spots on the Sun's surface. The Sun also produces big explosions of energy called solar flares. 
                        These flares shoot fast moving particles off the Sun's surface. These particles can hit the Earth's 
                        atmosphere and cause a glow called an aurora.
                            </p>
                        </div>
                    </div>      
                </div>

            </div>
        </div>
    </header>
   
        <div class="wrapper">
        
            <div class="videowrapper">
            <iframe src="https://www.youtube.com/embed/6FB0rDsR_rc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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