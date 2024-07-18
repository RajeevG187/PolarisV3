<?php
// Define the path to the JSON file using absolute path
$jsonFilePath = __DIR__ . '/src/json/index.json';

// Check if the JSON file exists and is readable
if (!file_exists($jsonFilePath)) {
    die('Error: JSON file not found. Checked path: ' . $jsonFilePath);
}
if (!is_readable($jsonFilePath)) {
    die('Error: JSON file not readable. Checked path: ' . $jsonFilePath);
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

    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/style.css">

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
    <?php require_once('views/partials/header.php'); ?>

    <div id="myModal--1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Checklist for Freshers 2024</h2>
            </div>
            <div class="modal-body">
                <ul>
                    <li><strong>Important Notice:</strong> Reporting Instructions
                        <a href="public/pdfs/Instructions_2024-25-M.pdf" target="_blank" class="notification">Click Here!</a>
                    </li>

                    <?php if ($data['pdfLink']['check'] == 1): ?>
                        <li><strong>Important Notice</strong> Orientation Schedule
                        <a href="public/pdfs/Orientation_Schedule_2024-25-M.pdf" target="_blank" class="notification">Click Here!</a>
                        </li>
                    <?php else: ?>
                        <li><strong>Important Notice :</strong> Orientation Schedule <a class="notification">To Be Announced</a>
                    <?php endif; ?>
                        </li>

                    <li>Please see the <a href="../views/documents.php" class="notification" target="_blank"  >Documents</a> page for registration forms, fee structure, and updated loan details.<br>



                    <li>For any queries regarding IIT Bhilai and 2024-25 admissions please feel free to contact any of the <a href="../views/mentors.php" class="notification" target="_blank">Mentors.</a><br>

                </ul>
            </div>
        </div>

    </div>

    <div id="myModal--2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&nbsp;&nbsp;&nbsp;&nbsp; &times;</span>
                <span class="close" onclick="refresh_live_updates()">&#8635;</span>
                <h2>Live Updates</h2>
            </div>
            <div class="modal-body">
                <ul id="live_updates">
                    <li>Keep checking this page for live updates</li>
                    <li>Live Updates will be started from 22nd, 8 am</li>
                    <?php
                    $text = file_get_contents('https://docs.google.com/document/u/1/d/1RvDB_aho5oKb1-YuE_0JbTd_ApOmyXkLohNYjDJIyJQ/export?format=txt');

                    $lines = explode("\r\n", $text);

                    foreach ($lines as $one_line) {
                        echo "<li>$one_line</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>



    <header class="header header__home">
        <div class="container">
            <div class="header__hero-box">
            <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
            <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
            <?php if ($data['brochureLink']['check'] == 1): ?>
    <a href="../public/pdfs/brochure_2023.pdf" class="btn btn-download" download>
        Brochure 2024&nbsp; <i class="fas fa-download"></i>
    </a>
<?php else: ?>
    <span class="btn btn-download" style="pointer-events: none; cursor: not-allowed;">
        Brochure 2024-Available Soon!&nbsp; <i class="fas fa-download"></i>
    </span>
<?php endif; ?>
<br />
                <!-- <a href="javascript:void(0);" class="btn btn-download">Brochure 2023 will be uploaded soon.&nbsp; <i class="fas fa-download"></i></a><br/> -->
                <!-- <a href="#" class="btn btn-live" id="modalBtn">Live Updates &nbsp; <i class="fas fa-sync"></i></a> -->
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="introduction">
                <h3 class="heading-secondary">Latest Updates on Website</h3>
                <p id="blink" style="color:blue;"> 
                <?php if ($data['registrationScheduleDownload']['check'] == 1): ?>
                <a href="public/pdfs/Orientation_Schedule_2024-25-M.pdf" target="_blank" class="notification">
                Orientation Schedule is uploaded.Click Here to download
                </a>
                <?php else: ?>
                    <span class="notification" style="pointer-events: none; cursor: not-allowed;" title="To be announced">
                    Orientation Schedule to be Announced
                    </span>
                <?php endif; ?>
                </p>
                <p id="blink" style="color:blue;">Important Instructions regarding reporting for freshers <a href="public/pdfs/Instructions_2024-25-M.pdf" target=blank>Click Here</a>!</p>
                <p id="blink" style="color:blue;">Hotels near Campus in Durg are uploaded. Kindly visit <a href="../views/aroundthecampus.php" target=blank>Around the campus</a> page for more info.</p>
                <p id="blink" style="color:blue;">Some announcements for Freshers below in this page.</p>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var blink =
            document.getElementById('blink');

        setInterval(function() {
            blink.style.opacity =
                (blink.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>

    <div class="line-break"></div>
    <section class="section">
            <div class="container">
                <div class="introduction">
                    <h2 class="heading-secondary">Announcements</h2>
                    <ul class="info__list">
                            <li class="info__item">All the new students who will be admitted to IIT Bhilai in 2024-25 year are required to report to permanent campus of IIT Bhilai for admission.
                            </li>
                    </ul>
                    <p class="introduction__text"> Please keep visting the website for more updates.</p>
                </div>
            </div>
        </section>
    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <div class="introduction">
                <h2 class="heading-secondary">Welcome to <br><span><?php echo $data['introduction']['head']; ?></span></h2>
                <p class="introduction__text"><?php echo $data['introduction']['text']; ?></p>
            </div>
        </div>
    </section>

    <div class="line-break"></div>

    <section class="section">
    <div class="container">
        <h2 class="heading-secondary"><?php echo $data['smp']['head']; ?></h2>
        
        <?php foreach ($data['smp']['sub-lists'] as $sublist): ?>
            <div class="info">
                <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> <?php echo $sublist['title']; ?></h3>
                <p class="info__text"><?php echo $sublist['text']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>


    <div class="line-break"></div>

    <section class="section">
    <div class="container">
        <div class="message">
            <h2 class="heading-secondary">Message from <br><span><?php echo $data['cosa']['head']; ?></span></h2>
            <div class="information__box">
                <div>
                    <p class="info__text"><span><?php echo $data['cosa']['text']; ?></span></p><br>
                    <p class="message__byline">With best wishes,<br><?php echo $data['cosa']['president']['name']; ?></p>
                </div>
            
                <!-- removed class row from here -->
                <div>     
                    <div class="dev">
                        <div class="col-1-of-4">
                            <figure class="dev__shape">
                                <img src="../public/<?php echo $data['cosa']['president']['image']; ?>" alt="<?php echo $data['cosa']['president']['name']; ?>" class="dev__img dev__img--president">
                                    <figcaption class="dev__caption"><?php echo $data['cosa']['president']['name']; ?></figcaption>
                            </figure>
                            <div class="dev__name"><?php echo $data['cosa']['president']['name']; ?><br>President, CoSA</div>

                                <a href="<?php echo $data['cosa']['president']['email']; ?>" class="dev__profile" target="_blank">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>  
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary">
                <?php echo $data['campustour']['head']; ?></h2>
        </div>
        <div class="row">
            <?php foreach ($data['campustour']["youtube-links"] as $link): ?>
            <div class="col-1-of-2">
                <div class="campus">
                    <iframe width="560" height="315" src=<?php echo $link['link']; ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="line-break"></div>



    <section class="section">
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data["collage"]["head"]; ?></h2>
            <div class="collage">
                <div class="collage_image image">
                    <img src=<?php echo $data["collage"]["images"][0]["img"]; ?> alt="error">
                </div>
                <div class="collage__vStretch collage_image image">
                    <img src=<?php echo $data["collage"]["images"][1]["img"]; ?> alt="error">
                </div>
                <div class="collage__hStretch collage_image image">
                    <img src=<?php echo $data["collage"]["images"][2]["img"]; ?> alt="error">
                </div>
                <div class="collage_image image">
                    <img src=<?php echo $data["collage"]["images"][3]["img"]; ?> alt="error">
                </div>
                <div class="collage_image image">
                    <img src=<?php echo $data["collage"]["images"][4]["img"]; ?> alt="error">
                </div>
                <div class="collage__vStretch collage_image image">
                    <img src=<?php echo $data["collage"]["images"][5]["img"]; ?> alt="error">
                </div>
                <div class="collage__bigStretch collage_image image">
                    <img src=<?php echo $data["collage"]["images"][6]["img"]; ?> alt="error">
                </div>
                <div class="collage_image image">
                    <img src=<?php echo $data["collage"]["images"][7]["img"]; ?> alt="error">
                </div>
                <div class="collage_image image">
                    <img src=<?php echo $data["collage"]["images"][8]["img"]; ?> alt="error">
                </div>
            </div>

        </div>

    </section>
    <div class="pop-up">
        <span>&times;</span>
        <img src="../public/images/collage/n1.jpg" alt="error">
    </div>

    <div class="line-break"></div>

    <section class="section">
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data["gallery"]["head"]; ?></h2>
            <div class="gallery">
                <div class="siema">
                    <?php foreach($data["gallery"]["images"] as $image): ?>

                    <img src=<?php echo $image["url"]?> alt=<?php echo $image["alt"]?> />

                    <?php endforeach; ?>
                    
                </div>
                <div class="btn-siema">
                    <div class="btn-prev prev"><i class="fas fa-chevron-circle-left"></i></div>
                    <div class="btn-next next"><i class="fas fa-chevron-circle-right"></i></div>
                    <p class="warn">Best viewed in Desktops!</p>
                </div>
            </div>
        </div>
    </section>


    <div class="line-break"></div>


    <section class="section">
        <div class="container">
            <h2 class="heading-secondary"><?php echo $data["developers"]["head"]; ?></h2>
        </div>
        <?php foreach($data["developers"]["members"] as $members): ?>

            <?php for($i =0; $i < count($members["members-4"]); $i++): ?>

                <div class="row">
                    <div class="dev">

                        <?php foreach($members["members-4"][$i] as $member): ?>
                            <div class="col-1-of-4">
                                    <figure class="dev__shape">
                                        <img src=<?php echo $member["image"]; ?> alt=<?php echo $member["name"]; ?> class="dev__img">
                                        <figcaption     class="dev__caption"><?php echo $member["name"]; ?></figcaption>
                                    </figure>
                                    <div    class="dev__name"><strong><?php echo $member["name"]; ?></strong><br /><?php echo $member["title"]; ?></div>
                                    <a  href=<?php echo $member["email"]; ?> class="dev__profile" target="_blank">
                                        <i class="far fa-envelope   dev__profile--icon"></i>
                                    </a>

                                    <?php if($member["instagram"]!=""): ?>
                                        <a href=<?php echo $member["instagram"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["linkedIn"]!=""): ?>
                                        <a href=<?php echo $member["linkedIn"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["phone"]!=""): ?>
                                        <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $member["phone"]; ?>
                                    </div>
                                    <?php endif;?>
                                    
                            </div>                          

                        <?php endforeach;?>

                    </div>
                </div>

            <?php endfor;?>            
            <?php for($i =0; $i < count($members["members-3"]); $i++): ?>

                <div class="row">
                    <div class="dev">

                        <?php foreach($members["members-3"][$i] as $member): ?>
                            <div class="col-1-of-3">
                                    <figure class="dev__shape">
                                        <img src=<?php echo $member["image"]; ?> alt=<?php echo $member["name"]; ?> class="dev__img">
                                        <figcaption     class="dev__caption"><?php echo $member["name"]; ?></figcaption>
                                    </figure>
                                    <div    class="dev__name"><strong><?php echo $member["name"]; ?></strong><br /><?php echo $member["title"]; ?></div>
                                    <a  href=<?php echo $member["email"]; ?> class="dev__profile" target="_blank">
                                        <i class="far fa-envelope   dev__profile--icon"></i>
                                    </a>

                                    <?php if($member["instagram"]!=""): ?>
                                        <a href=<?php echo $member["instagram"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["linkedIn"]!=""): ?>
                                        <a href=<?php echo $member["linkedIn"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["phone"]!=""): ?>
                                        <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $member["phone"]; ?>
                                    </div>
                                    <?php endif;?>
                                    
                            </div>                          

                        <?php endforeach;?>

                    </div>
                </div>

            <?php endfor;?>
            <?php for($i =0; $i < count($members["members-2"]); $i++): ?>

                <div class="row">
                    <div class="dev">

                        <?php foreach($members["members-2"][$i] as $member): ?>
                            <div class="col-1-of-2">
                                    <figure class="dev__shape">
                                        <img src=<?php echo $member["image"]; ?> alt=<?php echo $member["name"]; ?> class="dev__img">
                                        <figcaption     class="dev__caption"><?php echo $member["name"]; ?></figcaption>
                                    </figure>
                                    <div    class="dev__name"><strong><?php echo $member["name"]; ?></strong><br /><?php echo $member["title"]; ?></div>
                                    <a  href=<?php echo $member["email"]; ?> class="dev__profile" target="_blank">
                                        <i class="far fa-envelope   dev__profile--icon"></i>
                                    </a>

                                    <?php if($member["instagram"]!=""): ?>
                                        <a href=<?php echo $member["instagram"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-instagram dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["linkedIn"]!=""): ?>
                                        <a href=<?php echo $member["linkedIn"]; ?> target="_blank" class="dev__profile" target="_blank">
                                        <i class="fab fa-linkedin-in dev__profile--icon"></i>
                                    </a>
                                    <?php endif;?>
                                    <?php if($member["phone"]!=""): ?>
                                        <div class="dev__phone">
                                        <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; <?php echo $member["phone"]; ?>
                                    </div>
                                    <?php endif;?>
                                    
                            </div>                          

                        <?php endforeach;?>

                    </div>
                </div>

            <?php endfor;?>

        <?php endforeach;?>

    </section>

    <?php require_once('views/partials/footer.php'); ?>
    <script src="public/js/siema.min.js"></script>
    <script>
        const mySiema = new Siema({
            duration: 600,
            easing: 'ease-out',
            loop: true
        });

        document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
        document.querySelector('.next').addEventListener('click', () => mySiema.next());

        //Modal for Live updates
        var live = document.getElementById('myModal--2');
        //var btn = document.getElementById("modalBtn");
        var span = document.getElementsByClassName("close")[1];
        // btn.onclick = function() {
        //     live.style.display = "block";
        // }
        span.onclick = function() {
            live.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == live) {
                live.style.display = "none";
            }
        }

        //Modal for Checklist
        $(window).load(function() {
            $('.page-loader').fadeOut();
            var modal = document.getElementById('myModal--1');
            var span = document.getElementsByClassName("close")[0];
            setTimeout(function() {
                modal.style.display = "block";
            }, 2000)
            span.onclick = function() {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });

        document.querySelectorAll('.collage_image img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.pop-up').style.display = 'block';
                document.querySelector('.pop-up img').src = image.getAttribute('src');
            }
        });
        document.querySelector('.pop-up span').onclick = () => {
            document.querySelector('.pop-up').style.display = 'none';
        }
    </script>

</div>
</body>

</html>