<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/sneha.json';

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
                    <?php echo $data['introduction']['general_secretary']; ?>
                </h3>
                <p class="clubs__text"><?php echo $data['introduction']['text']; ?></p>
            </div>


            <?php foreach ($data['clubs'] as $club): ?>
                <div class="scitech">


                   
                        <h3 class="heading-tertiary"><?php echo $club['title']; ?></h3>
                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo$club['role'];?></span><?php echo $club['leader']; ?></p><br>
                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:</span><?php echo $club['about']; ?></p><br>
                  

                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $club['topic']; ?></span></p>
                        <?php foreach ($club['list'] as $list): ?>
                            <ul class="info__list">
                                <li class="info__item"><?php echo $list['text']; ?></li><br>
                            </ul>
                        <?php endforeach; ?>

                        <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Activities planned for
                                upcoming semester:</span></p>
                        <ul class="info__list"> <?php foreach ($club['activities']['activity-list'] as $activity): ?>
                                <li class="info__item"> <?php echo $activity['text'] . "\n"; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <p class="outreach__text"><i
                                class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo "Follow us:"; ?></span>
                                  <?php foreach ($club['socialmedia'] as $socialmedia): ?>
                            <a href="<?= $socialmedia['url'] ?>"
                                    class="outreach__link"><?php echo $socialmedia['display']; ?> </a>
                        <?php endforeach; ?></p>
                   
                        <div class="row">
                            <?php foreach ($club['images'] as $image): ?>
                                <div class="col-1-of-2"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"
                                        class="scitech__photo"></div>
                            <?php endforeach; ?>
                        </div>
                   
                        <div class="row">
                            <?php foreach ($club['image_epsilon'] as $image): ?>
                                <div class="col-1-of-3"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"
                                        class="scitech__photo"></div>
                            <?php endforeach; ?>
                        </div>

                    <div class="line-break"></div>
                </div>
            <?php endforeach; ?>

        </div>


        <div class="container">
            <h2 class="heading-secondary"><?php echo $data['iic']['title']; ?></h2>
            <div class="scitech">
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>President:</span><?php echo $data['iic']['president']; ?></p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Convener:</span><?php echo $data['iic']['convener']; ?></p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Co-ordinator:</span><?php echo $data['iic']['co-ordinator']; ?></p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:</span><?php echo $data['iic']['about']; ?></p><br>
                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Major focus of IIC:</span></p>

                <ul class="info__list">
                    <?php foreach ($data['iic']['major_focus'] as $major): ?>
                        <li class="info__item"><?php echo $major['text']; ?></li>
                    <?php endforeach; ?>
                </ul>

                <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Function of IIC:</span></p>

                <ul class="info__list">
                    <?php foreach ($data['iic']['functions'] as $function): ?>
                        <li class="info__item"><?php echo $function['text']; ?></li>
                    <?php endforeach; ?>
                </ul>

                    <p class="scitech__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>IIC of IIT Bhilai has hosted a workshops on:</span></p>
                  <ul class="info__list">
                  <?php foreach ($data['iic']['workshops'] as $workshop): ?>
                      <li class="info__item"><?php echo$workshop['text'];?></li><?php endforeach; ?>
                  </ul>  <br><br>
               
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