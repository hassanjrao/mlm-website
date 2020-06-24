<!-- Hero Section Begin -->
<section class="hero pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        <ul>
                            <li>MLM</li>

                            <ul>
                                <li><a href="#">MLM</a></li>
                                <li><a href="mlm-companies.php">mlm companies</a></li>
                                <li><a href="#">mlm company</a></li>
                                <li><a href="mlm-business.php">mlm business</a></li>
                                <li><a href="mlm-software.php">mlm software</a></li>

                            </ul>

                        </ul>

                        <ul>
                            <li>Network Marketing</li>

                            <ul>
                                <li><a href="#">network marketing</a></li>
                                <li><a href="#">multi level marketing</a></li>
                                <li><a href="multi-level-marketers.php">multi level marketers</a></li>
                                <li><a href="direct-marketing.php">direct marketing</a></li>
                                <li><a href="direct-selling-companies.php">direct selling companies</a></li>

                            </ul>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-9  slider23 pl-5 pr-5">

                    <?php


                    $query = $conn->prepare("SELECT * FROM slider_tb");
                    $query->execute();

                    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {


                    ?>

                        <img class="img-fluid" src="images/banner/<?php echo $result['image'];  ?>" width="100%">

                    <?php } ?>





                </div>


            </div>
        </div>
    </section>
    <!-- Hero Section End -->
