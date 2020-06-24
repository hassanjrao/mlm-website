<?php
include("database/db.php");

?>


<!-- Footer Section Begin -->


<button type="button" class="btn btn-info float-right mt-1 mr-1" data-toggle="collapse" data-target="#bottom"><i class="fas fa-plus-circle"></i></button>


<footer class="footer spad">


    <div class="container">

        <div id="bottom" class="collapse show">
            <div class="row">


                <div class="col-lg-6 ">

                    <div class="row">

                        <?php
                        $ind = 0;
                        $cts = array();
                        $ids = array();

                        $query = $conn->prepare("SELECT * FROM cities_tb");
                        $query->execute();

                        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                            $cts[$ind] = $result["city"];
                            $ids[$ind] = $result["id"];
                            $ind++;
                        }

                        $cities = array_unique($cts);

                        $totalCities = count($cities);

                        $n = range(0, $totalCities - 1);
                        shuffle($n);

                        ?>

                        <div class="col-lg-6 border border-top-0 border-left-0">


                            <div class="footer__widget ">
                                <p class="mb-1">MLM in: </p>
                                <ul>
                                    <?php

                                    for ($x = 0; $x < 5; $x++) {
                                        $i = $n[$x];

                                        $city = $cities[$i];
                                        $id = $ids[$i];


                                        $done_cities[$x] = $city;
                                        $done_ids[$x] = $id;


                                        $ct = preg_replace('/\s+/', '-', $city);
                                        $_SESSION["$ct"] = $id;
                                    ?>
                                        <li class="ml-2"><a target="_blank" href=<?php echo "mlm-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

                                    <?php
                                    }

                                    ?>


                                </ul>

                            </div>


                        </div>

                        <div class="col-lg-6 border border-top-0 border-left-0">

                            <div class="footer__widget">

                                <p class="mb-1">Network Marketing in:</p>
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
                                        $done_cities[$x] = $city;

                                        $id = $leftIds[$i];
                                        $done_ids[$x] = $id;


                                    ?>

                                        <li class="ml-3"><a href="#"><?php echo ucwords($city) ?></a></li>


                                    <?php }
                                    ?>

                                </ul>
                            </div>

                        </div>


                    </div>

                    <div class="row">

                        <div class="col-lg-6 border border-top-0 border-left-0 border-bottom-0">
                            <div class="footer__widget">

                                <p class="mb-1 mt-4">Mlm companies: </p>
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
                                        $done_cities[$x] = $city;


                                        $id = $leftIds[$i];
                                        $done_ids[$x] = $id;




                                        $ct = preg_replace('/\s+/', '-', $city);
                                        $_SESSION["$ct"] = $id;
                                    ?>
                                        <li class="ml-2"><a target="_blank" href=<?php echo "mlm-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                    <?php }
                                    ?>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 border border-top-0 border-left-0 border-bottom-0">


                            <div class="footer__widget">

                                <p class="mb-1 mt-4">Multi level marketing: </p>
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

                                    ?>
                                        <li class="ml-3"><a href="#"><?php echo ucwords($city) ?></a></li>


                                    <?php }
                                    ?>

                                </ul>
                            </div>


                        </div>


                    </div>

                </div>

                <div class="col-lg-3 my-auto border border-top-0 border-left-0 border-bottom-0">
                    <div class="footer__widget">
                        <ul class="text-center">
                            <li><a href="#">Blog Links 1</a></li>
                            <li><a href="#">Blog Links 2</a></li>
                            <li><a href="#">Blog Links 3</a></li>
                            <li><a href="#">Blog Links 4</a></li>
                            <li><a href="#">Blog Links 5</a></li>
                            <li><a href="#">Blog Links 6</a></li>
                            <li><a href="#">Blog Links 7</a></li>
                            <li><a href="#">Blog Links 8</a></li>
                            <li><a href="#">Blog Links 9</a></li>
                            <li><a href="#">Blog Links 10</a></li>

                        </ul>
                    </div>
                </div>



                <div class="col-lg-3 my-auto ">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html" style="font-size:x-large; font-style:bolder; color:black;"> LOGO
                                <!--<img src="img/logo.png" alt="">--></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 Pakistan</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: someone@mail.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            Footer
                        </p>
                    </div>
                    <div class="footer__copyright__payment">
                        <!--<img src="img/payment-item.png" alt="">-->Something here</div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Footer Section End -->