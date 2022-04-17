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
            ACM Website
        </div>

        <div class="col-12 mb-2">
            <div class="project-image-header">
                <img class="project-image-header" src="Images/Projects/ACMWebsite/image03.PNG"/>
            </div>
        </div>

       <div class="col-9 my-5">
           <h5 style="color:white">
                While part of the ACM club on campus at WSC I was part of the Web Committee for ACM and helped create a website for them using HTML, CSS, Bootstrap, JS, and a little PHP. While I did a
                vast majority of the coding for thie website I also worked with one of our members who did the UI/UX and another member who helped with the content of the website. This was also one of
               the first complete websites I've made. Up until this point I had worked on a variety of different projects but I had very little web development expierence until my last year at WSC.
           </h5>


            <br />
           <a class="my-1 github-link" href="https://github.com/brsmit1993/WSC_ACM_Website"><img src="Images/Icons/GitHub.svg"/> Github Link</a>
            
        </div>

        <div class="col-10">
            <div class="row g-0">
            
                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/ACMWebsite/image01.PNG" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/ACMWebsite/image02.PNG" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>


                <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/ACMWebsite/image04.PNG" />

                            <div class="project-link">
                            
                            </div>
                        </div>    
                    </a>
                </div>

                 <div class="col-lg-3 col-md-3 col-6">
                    <a class="project-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="slideshow-image">
                            <img class="slideshow-image" src="Images/Projects/ACMWebsite/image05.PNG" />

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