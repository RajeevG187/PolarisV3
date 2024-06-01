<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/meraz.json';

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
        <link rel="stylesheet" href="../public/css/meraz.css">
        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
    <style>
      .no-cssanimations .rw-wrapper .rw-sentence span:first-child{
        opacity: 1;
      }
    </style>
    <body onload="closePreloader()">

      <?php
      require_once('partials/header.php');
      ?>

      <header class="header header__meraz">
          <div class="container">
              <div class="header__hero-box">
                  <h1 class="heading-primary" style="font-family: 'Bangers'; letter-spacing: 5px;font-size:900%;"><?php echo $data["header"]["heading"]; ?></h1>
                  <p class="heading-subtitle"><?php echo $data["header"]["subtitle"]; ?>.</p>
              </div>
          </div>
      </header>

      <section class="section">
        <?php foreach ($data["meraz-videos"]['info'] as $item): ?>
          <div class="container" style = "text-align: center;" >
              <h2 class="heading-secondary"><?php echo $item['title']; ?></h2>
              <iframe width="840" height="472.5" src=<?php echo $item['link']; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br><br>
              <a href=<?php echo $item['site-link']; ?> class="outreach__link"><p class="introduction__text" style="text-align:center;">Go to - <u><?php echo $item["site-name"]; ?></u></p></a><br>
          </div> 
        <?php endforeach;?>

        <br>
        
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data["more-videos-meraz"]['heading'] ?></h2>
            <!-- <h2 class="heading-secondary">More Videos</h2> -->
        </div>

        <?php foreach ($data["more-videos-meraz"]['youtube-links'] as $item): ?>
          <div class="row">
              <div class="col-1-of-2">
                  <div class="campus">
                    <iframe width="560" height="315" src=<?php echo $item[0]["link"]; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-1-of-2">
                  <div class="campus">
                      <iframe width="560" height="315" src=<?php echo $item[1]["link"]; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
        <?php endforeach;?>
        
      </section>

      <?php
      require_once('partials/footer.php');
      ?>

    </body>

  </html>
