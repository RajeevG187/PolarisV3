<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/mentors.json';

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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin  ="anonymous">

        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700"
        rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->

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
      <?php
      require_once('../views/partials/header.php');
      ?>

        <header class="header header__mentors">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['header']['heading']; ?></h1>
                    <p class="heading-subtitle"><?php echo $data['header']['subtitle']; ?></p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary"><?= $data['coordinators']['heading'] ?></h2>
            </div>
            <!-- Render faculty members 2 membered -->
            <?php foreach ($data['coordinators']['faculty-2-membered'] as $members): ?>
                <div class="row">
                    <div class="dev">
                        <?php foreach ($members as $member): ?>
                            <div class="col-1-of-2">
                                <figure class="dev__shape">
                                    <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="dev__img">
                                    <figcaption class="dev__caption"><?= $member['name'] ?></figcaption>
                                </figure>
                                <div class="dev__name"><strong><?= $member['name'] ?></strong><br><?= $member['title'] ?></div>
                                <a href="<?= $member['email'] ?>" class="dev__profile" target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <?php if (!empty($member['linkedin'])): ?>
                                    <a href="<?= $member['linkedin'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['instagram'])): ?>
                                    <a href="<?= $member['instagram'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['phone'])): ?>
                                    <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?= $member['phone'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>


            <!-- Render faculty members 3 membered -->
            <?php foreach ($data['coordinators']['faculty-3-membered'] as $members): ?>
                <div class="row">
                    <div class="dev">
                        <?php foreach ($members as $member): ?>
                            <div class="col-1-of-3">
                                <figure class="dev__shape">
                                    <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="dev__img">
                                    <figcaption class="dev__caption"><?= $member['name'] ?></figcaption>
                                </figure>
                                <div class="dev__name"><strong><?= $member['name'] ?></strong><br><?= $member['title'] ?></div>
                                <a href="<?= $member['email'] ?>" class="dev__profile" target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <?php if (!empty($member['linkedin'])): ?>
                                    <a href="<?= $member['linkedin'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['instagram'])): ?>
                                    <a href="<?= $member['instagram'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['phone'])): ?>
                                    <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?= $member['phone'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <!-- Render mentor coordinators -->
            <?php foreach ($data['coordinators']['mentor-coordinators'] as $members): ?>
                <div class="row">
                    <div class="dev">
                        <?php foreach ($members as $member): ?>
                            <div class="col-1-of-3">
                                <figure class="dev__shape">
                                    <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="dev__img">
                                    <figcaption class="dev__caption"><?= $member['name'] ?></figcaption>
                                </figure>
                                <div class="dev__name"><strong><?= $member['name'] ?></strong><br><?= $member['title'] ?></div>
                                <a href="<?= $member['email'] ?>" class="dev__profile" target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <?php if (!empty($member['linkedin'])): ?>
                                    <a href="<?= $member['linkedin'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['instagram'])): ?>
                                    <a href="<?= $member['instagram'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['phone'])): ?>
                                    <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?= $member['phone'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <!-- Render mentor coordinators two membered -->
            <?php foreach ($data['coordinators']['mentor-coordinators-two-membered'] as $members): ?>
                <div class="row">
                    <div class="dev">
                        <?php foreach ($members as $member): ?>
                            <div class="col-1-of-2">
                                <figure class="dev__shape">
                                    <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" class="dev__img">
                                    <figcaption class="dev__caption"><?= $member['name'] ?></figcaption>
                                </figure>
                                <div class="dev__name"><strong><?= $member['name'] ?></strong><br><?= $member['title'] ?></div>
                                <a href="<?= $member['email'] ?>" class="dev__profile" target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <?php if (!empty($member['linkedin'])): ?>
                                    <a href="<?= $member['linkedin'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['instagram'])): ?>
                                    <a href="<?= $member['instagram'] ?>" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($member['phone'])): ?>
                                    <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?= $member['phone'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary"><?= $data['mentors-ug']['heading'] ?></h2>
            </div>

            <!-- EDIT START HERE -->

            <!-- Render mentor groups with 4 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-ug']['members'] as $group) : ?>
                    <?php foreach ($group['members-4'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-4">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Render mentor groups with 3 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-ug']['members'] as $group) : ?>
                    <?php foreach ($group['members-3'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-3">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Render mentor groups with 2 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-ug']['members'] as $group) : ?>
                    <?php foreach ($group['members-2'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-2">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            

            <div class="container">
                <h2 class="heading-secondary"><?= $data['mentors-pg']['heading'] ?></h2>
            </div>
            <!-- Render mentor groups with 4 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-pg']['members'] as $group) : ?>
                    <?php foreach ($group['members-4'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-4">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Render mentor groups with 3 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-pg']['members'] as $group) : ?>
                    <?php foreach ($group['members-3'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-3">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Render mentor groups with 2 members per row -->
            <div class="row">
                <?php foreach ($data['mentors-pg']['members'] as $group) : ?>
                    <?php foreach ($group['members-2'] as $mentor_group) : ?>
                        <div class="dev">
                            <?php foreach ($mentor_group as $mentor) : ?>
                                <div class="col-1-of-2">
                                    <figure class="dev__shape">
                                        <img src="<?php echo $mentor['image']; ?>" alt="<?php echo $mentor['name']; ?>" class="dev__img">
                                        <figcaption class="dev__caption"><?php echo $mentor['name']; ?></figcaption>
                                    </figure>
                                    <div class="dev__name"><?php echo $mentor['name']; ?></div>
                                    <a href="mailto:<?php echo $mentor['email']; ?>" class="dev__profile" target="_blank">
                                        <i class="far fa-envelope dev__profile--icon"></i>
                                    </a>
                                    <?php if (!empty($mentor['linkedin'])) : ?>
                                        <a href="<?php echo $mentor['linkedin']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-linkedin dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['instagram'])) : ?>
                                        <a href="<?php echo $mentor['instagram']; ?>" class="dev__profile" target="_blank">
                                            <i class="fab fa-instagram dev__profile--icon"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($mentor['phone'])) : ?>
                                        <div class="dev__phone">
                                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $mentor['phone']; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </section>   

         <!--EDIT ENDS HERE -->

        <?php
        require_once('../views/partials/footer.php');
        ?>
        
    </body>

</html>
