<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/academics.json';

// Check if the JSON file exists and is readable
if (!file_exists($jsonFilePath) || !is_readable($jsonFilePath)) {
    die('Error: JSON file not found or not readable.');
}
//
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
        <header class="header header__academic">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['heading']['head']; ?></h1>
                    <p class="heading-subtitle"><?php echo $data['heading']['text']; ?></p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="intro">
                    <h2 class="heading-secondary"><?php echo $data['intro']['head']; ?></h2>

                    <?php foreach ($data['intro']['text'] as $text): ?>
                        <p class="intro__text"><?php echo $text['para']; ?></p>
                    <?php endforeach; ?>
                <br>
                <div class="info">
                        <h3 class="heading-tertiary"><?php echo $data['branch_change']['head'];?></h3>
                        <p class="info__text"><br><?php echo $data['branch_change']['text'];?></p>
                        <ol class="info__list">
                            <?php foreach ($data['branch_change']['conditions'] as $conditions):?>
                                <li class="info__item"><?php echo $conditions['points'];?></li>
                            <?php endforeach;?>
                        </ol>
                        <p class="info__text"><?php echo $data['branch_change']['note']; ?></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="common">
                    <h2 class="heading-secondary"><?php echo $data['courses']['head']; ?></h2>
                    <p class="common__text"><?php echo $data['courses']['text']; ?></p>
                </div>

                <br>

                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['courses']['first_sem']['head']; ?></h3>
                    <ul class="info__list">
                        <?php foreach ($data['courses']['first_sem']['sub-lists'] as $sublists):?>
                            <li class="info__item"><?php echo $sublists['title']; ?></li>
                        <?php endforeach;?>    
                    </ul>
                </div>

                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['courses']['second_sem']['head']; ?></h3>
                    <ul class="info__list">
                    <?php foreach ($data['courses']['second_sem']['sub-lists'] as $sublists):?>
                            <li class="info__item"><?php echo $sublists['title']; ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>

            </div>
        </section>  


        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="grade">
                    <h2 class="heading-secondary"><?php echo $data['grading']['head']; ?></h2>
                    <p class="grade__text"><?php echo $data['grading']['text']; ?></p>

                    <p class="grade__text"><em><?php echo $data['grading']['sub_text']; ?></em></p>
                </div>

                <div class="table">
                    <table class="table grade__table">
                        <tr>
                            <th><?php echo $data['table']['head']['col-1']; ?></th>
                            <th><?php echo $data['table']['head']['col-2']; ?></th>
                        </tr>
                        <?php foreach ($data['table']['contents'] as $contents):?>
                            <tr>
                            <td><?php echo $contents['grade']; ?></td>
                            <td><?php echo $contents['points']; ?></td>
                        </tr>
                        <?php endforeach; ?>    
                    </table>
                </div>
            </div>
        </section>
<?php
require_once('partials/footer.php');
?>
</div>
    </body>

</html>
