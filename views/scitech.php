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
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">


    <title>Polaris - Student Mentorship Program</title>
    <script defer src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>



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
    <div class="bckproperty">

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
                    <div class="information__box">
                        <div>
                            <h3 class="heading-tertiary">General Secretary -
                                <?php echo $data['introduction']['general_secretary']; ?>
                            </h3><br><br>
                            <p class="clubs__text"><?php echo $data['introduction']['text']; ?></p><br>
                            <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow
                                    us:</span>

                                <!-- <a href="https://www.facebook.com/IITBhilai.Cult/" class="outreach__link"
                                target="_blank">Facebook</a>, -->
                                <a href="https://www.instagram.com/scitech_iitbh?igsh=NHhvZHphcnV4NGxj"
                                    class="outreach__link" target="_blank">Instagram</a>
                            </p>
                            <br>
                        </div>
                        <div>
                            <div class="dev">
                                <div class="col-1-of-4">
                                    <figure class="dev__shape">
                                        <img src="../public/<?php echo $data['introduction']['image']; ?>"
                                            alt="<?php echo $data['introduction']['general_secretary']; ?>"
                                            class="dev__img dev__img--president">
                                        <figcaption class="dev__caption">
                                            <?php echo $data['introduction']['general_secretary'];
                                            ; ?>
                                        </figcaption>
                                    </figure>
                                    <div class="dev__name">
                                        <?php echo $data['introduction']['general_secretary']; ?><br>Gen
                                        Sec Sci-Tech</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>



                <?php foreach ($data['clubs'] as $club): ?>
                    <div class="scitech">
                        <div class="icon_section">
                            <div class="icon_section__size">
                                <img class="icon_section__image" src="<?php echo $club['icon']; ?>"
                                    alt="<?php echo $club['title']; ?>">
                            </div>
                            <div class="icon_section__vertical_line"></div>
                            <div class="icon_section__text">
                                <h3 class="heading-tertiary"><?php echo $club['title']; ?></h3>
                                <p class="scitech__text"><i
                                        class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['role']; ?></span><?php echo $club['leader']; ?>
                                </p><br>
                            </div>
                        </div>
                        <p class="scitech__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:</span><?php echo $club['about']; ?>
                        </p>
                        <br>

                        <?php if (!empty($club['topic'])): ?>
                            <p class="scitech__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['topic']; ?></span></p>
                            <?php foreach ($club['list'] as $list): ?>
                                <ul class="info__list">
                                    <li class="info__item"><?php echo $list['text']; ?></li>
                                </ul>
                            <?php endforeach; ?>     <?php endif; ?>

                        <?php if (!empty($club['activities'])): ?>
                            <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Activities planned for
                                    upcoming semester:</span></p>
                            <ul class="info__list"> <?php foreach ($club['activities']['activity-list'] as $activity): ?>
                                    <li class="info__item"> <?php echo $activity['text'] . "\n"; ?></li>
                                <?php endforeach; ?>     <?php endif; ?>
                            </ul>

                        <?php if (!empty($club['socialmedia'])): ?>
                            <p class="outreach__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo "Follow us:"; ?></span>
                                <?php foreach ($club['socialmedia'] as $socialmedia): ?>
                                    <a href="<?= $socialmedia['url'] ?>" class="outreach__link"
                                        target="_blank"><?php echo $socialmedia['display']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </p><?php endif; ?>

                        <?php if (!empty($club['images'])): ?>
                            <section class="section">
                                <div class="container">
                                    <div class="gallery">
                                        <div class="siema">
                                            <div id="<?php echo $club['carousel_id'][0]; ?>" class="carousel slide">
                                                <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <?php for($i = 0; $i < count($club['images']); $i++):?>
                                                <button type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide-to="<?php echo $i+1;?>" aria-label="Slide <?php echo $i+2?>"></button>
                                            <?php endfor; ?>
                                            

                                        </div>
                                         <div class="carousel-inner">
                                            <div class="carousel-item active c-item">
                                            <img src="<?php echo $club['img-active'][0]['url']; ?>" class="d-block w-100 c-img" alt="<?php echo $club['img-active'][0]['alt']; ?>">
                                            </div>
                                            <?php for($i = 0; $i < count($club['images']); $i++):?> 
                                                <div class="carousel-item c-item">
                                                    <img src="<?php echo $club['images'][$i]['url']; ?>" class="d-block w-100 c-img" alt="<?php echo $club['images'][$i]['alt']; ?>">
                                                </div>
                                            <?php endfor; ?>
                                         </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#<?php echo $club['carousel_id'][0]; ?>"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#<?php echo $club['carousel_id'][0]; ?>"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>

                    <div class="line-break"></div>
                </div>
            <?php endforeach; ?>

        </div>


        <div class="container">
            <h2 class="heading-secondary"><?php echo $data['iic']['title']; ?></h2>
            <div class="scitech">
                <?php foreach ($data['iic']['name'] as $name): ?>
                    <p class="scitech__text"><i
                            class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $name['position'] . ":"; ?></span><?php echo $name['holder']; ?>
                    </p><br>
                <?php endforeach; ?></br>

                <?php foreach ($data['iic']['function'] as $function): ?>
                    <p class="scitech__text"><i
                            class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $function['subject']; ?></span></p>
                    <ul class="info__list">
                        <?php foreach ($function['txt_block'] as $txt): ?>
                            <li class="info__item"><?php echo $txt['text']; ?></li><?php endforeach; ?>
                    </ul> <?php endforeach; ?><br><br>

                <div class="row">
                    <div class="col-2-of-2"><img src="../public/images/life/life_8.jpg" alt="IIC" class="cultural__photo">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php
        require_once ('partials/footer.php');
        ?>
    </div>
</body>

</html>