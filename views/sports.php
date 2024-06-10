<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/sports.json';

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

// // Check if the required keys exist in the decoded data
// if (!isset($data['header'], $data['introduction'], $data['topics'], $data['gallery'])) {
//     die('Error: Missing required data in JSON.');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3498db">

    <title>Polaris - Student Mentorship Program</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/animate.css">

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

    <header class="header header__sports">
        <div class="container">
            <div class="header__hero-box">
                <h1 class="heading-primary">Sports</h1>
                <p class="heading-subtitle">Find your true talent....</p>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data['header']['head']; ?></h2>
            <div class="clubs">
                <div class="information__box">
                    <div>
                        <h3 class="heading-tertiary"><?php echo $data['introduction']['general-secretary']; ?></h3>
                        <br><br>
                        <p class="clubs__text"><?php echo $data['introduction']['text']; ?></p><br>
                        <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow us:
                            </span><a href="<?php echo $data['header']['link']; ?>" class="outreach__link">Facebook</a>
                        </p>
                        <br>
                    </div>
                    <div>
                        <div class="dev">
                            <div class="col-1-of-4">
                                <figure class="dev__shape">
                                    <img src="../public/<?php echo $data['introduction']['image']; ?>"
                                        alt="<?php echo $data['introduction']['name']; ?>"
                                        class="dev__img dev__img--president">
                                    <figcaption class="dev__caption"><?php echo $data['introduction']['name']; ?>
                                    </figcaption>
                                </figure>
                                <div class="dev__name"><?php echo $data['introduction']['name']; ?><br>Gen Sec-Sports
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow us: </span><a
                        href="<?php echo $data['header']['link']; ?>" class="outreach__link">Facebook</a></p>
                <br>
                <h3 class="heading-tertiary"><?php echo $data['introduction']['general-secretary']; ?></h3>
                <p class="clubs__text"><?php echo $data['introduction']['text']; ?></p> -->
            </div>

            <?php foreach ($data['sports'] as $sport): ?>

                <div class="sports">

                    <h3 class="heading-tertiary"><?php echo $sport['name']; ?></h3>

                    <p class="sports__text"><i
                            class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $sport['role']; ?></span><?php echo $sport['leader']; ?>
                    </p><br>

                    <?php if (!empty($sport['about'])): ?>
                        <p class="sports__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:
                            </span><?php echo $sport['about']; ?></p><br>
                    <?php endif; ?>

                    <?php if (!empty($sport['facilities'])): ?>
                        <p class="sports__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Facilities:
                            </span><?php echo $sport['facilities']; ?></p><br>
                    <?php endif; ?>

                    <?php if (!empty($sport['objective'])): ?>
                        <p class="sports__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Objective:
                            </span><?php echo $sport['objective']; ?></p><br>
                    <?php endif; ?>

                    <?php if (!empty($sport['activities'])): ?>
                        <p class="sports__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Activities:
                            </span><?php echo $sport['activities']; ?></p><br>
                    <?php endif; ?>

                    <?php if (!empty($sport['past-events'])): ?>
                        <?php foreach ($sport['past-events'] as $pastevent): ?>
                            <p class="sports__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $pastevent['head']; ?></span><?php echo $pastevent['text']; ?>
                            </p><br>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (!empty($sport['upcoming-events'])): ?>
                        <?php foreach ($sport['upcoming-events'] as $upcomingevent): ?>
                            <p class="sports__text"><i
                                    class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $upcomingevent['head']; ?></span><?php echo $upcomingevent['text']; ?>
                            </p><br>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (!empty($sport['image'])): ?>
                        <div class="row">
                            <?php foreach ($sport['image'] as $images): ?>
                                <div class="col-1-of-2"><img src="<?php echo $images['path']; ?>"
                                        alt="<?php echo $images['alt']; ?>" class="sports__photo"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="line-break"></div>

            <?php endforeach; ?>

        </div>
    </section>

    <?php
    require_once ('partials/footer.php');
    ?>

</body>

</html>