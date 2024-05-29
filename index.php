<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3498db">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Polaris - Student Mentorship Program</title>

    <style>
        #blink {
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }
    </style>

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

    <?php require_once('views/partials/header.php'); ?>

    <div id="myModal--1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Checklist for Freshers 2023</h2>
            </div>
            <div class="modal-body">
                <ul>

                    <li><strong>Important Notice</strong> Registrationn Schedule <a href="public\pdfs\RegistrationSchedule.pdf" target="_blank" class="notification">Click Here!</a></li>
                    <!-- <li><strong>Important Notice</strong> BTech-2023 Orientation Schedule will be uploaded soon.</li> -->

                    <!-- <li><strong>Important Notice</strong> Admission due to covid <a href="Notice on admission due to covid.pdf" target="_blank" class="notification">Click Here!</a></li>

                        <li><strong>Important Notice</strong> Registration and Orientation program for the new BTech students 2020 <a href="orientation.pdf" target="_blank" class="notification">Click Here!</a></li> -->


                    <li>Please see the <a href="../views/documents.php" class="notification">Documents</a> page for registration forms, fee structure, and updated loan details.<br>



                    <li>For any queries regarding IIT Bhilai and 2023-24 admissions please feel free to contact any of the <a href="../views/mentors.php" class="notification">Mentors.</a><br>

                </ul>
            </div>
        </div>

    </div>

    <div id="myModal--2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&nbsp;&nbsp;&nbsp;&nbsp; &times;</span>
                <span class="close" onclick="refresh_live_updates()">&#8635;</span>
                <h2>Live Updates</h2>
            </div>
            <div class="modal-body">
                <ul id="live_updates">
                    <li>Keep checking this page for live updates</li>
                    <li>Live Updates will be started from 22nd, 8 am</li>
                    <?php
                    $text = file_get_contents('https://docs.google.com/document/u/1/d/1RvDB_aho5oKb1-YuE_0JbTd_ApOmyXkLohNYjDJIyJQ/export?format=txt');

                    $lines = explode("\r\n", $text);

                    foreach ($lines as $one_line) {
                        echo "<li>$one_line</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

    </div>



    <header class="header header__home">
        <div class="container">
            <div class="header__hero-box">
                <h1 class="heading-primary">Student Mentorship Program</h1>
                <p class="heading-subtitle">Of the Student, By the Student, For the Student</p>
                <a href="../public/pdfs/brochure_2023.pdf" class="btn btn-download" download>Brochure 2023&nbsp; <i class="fas fa-download"></i></a><br />
                <!-- <a href="javascript:void(0);" class="btn btn-download">Brochure 2023 will be uploaded soon.&nbsp; <i class="fas fa-download"></i></a><br/> -->
                <!-- <a href="#" class="btn btn-live" id="modalBtn">Live Updates &nbsp; <i class="fas fa-sync"></i></a> -->
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="introduction">
                <h3 class="heading-secondary">Latest Updates on Website</h3>
                <p id="blink" style="color:red;">Registration Schedule is uploaded. <a href="public\pdfs\RegistrationSchedule.pdf" target="_blank" class="notification">Click Here to download</a></p>
                <p id="blink" style="color:red;">Hotels near Campus in Durg are uploaded. Kindly visit <a href="aroundthecampus.php" target=blank>Around the campus</a> page for more info.</p>
                <p id="blink" style="color:red;">Some announcements for Freshers below in this page.</p>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var blink =
            document.getElementById('blink');

        setInterval(function() {
            blink.style.opacity =
                (blink.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>

    <div class="line-break"></div>
    <section class="section">
            <div class="container">
                <div class="introduction">
                    <h2 class="heading-secondary">Announcements</h2>
                    <ul class="info__list">
                            <li class="info__item">All the new students who will be admitted to IIT Bhilai in 2023-24 year are required to report to permanent campus of IIT Bhilai for admission.
                            </li>
                            <li class="info__item">The date of reporting is August 02, 2023 from 06:00 am at Hostel building , IIT Bhilai, Permanent Campus, Kutelabhata, Bhilai,Durg - 491001</li>
                            <li class="info__item">The registration process and academic activities shall commence at 10:00 am.</li>
                    </ul>
                    <p class="introduction__text"> Please keep visting the website for more updates.</p>
                </div>
            </div>
        </section>
    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <div class="introduction">
                <h2 class="heading-secondary">Welcome to <br><span>Indian Institute of Technology Bhilai</span></h2>
                <p class="introduction__text">A hearty "Congratulations!!" to all the incoming freshers as you begin an exciting and rewarding chapter in your life. Quench your curiosity by exploring this website and make yourself familiar with life at IIT Bhilai. We look forward to guide you in this journey of exploring your passion. Feel free to post any queries/doubts on "Queries" Page.</p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Student Mentorship Program</h2>
            <div class="info">
                <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Our Objective</h3>
                <p class="info__text">A lot of things runs into a Freshie’s mind during his initial stay at the institute. We are here to clear those clouds of apprehensiveness. Here, we aim to provide info to all the freshers and give them insight to the life @iitbhilai. If you are more intrigued, then you can simply contact us and we would have your question answered in the best possible way.</p>
            </div>
            <div class="info">
                <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> About this website</h3>
                <p class="info__text">This site is of the students, by the students and for the students of IIT Bhilai. Here you will get an intimate view of this institute and its people. If you are a fresher at IIT Bhilai, this site is the right place for you to know more and make yourself familiar with the institute.</p>
            </div>
            <div class="info">
                <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Who are the mentors?</h3>
                <p class="info__text">They are a group of seniors who will be helping the juniors in exploring their options at the same time in progressing forward. This site is an online implementation of the mentorship scheme. An offline version of this will involve a senior being assigned as a mentor to a group of freshers to guide them in making well informed decisions through their life at IIT Bhilai.</p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <div class="message">
                <h2 class="heading-secondary">Message from <br><span>Council of Student Affairs</span></h2>
                <p class="message__text"><span>Hello everyone,</span> <br><br>
                    On behalf of the Council of Student affairs (CoSA) I would like to welcome you all to this prestigious Institute. I can understand it was not easy and the past few years have been tough for you all but trust me this place will give you ample opportunities to live up to your dreams. The journey till now was a marathon between lakhs of aspirants preparing to get into the best of colleges and I would like to congratulate you all for making it through. But from now things will change, there won’t be any marathon but you racing with your dreams. Every student of this institute is special and will excel wherever he/she goes. Upto this point, the dream was to be here. From now on, the real challenge will start to select a career stream, work for it and finally achieve it. This is a place which will build that spark inside you to live your dreams to the fullest, whether it be sports, culturals or science and technology, you won’t be missing any opportunity at this place. So at last, congratulations to all of you and welcome to IIT Bhilai.
                </p><br>
                <p class="message__byline">With best wishes,<br>MV Kiran Sooraj</p>
                <div class="row">
                    <div class="dev">
                        <div class="col-1-of-4">
                            <figure class="dev__shape">
                                <img src="../public/images/President.jpg" alt="MV Kiran Sooraj" class="dev__img dev__img--president">
                                <figcaption class="dev__caption">MV Kiran Sooraj</figcaption>
                            </figure>
                            <div class="dev__name">President, CoSA</div>
                            <a href="mailto:President_CoSA@iitbhilai.ac.in" class="dev__profile">
                                <i class="far fa-envelope dev__profile--icon"></i>
                            </a>
                            <!--<a href="" class="dev__profile">
                                    <i class="fab fa-facebook-f dev__profile--icon"></i>
                                </a> -->
                            <!-- <div class="dev__phone">
                                    <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7470448887
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Campus Tour</h2>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="campus">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ukd0R6y6lq8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-1-of-2">
                <div class="campus">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/25hhbQJ_NRw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <div class="line-break"></div>



    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Explore Our Collage</h2>
            <div class="collage">
                <div class="collage_image image">
                    <img src="../public/images/collage/n1.jpg" alt="error">
                </div>
                <div class="collage__vStretch collage_image image">
                    <img src="../public/images/collage/n2_1.jpg" alt="error">
                </div>
                <div class="collage__hStretch collage_image image">
                    <img src="../public/images/collage/n3.jpg" alt="error">
                </div>
                <div class="collage_image image">
                    <img src="../public/images/collage/n4.jpg" alt="error">
                </div>
                <div class="collage_image image">
                    <img src="../public/images/collage/n5.jpg" alt="error">
                </div>
                <div class="collage__vStretch collage_image image">
                    <img src="../public/images/collage/n6.jpg" alt="error">
                </div>
                <div class="collage__bigStretch collage_image image">
                    <img src="../public/images/collage/n7.jpg" alt="error">
                </div>
                <div class="collage_image image">
                    <img src="../public/images/collage/n8.jpg" alt="error">
                </div>
                <div class="collage_image image">
                    <img src="../public/images/collage/n9.jpg" alt="error">
                </div>
            </div>

        </div>

    </section>
    <div class="pop-up">
        <span>&times;</span>
        <img src="../public/images/collage/n1.jpg" alt="error">
    </div>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Gallery</h2>
            <div class="gallery">
                <div class="siema">
                    <img src="../public/images/gallery/n4.jpg" alt="1-min" />
                    <img src="../public/images/gallery/n3.jpg" alt="2-min" />
                    <img src="../public/images/gallery/n1.jpg" alt="3-min" />
                    <img src="../public/images/gallery/g2.JPG" alt="4-min" />
                    <img src="../public/images/gallery/g3.JPG" alt="5-min" />
                    <img src="../public/images/gallery/g4.JPG" alt="6-min" />
                    <img src="../public/images/gallery/g5.jpg" alt="7-min" />
                    <img src="../public/images/gallery/g6.JPG" alt="8-min" />
                    <img src="../public/images/gallery/g7.JPG" alt="8-min" />
                    <img src="../public/images/gallery/n6.jpg" alt="8-min" />
                </div>
                <div class="btn-siema">
                    <div class="btn-prev prev"><i class="fas fa-chevron-circle-left"></i></div>
                    <div class="btn-next next"><i class="fas fa-chevron-circle-right"></i></div>
                    <p class="warn">Best viewed in Desktops!</p>
                </div>
            </div>
        </div>
    </section>


    <div class="line-break"></div>


    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Developers</h2>
        </div>

        <div class="row">
            <div class="dev">
                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/sharad.jpg" alt="Sharad Roy" class="dev__img">
                        <figcaption class="dev__caption">Sharad Roy</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Sharad Roy</strong><br />Front-End Developer</div>
                    <a href="mailto:sharadr@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/sharad.roy29" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        &nbsp;
                    </div>
                </div>

                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/pramodh.jpeg" alt="Sri Pramodh" class="dev__img">
                        <figcaption class="dev__caption">Sri Pramodh</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Sri Pramodh</strong><br />Back-End Developer</div>
                    <a href="mailto:rachuris@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/pramodhrachuri" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <!--<div class="dev__phone">
                            &nbsp; 
                        </div>  -->
                </div>

                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/ahaan.jpg" alt="Ahaan Dabholkar" class="dev__img">
                        <figcaption class="dev__caption">Ahaan Dabholkar</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Ahaan Dabholkar</strong><br />Back-End Developer</div>
                    <a href="mailto:ahaand@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/ahaan.dabholkar" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9473751641
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/aniket.jpg" alt="Aniket Raj" class="dev__img">
                        <figcaption class="dev__caption">Aniket Raj</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Aniket Raj</strong><br />Content Writer</div>
                    <a href="mailto:aniketr@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100010720866538" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9521205979
                    </div>
                </div>

                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/gaurav.jpg" alt="Gaurav Verma" class="dev__img">
                        <figcaption class="dev__caption">Gaurav Verma</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Gaurav Verma</strong><br />Content Writer</div>
                    <a href="mailto:gauravv@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/gv99gv" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>

                </div>

                <div class="col-1-of-3">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/saksham.jpg" alt="Saksham Bhushan" class="dev__img">
                        <figcaption class="dev__caption">Saksham Bhushan</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Saksham Bhushan</strong><br />Website Manager - 2019</div>
                    <a href="mailto:sakshamb@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/saksham291" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8299278436
                    </div>
                </div>
                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>

        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/prachir.jpg" alt="Prachir Agrawal" class="dev__img">
                        <figcaption class="dev__caption">Prachir Agrawal</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Prachir Agrawal</strong><br />Website Manager - 2020</div>
                    <a href="mailto:prachira@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/prachir.agrawal.5" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8826678228
                    </div>
                </div>

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/prakanshul.jpg" alt="Prakanshul Saxena" class="dev__img">
                        <figcaption class="dev__caption">Prakanshul Saxena</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Prakanshul Saxena</strong><br />Website Manager - 2020</div>
                    <a href="mailto:prakanshuls@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/prakanshul.saxena" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8319446110
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>



        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/nikhil.jpg" alt="Nikhil Chaudhary" class="dev__img">
                        <figcaption class="dev__caption">Nikhil Chaudhary</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Nikhil Chaudhary</strong><br />Website Manager - 2021</div>
                    <a href="mailto:nikhilch@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>

                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8529781270
                    </div>
                </div>

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/vanisha.jpg" alt="Vanisha Agrawal" class="dev__img">
                        <figcaption class="dev__caption">Vanisha Agrawal</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Vanisha Agrawal</strong><br />Website Manager - 2021</div>
                    <a href="mailto:vanishaagrawal@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.facebook.com/vanisha.agrawal.3" target="_blank" class="dev__profile">
                        <i class="fab fa-facebook-f dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9981090998
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>

        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/aditya.jpeg" alt="Aditya Sankhla" class="dev__img">
                        <figcaption class="dev__caption">Aditya Sankhla</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Aditya Sankhla</strong><br />Website Manager - 2022</div>
                    <a href="mailto:adityasa@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.instagram.com/adismort" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>

                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8369504378
                    </div>
                </div>

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/ravinder.jpg" alt="Ravinder Sharma" class="dev__img">
                        <figcaption class="dev__caption">Ravinder Sharma</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Ravinder Sharma</strong><br />Website Manager - 2022</div>
                    <a href="mailto:ravindersh@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://instagram.com/chief_ravinder/" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9717503220
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>
        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->
                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/tushar.jpg" alt="Tushar Bansal" class="dev__img">
                        <figcaption class="dev__caption">Tushar Bansal</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Tushar Bansal</strong><br />Website Manager - 2022</div>
                    <a href="mailto:tusharbansal@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7048905680
                    </div>
                </div>
                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/rohit.jpg" alt="Rohit Ashwani" class="dev__img">
                        <figcaption class="dev__caption">Rohit Ashwani</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Rohit Ashwani</strong><br />Website Manager - 2023</div>
                    <a href="mailto:rohitas@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.instagram.com/rohitashwani288/" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9260961237
                    </div>
                </div>

                


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>
        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/Roshan_Jha.jpg" alt="Roshan Jha" class="dev__img">
                        <figcaption class="dev__caption">Roshan Jha</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Roshan Jha</strong><br />Website Manager - 2023</div>
                    <a href="mailto:phoolrj@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.instagram.com/roshan.jha.007/" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7733884259
                    </div>
                </div>
                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/Piyush_Chandrakar.jpg" alt="Piyush Chandrakar" class="dev__img">
                        <figcaption class="dev__caption">Piyush Chandrakar</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Piyush Chandrakar</strong><br />Website Manager - 2023</div>
                    <a href="mailto:piyushc@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://instagram.com/piyush_c38?igshid=ZDdkNTZiNTM=" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9179932361
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>
        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/NISHCHAY_RAJPUT.JPG" alt="Nishchay Rajput" class="dev__img">
                        <figcaption class="dev__caption">Nishchay Rajput</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Nishchay Rajput</strong><br />Website Manager - 2023</div>
                    <a href="mailto:nishchayr@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://www.instagram.com/__nishchay__rajput__/" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9770552422
                    </div>
                </div>
                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/Rajeev_Goel.jpg" alt="Rajeev Goel" class="dev__img">
                        <figcaption class="dev__caption">Rajeev Goel</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Rajeev Goel</strong><br />Website Manager - 2023</div>
                    <a href="mailto:rajeevg@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://instagram.com/rajeevgoel187?igshid=ZDdkNTZiNTM=" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9307304394
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>
        <div class="row">
            <div class="dev">
                <!-- <div class="col-1-of-4">&nbsp;</div> -->

                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/Ojus.jpg" alt="Ojus Goel" class="dev__img">
                        <figcaption class="dev__caption">Ojus Goel</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Ojus Goel</strong><br />Website Manager - 2023</div>
                    <a href="mailto:ojusg@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://instagram.com/ojus_goel123?igshid=OTJhZDVkZWE=" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8708943859
                    </div>
                </div>
                <div class="col-1-of-2">
                    <figure class="dev__shape">
                        <img src="../public/images/devs/Sumit_Pathak.jpg" alt="Sumit Kumar Pathak" class="dev__img">
                        <figcaption class="dev__caption">Sumit Kumar Pathak</figcaption>
                    </figure>
                    <div class="dev__name"><strong>Sumit Kumar Pathak</strong><br />Website Manager - 2023</div>
                    <a href="mailto:sumitkum@iitbhilai.ac.in" class="dev__profile">
                        <i class="far fa-envelope dev__profile--icon"></i>
                    </a>
                    <a href="https://instagram.com/skp_pathak_?igshid=ZDdkNTZiNTM=" target="_blank" class="dev__profile">
                        <i class="fab fa-instagram dev__profile--icon"></i>
                    </a>
                    <div class="dev__phone">
                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8306312679
                    </div>
                </div>


                <!-- <div class="col-1-of-4">&nbsp;</div> -->
            </div>
        </div>

    </section>

    <?php require_once('views/partials/footer.php'); ?>
    <script src="public/js/siema.min.js"></script>
    <script>
        const mySiema = new Siema({
            duration: 600,
            easing: 'ease-out',
            loop: true
        });

        document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
        document.querySelector('.next').addEventListener('click', () => mySiema.next());

        //Modal for Live updates
        var live = document.getElementById('myModal--2');
        //var btn = document.getElementById("modalBtn");
        var span = document.getElementsByClassName("close")[1];
        // btn.onclick = function() {
        //     live.style.display = "block";
        // }
        span.onclick = function() {
            live.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == live) {
                live.style.display = "none";
            }
        }

        //Modal for Checklist
        $(window).load(function() {
            $('.page-loader').fadeOut();
            var modal = document.getElementById('myModal--1');
            var span = document.getElementsByClassName("close")[0];
            setTimeout(function() {
                modal.style.display = "block";
            }, 2000)
            span.onclick = function() {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });

        document.querySelectorAll('.collage_image img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.pop-up').style.display = 'block';
                document.querySelector('.pop-up img').src = image.getAttribute('src');
            }
        });
        document.querySelector('.pop-up span').onclick = () => {
            document.querySelector('.pop-up').style.display = 'none';
        }
    </script>


</body>

</html>