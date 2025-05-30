<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/cultural.json';

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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">

    <title>Polaris - Student Mentorship Program</title>

    <script defer src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>

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
        <?php require_once ('partials/header.php'); ?>

        <header class="header header__cultural">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Cultural Council</h1>
                    <p class="heading-subtitle">Find your true talent....</p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="clubs">
                    <div class="information__box">
                        <div>
                            <h3 class="heading-tertiary">General Secretary -
                                <?php echo $data['generalsecretary']['name']; ?>
                            </h3><br><br>
                            <p class="clubs__text"><?php echo $data['text']["message"]; ?></p>
                            <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow
                                    us:</span>
                                <a href="https://www.facebook.com/IITBhilai.Cult/" class="outreach__link"
                                    target="_blank">Facebook</a>, <a
                                    href="https://instagram.com/culturals_iitbh?igshid=MzRlODBiNWFlZA=="
                                    class="outreach__link" target="_blank">Instagram</a>
                            </p>

                            <!-- <a href="https://www.facebook.com/IITBhilai.Cult/" class="outreach__link"
                            target="_blank">Facebook</a>, -->
                            <br>
                        </div>
                        <div>
                            <div class="dev">
                                <div class="col-1-of-4">
                                    <figure class="dev__shape">
                                        <img src="../public/<?php echo $data['generalsecretary']['image']; ?>"
                                            alt="<?php echo $data['generalsecretary']['name']; ?>"
                                            class="dev__img dev__img--president">
                                        <figcaption class="dev__caption">
                                            <?php echo $data['generalsecretary']['name'];
                                            ; ?>
                                        </figcaption>
                                    </figure>
                                    <div class="dev__name">
                                        <?php echo $data['generalsecretary']['name']; ?><br>Gen
                                        Sec Cult
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="heading-secondary">Cultural Clubs</h2>

                <?php foreach ($data['club'] as $club): ?>
                    <div class="cultural">
                        <div class="icon_section">
                            <div class="icon_section__size">
                                <img class="icon_section__image" src="<?php echo $club['icon']; ?>"
                                    alt="<?php echo $club['name']; ?>">
                            </div>
                            <div class="icon_section__vertical_line"></div>
                            <div class="icon_section__text">
                                <h3 class="heading-tertiary"><?php echo $club['name']; ?></h3>
                                <p class="cultural__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Coordinator:
                                    </span><?php echo $club['coordinator']; ?></p><br>
                            </div>
                        </div>

                        <p class="cultural__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Description:
                            </span><?php echo $club['description']; ?></p><br>

                        <?php if (isset($club['topic'])): ?>
                            <p class="cultural__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['topic']; ?></span><?php echo $club['list']; ?>
                            </p><br>
                        <?php endif; ?>

                        <?php if (isset($club['subtopic'])): ?>
                            <p class="cultural__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['subtopic']; ?></span>
                            </p>
                            <ul class="info__list">
                                <?php foreach ($club['points'] as $point): ?>
                                    <li class="info__item"><?php echo $point['obs']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if (isset($club['subject'])): ?>
                            <p class="cultural__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['subject']; ?></span></p>
                            <ul class="info__list">
                                <?php foreach ($club['txt_blck'] as $text): ?>
                                    <li class="info__item"><?php echo $text['txt']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow us:</span> 
                            <a href="<?= $club['facebook'] ?>" class="outreach__link">Facebook</a>, 
                            <a href="<?= $club['instagram'] ?>" class="outreach__link">Instagram</a>
                        </p>

                        <section class="section">
                            <div class="container">
                            <div class="gallery">
                                <div class="siema">
                                    <div id="<?php echo $club['carousel_id'][0]; ?>" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <?php $i = 1;foreach($club['images'] as $img): ?>
                                                 <button type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                                            <?php $i++; endforeach; ?>


                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active c-item">
                                                <img src="<?php echo $club['img-active'][0]['img']; ?>" class="d-block w-100 c-img" alt=<?php echo $club['img-active'][0]['alt']; ?>, >
                                            </div>
                                            <?php foreach($club['images'] as $img): ?>
                                                <div class="carousel-item c-item">
                                                    <img src="<?php echo $img['img']; ?>" class="d-block w-100 c-img" alt="<?php echo $img['alt']; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <button class="carousel-control-prev"  type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>

                    <div class="line-break"></div>
                <?php endforeach; ?>
            </div>

            <div class="container">
                <br><br>
                <br><br>
                <h2 class="heading-secondary">Cultural Societies</h2>
                <?php foreach ($data['society'] as $society): ?>
                    <div class="cultural">
                        <div class="icon_section">
                            <div class="icon_section__size">
                                <img class="icon_section__image" src="<?php echo $society['icon']; ?>"
                                    alt="<?php echo $society['name']; ?>">
                            </div>
                            <div class="icon_section__vertical_line"></div>
                            <div class="icon_section__text">
                                <h3 class="heading-tertiary"><?php echo $society['name']; ?></h3>
                                <p class="cultural__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Secretary:
                                    </span><?php echo $society['secretary']; ?></p><br>
                            </div>
                        </div>

                        <p class="cultural__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Description:</span>
                            <?php foreach ($society['description'] as $desc): ?>
                                <?php echo $desc['des']; ?><br><br>
                            <?php endforeach; ?>
                        </p><br>
                        <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow us:</span>
                            <?php if (isset($society['facebook'])): ?>
                                <a href="<?= $society['facebook'] ?>"class="outreach__link">Facebook</a>,
                            <?php endif; ?> 
                            <a href="<?= $society['instagram'] ?>"class="outreach__link">Instagram</a></p>
                        <br>

                        <section class="section">
                        <div class="container">
                            <div class="gallery">
                                <div class="siema">
                                    <div id="<?php echo $society['carousel_id'][0]; ?>" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#<?php echo $society['carousel_id'][0]; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <?php $i = 1;foreach($society['images'] as $img): ?>
                                                 <button type="button" data-bs-target="#<?php echo $club['carousel_id'][0]; ?>" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                                            <?php $i++; endforeach; ?>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active c-item">
                                                <img src="<?php echo $society['img-active'][0]['img']; ?>" class="d-block w-100 c-img" alt="<?php echo $society['img-active'][0]['alt']; ?>">
                                            </div>
                                            <?php foreach($society['images'] as $img): ?>
                                                <div class="carousel-item c-item">
                                                    <img src="<?php echo $img['img']; ?>" class="d-block w-100 c-img" alt="<?php echo $img['alt']; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $society['carousel_id'][0]; ?>" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $society['carousel_id'][0]; ?>" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                    </div>
                    <div class="line-break"></div>
                <?php endforeach; ?>
            </div>
        </section>


        <?php require_once ('partials/footer.php'); ?>

    </div>

</body>

</html>