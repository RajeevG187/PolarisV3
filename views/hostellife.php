<?php
$jsonfilepath = '../src/json/cosa.json';

if (!file_exists($jsonfilepath) || !is_readable($jsonfilepath)) {
    die('Error: JSON file not found or not readable.');
}

$key = file_get_contents($jsonfilepath);
$data = json_decode($key, true);

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
        <header class="header header__life">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Anti-Ragging Committee</h1>
                    <p class="heading-subtitle">insert some quote here</p>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">About</h2>
                <div class="about">
                    <p class="about__text">The hostel lifestyle is an integral part of the one’s college life. Here, at IIT Bhilai, the hostel life is much more than just ‘hanging out’. Our student community is very enthusiatic which is why being here is a totally vivid experience. Even though in its infancy, IIT Bhilai has developed a rich student culture where students from different communities come together and have time of their lifetime. As part of student activities we have established the official student body, Council of Student Affairs(CoSA). Under it function various clubs and associations, each having a coordinator. Students are encouraged to actively participate in the clubs whoch interests them. This makes hostel life exciting and fun. </p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Campus Location</h2>
                <div class="location">
                    <p class="location__text">The Permanent Campus of IIT Bhilai is located at Khapri, which is a suburb of Bhilai in the Durg district of Chhattisgarh, India. It is about 10 kilometers from the main city of Bhilai and is well connected through public transport to the railway station, airport, and Raipur City.</p>
                </div>

                <iframe width="100%" height="400" frameborder="0" style="border:0;margin-top:2rem" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237995.96834581683!2d81.02956818671873!3d21.244256699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d6791e5f399%3A0xfb39e72b5f4501f5!2sIIT%20Bhilai%20Permanent%20Campus!5e0!3m2!1sen!2sin!4v1686500146427!5m2!1sen!2sin" allowfullscreen></iframe>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary" id="hostel__facilities">Facilities Available</h2>
                <div class="facilities">
                    <h3 class="heading-tertiary">Hostels for girls and boys</h3>
                    <p class="facilities__text">Staying in campus is fun because of hostel and the environment that it offers. We have two hostels, Castle Ena and Castle Dio. Second, Third and Fourth year boys resides in Castle Ena. All the girls will be residing on ground floor of Castle Dio. First floor of Castle Dio will have accomodation for 1st year boys.</p>
                    <p class="facilities__text">Note: Wings of the girls hostel will be completely partitioned from the rest of the hostel.</p>
                </div>

                <div class="facilities">
                    <h3 class="heading-tertiary">Hostels Capacity</h3>
                    <p class="facilities__text">In Castle Ena the total capacity is of 302 and in Castle Dio the total capacity is 258.</p>
                </div>

                <div class="facilities">
                    <h3 class="heading-tertiary">Types of Rooms</h3>

                    <p class="facilities__text">We have 2 sharing, 3 sharing and 4 sharing rooms in Castle Ena and for the fresher boys, they will be given 3 sharing rooms and 4 sharing rooms for fresher girls, there is still plenty of space left in the rooms.</p>
                </div>

                <div class="facilities">
                    <h3 class="heading-tertiary">Other facilities</h3>

                    <ul class="info__list">
                        <li class="info__item">Every student gets a bed, a fan, an almirah, a table and a chair in his room.</li>
                        <li class="info__item">Toilets are commonly shared with the wing mates and are cleaned twice a day.</li>
                        <li class="info__item">Fully automated washing machines are kept in the laundry room for saving time and efforts of the students.</li>
                        <li class="info__item">Recreation cum TV room is there in the hostels for entertainment purpose.</li>
                        <li class="info__item">For the music lovers, there is a music room equipped with a drum set, congo set, keyboard, guitar and some other instruments.</li>
                        <li class="info__item">A dance room completely equipped with mirrored walls is set up for tapping your feet. And yes, if you love those drops, then there are bass speakers for you to bounce on.</li>
                        <li class="info__item">Both the hostels have indoor badminton courts.</li>
                        <li class="info__item">A snooker table and other indoor games are also provided.</li>
                        <li class="info__item">A Table Tennis table is also there for "ping-pong" lovers.</li>
                        <li class="info__item">Air Cooling Ducts are there in each wing in the hostels to keep the rooms cool during summer.</li>
                    </ul>

                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Network and Connectivity</h2>
                <div class="network">
                    <p class="network__text">Being an IIT it is needless to say that we have an excellent internet connectivity. The <span>NKN (National Knowledge Network)</span> program is the Internet service provider for the institute and supports network speeds of up to 1 GB/s. Although in the elementary stage, the NKN network is useful as it provides connectivity to other institutes, has resources like video lectures, seminars etc. Each student has access to the network through the LAN ports provided in the hostel rooms as well as Wi-Fi (each student is allotted a unique ID-Password for accessing). We also have a DC++ culture in the hostel (Google it and you will learn that DC++ is the life line of IIT hostels). It is a really productive file sharing system with a host server and various other clients linked to it. It comes in handy to share large files, academic softwares and recreational stuff (like movies, games, TV series). Students are encouraged to avail the benefits of the system in the hostel. Apart from the above, all students have access to a common file storage system. Students can use it as a drive to drop/retrieve/share files with peers. </p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Mess Facilities</h2>
                <div class="mess">
                    <p class="mess__text">Currently there are two mess in the campus, one serving in each hostel, Mess provides snacks at evening apart from breakfast, lunch and dinner. Both the hostels have mess night canteens which are open till 3 am in the night. They serve Snacks, Drinks, Fresh Fruit Juices, Noodles, Ice-Creams etc.</p><br>

                    <div class="row">
                        <div class="col-1-of-2"><img src="..public/image/life/mess-1.jpg" alt="Mess" class="mess__photo"></div>
                        <div class="col-1-of-2"><img src="..public/image/life/mess-2.jpg" alt="Mess" class="mess__photo"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Medical Facilities</h2>
                <div class="medical">
                    <p class="medical__text">The hostel has first-aid facilities along with medications for common ailments. If one needs to see a doctor, he can find him adjacent to Castle Tria and Guest House in the Nurse room. A paramedic is always available at the campus and so is the ambulance service (An ambulance vehicle available 24 x 7 in the campus). In case of emergency or any other medical call, one is taken to the nearest hospital: The <span>VY Hospital</span> (Located about 5 km from the campus, distance is covered within 15 min due to presence of wide and less busy roads). It is functional 24 x 7 and has all major facilities.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Transportation Facilities within Campus</h2>
                <div class="transportation">
                    <p class="transportation__text">The Castle Ena boys hostel is located at a distance of about 900m from the academic block. A wide road within the campus connects both. There are plenty of options to ply between these two: </p>
                </div>

                <div class="transportation">
                    <ul class="info__list">
                        <li class="info__item">You can walk without even breaking a sweat (Can’t guarantee about summers though)</li>
                        <li class="info__item">Paddle your way to the Acad. Block</li>
                        <li class="info__item">Lazy enough? Well there is a bus service back and forth from the hostel to the Acad. Block. It runs at scheduled times- generally half and prior to lectures and lunch.</li>
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
