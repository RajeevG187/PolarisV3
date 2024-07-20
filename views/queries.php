<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/queries.json';

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

        <header class="header header__queries">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data["header"]["head"]; ?></h1>
                    <p class="heading-subtitle"><?php echo $data["header"]["text"]; ?></p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="faq">
                    <h2 class="heading-secondary"><?php echo $data["faq"]["head"]; ?></h2>
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][0]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][0]["ans"]; ?></p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][1]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][1]["ans"]; ?></p>
                        <ul class="info__list">
                            <?php foreach ($data["faq"]["sub-lists"][1]['sub-ans-list'] as $department): ?>
                                <li class="info__item"><?php echo $department["detail"]; ?></li>
                            <?php endforeach;?>
                        </ul>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][1]["moredetails"]; ?><a href="../views/departments.php" target="_blank"><?php echo $data["faq"]["sub-lists"][1]["moredetailsurl"]; ?><a> <?php echo $data["faq"]["sub-lists"][1]["link-moredetails"]; ?></p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][2]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][2]["ans"]; ?></p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][3]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][3]["ans"]; ?></p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][4]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][4]["ans"]; ?></p>
                        <ul class="info__list">
                            <?php foreach ($data["faq"]["sub-lists"][4]['sub-list-scholarship'] as $scholarship): ?>
                                <li class="info__item"><?php echo $scholarship["detail"]; ?></li>
                            <?php endforeach;?>
                        </ul>
                        <p class="info__text">
                            <?php echo $data["faq"]["sub-lists"][4]["moredetails"]; ?><a href="<?php echo $data["faq"]["sub-lists"][4]["moredetailsurl"]; ?>" target="_blank"><?php echo $data["faq"]["sub-lists"][4]["link-moredetails"]; ?></a><br>
                            <?php echo $data["faq"]["sub-lists"][4]["academicdetails"]; ?><a href="<?php echo $data["faq"]["sub-lists"][4]["academicdetailsurl"]; ?>" target="_blank"><?php echo $data["faq"]["sub-lists"][4]["link-academicdetails"]; ?></a>
                        </p>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][5]["ques"]; ?></h3>
                        <?php foreach ($data["faq"]["sub-lists"][5]['ans1'] as $ans): ?>
                            <p class="info__text"><?php echo $ans["line"]; ?></p>
                            <?php endforeach;?>
                            <p class="info__text"> But for full-proof safety we have <b>Anti Ragging Comitee(ARC).</b></p>
                            <p class="info__text"> <i class="fas fa-arrow-circle-right"></i>&nbsp;<b><?php echo $data["faq"]["sub-lists"][5]["ans1.5"]; ?></b></p>

                            <?php foreach ($data["faq"]["sub-lists"][5]['ans2'] as $ans): ?>
                            <p class="info__text" id="he-he"><?php echo $ans["line"]; ?></p>
                            <?php endforeach;?>
                            <p class="info__text"> <i class="fas fa-arrow-circle-right"></i>&nbsp;<b><?php echo $data["faq"]["sub-lists"][5]["ans2.5"]; ?></b></p>
                            
                            <?php foreach ($data["faq"]["sub-lists"][5]['ans3'] as $ans): ?>
                           <p class="info__text"><?php echo $ans["line"]; ?></p>
                        <?php endforeach;?>
                        <p class="info__text">For further details you may refer <a href="../public/pdfs/Anti_Ragging.pdf" target=blank>Anti-Ragging Laws</a> followed in our Institute!</p>
                           
                    </div>
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data["faq"]["sub-lists"][6]["ques"]; ?></h3>
                        <p class="info__text"><?php echo $data["faq"]["sub-lists"][6]["ans"]; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="comment">
                    <h2 class="heading-secondary">Have some more questions?</h2>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=211747799624268&autoLogAppEvents=1';
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-comments" data-href="https://polaris.iitbhilai.ac.in/queries.html" data-width="100%" data-order-by="reverse_time" data-numposts="25"></div>

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
