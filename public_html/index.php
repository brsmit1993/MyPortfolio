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
 <script src="JS/Scroll.js" defer></script>

</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
     
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item me-4">
                    <a class="nav-link links" aria-current="page" href="#" onclick="goHome(); return false;"><img class="nav-img" src="Images/Icons/House.svg" /> Home</a>
                    </li>

                    <li class="nav-item  me-4">
                    <a class="nav-link links" href="#" onclick="goAboutMe(); return false;"><img class="nav-img" src="Images/Icons/AboutMe.svg" /> About Me</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link links" href="#" onclick="goPortfolio(); return false;"><img class="nav-img" src="Images/Icons/Portfolio.svg" /> Portfolio</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link" href="#" onclick="window.open('http://brandonsmiththedeveloper.com/Resume_BLS.pdf'); return false;"><img class="nav-img" src="Images/Icons/Resume.svg" /> Resume</a>
                    </li>

                    <li class="nav-item me-4">
                    <a class="nav-link links" href="#" onclick="goContactMe(); return false;"><img class="nav-img" src="Images/Icons/ContactMe.svg" /> Contact Me</a>
                    </li>
                </ul>

                    <a class="my-1 mx-4 social" href="https://github.com/brsmit1993"><img src="Images/Icons/GitHub.svg" /></a>
                    <a class="my-1 mx-4 social" href="https://www.linkedin.com/in/brsmit1993/"><img src="Images/Icons/LinkedIn.svg" /></a>
                    <a class="my-1 mx-4 social" href="mailto: brsmit1993@outlook.com"><img src="Images/Icons/Email.svg" /></a>
                    
            </div>
        </div>
    </nav>
    <hr />
     

    <section id ="HomeDiv" class="showcase section">
    
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
       
            <a href="https://github.com/brsmit1993" class="ms-4"><img src="Images/Icons/GitHub.svg" /></a>
        
        
            <a href="https://www.linkedin.com/in/brsmit1993/"><img src="Images/Icons/LinkedIn.svg" /></a>
        
        
            <a href="mailto: brsmit1993@outlook.com" class="me-4"><img src="Images/Icons/Email.svg" /></a>
        
        </span>

    </section>

    <div style="height: 50vh;"></div>

    <div id="AboutMeDiv" class="row justify-content-center section">
        <div  class="col-lg-4 col-10 my-3">
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
                             Hi, I'm Brandon and I will be graduating from Wayne State College in May 2022 with a degree in CIS: Programming Analysis. While at WSC I've helped with a variety of 
                             different projects and events involving ACM, UPE, and the International Club. My hobbies include coding, traveling, camping, hiking, and researching technology. If 
                             you're interested in checking out any of my work don't forget to check out my portfolio and GitHub.
                         </p>
                         <a href="#" onclick="window.open('http://brandonsmiththedeveloper.com/Resume_BLS.pdf'); return false;" class="btn btn-primary py-2 px-3" style="background-color:#2D9CCA;"><h5>My Resume</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 5vh;"></div>

    <div class="row justify-content-center" style="color:white">
        <div class="col-10 h1 mb-4" style="color:#2D9CCA;">My Skills</div>
       
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
            <h3>REST</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>APIs</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Agile</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

         <div class="col-md-5 col-10 mb-4">
            <h3>Scrum</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
            <h3>ServiceNow</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-md-5 col-10 mb-4">
            <h3>Desktop And Laptop Support</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <div class="col-md-5 col-10 mb-4">
            <h3>Windows XP, 8, 10</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-md-5 col-10 mb-4">
            <h3>Office 365</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        
        <div class="col-md-5 col-10 mb-4">
            <h3>Communication</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-md-5 col-10 mb-4">
            <h3>Troubleshooting</h3>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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

    <div style="height: 50vh;"></div>

      <div id="MyPortfolioDiv" class="row justify-content-center section" style="color:white">
        <div class="col-10 h1 mb-4" style="color:#2D9CCA">My Portfolio</div>
           <div class="col-10">
               <div class="row">

                   <div class="col-lg-4 col-md-4 col-12 mb-4">
                       <a class="project-link" href="http://localhost/MyPortfolio/public_html/ArcadeMachine.php">
                            <div class="project-image">
                                <img class="project-image" src="Images/Projects/ArcadeMachine/image01.png" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title mb-1">
                                            Arcade Machine
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                This project involved everything from project planning to coding and even a little bit of soldering.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/unity.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/csharp.svg"/>
                                        <img class ="project-icon-03 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/arduino.svg"/>
                                        <img class ="project-icon-04 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/cplus.svg"/>
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
                                <img class="project-image" src="Images/Projects/ACMWebsite/image01.PNG" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title mb-1">
                                            ACM Website
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                The Website I helped make with the ACM Web Committee.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/html.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/css.svg"/>
                                        <img class ="project-icon-03 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/javascript.svg"/>
                                        <img class ="project-icon-04 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/bootstrap.svg"/>
                                        <img class ="project-icon-05 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/php.svg"/>
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
                                        <div class="project-title mb-1">
                                            WSC Mobile App
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                The WSC Mobile Android App I created for one of my practicums.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/java.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/android.svg"/>
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
                                <img class="project-image" src="Images/Projects/RestaurantWebsite/image01.PNG" />

                                 <div class="project-overlay">
                                    <div class="project-text-container">
                                        <div class="project-title mb-1">
                                            Restaurant Website
                                        </div>
                                    
                                        <div class="project-content">
                                           <p>
                                               My independant senior project for Senior Seminar class.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/html.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/css.svg"/>
                                        <img class ="project-icon-03 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/javascript.svg"/>
                                        <img class ="project-icon-04 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/bootstrap.svg"/>
                                        <img class ="project-icon-05 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/firebase.svg"/>
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
                                        <div class="project-title mb-1">
                                            VR Computer Builder
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                 My group senior project for Senior Seminar class.
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/unity.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/csharp.svg"/>

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
                                        <div class="project-title mb-1">
                                            Java Swing RPG
                                        </div>
                                    
                                        <div class="project-content">
                                            <p>
                                                My second semester freshman year final project for Prog Fund II 
                                            </p>
                                        </div>

                                        <img class ="project-icon-01 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/java.svg"/>
                                        <img class ="project-icon-02 ms-3 me-3 mt-3 mb-2" src="Images/Projects/Icons/html.svg"/>
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
    
    <div style="height: 50vh;"></div>

    <?php
        if(isset($_POST['submit'])){
            $to = "brsmit1993@outlook.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $subject2 = "Copy of your form submission to Brandon Smith";
            $message = "Name: " . $name . "\n" . "From: " . $from . "\n\n" ."wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Your contact form submission was successful. Thank you " . $name . ", I will be in contact with you shortly." . "\n\n" . "Best Regards," . "\n\n" . "Brandon Smith" . "\n\nHere is a copy of your message " . $name . "\n\n" . $_POST['message'];
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>

    <div  id="ContactMeDiv" class="row justify-content-center section">
        <div class="col-10 h1" style="color:#2D9CCA">Contact Me</div>
         
         <div class="col-lg-4 col-10 my-3 ms-lg-0 ms-md-0 ms-4">
             <form method="post">
                 <div class="row">
                     <div class="form-group col-md-6 mb-md-0 col-12 mb-4">
                         <input type="text" class="form-control" id="name" name="name" placeholder="Name" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;" />
                     </div>

                     <div class="form-group col-md-6 col-12">
                         <input type="email" class="form-control" id="email" name="email" placeholder="Email" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;" />
                     </div>
                 </div>
                 <br />
                 <div class="form-group">
                     <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" style="height:50px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;" />
                 </div>
                 <br />
                 <div class="form-group">
                     <input type="text" class="form-control" id="message" name="message" placeholder="Message" style="height:200px; background-color: #0D3155; color: lightgray; border-width:0px; border-radius:0px;" />
                 </div>
                 <br />
                 <button type="submit" name="submit" value="Submit" class="btn btn-primary py-2 px-4" style="background-color:#2D9CCA;">
                     <h5>Submit</h5>
                 </button>
             </form>
        </div>

         <div class="col-1"></div>
         <div class="col-lg-5 col-10">
             <div class="row">
                 <div class="col-lg-6 col-10">
                    <p style="color:white">Hi, thanks for checking out my website. If you’re interested in hiring me or just want to say hi feel free to use my contact form on the left, send me an e-mail at brsmit1993@outlook.com, or shoot me a message via my LinkedIn. </p>
                    <span>
                     <a class="social me-3" href="https://github.com/brsmit1993" style="display:inline"><img src="Images/Icons/GitHub.svg" /></a>
                     <a class="social me-3" href="https://www.linkedin.com/in/brsmit1993/" style="display:inline"><img src="Images/Icons/LinkedIn.svg" /></a>
                     <a class="social" href="mailto: brsmit1993@outlook.com" style="display:inline"><img src="Images/Icons/Email.svg" /></a>
                    </span>
                 </div>
             </div>
         </div>
    </div>
    
    
    <div style="height: 50vh;"></div>
</body>

</html>