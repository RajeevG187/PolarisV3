<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/nssandnso.json';

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
        
        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">

        <title>Polaris - Student Mentorship Program</title>


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
        <?php require_once('partials/header.php'); ?>

        <header class="header header__nsso">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
                    <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="nss">
                    <h2 class="heading-secondary"><?php echo $data['nss']['head']; ?></h2>
                    <div class="info">
                        <h3 class="heading-tertiary"><?php echo $data['nss']['sec']; ?></h3>
                    </div>
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['nss']['sub-lists']['about']['title']; ?></h3>
                        <p class="info__text"><?php echo $data['nss']['sub-lists']['about']['text']; ?></p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['nss']['sub-lists']['motive']['title']; ?></h3>
                        <ul class="info__list">
                            <?php foreach($data['nss']['sub-lists']['motive']['sub-lists'] as $sublists):?>
                                <li class="info__item"><?php echo $sublists['text'];?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                    <br>





                    <div class="cultural row">
                        <?php foreach($data['nss']['images'] as $images):?>
                            <div class="col-1-of-2"><img src="<?php echo $images['path'];?>" alt="NSS" class="cultural__photo"></div>
                        <?php endforeach;?> 
                    </div>

                    <br>

                    <section class="section">
                    <div class="container">
                        <h2 class="heading-secondary"><?php  echo $data['throwback']['head'];?></h2>
                    </div>
                    <div class="row">
                        <div class="col-1-of-2">
                            <div class="campus">
                            <?php $videoLink = $data['throwback']['youtube-links'][0]['link'];?>
                                <iframe width="560" height="315" src="<?php echo $videoLink; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                    </div>
                    </section>

                </div>
                

            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="nso">
                    <h2 class="heading-secondary"><?php  echo $data['nso']['head'];?></h2>
                    <div class="info">
                        <h3 class="heading-tertiary"><?php  echo $data['nso']['sec'];?></h3>
                    </div>
                    <div class="info">
                        <p class="info__text"><?php  echo $data['nso']['text'];?></p>
                    </div>

                    <br>

                    <div class="cultural row">
                        <?php foreach($data['nso']['images'] as $images):?>
                            <div class="col-1-of-2"><img src="<?php echo $images['path'];?>" alt="NSO" class="cultural__photo"></div>
                        <?php endforeach;?>
                    </div>

                </div>
            </div>
        </section>


        <?php
        require_once('partials/footer.php');
        ?>
        </div>
    </body>

</html>
