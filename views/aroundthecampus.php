<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/aroundthecampus.json';

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
        <?php require_once('partials/header.php'); ?>

        <header class="header header__around">
            <div class="container">
                <div class="header__hero-box">
                <h1 class="heading-primary"><?php echo $data['header']['head'];?></h1>
                <p class="heading-subtitle"><?php echo $data['header']['text'];?></p>
                </div>
            </div>
        </header>
        <section class="section">
            <div class="container">
                <h2 class="heading-secondary"><?php echo $data['campus_location']['heading'];?></h2>
                <iframe src=<?php echo $data['campus_location']['link']?> width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="around">
                    <h2 class="heading-secondary"><?php echo $data['introduction']['head1'];?><br><span><?php echo $data['introduction']['head2'];?></span></h2>
                    <h3 class="heading-tertiary"><?php echo $data['introduction']['campus'][0]['subheading'];?></h3>
                    <p class="around__text"><?php echo $data['introduction']['campus'][0]['text'];?></p>

                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th><?php echo $data['introduction']['campus'][0]['entry_points']['head'][0]['col']?></th>
                                <th><?php echo $data['introduction']['campus'][0]['entry_points']['head'][1]['col']?></th>
                                <th><?php echo $data['introduction']['campus'][0]['entry_points']['head'][2]['col']?></th>
                            </tr>
                            <?php foreach ($data['introduction']['campus'][0]['entry_points']['contents'] as $content): ?>
                                <tr>
                                    <td><?php echo $content['entry_points_to_durg'];?></td>
                                    <td><?php echo $content['distance'];?></td>
                                    <td><?php echo $content['estimated_time'];?></td>
                                </tr>
                                <?php endforeach; ?>
                                <br>

                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="transportation">
                    <h2 class="heading-secondary">Transportation</h2>
                    <p class="transportation__text"><?php echo $data['transportation']['text']?></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="">
                    <h2 class="heading-secondary"><?php echo $data['foodspots']['heading']; ?></h2>
                    <p class="foodspots__text"><?php echo $data['foodspots']['text']; ?></p>
                    <?php foreach ($data['foodspots']['lists'] as $content): ?>
                        <div class="row">
                            <div class="foodspots__box">
                            <div class="col-1-of-2">
                                <div class="heading-tertiary"><?php echo $content['title1']?></div>
                                <div class="foodspots__description"><?php echo $content['text1']?><br>See on <a href="<?php echo $content['link1'];?>" target="_blank">google maps &rarr;</a> </div>
                            </div>
                            
                            <div class="col-1-of-2">
                                <div class="heading-tertiary"><?php echo $content['title2']?></div>
                                <div class="foodspots__description"><?php echo $content['text2']?><br>See on <a href="<?php echo $content['link2'];?>" target="_blank">google maps &rarr;</a> </div>
                            </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <br>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="entertainment">
                    <h2 class="heading-secondary"><?php echo $data['hotels']['header']; ?></p>

                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th><?php echo $data['hotels']['table']['head'][0]['col']; ?></th>
                                <th><?php echo $data['hotels']['table']['head'][1]['col']; ?></th>
                                <th><?php echo $data['hotels']['table']['head'][2]['col']; ?></th>
                                <th><?php echo $data['hotels']['table']['head'][3]['col']; ?></th>
                                <th><?php echo $data['hotels']['table']['head'][4]['col']; ?></th>
                                <th><?php echo $data['hotels']['table']['head'][5]['col']; ?></th>
                            </tr>
                            <?php foreach ($data['hotels']['table']['contents'] as $content): ?>
                                <tr>
                                    <td><?php echo $content['Hotel Name']; ?></td>
                                    <td><?php echo $content['Address']; ?></td>
                                    <td><?php echo $content['Contact No.']; ?></td>
                                    <td><?php echo $content['Distance from Campus']; ?></td>
                                    <td><?php echo $content['Distance from Railway Station']; ?></td>
                                    <td><?php echo $content['Distance from Durg Bus Stand']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <br>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="entertainment">
                    <h2 class="heading-secondary"><?php echo $data['entertainment'][0]['head']; ?></h2>
                    <p class="entertainment__text"><?php echo $data['entertainment'][0]['text']; ?></p>

                    <div class="table">
                        <table class="table">
                            <tr>
                                <th><?php echo $data['entertainment'][0]['entertainment-hubs']['head'][0]['col']; ?></th>
                                <th><?php echo $data['entertainment'][0]['entertainment-hubs']['head'][1]['col']; ?></th>
                                <th><?php echo $data['entertainment'][0]['entertainment-hubs']['head'][2]['col']; ?></th>
                                <th><?php echo $data['entertainment'][0]['entertainment-hubs']['head'][3]['col']; ?></th>
                            </tr>
                            <?php foreach ($data['entertainment'][0]['entertainment-hubs']['contents'] as $content): ?>
                                <tr>
                                    <td><?php echo $content['entertainment_hubs']; ?></td>
                                    <td><?php echo $content['highlights']; ?></</td>
                                    <td><?php echo $content['distance_from_campus']; ?></</td>
                                    <td><a href="<?php echo $content['google_map']; ?>" target="_blank" >Click Here!</a></td>
                                </tr>
                            <?php endforeach; ?>
                            
                        </table>
                    </div>

                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="">
                    <h2 class="heading-secondary"><?php echo $data['dailyneeds']['heading']; ?></h2>
                    <p class="stores__text"><?php echo $data['dailyneeds']['text']; ?></p>
                    <?php foreach($data['dailyneeds']['stores'] as $content): ?>
                        <div class="row">
                            <div class="stores__box">
                            <div class="col-1-of-2">
                                <div class="heading-tertiary"><?php echo $content['title1']?></div>
                                <div class="stores__description"><?php echo $content['text1']?><br>See on <a href="<?php echo $content['link1'];?>" target="_blank">google maps &rarr;</a> </div>
                            </div>
                            
                            <div class="col-1-of-2">
                                <div class="heading-tertiary"><?php echo $content['title2']?></div>
                                <div class="stores__description"><?php echo $content['text2']?><br>See on <a href="<?php echo $content['link2'];?>" target="_blank">google maps &rarr;</a> </div>
                            </div>

                                

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="bank">
                    <h2 class="heading-secondary"><?php echo $data['bank_atm_postal']['heading']?></h2>
                    <ul class="bank__list">
                        <?php foreach($data['bank_atm_postal']['list'] as $content): ?>
                            <li class="bank__item"><i class="<?php echo $content['icon_class'];?>"></i>&nbsp; <?php echo $content['item']?></li>
                        <?php endforeach; ?>

                        
                    </ul>
                </div>
            </div>
        </section>

        <?php 
        require_once('partials/footer.php'); 
        ?>
</div>
    </body>

</html>
