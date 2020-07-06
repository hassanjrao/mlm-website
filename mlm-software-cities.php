<?php include("database/db.php");
session_start();

$ct = $_GET["city"];


if (strpos($ct, "tekirda") !== false) {
    $ct = "tekirda" . "&#x0011F";
}

if (!isset($_SESSION[$ct])) {

    $query = $conn->prepare("SELECT * FROM cities_tb");
    $query->execute();
    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        $cti = preg_replace('/\s+/', '-', $result["city"]);
        $_SESSION[strtolower($cti)] = $result["id"];
    }
}



$id = $_SESSION[$ct];


$query = $conn->prepare("SELECT * FROM cities_tb WHERE id='$id'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$city = ucwords($result["city"]);
$email = $result["email"];
$phone = $result["phone"];
$url = $result["url"];



?>


<!DOCTYPE html>
<html lang="zxx">


<body onload="getMap()">

    <!-- head start -->

    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?php echo "MLM Software in $city. Best multi level marketing software to use" ?></title>

        <meta name="description" content="<?php echo "MLM software in $city United States. Find MLM software which are affordable and see features comparison" ?>">
        <meta name="keywords" content="<?php echo "mlm software, multi level marketing software, mlm softwares, software for network marketing, affordable mlm software, mlm software company, mlm software price" ?>">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <?php include("head-links.php") ?>

    </head>
    <!-- head end -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Page Preloder -->


    <!-- header start -->
    <?php include("header.php") ?>
    <!-- header end -->


    <!-- Left Menu + Slider Start -->
    <?php include("left-menu.php") ?>
    <!-- Left Menu + Slider End -->


    <main class="pt-5">
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">


                        <article class="mt-0 ">
                            <span>
                                <h1>MLM Software in <?php echo $city ?></h1><br>
                                <p>Importance of getting MLM software for lead generation</p>
                            </span>

                            <div class="cities-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="#info" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">More Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#email" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#phone" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="false">Phone</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#web" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Website</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">Lorem Ipsum</div>
                                    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email"><?php echo $email; ?></div>
                                    <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone"><?php echo $phone; ?></div>
                                    <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web"><?php echo $url; ?></div>
                                </div>
                            </div>

                            <p class="mt-5">
                                MLM lead generation is a very common challenge faced my many MLM associates and distributors. Lack of enough leads is one of the reasons why only 3% succeed in this business model. The main reason why most are unable to generate sufficient leads is due to lack of proper systems in place. Let’s take a look at some of the challenges associated with MLM and how you will be able to overcome them with the assistance of a MLM software.
                            </p>

                        </article>


                        <article class="pb-3">

                            <span>
                                <h1 style="font-weight:350;">MLM full form </h1><br>
                            </span>

                            <p class="mt-3">
                                Let’s start with the basics. MLM in full form is Multi Level Marketing. This is the marketing strategy that is being used by some of the direct sales companies in order to encourage all the existing distributors to go ahead and recruit new distributors. Then the recruiter will be able to receive a percentage of the sales generated by the recruiter. In the meantime, it is possible to keep on selling products as a distributor and earn profits out of them as well.
                            </p>


                            <p>

                                You will have to focus on many different aspects when you are running a MLM business. If you don’t use any automated tools, you cannot get the most out of it. That’s where you should think about investing on a high quality MLM software.
                            </p>
                            <p>
                                Support offered by MLM software
                            </p>
                            <p>
                                Any successful entity has systems in place to ensure its smooth operation. Look at any successful business; corporation, government etc. are some of the examples. Then look at nature, living organisms we all have systems in place. Take a minute to think of your own body. How many systems do you have within you? Your respiratory system, circulation system, nervous system, digestive system... I can go on. What does each of these do? They ensure that your body performs at the optimum level.
                            </p>
                            <p>
                                In business people employ systems to save themselves time, energy and money. So, let's look at the MLM lead generation. If you have a system in place it is going to be an easy task for you to generate leads and your down line team will be able to take advantage of that as well.
                            </p>
                            <p>
                                The importance of getting MLM software
                            </p>
                            <p>
                                If you are reading this, I am sure you have come across many MLM lead generating systems. My opinion is that it is a good idea to use one of the systems that are already in place, while your long term plan should be to develop your own system.
                            </p>
                            <p>
                                The main advantages of using a system that is already in place:
                            </p>
                            <p>
                                You can experience few benefits by getting your hands on a MLM software that is already in place. Here are the most prominent benefits out of them.
                            </p>

                            <ul>

                                <li>
                                    The marketers who have developed the systems have already done the grunt work; they have tested them for smooth function.
                                </li>
                                <li>
                                    You will be able to learn the ins and outs of a lead generation system, which will educate you when you implement your own system.
                                </li>
                                <li>
                                    While you are using the system you will be able to start building your list.
                                </li>
                                <li>
                                    You will be able to start earning money straight away as most MLM lead generation systems that are available today gives you the opportunity to earn affiliate commissions.
                                </li>
                                <li>
                                    If you wait to generate leads until you get your own system up & running you will lose a lot of time and money in the process.
                                </li>

                            </ul>

                            <p>
                                You need to check out the systems that are available because it is important that you become a part of a system that resonates with you, and help you build your primary MLM business. Most of the systems come with a trial period, so that you can check them out before you become a full member.
                            </p>
                            <p>
                                If your sponsor recommends a system, most probably it is a good one and he is already getting good results using it. Also look around your MLM Company's top producers, what systems are they using? Do a bit of research before you go ahead.
                            </p>



                        </article>
                        <div class="cities-tabs">
                            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="#info1" data-toggle="tab" href="#info1" role="tab" aria-controls="info1" aria-selected="true">More Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#email1" data-toggle="tab" href="#email1" role="tab" aria-controls="email1" aria-selected="false">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#phone1" data-toggle="tab" href="#phone1" role="tab" aria-controls="phone1" aria-selected="false">Phone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#web1" data-toggle="tab" href="#web1" role="tab" aria-controls="web1" aria-selected="false">Website</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="info1" role="tabpanel" aria-labelledby="info1">Lorem Ipsum</div>
                                <div class="tab-pane fade" id="email1" role="tabpanel" aria-labelledby="email1"><?php echo $email; ?></div>
                                <div class="tab-pane fade" id="phone1" role="tabpanel" aria-labelledby="phone1"><?php echo $phone; ?></div>
                                <div class="tab-pane fade" id="web1" role="tabpanel" aria-labelledby="web1"><?php echo $url; ?></div>
                            </div>
                        </div>

                        <h2 class="pb-3 text-center">Find us in: </h2>

                        <div class="pb-3" style="width: 100%; height: 450px" id="mapContainer">
                        </div>


                        <article class="pb-3">

                            <span>
                                <h2>Top 10 direct selling companies </h2>
                                <p>How to locate the best MLM software</p>
                            </span>

                            <p class="mt-3">
                                When joining one of the top 10 direct selling companies, you will usually be provided with a list of recommendations for the software that you can use. You can go ahead with the software options recommended. Or else, you can even do some research on your own and locate a perfect software to use as well.
                            </p>
                            <p>
                                You need to make sure that you are getting an excellent lead capture system with the MLM software you get. This will be one of the best methods available for you to add more value to the content that you offer. The lead capturing system should be able to capture all the important information of your leads, including the name, phone number and email address. In addition to that, it is also better if you can get hold of lead magnet support out of the MLM software.
                            </p>
                            <p>
                                One of the most important strategies that you should follow to ensure success with a MLM business is follow up. When you join one of the top 10 direct selling companies, you can get a clear picture about the importance of following up. While you do it, you need to make sure that you are getting a MLM software that comes with an excellent autoresponder as well. The autoresponder can do all the follow up work.
                            </p>
                            <p>
                                Likewise, it is important to ensure that the MLM software you get is providing an excellent support to you throughout the sale generation process as well.
                            </p>

                        </article>

                        <article class="pb-3">
                            <h3>Conclusion </h3>
                            <p class="pt-3">
                                Finally, I want to reiterate that while it is a great idea to be a part of a system that is already in place, your long term goal should be to develop your own MLM lead generation system. You can think about getting the help of a MLM software for that. Make sure that you go for the right option after analyzing the different software. Then you will never regret about the decision that you took to move forward.
                            </p>
                        </article>
                        <div class="cities-tabs">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="#info2" data-toggle="tab" href="#info2" role="tab" aria-controls="info2" aria-selected="true">More Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#email2" data-toggle="tab" href="#email2" role="tab" aria-controls="email2" aria-selected="false">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#phone2" data-toggle="tab" href="#phone2" role="tab" aria-controls="phone2" aria-selected="false">Phone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#web2" data-toggle="tab" href="#web2" role="tab" aria-controls="web2" aria-selected="false">Website</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="info2" role="tabpanel" aria-labelledby="info2">Lorem Ipsum</div>
                                <div class="tab-pane fade" id="email2" role="tabpanel" aria-labelledby="email2"><?php echo $email; ?></div>
                                <div class="tab-pane fade" id="phone2" role="tabpanel" aria-labelledby="phone2"><?php echo $phone; ?></div>
                                <div class="tab-pane fade" id="web2" role="tabpanel" aria-labelledby="web2"><?php echo $url; ?></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 mb-5">

                        <div class="services-links">

                            <h3 class="text-center mb-4">MLM Software in</h3>

                            <?php
                            $ind = 0;
                            $cts = array();
                            $ids = array();
                            $z = 0;
                            $done_cities = array();
                            $done_ids = array();

                            $query = $conn->prepare("SELECT * FROM cities_tb");
                            $query->execute();

                            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                                $cities[$ind] = $result["city"];
                                $ids[$ind] = $result["id"];
                                $ind++;
                            }

                            $totalCities = count($cities);

                            $n = range(0, $totalCities - 1);
                            shuffle($n);


                            ?>

                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>
                                        <?php

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $cities[$i];
                                            $id = $ids[$i];


                                            $done_cities[$z] = $city;
                                            $done_ids[$z] = $id;
                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION[$ct] = $id;
                                        ?>
                                            <li><a href=<?php echo "mlm-software-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

                                        <?php
                                        }


                                        ?>


                                    </ul>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);
                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;

                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;

                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION[$ct] = $id;
                                        ?>
                                            <li><a href=<?php echo "mlm-software-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


                                        <?php }

                                        ?>

                                    </ul>


                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);

                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;


                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION["$ct"] = $id;
                                        ?>
                                            <li><a href=<?php echo "mlm-software-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }

                                        ?>

                                    </ul>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);

                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;


                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION["$ct"] = $id;
                                        ?>
                                            <li><a href=<?php echo "mlm-software-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }

                                        ?>

                                    </ul>


                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- Footer Section Begin -->
    <?php include("footer.php") ?>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/main5.js"></script>


</body>

</html>


<script>
    function getMap() {
        var citi = '<?php echo $_GET["city"]; ?>';

        if (citi.includes("tekirda")) {
            citi = "Tekirdağ"
        }
        console.log(citi);
        $.ajax({
            url: 'https://geocoder.ls.hereapi.com/6.2/geocode.json?apiKey=F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s&gen=9&searchtext=' + citi,
            type: 'GET',
            data: citi,
            success: function(result) {
                console.log(result);

                var longt = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Longitude"];
                var latit = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Latitude"];


                var platform = new H.service.Platform({
                    'apikey': 'F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s'
                });

                // Obtain the default map types from the platform object
                var maptypes = platform.createDefaultLayers();

                // Instantiate (and display) a map object:
                var map = new H.Map(
                    document.getElementById('mapContainer'),
                    maptypes.vector.normal.map, {
                        zoom: 10,
                        center: {
                            lng: longt,
                            lat: latit
                        }
                    });

            }
        });
    }
</script>