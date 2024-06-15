<?php
$jsonfilepath = '..\src\json\cosa.json';

if (!file_exists($jsonfilepath) || !is_readable($jsonfilepath)) {
    die('Error: JSON file not found or not readable.');
}

$key = file_get_contents($jsonfilepath);
$data = json_decode($key, true);

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

    <title>Polaris - Student Mentorship Program</title>


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
<div class ="bckproperty">
    <?php
    require_once ('partials/header.php');
    ?>

    <header class="header header__cultural">
        <div class="container">
            <div class="header__hero-box">
                <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
                <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">

            <div class="clubs">
                <div class="heriditary">

                    <div class="row">
                        <div class="dev">
                            <div class="col-1-of-1">
                                <figure class="dev__shape">
                                    <img src="../public/<?php echo $data['heriditary']['president']['image']; ?>"
                                        alt="<?php echo $data['heriditary']['president']['name']; ?>"
                                        class="dev__img dev__img--president">
                                    <figcaption class="dev__caption">
                                        <?php echo $data['heriditary']['president']['name']; ?>
                                    </figcaption>
                                </figure>
                                <div class="dev__name">
                                    <b><?php echo $data['heriditary']['president']['name']; ?></b><br>President,
                                    CoSA
                                </div>

                                <a href="<?php echo $data['heriditary']['president']['email']; ?>" class="dev__profile"
                                    target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <?php if ($data['heriditary']['president']['instagram'] != ""): ?>
                                    <a href=<?php echo $data['heriditary']['president']["instagram"]; ?> target="_blank" class="dev__profile"
                                        target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($data['heriditary']['president']["linkedIn"] != ""): ?>
                                    <a href=<?php echo $data['heriditary']['president']["linkedIn"]; ?> target="_blank" class="dev__profile"
                                        target="_blank">
                                        <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($data['heriditary']['president']["phone"] != ""): ?>
                                    <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash;
                                        <?php echo $data['heriditary']['president']["phone"]; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="dev">

                            <?php foreach ($data["heriditary"]["members-2"] as $member): ?>
                                <div class="col-1-of-2">
                                    <figure class="dev__shape">
                                        <img src=<?php echo $member["image"]; ?> alt=<?php echo $member["name"]; ?>
                                            class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $member["name"]; ?></figcaption>
                                    </figure>
                                    <div class="dev__name">
                                        <strong><?php echo $member["name"]; ?></strong><br /><?php echo $member["title"]; ?>
                                    </div>
                                    <a href=<?php echo $member["email"]; ?> class="dev__profile" target="_blank">
                                        <i class="far fa-envelope   dev__profile--icon"></i>
                                    </a>

                                    <?php if ($member["instagram"] != ""): ?>
                                        <a href=<?php echo $member["instagram"]; ?> target="_blank" class="dev__profile"
                                            target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($member["linkedIn"] != ""): ?>
                                        <a href=<?php echo $member["linkedIn"]; ?> target="_blank" class="dev__profile"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($member["phone"] != ""): ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash;
                                            <?php echo $member["phone"]; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>


                    <div class="row">
                        <div class="dev">

                            <?php foreach ($data["heriditary"]["members-3"] as $member): ?>
                                <div class="col-1-of-3">
                                    <figure class="dev__shape">
                                        <img src=<?php echo $member["image"]; ?> alt=<?php echo $member["name"]; ?>
                                            class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $member["name"]; ?></figcaption>
                                    </figure>
                                    <div class="dev__name">
                                        <strong><?php echo $member["name"]; ?></strong><br /><?php echo $member["title"]; ?>
                                    </div>
                                    <a href=<?php echo $member["email"]; ?> class="dev__profile" target="_blank">
                                        <i class="far fa-envelope   dev__profile--icon"></i>
                                    </a>

                                    <?php if ($member["instagram"] != ""): ?>
                                        <a href=<?php echo $member["instagram"]; ?> target="_blank" class="dev__profile"
                                            target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($member["linkedIn"] != ""): ?>
                                        <a href=<?php echo $member["linkedIn"]; ?> target="_blank" class="dev__profile"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($member["phone"] != ""): ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash;
                                            <?php echo $member["phone"]; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>


            <h2 class="heading-secondary"><?php echo $data['events']['head']; ?></h2>

            <?php
            foreach ($data['events']['info'] as $event) {
                echo '<div class="cultural">';
                echo '<h3 class="heading-tertiary">' . $event['name'] . '</h3>';
                echo '<p class="cultural__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Description:</span> ' . $event['description'] . '</p>';
                echo '<br><br>';

                if (!empty($event['img1']) || !empty($event['img2'])) {
                    echo '<div class="row">';
                    echo '<div class="col-1-of-2"><img src="' . $event['img1'] . '" alt="' . $event['alt1'] . '" class="cultural__photo"></div>';
                    echo '<div class="col-1-of-2"><img src="' . $event['img2'] . '" alt="' . $event['alt2'] . '" class="cultural__photo"></div>';

                    echo '</div>';

                }

                echo '</div>';

                if(!empty($event['video'])){
                    echo '<div class="row">';
                    echo '<div class="col-1-of-1">
                    <iframe width="1120" height="500" src="https://www.youtube.com/embed/3wTTq6JrtQs?si=TWghItlS4e1koxla" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     </div>';
                    echo '</div>';
                    }

                echo '<div class="line-break"></div>';
            }
            ?>

        </div>
    </section>
    
    <?php require_once ('partials/footer.php'); ?>
    </div>
</body>

</html>