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
                    <a class="nav-link active" aria-current="page" href="#"><img class="nav-img" src="Images/Icons/House.svg" /> Home</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#"><img class="nav-img" src="Images/Icons/AboutMe.svg" /> About Me</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#"><img class="nav-img" src="Images/Icons/Portfolio.svg" /> Portfolio</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#"><img class="nav-img" src="Images/Icons/Resume.svg" /> Resume</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#"><img class="nav-img" src="Images/Icons/ContactMe.svg" /> Contact Me</a>
                    </li>
                </ul>

                    <a class="my-1 mx-4 social" href="#"><img src="Images/Icons/GitHub.svg" /></a>
                    <a class="my-1 mx-4 social" href="#"><img src="Images/Icons/LinkedIn.svg" /></a>
                    <a class="my-1 mx-4 social" href="#"><img src="Images/Icons/Email.svg" /></a>
                    
            </div>
        </div>
    </nav>
    <hr />
     

    <section class="showcase">
    
        <video
        src="Videos/BG-Video.mp4"
        muted
        loop
        autoplay
        ></video>

        <div class="overlay"></div>

        <div class="overlay-text row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 col-12">
                <span class="h2" >Hello my name is <br /> {name:<span class="overlay-name"> Brandon Smith</span>} <br /> and I'm a {career: Software Developer}</span>
            </div>
        </div>
       
        <span class="social-mobile">
       
            <a href="#" class="ms-4"><img src="Images/Icons/GitHub.svg" /></a>
        
        
            <a href="#"><img src="Images/Icons/LinkedIn.svg" /></a>
        
        
            <a href="#" class="me-4"><img src="Images/Icons/LinkedIn.svg" /></a>
        
        </span>

    </section>

    <br />

    <div class="row justify-content-center">
        <div class="col-lg-4 col-10 my-3">
              <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-12" >
                        <img class="headshot" src="Images/Me/Brandon.jpg" />
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-4 col-10">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-12 aboutme-divider my-3 pt-3">
                        <span class="h1" style="color:#2D9CCA;">
                            About Me
                        </span>
                        <br /><br />
                         <p style="color:white;">
                             Hi, I'm Brandon and I will be graduting Wayne State College in May 2022 with a degree in CIS: Programming Analysis. 
                             While at WSC I've helped with a variety of different projects and events involving ACM, UPE, and the International Club. 
                             My hobbies include coding, traveling, camping, hiking, and researching technology. If you're intersted in checking out any of my work don't forget to check out my portfolio and github.
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />

    

    <div class="row justify-content-center" style="color:white">
        <div class="col-10 h1 mb-4" style="color:#2D9CCA">My Skills</div>
       
        <div class="col-md-5 col-10 mb-4">
            <h3>Java</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Java EE</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>JSP/JSF</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Swagger API</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>JUnit</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>HTML</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>CSS</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Bootstrap 4</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>JS</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>SQL</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Teamwork</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-md-5 col-10 mb-4">
            <h3>Multitasking</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

      <div class="row justify-content-center" style="color:white">
        <div class="col-10 h1 mb-4" style="color:#2D9CCA">My Portfolio</div>
           <div class="col-10">
               <div class="row">

                   <div class="col-lg-4 col-md-4 col-12 mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/ArcadeMachine.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/ArcadeMachine/image01.png" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            Arcade Machine
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-12  mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/ACMWebsite.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/ACMWebsite/image01.png" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            ACM Website
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-12  mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/WSCApp.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/WSCMobileApp/image01.jpg" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            WSC Mobile App
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-12  mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/RestaurantWebsite.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/RestaurantWebsite/image01.png" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            Restaurant Website
                                        </div>
                                    
                                        <div class="project-content">
                                           <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-12  mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/VRComputerBuilder.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/VRComputerBuilder/image01.png" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            VR Computer Builder
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

                    <div class="col-lg-4 col-md-4 col-12  mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/JavaRPG.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/JavaRPG/image02.jpg" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title">
                                            Java Swing RPG
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 m-3" src="Images/Projects/Icons/Unity.svg"/>
                                        <img class ="project-icon-02 m-3" src="Images/Projects/Icons/C-Sharp.svg"/>
                                        <img class ="project-icon-03 m-3" src="Images/Projects/Icons/Arduino.svg"/>
                                        <img class ="project-icon-04 m-3" src="Images/Projects/Icons/C++.svg"/>
                                    </div>
                                </div>

                                <div class="project-link">
                                    <div class="project-link-text">
                                        Click Here For More Info
                                    </div>
                                </div>
                            </div>    
                        </a>
                   </div>

             </div>
          </div>
      </div>
    <br />

    <div class="row justify-content-center">
        <div class="col-10 h1" style="color:#2D9CCA">Contact Me</div>
         
         <div class="col-lg-4 col-10 my-3">
            <form>
                <div class="row">
                    <div class="form-group col-md-6 mb-md-0 col-12 mb-4">
                        <input type="text" class="form-control" id="Name" placeholder="Name" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;">
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <input type="email" class="form-control" id="Email" placeholder="Email" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;">
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <input type="text" class="form-control" id="Subject" placeholder="Subject" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;">
                </div>
                <br />
                 <div class="form-group">
                    <input type="text" class="form-control" id="Message" placeholder="Message" style="height:200px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;">
                </div>
                <br />
                <button type="submit" class="btn btn-primary py-3 px-5" style="background-color:#2D9CCA;"><h2>Submit</h2></button>
            </form>
        </div>

         <div class="col-1"></div>
         <div class="col-lg-5 col-10">
             <div class="row">
                 <div class="col-lg-6 col-10">
                    <p style="color:white">Hi, thanks for checking out my website. If you�re interested in hiring me or just want to say hi feel free to use my contact form on the left, send me an e-mail at brsmit1993@outlook.com, or shoot me a message via my LinkedIn. </p>
                    <span>
                     <a class="social me-3" href="#"><img src="Images/Icons/GitHub.svg" /></a>
                     <a class="social me-3" href="#"><img src="Images/Icons/LinkedIn.svg" /></a>
                     <a class="social" href="#"><img src="Images/Icons/Email.svg" /></a>
                    </span>
                 </div>
             </div>
         </div>
    </div>
</body>

</html>