<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Brand Smith - My Portfolio</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" href="CSS/index.css"  />
  <link rel="stylesheet" href="CSS/SlideShow.css"  />
  
    <script src="JS/SlideShow.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item me-4">
                    <a class="nav-link" aria-current="page" href="http://brandonsmiththedeveloper.com/"><img class="nav-img" src="Images/Icons/House.svg" /> Home</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="http://brandonsmiththedeveloper.com/"><img class="nav-img" src="Images/Icons/AboutMe.svg" /> About Me</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link active" href="http://brandonsmiththedeveloper.com/"><img class="nav-img" src="Images/Icons/Portfolio.svg" /> Portfolio</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#" onclick="window.open('http://brandonsmiththedeveloper.com/Resume_BLS.pdf'); return false;"><img class="nav-img" src="Images/Icons/Resume.svg" /> Resume</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="http://brandonsmiththedeveloper.com/"><img class="nav-img" src="Images/Icons/ContactMe.svg" /> Contact Me</a>
                    </li>
                </ul>

                     <a class="my-1 mx-4 social" href="https://github.com/brsmit1993"><img src="Images/Icons/GitHub.svg" /></a>
                    <a class="my-1 mx-4 social" href="https://www.linkedin.com/in/brsmit1993/"><img src="Images/Icons/LinkedIn.svg" /></a>
                    <a class="my-1 mx-4 social" href="mailto: brsmit1993@outlook.com"><img src="Images/Icons/Email.svg" /></a>
                    
            </div>
        </div>
    </nav>

    <div class="row justify-content-center">
        <div class="col-9 my-4 h1" style="color: #2D9CCA">
            Java Swing RPG
        </div>

        <div class="col-12 mb-2">
            <div class="project-image-header">
                <img class="project-image-header" src="Images/Projects/JavaRPG/header.PNG"/>
            </div>
        </div>

         <div class="col-9 my-5">
           <h5 style="color:white">
               For my final project during my freshman year at WSC, we were given the task of making a game. 
               While the original task was to make a simple rock paper scissors game we were also given the opportunity 
               if we wanted to make any game we could think of. I ended up making a small RPG game using Java Swing and HTML 
               for the front end and Java for the backend. This project was probably around the time I realized how much I loved 
               programming because I went a bit overboard on this game. This game was capable of having as many players as you want, 
               the map changed sizes based on the number of players, there was PVP, a level system, an inventory system, coin shops, 
               a boss fight, random events, and a probably a few other things I'm missing as well. Overall the project ended up being close to 
               10,000 lines of code. With that being said I was also a freshman so it's very likely the code I wrote could have been a lot better 
               had I written it with the knowledge I had today. That being said I think that's what every developer would say about their past projects.
           </h5>

            <br />
           <a class="my-1 github-link" href="https://github.com/brsmit1993/JavaRPG"><img src="Images/Icons/GitHub.svg"/> Github Link</a>
            
        </div>

        <div class="col-10">
            <div class="row g-0">
            
                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image01.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image02.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image03.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image04.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image05.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image06.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image07.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image08.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image09.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image10.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image11.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image12.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image13.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image14.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image15.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image16.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image17.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image18.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image19.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image20.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image21.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image22.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image23.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image24.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image25.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image26.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image27.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image28.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/JavaRPG/image29.jpg" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

            

            
           
            </div>
        </div>

    </div>
     
    <div id="ProjectOverlay" class="popup-overlay" onclick="overlayOff()">
			<div class="col-lg-10 col-md-10 col-sm-10 col-10 popup-overlay-container">
				<div class="slideshow-image">
                        <img id="OverlayImage" class="slideshow-image" src="Images/Projects/CoinAcceptor/CoinAcceptorWireDiagram.png" />
                </div>    
			</div>
		</div>

    </body>

</html>