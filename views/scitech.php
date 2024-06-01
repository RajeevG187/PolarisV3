<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/scitech.json';

// Check if the JSON file exists and is readable
if (!file_exists($jsonFilePath) || !is_readable($jsonFilePath)) {
    die('Error: JSON file not found or not readable.');
}

// Read JSON file
$json = file_get_contents($jsonFilePath);

// Decode JSON data to PHP associative array
$data = json_decode($json, true);

// Check if JSON data is valid
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error: Invalid JSON data. ' . json_last_error_msg());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3498db">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-121551593-1');
    </script>

</head>

<body onload="closePreloader()">

    <?php
    require_once ('partials/header.php');
    ?>

    <header class="header header__scitech">
        <div class="container">
            <div class="header__hero-box">
                <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
                <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data['introduction']['title']; ?></h2>
            <div class="clubs">
                <h3 class="heading-tertiary">General Secretary -
                    <?php echo $data['introduction']['general_secretary']; ?></h3>
                <p class="clubs__text"><?php echo $data['introduction']['text']; ?></p>
            </div>


            <?php foreach ($data['clubs'] as $club): ?>
                <div class="scitech">


                    <?php if (isset($club['lead'])): ?>
                        <h3 class="heading-tertiary"><?php echo $club['title']; ?></h3>
                        <p class="scitech__text"><?php echo "Lead: " . $club['lead']; ?></p><br>
                        <p class="scitech__text"><?php echo "About: " . $club['about']; ?></p><br>
                    <?php endif; ?>

                    <?php if (isset($club['co-ordinator'])): ?>
                        <h3 class="heading-tertiary"><?php echo $club['title']; ?></h3>
                        <p class="scitech__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo "Co-ordinator: " . $club['co-ordinator']; ?>
                        </p><br>
                        <p class="scitech__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo "About: " . $club['about']; ?></p><br>
                    <?php endif; ?>



                    <?php if (isset($club['keypoints'])): ?>
                        <p class="scitech__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo "Keypoints:"; ?></span></p>
                        <?php foreach ($club['keypoints'] as $keypoint): ?>
                            <ul class="info__list">
                                <li class="info__item"><?php echo "- " . $keypoint['text']; ?></li><br>
                            </ul>
                        <?php endforeach; ?>
                    <?php endif; ?>


                    <?php if (isset($club['objectives'])): ?>
                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Objectives and
                                Ideas:</span></p>
                        <ul class="info__list"><?php foreach ($club['objectives']['objective-list'] as $objective): ?>
                                <li class="info__item"><?php echo "- " . $objective['text'] . "\n"; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>



                    <?php if (isset($club['activities'])): ?>
                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Activities planned for
                                upcoming semester:</span></p>
                        <ul class="info__list"> <?php foreach ($club['activities']['activity-list'] as $activity): ?>
                                <li class="info__item"> <?php echo "- " . $activity['text'] . "\n"; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>



                    <?php if (isset($club['socialmedia'])): ?>
                        <p class="outreach__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo "Follow us:"; ?></span></p>
                        <?php foreach ($club['socialmedia'] as $socialmedia): ?>
                            <p class="outreach__text"><?php echo "- " . $socialmedia['display'] . ": " . $socialmedia['url']; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>



                    <?php if (isset($club['images'])): ?>
                        <div class="row">
                            <?php foreach ($club['images'] as $image): ?>
                                <div class="col-1-of-2"><?php echo "- " . $image['alt'] . ": " . $image['url']; ?></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>



                    <?php if (isset($club['image_epsilon'])): ?>
                        <div class="row">
                            <?php foreach ($club['image_epsilon'] as $image): ?>
                                <div class="col-1-of-3"><?php echo "- " . $image['alt'] . ": " . $image['url']; ?></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="line-break"></div>
                </div>
            <?php endforeach; ?>

        </div>


        <div class="container">
            <h2 class="heading-secondary">Institute Innovation Council (IIC)</h2>
            <div class="scitech">
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>President:</span> Prof. P.
                    D. Srivastava</p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Convener:</span> Dr.
                    Sanjib Banerjee</p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Co-ordinator:</span>
                    Rachuri Sri Pramodh</p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:</span>Ministry of
                    Human Resource Development (MHRD), Govt. of India has established ‘MHRD’s Innovation Cell (MIC)’ to
                    systematically foster the culture of Innovation amongst all Higher Education Institutions (HEIs).
                    The primary mandate of MIC is to encourage, inspire and nurture young students by supporting them to
                    work with new ideas and transform them into prototypes while they are informative years.
                    MIC has envisioned encouraging creation of ‘Institution’s Innovation Council (IICs)’ across selected
                    HEIs. A network of these IICs has been established to promote innovation in the Institution through
                    multitudinous modes leading to an innovation promotion eco-system in the campuses.
                </p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Major focus of IIC:</span>
                </p>

                <ul class="info__list">
                    <li class="info__item">To create a vibrant local innovation ecosystem.</li>
                    <li class="info__item">Start-up supporting Mechanism in HEIs.</li>
                    <li class="info__item">Prepare institute for Atal Ranking of Institutions on Innovation Achievements
                        Framework.</li>
                    <li class="info__item">Establish Function Ecosystem for Scouting Ideas and Pre-incubation of Ideas.
                    </li>
                    <li class="info__item">Develop better Cognitive Ability for Technology Students.</li>
                </ul>

                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Function of IIC:</span>
                </p>

                <ul class="info__list">
                    <li class="info__item">To conduct various innovation and entrepreneurship-related activities
                        prescribed by Central MIC in time bound fashion.</li>
                    <li class="info__item">Identify and reward innovations and share success stories.</li>
                    <li class="info__item">Organize periodic workshops/ seminars/ interactions with entrepreneurs,
                        investors, professionals and create a mentor pool for student innovators.</li>
                    <li class="info__item">Network with peers and national entrepreneurship development organizations.
                    </li>
                    <li class="info__item">Create an Institution’s Innovation portal to highlight innovative projects
                        carried out by institution’s faculty and students.</li>
                    <li class="info__item">Organize Hackathons, idea competition, mini-challenges etc. with the
                        involvement of industries.</li>
                </ul>
                <p class="scitech__text">
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>IIC of IIT Bhilai has
                        hosted a workshops on:</span></p>
                <ul class="info__list">
                    <li class="info__item">Cognitive Skills Design Thinking and Critical thinking.</li>
                    <li class="info__item">Intellectual property rights.</li>
                </ul>
                <p class="scitech__text">
                    Students also participated in Smart India Hackathon 2019, Smart Bihar Submit, India-Japan Ideathon.
                    <br><br> </p>

                <div class="row">
                    <div class="col-2-of-2"><img src="../public/images/life/iic.JPG" alt="IIC" class="cultural__photo">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php
    require_once ('partials/footer.php');
    ?>
</body>

</html>