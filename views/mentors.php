<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3498db">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin  ="anonymous">

        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700"
        rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->

        <title>Polaris - Student Mentorship Program</title>


        <meta name="google-site-verification" content="psQtXO_U0R9o5w-fP7i3zrlm_g3nDtP0Mg6-Xg-q73w" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121551593-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-121551593-1');
		</script>

    </head>

    <body onload="closePreloader()">

      <?php
      require_once('../views/partials/header.php');
      ?>

        <header class="header header__mentors">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Meet your Mentors</h1>
                    <p class="heading-subtitle">We are here to help...</p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">The Coordinators</h2>
            </div>

            <div class="row">
                <div class="dev">

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Vishwesh Jatala.JPG" alt="Dr. Vishwesh Jatala" class="dev__img">
                            <figcaption class="dev__caption">Dr. Vishwesh Jatala</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Dr. Vishwesh Jatala</strong><br/>Chairman</div>
                        <a href="mailto:vishwesh@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Dr._Arnab_Patra.jpeg" alt="Dr. Arnab Patra" class="dev__img">
                            <figcaption class="dev__caption">Dr. Arnab Patra</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Dr. Arnab Patra</strong><br/>Member</div>
                        <a href="mailto:arnabp@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div>

                     <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Dr. R Mayil Murugan.jpg" alt="Dr. Ramasamy Mayilmurugan" class="dev__img">
                            <figcaption class="dev__caption">Dr. Ramasamy Mayilmurugan</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Dr. Ramasamy Mayilmurugan</strong><br/>Member</div>
                        <a href="murugan@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="row">
                
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Mentor6.jpg" alt="Chiruvolu Nikhil" class="dev__img">
                            <figcaption class="dev__caption">Chiruvolu Nikhil</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Chiruvolu Nikhil</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:chiruvolu@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/nikh1849/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9346785014
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Mentor14.jpg" alt="Rohit Ashwani" class="dev__img">
                            <figcaption class="dev__caption">Rohit Ashwani</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Rohit Ashwani</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:rohitas@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/rohitashwani288/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9260961237
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Mentor22.jpg" alt="Sudeep Ranjan Sahoo" class="dev__img">
                            <figcaption class="dev__caption">Sudeep Ranjan Sahoo</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sudeep Ranjan Sahoo</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:sudeepranjan@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/srs_sudeep?igshid=YmMyMTA2M2Y=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 6372432280
                        </div>
                    </div>
			
			   
            </div>

            <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Gunti Varshini.jpg" alt="Gunti Varshini" class="dev__img">
                            <figcaption class="dev__caption">Gunti Varshini</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Gunti Varshini</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:guntiv@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/varshini_284/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9398019131
                        </div>
                    </div>

                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Sudev.jpg" alt="Sudev Kumar Padhi" class="dev__img">
                            <figcaption class="dev__caption">Sudev Kumar Padhi</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sudev Kumar Padhi</strong><br/>Mentor Coordinator</div>
                        <a href="mailto:sudevp@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9040260615
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Mentors-UG</h2>
            </div>

            <!-- EDIT START HERE -->

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Aditya Bajpai.jpg" alt="Aditya Bajpai" class="dev__img">
                            <figcaption class="dev__caption">Aditya Bajpai</figcaption>
                        </figure>
                        <div class="dev__name">Aditya Bajpai</div>
                        <a href="mailto:adityabajpai@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/adityaexe?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 6394390409

                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/ArpanGoswami.jpg" alt="Arpan" class="dev__img">
                            <figcaption class="dev__caption">Arpan Goswami</figcaption>
                        </figure>
                        <div class="dev__name">Arpan Goswami</div>
                        <a href="mailto:arpang@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/arpangoswami462?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7439247046
                        </div>
                    </div>
                    
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Arpit Bhardwaj.jpg" alt="Arpit Bhardwaj" class="dev__img">
                            <figcaption class="dev__caption">Arpit Bhardwaj</figcaption>
                        </figure>
                        <div class="dev__name">Arpit Bhardwaj</div>
                        <a href="mailto:aryant@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9934961336

                        </div>
                    </div> 


                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Bhavya Jain.jpg" alt="Bhavya Jain" class="dev__img">
                            <figcaption class="dev__caption">Bhavya Jain</figcaption>
                        </figure>
                        <div class="dev__name">Bhavya Jain</div>
                        <a href="mailto:bhavyaj@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9306368542
                        </div>
                    </div>




                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Chetan.jpg" alt="Chetan" class="dev__img">
                            <figcaption class="dev__caption">Chetan</figcaption>
                        </figure>
                        <div class="dev__name">Chetan</div>
                        <a href="mailto:chetan@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/chetan_iit_bhilai?igshid=YmMyMTA2M2Y=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9355844091
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Dhananjay Abbot.jpg" alt="Dhananjay Abbot" class="dev__img">
                            <figcaption class="dev__caption">Dhananjay Abbot</figcaption>
                        </figure>
                        <div class="dev__name">Dhananjay Abbot</div>
                        <a href="mailto:dhananjaya@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/forshronnnn?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8882700586
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Kaki Venkata Vaneesha.jpg" alt="Kaki Venkata Vaneesha" class="dev__img">
                            <figcaption class="dev__caption">Kaki Venkata Vaneesha</figcaption>
                        </figure>
                        <div class="dev__name">Kaki Venkata Vaneesha</div>
                        <a href="mailto:kakivenk@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a> 
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9390093783
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Khushi Dutta.jpg" alt="Khushi Dutta" class="dev__img">
                            <figcaption class="dev__caption">Khushi Dutta</figcaption>
                        </figure>
                        <div class="dev__name">Khushi Dutta</div>
                        <a href="mailto:khushid@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                       <!-- <a href="" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a> -->
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7903642798
                        </div>
                    </div>




                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Kirtiraj Jamnotiya.jpg" alt="Kirtiraj Jamnotiya" class="dev__img">
                            <figcaption class="dev__caption">Kirtiraj Jamnotiya</figcaption>
                        </figure>
                        <div class="dev__name">Kirtiraj Jamnotiya</div>
                        <a href="mailto:kirtiraj@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/kirtiraj_jamnotiya?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9270865999
                        </div>
                    </div>
                    
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Kriti Arora.jpg" alt="Kriti Arora" class="dev__img">
                            <figcaption class="dev__caption">Kriti Arora</figcaption>
                        </figure> 
                        <div class="dev__name">Kriti Arora</div>
                        <a href="mailto:kritia@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <!-- <a href="" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a> -->
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9109623503
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Manopriya.jpg" alt="Manopriya Mondal" class="dev__img">
                            <figcaption class="dev__caption">Manopriya Mondal</figcaption>
                        </figure>
                        <div class="dev__name">Manopriya Mondal</div>
                        <a href="mailto:manopriyam@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <!-- <a href="" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a> -->
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7595807122
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Mohit Thakre.jpg" alt="Mohit Thakre" class="dev__img">
                            <figcaption class="dev__caption">Mohit Thakre</figcaption>
                        </figure>
                        <div class="dev__name">Mohit Thakre</div>
                        <a href="mailto:mohitt@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/mohit_thakre13?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8767249195
                        </div>
                    </div>




                </div>
            </div>




            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/devs/NISHCHAY_RAJPUT.JPG" alt="Nishchay Rajput" class="dev__img">
                            <figcaption class="dev__caption">Nishchay Rajput</figcaption>
                        </figure>
                        <div class="dev__name">Nishchay Rajput</div>
                        <a href="mailto:nishchayr@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/__nishchay__rajput__/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9770552422
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/devs/Ojus.jpg" alt="Ojus Goel" class="dev__img">
                            <figcaption class="dev__caption">Ojus Goel</figcaption>
                        </figure>
                        <div class="dev__name">Ojus Goel</div>
                        <a href="mailto:ojusg@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/ojus_goel123?igshid=OTJhZDVkZWE=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8708943859
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/OMENDRA.jpg" alt="Omendra Kumar Upadhyay" class="dev__img">
                            <figcaption class="dev__caption">Omendra Kumar Upadhyay</figcaption>
                        </figure>
                        <div class="dev__name">Omendra Kumar Upadhyay</div>
                        <a href="mailto:omendrak@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/omendra_up_369/?utm_source=qr" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8247589701
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/devs/Piyush_Chandrakar.jpg" alt="Piyush Chandrakar" class="dev__img">
                            <figcaption class="dev__caption">Piyush Chandrakar</figcaption>
                        </figure>
                        <div class="dev__name">Piyush Chandrakar</div>
                        <a href="mailto:piyushc@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/piyush_c38?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9179932361
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Priyanshu Kishore.jpg" alt="Priyanshu Kishore" class="dev__img">
                            <figcaption class="dev__caption">Priyanshu Kishore</figcaption>
                        </figure>
                        <div class="dev__name">Priyanshu Kishore</div>
                        <a href="mailto:priyanshuk@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a> 
                        <a href="https://instagram.com/priyanshu_kishore4?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7363971979
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Puneti Hemanth Kumar Reddy.jpg" alt="Puneti Hemanth Kumar Reddy" class="dev__img">
                            <figcaption class="dev__caption">Puneti Hemanth Kumar Reddy</figcaption>
                        </figure>
                        <div class="dev__name">Puneti Hemanth Kumar Reddy</div>
                        <a href="mailto:punetihemanth@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a> 
                        <a href="https://instagram.com/hemanth__asp?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9398481212
                        </div>
                    </div>

                    
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Raj Mohammad.jpg" alt="Raj Mohammad" class="dev__img">
                            <figcaption class="dev__caption">Raj Mohammad</figcaption>
                        </figure>
                        <div class="dev__name">Raj Mohammad</div>
                        <a href="mailto:rajmohammad@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <!-- <a href="" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a> -->
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7985378709
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/devs/Rajeev_Goel.jpg" alt="Rajeev Goel" class="dev__img">
                            <figcaption class="dev__caption">Rajeev Goel</figcaption>
                        </figure>
                        <div class="dev__name">Rajeev Goel</div>
                        <a href="mailto:rajeevg@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/rajeevgoel187?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9307304394
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="dev">
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Shivam.jpg" alt="Shivam" class="dev__img">
                            <figcaption class="dev__caption">Shivam</figcaption>
                        </figure>
                        <div class="dev__name">Shivam</div>
                        <a href="mailto:shivam@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/shivam_27_lth?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 6207694066
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Shivangi_Gaur.jpg" alt="Shivangi Gaur" class="dev__img">
                            <figcaption class="dev__caption">Shivangi Gaur</figcaption>
                        </figure>
                        <div class="dev__name">Shivangi Gaur</div>
                        <a href="mailto:shivangig@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/shivangi_.15?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9571068884
                        </div>
                    </div>
			
			
			
			        <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Shubham_Mahajan.jpg" alt="Shubham Mahajan" class="dev__img">
                            <figcaption class="dev__caption">Shubham Mahajan</figcaption>
                        </figure>
                        <div class="dev__name">Shubham Mahajan</div>
                        <a href="mailto:shubhamy@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/__shubham_mahajan__?igshid=YmMyMTA2M2Y=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8879466601
                        </div>
                    </div>
			
			        <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Shweta Kesharwani_.jpg" alt="Shweta Kesharwani" class="dev__img">
                            <figcaption class="dev__caption">Shweta Kesharwani</figcaption>
                        </figure>
                        <div class="dev__name">Shweta Kesharwani</div>
                        <a href="mailto:shwetak@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/shweta_k611?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 6232562932
                        </div>
                    </div>
			
			
                </div>
            </div>
            
		
		
		
         <div class="row">
                <div class="dev">
            
                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Soni Kumari.jpg" alt="Soni Kumari" class="dev__img">
                            <figcaption class="dev__caption">Soni Kumari</figcaption>
                        </figure>
                        <div class="dev__name">Soni Kumari</div>
                        <a href="mailto:sonik@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/soni_rajput1711?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 6200816214
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Sourabh Thakur.jpg" alt="Sourabh Thakur" class="dev__img">
                            <figcaption class="dev__caption">Sourabh Thakur</figcaption>
                        </figure>
                        <div class="dev__name">Sourabh Thakur</div>
                        <a href="mailto:sourabht@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/ghasita_the_great_?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7880003650
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Sreya_Chitluru.jpg" alt="Sreya Chitluru" class="dev__img">
                            <figcaption class="dev__caption">Sreya Chitluru</figcaption>
                        </figure>
                        <div class="dev__name">Sreya Chitluru</div>
                        <a href="mailto:chitlurus@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/sreyac04?igshid=YmMyMTA2M2Y=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7981671616
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <figure class="dev__shape">
                            <img src="../public/images/devs/Sumit_Pathak.jpg" alt="Sumit Kumar Pathak" class="dev__img">
                            <figcaption class="dev__caption">Sumit Kumar Pathak</figcaption>
                        </figure>
                        <div class="dev__name">Sumit Kumar Pathak</div>
                        <a href="mailto:sumitkum@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/skp_pathak_?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8306312679
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="dev">
            
                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/SAI_SURYA_TALLA.jpg" alt="Talla Sai Surya" class="dev__img">
                            <figcaption class="dev__caption">Talla Sai Surya</figcaption>
                        </figure>
                        <div class="dev__name">Talla Sai Surya</div>
                        <a href="mailto:tallasai@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/tallasaisurya?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9346870117
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Uday bhardwaj.jpg" alt="Uday bhardwaj" class="dev__img">
                            <figcaption class="dev__caption">Uday bhardwaj</figcaption>
                        </figure>
                        <div class="dev__name">Uday bhardwaj</div>
                        <a href="mailto:udayb@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/uday_bhardwaj_2008?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7668310017
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="../public/images/mentors/Vedansh_Sharma_jpg.jpg" alt="Vedansh Sharma" class="dev__img">
                            <figcaption class="dev__caption">Vedansh Sharma</figcaption>
                        </figure>
                        <div class="dev__name">Vedansh Sharma</div>
                        <a href="mailto:vedanshs@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/vedansh_._sharma?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9799994323
                        </div>
                    </div>


                </div>
            </div>


            <div class="container">
                <h2 class="heading-secondary">Mentors-PG</h2>
            </div>
            <div class="row">
                <div class="dev">

                 <div class="col-1-of-3">
                     <figure class="dev__shape">
                          <img src="../public/images/mentors/Adarsh Tiwari.jpg" alt="Adarsh Tiwari" class="dev__img">
                          <figcaption class="dev__caption">Adarsh Tiwari</figcaption>
                      </figure>
                      <div class="dev__name">Adarsh Tiwari</div>
                      <a href="mailto:adarshtiw@iitbhilai.ac.in" class="dev__profile">
                          <i class="far fa-envelope dev__profile--icon"></i>
                      </a>
                      <!-- <a href="https://m.facebook.com/100040592702648/" class="dev__profile">
                          <i class="fab fa-facebook-f dev__profile--icon"></i>
                      </a> -->
                      <a href="https://instagram.com/adarsh_tiwari283?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                      </a>
                      <div class="dev__phone">
                          <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9305855032
                      </div>
                  </div>

                  <div class="col-1-of-3">
                        <figure class="dev__shape">
                          <img src="../public/images/mentors/Mratunjay.jpg" alt="Mratunjay Singh" class="dev__img">
                          <figcaption class="dev__caption">Mratunjay Singh</figcaption>
                      </figure>
                      <div class="dev__name">Mratunjay Singh</div>
                      <a href="mailto:mratunjays@iitbhilai.ac.in" class="dev__profile">
                          <i class="far fa-envelope dev__profile--icon"></i>
                      </a>
                      <!-- <a href="https://m.facebook.com/100040592702648/" class="dev__profile">
                          <i class="fab fa-facebook-f dev__profile--icon"></i>
                      </a> -->
                      <a href="https://www.instagram.com/mratunjay098/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                      </a>
                      <div class="dev__phone">
                          <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9807393042
                      </div>
                  </div>
                  <div class="col-1-of-3">
                      <figure class="dev__shape">
                          <img src="../public/images/devs/Roshan_Jha.jpg" alt="Roshan Jha" class="dev__img">
                          <figcaption class="dev__caption">Roshan Jha</figcaption>
                      </figure>
                      <div class="dev__name">Roshan Jha</div>
                      <a href="mailto:phoolrj@iitbhilai.ac.in" class="dev__profile">
                          <i class="far fa-envelope dev__profile--icon"></i>
                      </a>
                      <!-- <a href="https://www.facebook.com/vuppala.manish" class="dev__profile">
                          <i class="fab fa-facebook-f dev__profile--icon"></i>
                      </a> -->
                      <a href="https://www.instagram.com/roshan.jha.007/" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                      </a>
                      <div class="dev__phone">
                          <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7733884259
                      </div>
                  </div>
                  
                </div>
            </div>
             <div class="row">
                <div class="dev">
                <div class="col-1-of-2">
                      <figure class="dev__shape">
                          <img src="../public/images/mentors/NIDHISH THAWAREY.jpg" alt="Nidhish Thawarey" class="dev__img">
                          <figcaption class="dev__caption">Nidhish Thawarey</figcaption>
                      </figure>
                      <div class="dev__name">Nidhish Thawarey</div>
                      <a href="mailto:nidhishth@iitbhilai.ac.in" class="dev__profile">
                          <i class="far fa-envelope dev__profile--icon"></i>
                      </a>
                      <!-- <a href="https://www.facebook.com/manasranjan.samantaray.33/" class="dev__profile">
                          <i class="fab fa-facebook-f dev__profile--icon"></i>
                      </a> -->
                      <a href="https://instagram.com/nidhish_thawarey_?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                      </a>
                      <div class="dev__phone">
                          <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7987760986
                      </div>
                  </div>

                  <div class="col-1-of-2">
                      <figure class="dev__shape">
                          <img src="../public/images/mentors/Shubhika_Mishra.jpg" alt="Shubhika Mishra" class="dev__img">
                          <figcaption class="dev__caption">Shubhika Mishra</figcaption>
                      </figure>
                      <div class="dev__name">Shubhika Mishra</div>
                      <a href="mailto:shubhikam@iitbhilai.ac.in" class="dev__profile">
                          <i class="far fa-envelope dev__profile--icon"></i>
                      </a>
                      <!-- <a href="https://www.facebook.com/vuppala.manish" class="dev__profile">
                          <i class="fab fa-facebook-f dev__profile--icon"></i>
                      </a> -->
                      <a href="https://instagram.com/shubhi_ka_mishra?igshid=ZDdkNTZiNTM=" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                      </a>
                      <div class="dev__phone">
                          <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9584179777
                      </div>
                  </div>

                </div>
            </div>
        </section>   

         <!--EDIT ENDS HERE -->

        <?php
        require_once('../views/partials/footer.php');
        ?>
    </body>

</html>
