<?php
// Define the path to the JSON file
$jsonFilePath = 'C:\Users\r9307\Desktop\PolarisV3\PolarisV3\src\json\motorsports.json';

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

// Check if the required keys exist in the decoded data
if (!isset($data['header'], $data['introduction'], $data['topics'], $data['gallery'])) {
    die('Error: Missing required data in JSON.');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3498db">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/css/style.css">

    <title>Polaris - Student Mentorship Program</title>

    <meta name="google-site-verification" content="psQtXO_U0R9o5w-fP7i3zrlm_g3nDtP0Mg6-Xg-q73w" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121551593-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-121551593-1');
    </script>

</head>

<body onload="closePreloader()">

<?php require_once('../views/partials/header.php'); ?>

<header class="header header__motorsports">
    <div class="container">
        <div class="header__hero-box">
            <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
            <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
        </div>
    </div>
</header>

<section class="section">
    <div class="container">
        <h2 class="heading-secondary"><?php echo $data['introduction']['head']; ?></h2>
        <div class="clubs">
            <?php foreach ($data['introduction']['sub-lists'] as $subList): ?>
                <h3 class="heading-tertiary"><?php echo $subList['title'] . ' - ' . $subList['text']; ?></h3>
            <?php endforeach; ?>
            <br>
            <p class="clubs__text"><?php echo $data['introduction']['intro_text']; ?></p>
        </div>

        <div class="row">
            <?php foreach ($data['introduction']['images'][0] as $image): ?>
                <div class="col-1-of-2"><img src="<?php echo $image['img']; ?>" alt="Motorsports" class="motorsports__photo"></div>
            <?php endforeach; ?>
        </div>

        <div class="line-break"></div>
        <br>

        <h3 class="heading-tertiary"><?php echo $data['topics'][0]['head']; ?></h3>
        <?php foreach ($data['topics'][0]['paras'] as $para): ?>
            <p class="clubs__text"><?php echo $para['text']; ?></p>
        <?php endforeach; ?>

        <br>
        <?php
            for($i = 0; $i < count($data['gallery']); $i++){
        ?>
            <div class="row">
                <?php foreach ($data['gallery'][$i] as $image): ?>
                    <div class="col-1-of-2"><img src="<?php echo $image['img']; ?>" alt="Motorsports" class="motorsports__photo"></div>
                <?php endforeach; ?>
            </div>
        <?php
        }
        ?>
    </div>

</section>

<?php
require_once('partials/footer.php');
?>

</body>

</html>
