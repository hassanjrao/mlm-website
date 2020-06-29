<?php include("database/db.php");
session_start();

$ct = $_GET["city"];




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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="home">
        <meta name="keywords" content="mlm">
        <meta name="description" content=<?php echo "mlm,$ct" ?>>
        <meta name="keywords" content=<?php echo "mlm,$ct" ?>>

        <title><?php echo "MLM in $city" ?></title>

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


    <main class="pt-2">
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <article class="pb-3">

                            <h1>MLM in <?php echo $city ?></h1>
                            <p class="mt-4"><?php echo "Email: $email <br> Mob: $phone <br> URL: $url " ?></p>
                            <p class="mt-4">Many companies use many different kinds of strategies and techniques to boost their sales and grow their business. Among many other techniques, one is MLM. MLM is an abbreviation of Multilevel Marketing. In Multilevel Marketing, direct sales companies tell their current product or service distributors to hire new distributors at a percentage of their wages. These new hirees then further recruit more people and create levels of sales. </p>


                        </article>
                    </div>

                    <div class="col-lg-6">

                        <div style="width: 620px; height: 450px" id="mapContainer">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <article class="pb-3">
                            <h1>MLM meaning :</h1>
                            <p class="mt-4">Multilevel marketing is an effective strategy used by companies to dig deep into the market to make profits. As every business is started with hopes of increasing sales and profits every day. MLM is an easy and fast solution of going from no sales to full sales. One should always remember that MLM is not a shortcut to more sales. It is just a simple and effective technique of attracting more customers to your business. Like any other corporate strategy, MLM requires hard work, persistence, and constant efforts to achieve a success rate.</p>
                            <p>It should also be kept in notice that you will hear many people grading MLM as an illegal practice, though it is not illegal. The case is that some similar techniques are illegal, but MLM is different from them in many ways. The illegal tactics for more sales are used by fraudulent companies to gain success overnight. If a company has put its mind to adopting the MLM techniques of generating sales, then they must abide by the rules and regulations of their MLM. Following the legal ways of generating sales and making your employees do so as well, is the best and most authentic way of gaining success as a business. </p>
                            <p>The reason why many companies adopt MLM for their marketing and sales is the rate of flexibility they get to involve more and more people in their business. Due to its simplicity, some companies start thinking MLM to be a do-no-work-and-gain-success kind of practice, which it is not. It demands an equal amount of effort and hard work as any other business strategy would. Once you step on the path of hard work, you are not far from real and authentic success.</p>
                        </article>

                        <article class="pb-3">
                            <h2>What is multilevel marketing?</h2>
                            <p class="mt-4">Multilevel Marketing abbreviated as MLM is a marketing strategy adopted by businesses and companies through which they create levels of distributors. These distributors further recruit more people and give wages to the lower level distributors as a percentage of their income. The people at higher levels of an MLM are given enough money to support themselves and also to pay people on the lower levels than them. Many companies that don't want to employ a huge employee force to sell their products use the technique of MLM for fast and efficient sales of their products and services.</p>
                        </article>

                        <article class="pb-3">
                            <h3>Dynamics of an MLM:</h3>
                            <p class="mt-4">A multilevel marketing structure can to some extent resemble an illegal practice that we will discuss later. But those who have good knowledge can see the difference quite distinctly between the two. MLM is a legal practice that has a network of a different number of employees who are divided into parts. These employees can further have a different number of people based upon the potential of the recruiter. If a recruiter can not afford to pay many people for the sales they make than he only has a smaller part of the level. But if a recruiter generates good money through hard work and patience, then he can hire more people and hence grow his network.</p>

                        </article>

                        <article class="pb-3">
                            <h4>Multilevel Marketing vs. Pyramid Marketing:</h4>
                            <p class="mt-4">One is legal and the other illegal. MLM is a technique adopted and practiced by many businesses worldwide. This technique involves legal ways of selling products and hiring recruiters. But Pyramid marketing is the opposite. It is considered illegal as it makes you put your money into the business to make it grow and hire new people, whereas MLM is just distributing a company's products from larger networks out to the customers or other distributors. This way, MLM brings legal sales to the companies and hence plenty of room for success.</p>
                            <p>Another distinct factor that sets MLM and pyramid marketing apart is the requirement of each level doubling to reach another level in the later. This creates pressure upon people in the lower levels and hence makes pyramid marketing illegal. On the other hand, MLM makes commission-based wages to distributors based on the number of items sold and also of the sales made by people at lower levels.</p>
                            <p>Though it is legal, MLM still makes people ponder a good while before joining it. The sole reason behind it is that MLM brings untested, and new products into the market for sale. It puts people off from joining it, and they also check if the company is reliable enough or not.</p>

                        </article>

                        <article class="pb-3">
                            <h4>Should I join an MLM?</h4>
                            <p class="mt-4">Joining MLMs has been quite effective from ever. People have seen quite significant results in shorter spans of time. Businesses take leaps after having an MLM strategy of making sales. </p>

                            <p>Some benefits of joining MLM are:</p>

                            <ul>
                                <li>Income that flows even when you pause from work: through MLM, you can still be making money if you fall sick or want a break from work. You have lower-level distributors who are always in action to produce more sales. In MLM, it is a rule that you get a percentage of commission for the sales made by people in levels lower than you who are in your network.</li>
                                <li>Low startup costs: not all of us have a divided amount of capital set aside to be spent in business, do we? For such circumstances where you can't afford starting a business single-handedly, you can join an MLM. Here you will have to invest money only as low as $500 and start making sales to earn commissions. This is an efficient way of being firm on your grounds until you get ready to have your own startup business.</li>
                                <li>Discount on products: the company you join for and MLM is sure to provide you discounts on their services and products. These discounts can be up to 20% to 50% and can get topped up based on your relations with the company and your hard work. You can always get the advantages of joining a company you love.</li>


                            </ul>

                        </article>


                        <article class="mb-5">
                            <p class="mt-4">MLM techniques have been quite effective in the business world for long now. One can easily choose the process of MLM and let recruiters recruit more recruiters. It's almost like handing out a little part of your business to people below you. This sense of responsibility makes everyone work their best and generate mega sales in little time!</p>
                            <p class="mt-4"><?php echo "Email: $email <br> Mob: $phone <br> URL: $url " ?></p>

                        </article>


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
    <script src="js/main4.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>




</body>

</html>
<script>
    function getMap() {
        var citi = '<?php echo $_GET["city"] ?>';
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