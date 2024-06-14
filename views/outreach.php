<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/outreach.json';

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
      <?php
      require_once('partials/header.php');
      ?>

        <header class="header header__outreach">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data["header"]["heading"]; ?></h1>
                    <p class="heading-subtitle"><?php echo $data["header"]["subtitle"]; ?>.</p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary"><?php echo $data["header"]["heading"]; ?></h2>
                <div class="clubs">
                    <p class="clubs__text"><?php echo $data["clubs-text"]; ?></p>
                </div>

                <div class="outreach">
                    <h3 class="heading-tertiary"><?php echo $data["outreach"]["heading"]; ?></h3>
                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $data["outreach"]["title"]; ?></span> <?php echo $data["outreach"]["name"]; ?></p><br>
                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $data["outreach"]["about"]["head"]; ?></span> <?php echo $data["outreach"]["about"]["content"]; ?></p><br>

                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span><?php echo $data["outreach"]["work"]; ?></span></p>

                    <ul class="info__list">

                        <?php foreach ($data["outreach"]['info-list'] as $list_item): ?>
                            <li class="info__item"><?php echo $list_item['a']; ?></li>

                        <?php endforeach;?>
                    </ul>
                </div>

                <!-- <div class="line-break"></div>

                <div class="outreach">
                    <h3 class="heading-tertiary">The Pixel Snappers</h3>
                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Co-ordinator:</span> Saksham Bhushan</p><br>
                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>About:</span> From the very beginning of the IIT Bhilai members of the club have showed their dedication and covered all the events organised inside the institute. We, as the members of the photography club, seek to display our love for photography through the consecutive criticism of our peers, leisure activities that involve photography, and the promotion of photography in and around the IIT Bhilai campus.</p><br>

                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Activities: </span> The club have captured moments from every event whether it was cultural event or NSS activity in both photos as well as videos. Members of the club have also covered each tournament of PRAYATNA organised in winter semester 2018. Club has organised photography competitions weekly starting from IIT Bhilai’s first batch itself and giving prizes to winners. </p><br>

                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Acheivements: </span> Club represented IIT Bhilai in the Photowalk 3.0 ( a theme based photography competition ) conducted by IIM Raipur near Marine Drive, Raipur and won first prize of worth of cash ₹ 5000.</p><br>

                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Upcoming Plans</span></p>

                    <ul class="info__list">
                        <li class="info__item">Freshers Introduction video like other IITs.</li>
                        <li class="info__item">Conducting photography competitions on large scale.</li>
                        <li class="info__item">Theme based short video making competition.</li>
                        <li class="info__item">Making short videos while collaborating with Drishya, the drama club.</li>
                    </ul>

                    <p class="outreach__text"><i class="fas fa-arrow-circle-right"></i>&nbsp;<span>Follow us:</span> <a href="https://www.facebook.com/ThePixelSnappers/" class="outreach__link">Facebook</a>, <a href="https://www.instagram.com/thepixelsnappers/" class="outreach__link">Instagram</a>, <a href="https://twitter.com/pixelsnappers" class="outreach__link">Twitter</a>, <a href="https://www.youtube.com/channel/UCs_b3N6z8XZSCY4KUrcQnsQ" class="outreach__link">YouTube</a></p>
                </div> -->

            </div>

        </section>

        <?php
        require_once('partials/footer.php');
        ?>
        </div>
    </body>

</html>
