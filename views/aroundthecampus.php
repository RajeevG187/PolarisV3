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


    <?php require_once('partials/header.php'); ?>

        <header class="header header__around">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Around the Campus</h1>
                    <p class="heading-subtitle">Get to know what is where...</p>
                </div>
            </div>
        </header>
        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Campus Location (Permanent Campus)</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d374967.6056149059!2d81.317959!3d21.244257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d6791e5f399%3A0xfb39e72b5f4501f5!2sIIT%20Bhilai%20Permanent%20Campus!5e1!3m2!1sen!2sin!4v1689530217209!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Campus Location (Transit Campus)</h2>
                <iframe width="100%" height="400" frameborder="0" style="border:0;margin-top:2rem" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwxilx3FT8Oe4JCbm8elUIlqN66aMTUEU&q=IIT+Bhilai,Old+Dhamtari+Rd&maptype=satellite" allowfullscreen></iframe>
            </div>
        </section> -->
        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="around">
                    <h2 class="heading-secondary">Around <br><span>Indian Institute of Technology Bhilai</span></h2>
                    <h3 class="heading-tertiary">About Permanent Campus</h3>
                    <p class="around__text"> The Permanent Campus of IIT Bhilai is located at Khapri, which is a suburb of Bhilai in the Durg district of Chhattisgarh, India. It is about 10 kilometers from the main city of Bhilai and is well connected through public transport to the railway station, airport, and Raipur City.</p>

                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th>Entry points to Durg</th>
                                <th>Distance (km)</th>
                                <th>Estimated Time</th>
                            </tr>

                            <tr>
                                <td>Swami Vivekananda Airport</td>
                                <td>54</td>
                                <td>1 to 1.5 hrs*</td>
                            </tr>

                            <tr>
                                <td>Durg Junction Railway Station</td>
                                <td>7</td>
                                <td>30 to 40 min**</td>
                            </tr>
                        </table>
                    </div>
                    
                    <!-- <h3 class="heading-tertiary">About Transit Campus</h3>
                    <p class="around__text">Though the temporary campus is located in the town of Sejbahar, it has an excellent road connectivity with the main city. Once you reach Raipur, it won’t be much of a hassle to reach IIT Bhilai as the campus is well connected with the Airport as well as the Railway Station</p> -->

                    <!-- <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th>Entry points to Raipur</th>
                                <th>Distance (km)</th>
                                <th>Estimated Time</th>
                            </tr>

                            <tr>
                                <td>Swami Vivekananda Airport</td>
                                <td>17</td>
                                <td>30 min*</td>
                            </tr>

                            <tr>
                                <td>Raipur Junction Railway Station</td>
                                <td>12.5</td>
                                <td>40 to 45 min**</td>
                            </tr>
                        </table>
                    </div>
                    <p class="around__text"><em>**The route is mostly wide roads with minimal traffic even at rush hours.</em></p>
                    <p class="around__text"><em>*The route goes through the city, hence time may be less or more depending on the traffic conditions.</em></p> -->
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <!-- <section class="section">
            <div class="container">
                <div class="transportation">
                    <h2 class="heading-secondary">Transportation</h2>
                    <p class="transportation__text">Your friends to take you to the main city will be the Auto-Rickshaws. They are easily available outside the campus premises, providing both sharing and single services. A good number of rickshaws are from Sejbahar itself, so even if you need a ride to the airport even at 4 in the morning, just give them a call in the previous evening and they will be ready with your ride at the specified time. If you need a cab, then you always have Ola.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div> -->

        <!-- <section class="section">
            <div class="container">
                <div class="restaurants">
                    <h2 class="heading-secondary">Restaurants</h2>
                    <p class="restaurants__text">"Variety is the spice of life"- Tired of Rajma on Friday or Chicken on Wednesday? Wanna celebrate the completion of a tough course? Well on such occasions these eateries come to our rescue. There are a couple of such places at a walking distance from the Campus. </p>

                    <div class="row">
                        <div class="restaurants__box">
                          <div class="col-1-of-2">
                              <div class="heading-tertiary">Tech Cafe</div>
                              <div class="restaurants__description">The cafe is located inside the campus and provides variety of snacks and fast-foods such as Samosa, Pasta, Maggi among others. <br>See on <a href="https://goo.gl/maps/iP6dv8zZGom">google maps &rarr;</a> </div>
                          </div>
                            <div class="col-1-of-2">
                                <div class="heading-tertiary">GEC Cafe</div>
                                <div class="restaurants__description">GEC Cafe is located inside the campus and offers fast-food like maggi, fried rice, chowmein. <br>See on <a href="https://goo.gl/maps/jk5HiDraeBYL2uGA8">google maps &rarr;</a> </div>
                            </div>

                            <div class="col-1-of-2">
                                <div class="heading-tertiary">The Hangout</div>
                                <div class="restaurants__description">The Hangout, a pure Veg. eatery offers fast-foods, mainly Burgers, Pizzas, Noodles, Hotdogs etc. <br>See on <a href="	https://goo.gl/maps/h4bTtbCxrbH2">google maps &rarr;</a> </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="restaurants__box">

                            <div class="col-1-of-2">
                                <div class="heading-tertiary">Khao Piyo</div>
                                <div class="restaurants__description">Located just outside the campus, it provides both veg and non-veg snacks as well as beverages. <br>See on <a href="https://goo.gl/maps/brMLsgPq7QE2">google maps &rarr;</a> </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="heading-tertiary">Food Mart</div>
                                <div class="restaurants__description">Recently opened, Food Mart is a restaurant which provides veg as well as non-veg cuisines. <br>See on <a href="https://goo.gl/maps/peh8wNHRiL6VwJ7f9">google maps &rarr;</a> </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="street">
                        <h3 class="heading-tertiary">Street Food</h3>
                        <p class="street__text">There are also a couple of Dhabhas and Street Food Vendors in the same radius as the above. Missing cheese bursts? Call Dominos and get your pizza within 30 minutes.</p>
                    </div>

                </div>
            </div> -->
        <!-- </section> -->

        <div class="line-break"></div>

        <div class="line-break"></div>
        <section class="section">
            <div class="container">
                <div class="entertainment">
                    <h2 class="heading-secondary">Hotels in Durg-Bhilai</p>

                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th>Hotel Name</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Distance from Permanent Campus</th>
                                <th>Distance from Durg Railway Station</th>
                                <th>Distance from Durg Bus Stand</th>
                            </tr>

                            <tr>
                                <td> Hotel Empyrean</td>
                                <td>Durg Bypass, Padmanabhpur, Pushpak Nagar, near Maruti Suzuki Arena, Bhilai, Chhattisgarh 490020</td>
                                <td>06260341616</td>
                                <td>5.9 km</td>
                                <td>3.5 km</td>
                                <td>5.5 km</td>
                            </tr>
                            <tr>
                                <td>Chouhan Resort</td>
                                <td>NH 6, Durg Padmanabhpur, Smriti Nagar, Chhattisgarh 490020</td>
                                <td>07947131275</td>
                                <td>5.9 km</td>
                                <td>3.5 km</td>
                                <td>5.5 km</td>
                            </tr>
                            <tr>
                                <td>The Grand Dhillon</td>
                                <td>A-1, Nehru Nagar Square, G.E. Road, Priyadarsani Parisar West, Bhilai, Chhattisgarh 490020</td>
                                <td>07884044000</td>
                                <td>6.7 km</td>
                                <td>3.8 km</td>
                                <td>5.8 km</td>
                            </tr>
                            <tr>
                                <td>Hotel Lotus</td>
                                <td>Shastri Nagar, Bhilai, Chhattisgarh 490023</td>
                                <td>01246201519</td>
                                <td>6.9 km</td>
                                <td>7.6 km</td>
                                <td>9.6 km</td>
                            </tr>
                            <tr>
                                <td>Hotel Vatsa International</td>
                                <td>28, Shivnath Complex, G.E Road, Besides Bhilai Nagar Nigam, Supela, Bhilai, Chhattisgarh 490023</td>
                                <td>09039020123</td>
                                <td>7.4 km</td>
                                <td>7.6 km</td>
                                <td>9.6 km</td>
                            </tr>
                            <tr>
                                <td>Hotel Amit International</td>
                                <td>Shivnath Vistar Vyavsayik Yojana, G.E.Road, National Highway 6, Supela, next to Maurya Talkies, Shastri Nagar, Bhilai, Chhattisgarh 490023</td>
                                <td>07884036664</td>
                                <td>7.4 km</td>
                                <td>8.2 km</td>
                                <td>10.2 km</td>
                            </tr>
                            <tr>
                                <td>Hotel The Avalon</td>
                                <td>Deepak Nagar, Malviya Nagar, Chhattisgarh 491001</td>
                                <td>07947393230</td>
                                <td>9.2 km</td>
                                <td>0.55 km</td>
                                <td>2.55 km</td>
                            </tr>
                            <tr>
                                <td>Hotel Ashish International</td>
                                <td>Janjgiri, Bhilai, Chhattisgarh 490011</td>
                                <td>07882250260</td>
                                <td>11.7 km</td>
                                <td>13 km</td>
                                <td>15 km</td>
                            </tr>
                            <tr>
                                <td>The Roman Park</td>
                                <td>Near Shivnath river, Pulgaon Rd, Durg, Chhattisgarh 491001</td>
                                <td>09589090940</td>
                                <td>12.5 km</td>
                                <td>7 km</td>
                                <td>9 km</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="entertainment">
                    <h2 class="heading-secondary">Entertainment Hubs (near Permanent Campus)</h2>
                    <p class="entertainment__text">Birthday Celebrations, “BHAI ki Nayi movie”, Marvel’s next flick or Shopping your favourite brands- we all eagerly wait for the m. Well that’s why the malls are here for. Just call a rick, and within half an hour you will be at your destination. The following are some high end shopping malls to explore:</p>

                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th>Entertainment Hubs</th>
                                <th>Highlights</th>
                                <th>Distance from Campus</th>
                                <th>Google Map</th>
                            </tr>

                            <tr>
                                <td>Surya Treasure Island Mall</td>
                                <td>KFC, Dominos, Pizza Hut, PVR, Subway, CCD, Gamezone, Baskin Robins,TDS, Bowling Alley, VR Zone</td>
                                <td>4.7 km (10-15 min)</td>
                                <td><a href="https://goo.gl/maps/8oeSxD7G7Rvj99zP7">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Civic Centre (CC)</td>
                                <td>Arjun Rath Park, Hariraj Family Restaurant, Nehru Art Gallery, Nanhe ki Chai, Grill Inn, Monument Park, Open Air Theatre, Choupati, Shaheed Udyaan, Kwality Spice Gallery, Juice Factory</td>
                                <td>10.3 km (20-25 min)</td>
                                <td><a href="https://goo.gl/maps/CifkFyyuvekDcKcU8">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Sector 6 Market</td>
                                <td>For all sorts of shopping (sports, fashion, daily appliances, etc)</td>
                                <td>8.2 km (15-20 min)</td>
                                <td><a href="https://goo.gl/maps/G837cCA9hF6iEWGY6">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Nehru Nagar (NN)</td>
                                <td>90’s Café, Mad Bakers, Shubham-K-Mart, TCQ Restaurant</td>
                                <td>5.9 km (15-20 min)</td>
                                <td><a href="https://goo.gl/maps/yPhJJVaeg1TjP7si7">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Sector 5 </td>
                                <td>Atal Park Light Show, Jayanti Stadium, Bhilai Club(Swimming Pool, Billiards, Gym ), Maitri Bagh Zoo</td>
                                <td>9.7 km (20-25 min)</td>
                                <td><a href="https://goo.gl/maps/RgrXF6m4qoXiLvPn8">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Durg</td>
                                <td>Satyam Bakery, Flavours Restaurant, Paint Ball Warfare, Maze Space Game Zone</td>
                                <td>9.6 km (20-25 min)</td>
                                <td><a href="https://goo.gl/maps/YQCNrijX9omYEj1dA">Click Here!</a></td>
                            </tr>
                        </table>
                    </div>

                </div>
                    </div>
                    </section>
                    <div class="line-break"></div>

<!-- <section class="section">
    <div class="container">
                <div class="entertainment">
                    <h2 class="heading-secondary">Entertainment Hubs (near Transit Campus)</h2>
                    <div class="table__scroll">
                        <table class="table">
                            <tr>
                                <th>Mall</th>
                                <th>Highlights</th>
                                <th>Distance and Time</th>
                                <th>Google Map</th>
                            </tr>

                            <tr>
                                <td>Magneto The Mall</td>
                                <td>Barbeque Nation, KFC, McD, Subway, BigBazaar, PVR</td>
                                <td>14 km (25 to 30 min)</td>
                                <td><a href="https://goo.gl/maps/1svTeUx3gGn">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>City Centre Mall</td>
                                <td>Dominos, Gaming Alley, Cinemax, BigBazaar</td>
                                <td>13 km (30 to 40 min)</td>
                                <td><a href="https://goo.gl/maps/ZKN5fBAZxeD2">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Colors Mall</td>
                                <td>Gaming Alley, Turf</td>
                                <td>9.2 km (25 to 30 min)</td>
                                <td><a href="https://goo.gl/maps/4JcAhYvjmcv">Click Here!</a></td>
                            </tr>

                            <tr>
                                <td>Ambuja Mall</td>
                                <td>Shoppers Stop, Inox, Chain Fast Foods</td>
                                <td>20 km (45 to 55 min)</td>
                                <td><a href="https://goo.gl/maps/JokFNx6pP3z">Click Here!</a></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                    </div>
            </div>
        </section> -->

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="stores">
                    <h2 class="heading-secondary">Daily Needs and General Stores</h2>
                    <p class="stores__text">Just outside the campus are various general purpose stores. These include:</p>
                    <div class="stores__jumbo-list">
                            <ul class="stores__list">
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Medical Stores</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Mobile Recharge Stores</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Haircut/Salon</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; General Grocery Stores</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Hardware Shops</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Cycle Repair Shops</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Stationary Shops</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Fruits and Vegetable</li>
                                <li class="stores__item"><i class="fas fa-store-alt"></i>&nbsp; Dairy Products</li>
                            </ul>
                    </div>

                <!-- <p class="stores__text">Also apart from these if one needs a wider variety of stores, then he can visit the market of:</p>
                <ul class="info__list">
                    <li class="info__item"><strong> Power House </strong> , which is about 9 km from the permanent campus. It has gained prominence as a hub for various commercial activities and a shopping destination for  residents and visitors. From fresh products to electronics, clothing to household items, it offers a wide array of goods making it a one stop destination for shoppers.
                    See on <a href="https://goo.gl/maps/nkTLJkJPNwxHZrs99">google maps &rarr;</a>
                    </li>
                    <li class="info__item"><strong> Akash Ganga,Supela </strong> , which is about 8 km from permanent campus. It has established itself as a popular shopping complex catering to the diverse needs and preference of visitors and residents.
                    See on <a href="https://goo.gl/maps/1MVYxwWvrjnaQNH77">google maps &rarr;</a>
                    </li>
                    <li class="info__item"><strong> Sector 6 Market </strong> , which is about 8.2 km from the permanent campus. You can go there for all sorts of shopping needs, be it sports, fashion, daily appliances or anything else.
                    See on <a href="https://goo.gl/maps/d1t3SDBs497T9Btm8">google maps &rarr;</a>
                    </li>
                </ul> -->
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="bank">
                    <h2 class="heading-secondary">Banks and ATMs</h2>
                    <ul class="bank__list">
                        <li class="bank__item"><i class="fas fa-piggy-bank"></i>&nbsp; State Bank of India (SBI) Branch and ATM</li>
                        <li class="bank__item"><i class="fas fa-piggy-bank"></i>&nbsp; Canara Bank Branch and ATM</li>
                        <li class="bank__item"><i class="fas fa-piggy-bank"></i>&nbsp; Bank of India Branch and ATM</li>
                        <li class="bank__item"><i class="fas fa-piggy-bank"></i>&nbsp; IDBI Bank Branch and ATM (Located within the campus premises)</li>
                        <li class="bank__item"><i class="fas fa-piggy-bank"></i>&nbsp; Union Bank ATM </li>
                    </ul>
                </div>
            </div>
        </section>

        <?php require_once('partials/footer.php'); ?>

    </body>

</html>
