<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/academics.json';

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

        <!-- <section class="section">
            <div class="container">
                <div class="fractal">
                    <h2 class="heading-secondary">Fractal Academics</h2>
                    <p class="fractal__text">Before we dive right into the departmental subjects offered lets first talk about the common subjects that are taught to all the streams. Since you will be studying in the Fractal system, a drastically different system compared to the existing systems in place at the other IIT’s which follow mostly the traditional system; you will be introduced to the core subjects from the very first semester. The common subjects that we study are slightly different from what is taught elsewhere and is slightly more industry inclined. With that we begin the list of subjects.</p>

                    <br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> What is Fractal System?</h3>
                        <p class="info__text">IIT Bhilai has adopted a very innovative academic structure (courtesy IIT Hyderabad), referred to as Fractal Academics which is the first step in creating an experiential learning ambience.</p>
                        <ul class="info__list">
                            <li class="info__item">At the centre of Fractal Academics is the concept of <strong>T-education</strong> &mdash; Breadth and Depth.</li>
                            <li class="info__item">Under ‘T’ education, we have classified the courses that require width and length for training separately.</li>
                            <li class="info__item">Subsequently, each subject is fractalised (divided) into various segments with 1 or 2 credits.</li>
                            <li class="info__item">Breadth courses are basic building block for the depth courses.</li>
                            <li class="info__item">The fundamental idea is to atomize the credits to enable the students to get breadth in a large number of courses and depth in the courses of your choice.</li>
                            <li class="info__item">Initial emphasis is on breadth courses (first four semesters) and then on depth.</li>
                            <li class="info__item">Breadth courses are typically of 1 credit. There are plenty of such courses to help build a broad perspective. Introductory core courses provide students a window into further important topics.</li>
                            <li class="info__item">Depth courses are built on the foundation set by the breadth courses and are of 2 credits or more. For e.g., courses in the first semester are intended to provide a glimpse of all the core areas in EE viz., control systems, communication and signal processing, microelectronics and power electronics.</li>
                            <li class="info__item">In-depth coverage of core topics is offered in the depth courses.</li>
                            <li class="info__item">Often students build products/prototypes – bridging gulf between theory and practice.</li>
                            <li class="info__item">A balance is sought between technical and non-technical courses to reduce stress in students.</li>
                            <li class="info__item">There are numerous liberal arts/creative arts courses too depending upon student’s choice. (These include 1 credit courses related to Economics, Arts, Performing Arts, Management etc.)</li>
                        </ul>
                    </div>

                    <br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Why Fractal System?</h3>

                        <ul class="info__list">
                            <li class="info__item">Better access to a wide variety of courses increases exposure and preparedness for research. This fosters undergraduate R&amp;D.</li>
                            <li class="info__item">Faculty is more of a mentor than a lecturer.</li>
                            <li class="info__item">Fractal academics enable a lot more flexibility in the academic program.</li>
                            <li class="info__item">There are departmental core courses in the very first semester and this creates an excitement to pursue research, develop new technologies and possibly be entrepreneurs.</li>
                            <li class="info__item">The breadth courses help students make an informed decision on their specialization choices.</li>
                            <li class="info__item">Students get exposure to basic tools early. Here: MatLab, SolidEdge, GNU Octave, Arduino Genuino and many more.</li>
                        </ul>
                    </div>

                    <br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Some Pointers to Maximize the benefits of Fractal System</h3>

                        <ul class="info__list">
                            <li class="info__item">The design of the system itself reduces the course burden, hence giving you ample amount of time to explore the topic.</li>
                            <li class="info__item">Observe what intrigues you, which topic catches your fancy and start working on it. In a straight forward fashion: Discover your passion.</li>
                            <li class="info__item">Many courses will be hands on (significant duration of course will be in labs or on computers), hence there will be ample opportunities to pick up practical skills which actually matter in the industry.</li>
                            <li class="info__item">The flexibility of courses will also give you more than enough time to pursue some non-academic interests also like music, sports, arts etc. We recommend you all to pick up at least one of them. After all, "Break toh banta hai Boss"</li>
                            <li class="info__item">A balance is sought between technical and non-technical courses to reduce stress in students.</li>
                            <li class="info__item"> With increased flexibility, creeps in lethargy. It is always better to be alert and spend some time with each subject taught to avoid unwanted outcomes. (You know what we mean :&dash;P )</li>
                        </ul>
                    </div>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Branch Change</h3>

                        <p class="info__text">The curriculum allows you to apply for a branch change after the First-Semester. Exact conditions and qualification for the same will be provided by the Academic department of the institute.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div> -->

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

                <div class="table__scroll">
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
