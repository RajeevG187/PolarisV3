<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/hostellife.json';

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

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class ="bckproperty">
      <?php
      require_once('partials/header.php');
      ?>
        <header class="header header__life">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['head']['heading']; ?></h1>
                    <p class="heading-subtitle"><?php echo $data['head']['text']; ?></p>
                </div>
              
            </div>
        </header>

        <section class="section">
        <div class="container">
            <h2 class="heading-secondary">About</h2>
            <div class="about">
                <h2 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['about']['heading']; ?></h2>
                <p class="about__text"><?php echo $data['about']['text']; ?></p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>


        <section class="section">
            <div class="container">
                <h2 class="heading-secondary"><?php echo $data['header']['heading']; ?> </h2>
                <div class="facilities">
                    
                    <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['objective']['heading']; ?></h3>
                    <p class="facilities__text"><?php echo $data['objective']['text']; ?></p>
                    <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['definitons']['heading']; ?></h3>
                    <p class="facilities__text"><?php echo $data['definitons']['note']; ?></p>
                    <ul class="info__list">
                    <?php foreach ($data['definitons']['points'] as $point): ?>
                                    <li class="info__item"><?php echo $point['text']; ?></li>
                                <?php endforeach; ?>
                    </ul>
                    <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['ingredients']['heading']; ?></h3>
                    <ul class="info__list">
                    <?php foreach ($data['ingredients']['points'] as $point): ?>
                                    <li class="info__item"><?php echo $point['text']; ?></li>
                                <?php endforeach; ?>
                    </ul>
                    <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['prevention']['heading']; ?></h3>
                    <?php foreach ($data['prevention']['admission'] as $element): ?>
                  
                    <ul class="info__list">
                    <?php foreach ($element['points'] as $point): ?>
                                    <li class="info__item"><?php echo $point['text']; ?></li>
                                   
                                <?php endforeach; ?>
                                </ul>
                                <?php endforeach; ?>

                                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['punishment']['heading']; ?></h3>
                                <?php foreach ($data['punishment']['note'] as $element): ?>
                                    <h5 class="heading-tertiary2"><?php echo $element['heading']; ?></h5>
                                    <p class="facilities__text"><?php echo $element['points']['text']; ?></p>
                                        <?php if (!empty($element['points']['sub-points'])): ?>
                                            <ul class="info__list">
                                            <?php foreach ($element['points']['sub-points'] as $point): ?>
                                                <li class="info__item"><?php echo $point['text']; ?></li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                <?php endforeach; ?>


                                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['ARC']['heading']; ?></h3>
                                <p class="facilities__text"><?php echo $data['ARC']['work']; ?></p>
                                <?php foreach ($data['ARC']['note'] as $element): ?>
                                    <h5 class="heading-tertiary2"><?php echo $element['heading']; ?></h5>
                                    
                                        <?php if (!empty($element['points']['sub-points'])): ?>
                                            <ul class="info__list">
                                            <?php foreach ($element['points']['sub-points'] as $point): ?>
                                                <li class="info__item"><?php echo $point['text']; ?></li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                <?php endforeach; ?>


                                <p class="facilities__text">To learn more about it please refer to the <a href="..\public\pdfs\Anti Ragging.pdf"><b>Anti-Ragging Doc</b></a></p>
                  
                </div>
            </div>

        </section>

        <div class="line-break"></div>

   
    <section class="section">
        <div class="container">
            <h2 class="heading-secondary" id="hostel__facilities"><?php echo $data['facilities']['heading']; ?></h2>
            <div class="facilities">
                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['facilities']['hostel']['heading']; ?></h3>
                <p class="facilities__text"><?php echo $data['facilities']['hostel']['text']; ?></p>
            </div>

            <div class="facilities">
                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['facilities']['capacity']['heading']; ?></h3>
                <p class="facilities__text"><?php echo $data['facilities']['capacity']['text']; ?></p>
            </div>

            <div class="facilities">
                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['facilities']['rooms']['heading']; ?></h3>
                <p class="facilities__text"><?php echo $data['facilities']['rooms']['text']; ?></p>
            </div>

            <div class="facilities">
                <h3 class="heading-tertiary"><i class="fas fa-arrow-circle-right"></i>&nbsp;<?php echo $data['facilities']['others']['heading']; ?></h3>
                <ul class="info__list">
                    <?php foreach ($data['facilities']['others']['facilities'] as $facility): ?>
                        <li class="info__item"><?php echo $facility['text']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Network and Connectivity</h2>
            <div class="network">
                <p class="network__text"><?php echo $data['connectivity']['text']; ?></p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Mess Facilities</h2>
            <div class="mess">
                <p class="mess__text"><?php echo $data['mess']['text']; ?></p>
                <br>
                
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Medical Facilities</h2>
            <div class="medical">
                <p class="medical__text"><?php echo $data['medical']['text']; ?></p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">Transportation Facilities within Campus</h2>
            <div class="transportation">
                <p class="transportation__text"><?php echo $data['transportation']['text']; ?></p>
            </div>
            <div class="transportation">
                <ul class="info__list">
                    <?php foreach ($data['transportation']['facilities'] as $facility): ?>
                        <li class="info__item"><?php echo $facility['text']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <?php require_once('partials/footer.php'); ?>
</div>
</body>
</html>