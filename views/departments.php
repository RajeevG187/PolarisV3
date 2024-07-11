<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/departments.json';

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

        <!--link rel="stylesheet" href="../public/css/animate.css"-->
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

        <header class="header header__department">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['heading']['head'];?></h1>
                    <p class="heading-subtitle"><?php echo $data['heading']['text'];?></p>
                </div>
            </div>
        </header>

        <!-- <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of CSE</h2> -->
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focused on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Computer Science and Engineering</b> (Programs offered : BTech , MTech , PhD)</li>
                            <li class="info__item"><b>Data Science and Artificial Intelligence</b> (Programs offered : BTech , MTech , PhD)</li>

                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of CSE</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)</td>
                            <td>Computer Science and Engineering </td>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)</td>
                            <td>Data Science and Artificial Intelligence</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Computer Science and Engineering </td>
                        </tr>

                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Data Science and Artificial Intelligence</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Computer Science and Engineering </td>
                        </tr>

                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Data Science and Artificial Intelligence</td>
                        </tr>
                    </table>
                </div> -->

                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>
        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of ECE</h2> -->
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focussed on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of ECE</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Electronics and Communication Engineering</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Electronics and Communication Engineering</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Electronics and Communication Engineering</b> (Programs offered : MTech , PhD)</li>
                        </ul>
                    </div> -->

                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>
        
        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of EE</h2> -->
                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Electrical Engineering</b> (Programs offered : BTech , PhD)</li>
                            <li class="info__item"><b>Mechatronics Engineering</b> (Programs offered : BTech , MTech , PhD)</li>
                            <li class="info__item"><b>Control and Instrumentation</b> (Programs offered : MTech)</li>
                            <li class="info__item"><b>Power Systems and Power Electronics</b> (Programs offered : MTech)</li>
                            <li class="info__item"><b>Electric Vehicle Technology</b> (Programs offered : MTech , PhD)</li>

                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of EE</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)</td>
                            <td>Eletrical Engineering </td>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)<br>(Offered jointly with ME Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)<br>(Offered jointly with ME Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Control and Instrumentation</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Power Systems and Power Electronics</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Electric Vehicle Technology</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Electrical Engineering </td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)<br>(Offered jointly with ME Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                    </table>
                </div> -->

                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>
        
        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of ME</h2> -->
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focussed on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Mechanical Engineering</b> (Programs offered : BTech , PhD)</li>
                            <li class="info__item"><b>Mechatronics Engineering</b> (Programs offered : BTech , MTech , PhD)</li>
                            <li class="info__item"><b>Design and Manufacturing</b> (Programs offered : MTech)</li>
                            <li class="info__item"><b>Thermal and Fluids Engineering</b> (Programs offered : MTech)</li>
                            <li class="info__item"><b>Electric Vehicle Technology</b> (Programs offered : MTech , PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of ME</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)</td>
                            <td>Mechanical Engineering </td>
                        </tr>
                        <tr>
                            <td>Bachelor of Technology (BTech)<br>(Offered jointly with EE Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)<br>(Offered jointly with EE Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Design and Manufacturing</td>
                        </tr>

                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Thermal and Fluids Engineering</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Mechanical Engineering </td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)<br>(Offered jointly with EE Department)</td>
                            <td>Mechatronics Engineering</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>

        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of MSME</h2> -->
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focussed on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Materials Science and Metallurgical Engineering</b> (Programs offered : BTech , PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of MSME</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>

                        <tr>
                            <td>Bachelor of Technology (BTech)</td>
                            <td>Materials Science and Metallurgical Engineering</td>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Materials Science and Metallurgical Engineering</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Materials Science and Metallurgical Engineering</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>
        
        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of BSBME</h2> -->
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focussed on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Bioengineering</b> (Programs offered : MTech)</li>
                            <li class="info__item"><b>Bioscience and Biomedical Engineering</b> (Programs offered : PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of BSBME</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Master of Technology (MTech)</td>
                            <td>Bioengineering </td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Bioscience and Biomedical Engineering</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>
        
        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of Chemistry</h2>
                    <p class="intro-cse__text">The department is committed to engage in high quality research and pursuit of excellence in teaching. Two years M.Sc. programme and a Ph.D programme is offered in Chemistry. Major thrust is in the areas of inorganic and organometallic chemistry, polymer chemistry, halide perovskite solar-cells, bionanotechnology, photoactive metal-organic hybrid materials, theoretical and computational chemistry, total synthesis and antibiotics, molecular dynamics simulations and bioinformatics.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Chemistry</b> (Programs offered : MSc , PhD)</li>
                            <li class="info__item"><b>Electric Vehicle Technology</b> (Programs offered : MTech , PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of Chemistry</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Master of Science (MSc)</td>
                            <td>Chemistry</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Chemistry</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of Mathematics</h2>
                    <p class="intro-cse__text">The vision of the department is to become a centre of excellence in Mathematics through high quality research and teaching. The department of Mathematics has started to offer a 2-year Master of Science (M.Sc.) programme in the discipline of Mathematics and Computing. The department offers PhD programs in various research areas of Mathematics.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Mathematics and Computing</b> (Programs offered : MSc)</li>
                            <li class="info__item"><b>Mathematics</b> (Programs offered : PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of Mathematics</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Master of Science (MSc)</td>
                            <td>Mathematics and Computing</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Mathematics</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of Physics</h2>
                    <p class="intro-cse__text">The department is committed to engage in high quality research and pursuit of excellence in teaching. The faculty members of the department are actively involved in research and development in frontier areas of both pure and applied Physics, and interdisciplinary areas of science & technology. The department strives to train its students to become skilled and motivated physicists. PhD program is offered in High Energy Physics and experimental Condensed Matter Physics.</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Physics</b> (Programs offered : MSc , PhD)</li>
                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of Physics</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Master of Science (MSc)</td>
                            <td>Physics</td>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Physics</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary">Department of Liberal Arts</h2>
                    <p class="intro-cse__text">IIT Bhilai offers only PhD programs in Liberal Arts. The department of Liberal Arts at IIT Bhilai is a centre for the study of applied areas of Liberal Arts including but not limiting to Cultural Studies, Ethics, Economics, and Literature.
The curriculum of the department encourages exploration across disciplines, while providing a central academic experience for students. Diverse range of subjects help students to question critically and think broadly, exploring the history of ideas and methodologies across the humanities and the arts. The department offers a bouquet of interesting and creative undergraduate courses.
</p><br> -->

                    <!-- <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Disciplines</h3>

                        <ul class="info__list">
                            <li class="info__item"><b>Liberal Arts</b> (Programs offered : PhD)</li>

                        </ul>
                    </div> -->
                    <!-- <h3 class="heading-tertiary">Program offered by Department of Liberal Arts</h3>
                    <div class="table__scroll">
                    <table class="table grade__table">
                        <tr>
                            <th>Programs offered</th>
                            <th>Offered in</th>
                        </tr>
                        <tr>
                            <td>Doctor of Philosophy (PhD)</td>
                            <td>Liberal Arts</td>
                        </tr>
                    </table>
                </div> -->
                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                <!-- </div>
            </div>
        </section> -->

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['departments']['head'];?></h2>
                    <p class="intro-cse__text"><?php echo $data['departments']['text'];?></p><br>
                    <div class="info">
                        <ul class="info__list">
                            <?php foreach ($data['departments']['sub-lists'] as $subList): ?>
                                <li class="info__item"><?php echo $subList['contents']; ?></li>
                                <?php endforeach; ?>
                                <br>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['disciplines']['head'];?></h2>
                    <p class="intro-cse__text"><?php echo $data['disciplines']['text'];?></p><br>
                    <div>
                        <table class="table grade__table">
                            <tr>
                                <th><?php echo $data['disciplines']['table']['head']['col-1'];?></th>
                                <th><?php echo $data['disciplines']['table']['head']['col-2'];?></th>
                                <th><?php echo $data['disciplines']['table']['head']['col-3'];?></th>
                            </tr>
                            <?php foreach ($data['disciplines']['table']['contents'] as $content): ?>
                                <tr>
                                    <td><?php echo $content['discipline']; ?></td>
                                    <td><?php echo $content['department']; ?></td>
                                    <td><?php echo $content['code']; ?></td>
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
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['programs']['head']; ?></h2>
                    <p class="intro-cse__text"><?php echo $data['programs']['text']; ?></p><br>
                    <div>
                        <table class="table grade__table">
                            <tr>
                                <?php foreach ($data['programs']['table']['head'] as $contents): ?>
                                <th><?php echo $contents['contents']; ?></th>
                                <?php endforeach; ?>
                                <br>
                            </tr>
                            <tr>
                                <td rowspan="7">Bachelor of Technology (BTech)</td>
                                <td>Computer Science and Engineering</td>
                                <td rowspan="2">Computer Science and Engineering</td>
                            </tr>
                            <tr>
                                <td>Data Science and Artificial Intelligence</td>
                            </tr>
                            <tr>
                                <td>Electronics & Communication Engineering</td>
                                <td>Electronics & Communication Engineering</td>
                            </tr>
                            <tr>
                                <td>Electrical Engineering</td>
                                <td>Electrical Engineering</td>
                            </tr>
                            <tr>
                                <td>Materials Science and Metallurgical Engineering</td>
                                <td>Materials Science and Metallurgical Engineering</td>
                            </tr>
                            <tr>
                                <td>Mechanical Engineering</td>
                                <td>Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td>Mechatronics Engineering</td>
                                <td>Jointly by Electrical Engineering and Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td rowspan="3">Master of Science (MSc)</td>
                                <td>Chemistry</td>
                                <td>Chemistry</td>
                            </tr>
                            <tr>
                                <td>Mathematics and computing</td>
                                <td>Mathematics</td>
                            </tr>
                            <tr>
                                <td>Physics</td>
                                <td>Physics</td>
                            </tr>
                            <tr>
                                <td rowspan="11">Master of Technology (MTech)</td>
                                <td>Bioengineering</td>
                                <td>Bioscience and Biomedical Engineering</td>
                            </tr>
                            <tr>
                                <td>Computer Science and Engineering</td>
                                <td rowspan="2">Computer Science and Engineering</td>
                            </tr>
                            <tr>
                                <td>Data Science and Artificial Intelligence</td>
                            </tr>
                            <tr>
                                <td>Electronics & Communication Engineering</td>
                                <td>Electronics & Communication Engineering</td>
                            </tr>
                            <tr>
                                <td>Control and Instrumentation</td>
                                <td rowspan="3">Electrical Engineering</td>
                            </tr>
                            <tr>
                                <td>Power Systems and Power Electronics</td>
                            </tr>
                            <tr>
                                <td>Electric Vehicle Technology</td>
                            </tr>
                            <tr>
                                <td>Materials Science and Metallurgical Engineering</td>
                                <td>Materials Science and Metallurgical Engineering</td>
                            </tr>
                            <tr>
                                <td>Design and Manufacturing</td>
                                <td rowspan="2">Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td>Thermal and Fluids Engineering</td>
                            </tr>
                            <tr>
                                <td>Mechatronics Engineering</td>
                                <td>Jointly by Electrical Engineering and Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td rowspan="13">Doctor of Philosophy (PhD)</td>
                                <td>Bioscience and Biomedical Engineering</td>
                                <td>Bioscience and Biomedical Engineering</td>
                            </tr>
                            <tr>
                                <td>Chemistry</td>
                                <td>Chemistry</td>
                            </tr>
                            <tr>
                                <td>Computer Science and Engineering</td>
                                <td rowspan="2">Computer Science and Engineering</td>
                            </tr>
                            <tr>
                                <td>Data Science and Artificial Intelligence</td>
                            </tr>
                            <tr>
                                <td>Electrical Engineering</td>
                                <td rowspan="2">Electrical Engineering</td>
                            </tr>
                            <tr>
                                <td>Electric Vehicle Technology</td>
                            </tr>
                            <tr>
                                <td>Electronics & Communication Engineering</td>
                                <td>Electronics & Communication Engineering</td>
                            </tr>
                            <tr>
                                <td>Liberal Arts</td>
                                <td>Liberal Arts</td>
                            </tr>
                            <tr>
                                <td>Materials Science and Metallurgical Engineering</td>
                                <td>Materials Science and Metallurgical Engineering</td>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td>Mathematics</td>
                            </tr>
                            <tr>
                                <td>Mechanical Engineering</td>
                                <td>Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td>Mechatronics Engineering</td>
                                <td>Jointly by Electrical Engineering and Mechanical Engineering</td>
                            </tr>
                            <tr>
                                <td>Physics</td>
                                <td>Physics</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['more_info']['head']; ?></h2>
                    <!-- <p class="intro-cse__text">The first thing which pops up when you think of CSE is programming. Given that coding is an integral part of Computer Science, it is not the only part. As the name suggests, one learns both the science behind the computers and the engineering aspects of the field. CSE at IIT Bhilai is focussed on providing the students with a perfect blend of both – research and industrial facet of the computing world.</p><br> -->

                    <div class="info">
                        <!-- <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i>  <a href="https://www.iitbhilai.ac.in/index.php?pid=aca_handbook_pdf">Student's Handbook</a></h3> -->
                        <!-- <h3 class="heading-tertiary"><p style="color:red"><i class="far fa-dot-circle"></i> <?php echo $data['more_info']['point_1']; ?></p></h3> -->
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i>  <a href="https://www.iitbhilai.ac.in/index.php?pid=new_schedule_programs" target="_blank"><?php echo $data['more_info']['point_2']; ?></a></h3>


                    </div>

                    <!-- <p class="intro-cse__text"><em>* The tips are in no sense a pre-requisite for any of the courses you take during your semesters. They are just a set of pointers to get you in the right direction without having to fumble over a plethora of resources.</em></p> -->
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['cse']['head']; ?></h2>
                    <p class="intro-cse__text"><?php echo $data['cse']['text']; ?></p><br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['cse']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <?php foreach ($data['cse']['info']['sub-lists'] as $subList): ?>
                                <li class="info__item"><?php echo $subList['contents']; ?></li>
                            <?php endforeach; ?>
                            <br>
                        </ul>
                    </div>

                    <p class="intro-cse__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['dsai']['head']; ?></h2>
                    <p class="intro-cse__text"><?php echo $data['dsai']['text']; ?></p><br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['dsai']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <?php foreach ($data['dsai']['info']['sub-lists'] as $subList): ?>
                                <li class="info__item"><?php echo $subList['contents']; ?></li>
                            <?php endforeach; ?>
                            <br>
                        </ul>
                    </div>

                    <p class="intro-cse__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-cse">
                    <h2 class="heading-secondary"><?php echo $data['ece']['head']; ?></h2>
                    <p class="intro-cse__text"><?php echo $data['ece']['text']; ?></p><br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['ece']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <?php foreach ($data['ece']['info']['sub-lists'] as $subList): ?>
                                <li class="info__item"><?php echo $subList['contents']; ?></li>
                            <?php endforeach; ?>
                            <br>
                        </ul>
                    </div>

                    <p class="intro-cse__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-ee">
                    <h2 class="heading-secondary"><?php echo $data['ee']['head']; ?></h2>
                    <p class="intro-ee__text"><?php echo $data['ee']['text']['para-1']; ?></p><br>

                    <p class="intro-ee__text"><?php echo $data['ee']['text']['para-2']; ?></p><br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['ee']['info']['head']; ?></h3>

                        <ul class="info__list">
                        <?php $counter = 0;foreach ($data['ee']['info']['list']['part-1'] as $item): $counter++;?>
                                <li class="info__item"><?php echo $item['contents'] ?></li>
                                <?php if ($counter == 3): ?>
                                    <li class="info__item"><?php echo $data['ee']['info']['list']['part-2']['head'] ?>
                                        <ul class="info__list">
                                            <?php foreach ($data['ee']['info']['list']['part-2']['sub-lists'] as $subItem): ?>
                                                <li class="info__item"><?php echo $subItem['contents'] ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif;?>
                                <?php if ($counter == 4): ?>
                                    <li class="info__item"><?php echo $data['ee']['info']['list']['part-3']['head'] ?>
                                        <ul class="info__list">
                                            <?php foreach ($data['ee']['info']['list']['part-3']['sub-lists'] as $subItem): ?>
                                                <li class="info__item"><?php echo $subItem['contents'] ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif;?>
                            <?php endforeach; ?>
                            <br>
                            </ul>
                    </div>

                    <p class="intro-ee__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-me">
                    <h2 class="heading-secondary"><?php echo $data['me']['head']; ?></h2>
                    <p class="intro-me__text"><?php echo $data['me']['text-1']; ?></p><br>

                    <p class="intro-me__text"><?php echo $data['me']['text-2']; ?></p>

                    <ul class="info__list">
                        <?php foreach ($data['me']['domains'] as $contents): ?>
                                <li class="info__item"><?php echo $contents['contents']; ?></li>
                        <?php endforeach; ?>
                        <br>
                    </ul>

                    <p class="intro-me__text"><?php echo $data['me']['text-3']; ?></p> <br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['me']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <li class="info__item"><?php echo $data['me']['info']['list']['part-1']['text']; ?> 
                                <ul class="info__list">
                                    <?php foreach ($data['me']['info']['list']['part-1']['sub-lists'] as $contents): ?>
                                        <li class="info__item"><?php echo $contents['contents']; ?></li>
                                    <?php endforeach; ?>
                                    <br>
                                </ul>
                            </li>
                                <?php foreach ($data['me']['info']['list']['part-2'] as $contents): ?>
                                        <li class="info__item"><?php echo $contents['contents']; ?></li>
                                <?php endforeach; ?>
                                <br>
                        </ul>
                    </div>

                    <p class="intro-me__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>



        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-me">
                    <h2 class="heading-secondary"><?php echo $data['mechatronics']['head']; ?></h2>
                    
                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['mechatronics']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <?php foreach ($data['mechatronics']['info']['sub-lists'] as $subList): ?>
                                    <li class="info__item"><?php echo $subList['contents']; ?></li>
                            <?php endforeach; ?>
                            <br>
                        </ul>
                    </div>

                    <p class="intro-me__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="intro-me">
                    <h2 class="heading-secondary"><?php echo $data['msme']['head']; ?></h2>
                    <p class="intro-me__text"><?php echo $data['msme']['text-1']; ?></p><br>

                    <p class="intro-me__text"><?php echo $data['msme']['text-2']; ?></p>

                    <ul class="info__list">
                        <?php foreach ($data['msme']['domains'] as $contents): ?>
                                <li class="info__item"><?php echo $contents['contents']; ?></li>
                        <?php endforeach; ?>
                        <br>
                    </ul>

                    <p class="intro-me__text"><?php echo $data['msme']['text-3']; ?></p> <br>

                    <div class="info">
                        <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i><?php echo $data['msme']['info']['head']; ?></h3>

                        <ul class="info__list">
                            <li class="info__item"><?php echo $data['msme']['info']['list']['part-1']['text']; ?> 
                                <ul class="info__list">
                                    <?php foreach ($data['msme']['info']['list']['part-1']['sub-lists'] as $contents): ?>
                                        <li class="info__item"><?php echo $contents['contents']; ?></li>
                                    <?php endforeach; ?>
                                    <br>
                                </ul>
                            </li>
                                <?php foreach ($data['msme']['info']['list']['part-2'] as $contents): ?>
                                        <li class="info__item"><?php echo $contents['contents']; ?></li>
                                <?php endforeach; ?>
                                <br>
                        </ul>
                    </div>

                    <p class="intro-me__text"><em><?php echo $data['cse']['sub-text']; ?></em></p>
                </div>
            </div>
        </section>

        <?php
        require_once('partials/footer.php');
        ?>
        </div>
    </body>

</html>
