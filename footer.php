<?php
include("database/db.php");

$query1 = $conn->prepare("SELECT * FROM footer_on_off_tb");
$query1->execute();
$result1 = $query1->fetch(PDO::FETCH_ASSOC);


?>

<!-- Footer Section Begin -->

<footer class="footer">




    <div class="container">



        <?php
        if ($result1["switch"] == "ON") {

        ?>

            <div class="row">


                <div class="col-lg-6 my-auto">

                    <div class="row">

                        <?php
                       
                        ?>

                        <div class="col-lg-6 col-sm-6 col-xs-6 border border-top-0 border-left-0">


                            <div class="footer__widget ">
                                <p class="mb-1">MLM in: </p>
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
                                        <li><a href=<?php echo "mlm-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                    <?php }
                                  
                                    ?>

                                </ul>

                            </div>


                        </div>

                        <div class="col-lg-6 col-sm-6 col-xs-6 border border-top-0 border-left-0">

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
                                        $done_cities[$z] = $city;


                                        $id = $leftIds[$i];
                                        $done_ids[$z] = $id;

                                        $z++;


                                        $ct = preg_replace('/\s+/', '-', $city);
                                        $_SESSION["$ct"] = $id;
                                    ?>
                                        <li><a href=<?php echo "network-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                    <?php }
                                    
                                    ?>

                                </ul>
                            </div>

                        </div>


                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-sm-6 col-xs-6 border border-top-0 border-left-0 border-bottom-0">
                            <div class="footer__widget">

                                <p class="mb-1 mt-4">Mlm companies in: </p>
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
                                        <li><a href=<?php echo "mlm-companies-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                    <?php }
                                   
                                    ?>

                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-xs-6 border border-top-0 border-left-0 border-bottom-0">


                            <div class="footer__widget">

                                <p class="mb-1 mt-4">Multi level marketing in: </p>
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



                                    ?>
                                        <li class=""><a href="#"><?php echo ucwords($city) ?></a></li>


                                    <?php }

                                    $left = array_diff($cities, $done_cities);

                                    $leftCities = array_values($left);

                                    $l_ids = array_diff($ids, $done_ids);
                                    $leftIds = array_values($l_ids);


                                    $totalLeftCities = count($leftCities);

                                    for ($x = 0; $x < $totalLeftCities; $x++) {

                                        $city = $leftCities[$x];


                                        $id = $leftIds[$x];


                                        $ct = preg_replace('/\s+/', '-', $city);
                                        $_SESSION["$ct"] = $id;
                                    }


                                    ?>

                                </ul>
                            </div>


                        </div>


                    </div>

                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 mt-4">
                    <div class="footer__widget blog">
                        <ul>
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



                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <form action="" method="POST" id="captcha-form">
                            <input type="text" class="form-control" placeholder="Name" name="name" required="">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            <input type="number" class="form-control" placeholder="Mobile" name="mobile" required="">
                            <input type="text" class="form-control" placeholder="City" name="city" required="">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" required="">
                            <textarea class="form-control" placeholder="Comment" name="comment" required=""></textarea>



                            <div class="g-recaptcha" data-sitekey="6Ldl5qkZAAAAAEG_OJFTYpKHKEYkxpYsKOhSYqIS"></div>

                            <br>
                            <button type="submit" class="btn mt-1">Submit</button>

                        </form>
                    </div>


                </div>
            </div>

        <?php
        }
        ?>

        <div class="row footer__copyright">

            <div class="col-lg-4 col-md-4 my-auto">
                <a href="index.php" style="font-size:x-large; font-style:bolder; color:black;">
                    <img src="images/logo.png" alt="logo" width="50px" height="50px"></a>
            </div>

            <div class="col-lg-4 col-md-4 text-center my-auto">
                <div class="footer__pages">
                    <a href="disclaimer.php">Disclaimer</a>
                    <a href="TOS.php">TOS</a>
                    <a href="privacy-policy.php">Privacy Policy</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 my-auto ">
                <div class="footer__widget__social">
                    <a href="www.fb.com"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>


        </div>

    </div>
</footer>


<!-- Footer Section End -->

<script>
    function onSubmit(token) {
        document.getElementById("captcha-form").submit();
    }
</script>