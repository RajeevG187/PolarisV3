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

        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">

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


      <?php
      require_once('partials/header.php');
      ?>

        <header class="header header__queries">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Queries</h1>
                    <p class="heading-subtitle">Ask anything...</p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="faq">
                    <h2 class="heading-secondary">Frequently Asked Questions</h2>
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What are the programmes of study at IIT Bhilai?</h3>
                        <p class="info__text">IIT Bhilai is currently offering four-year B.Tech., two-year M.Tech and Ph.D degree programs. The Academic system and culture of IIT Bhilai is inspired by that at IIT Hyderabad. The curriculum lays strong emphasis on developing industrial and practical skills while backing them up with a concrete theoretical foundation.</p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What departments of study are available?</h3>
                        <p class="info__text">There are ten departments of study available here at IIT Bhilai.</p>
                        <ul class="info__list">
                            <li class="info__item">Computer Science and Engineering</li>
                            <li class="info__item">Electrical Engineering</li>
                            <li class="info__item">Materials Science and Metallurgical Engineering</li>
                            <li class="info__item">Mechanical Engineering</li>
                            <li class="info__item">Chemistry</li>
                            <li class="info__item">Mathematics</li>
                            <li class="info__item">Physics</li>
                            <li class="info__item">Bioscience and Biomedical Engineering</li>
                            <li class="info__item">Electronics & Communication Engineering </li>
                            <li class="info__item">Liberal Arts</li>
                        </ul>
                        <p class="info__text">For more info about Programs that offered by these individual departments , kindly visit <a href="../views/departments.php">Departments<a> page.</p>
                    </div>

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What are the facilities and amenities provided in the hostels?</h3>
                        <p class="info__text">IIT Bhilai is a residential campus, with well facilitated student's hostels.There are four hostels namely Castle Ena, Castle Dio, Castle Tria and Castle Tessera. All hostels are equipped with some sport facilities, recreation rooms, TV room, washing machines, and dining etc. Hostels are rigged with Wi-Fi and LAN access. For more information visit <a href="life.php#hostel__facilities">Polaris &dash; Hostel Facilities</a></p>
                    </div> -->

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> How is the Internet Connectivity?</h3>
                        <p class="info__text">IIT Bhilai gets it's internet connection from NKN (National Knowledge Network), which is known for providing very high speed connection to IITs and other Govt institutions. There is also a high speed BSNL connection, as a backup. Completely uncapped connection is provided to the students. There are several claims that they were getting around 120 mbps over LAN connection in hostel. Systems like proxy are avoided to ensure maximum compatibility.</p>
                    </div>
<!-- 
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Is it mandatory to report and do the registration on 27th October 2022?</h3>
                        <p class="info__text">Yes. 27th October is the registration date and it is compulsory for all students to report by 8:30am on the same date. Admission process won't be allowed post this date.</p>
                    </div> -->

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What about hostel room allocation and accommodation for parents?</h3>
                        <p class="info__text">The Hostel rooms will be allocated and will be completely random. No accommodation will be provided to the parents they can stay in nearby hotels.</p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What are the Scholarships available for students to avail?</h3>
                        <p class="info__text">Institute supports several scholarships, fellowships and various forms of assistantships for deserving students.
                            <ul class="info__list">
                                    <li class="info__item"> Merit-cum-Means (MCM) Scholarship</li>
                                    <li class="info__item"> Institute SC/ST Scholarship</li>
                                    <li class="info__item"> Institute Free Studentship Scholarship</li>
                                    <li class="info__item"> Institute Fellowship to Postgraduate Students</li>
                            </ul>
                       </p>
                       <p class="info__text">
                              For Further Details refer Academic Brochure - <a href="https://www.iitbhilai.ac.in/index.php?pid=info_brochure">Click here</a>
                                    <br>
                          Also there are few State government and Central government scholarships for further details contact -<a href="https://www.iitbhilai.ac.in/index.php?pid=acad_contact">Academics Department</a>
                      </p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What are the measures taken against Ragging?</h3>
                        <p class="info__text">Yet IIT Bhilai is a ragging free campus, there is a policy against ragging and every students signs a letter to the effect that they will not participate in ragging. Everybody is vigilant to prevent any attempt of ragging. A reported case of ragging is dealt with strictly. </p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Is it safe for female students in the campus, what are the safety measures taken?</h3>
                        <p class="info__text">Faculty members and Director reside on the campus itself and they are available for assistance. Our campus security is here for 24*7 support. Senior students also support the new students to get acquainted with the city and campus life - through the Mentorship program. If you want to raise a complaint, you will be supported too. We also have an Anti-ragging unit for support in campus.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="comment">
                    <h2 class="heading-secondary">Have some more questions?</h2>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=211747799624268&autoLogAppEvents=1';
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-comments" data-href="https://polaris.iitbhilai.ac.in/queries.html" data-width="100%" data-order-by="reverse_time" data-numposts="25"></div>

                    </div>
                </div>
            </div>
        </section>


        <?php
        require_once('partials/footer.php');
        ?>
    </body>

</html>
