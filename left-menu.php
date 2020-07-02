<!-- Hero Section Begin -->
<button class="enquiry-btn btn" data-toggle="modal" data-target="#myModal" type="button">E<br>N<br>Q<br>U<br>I<br>R<br>Y</button>



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
                            <li><a href="mlm.php">MLM</a></li>
                            <li><a href="mlm-companies.php">mlm companies</a></li>
                            <li><a href="#">mlm company</a></li>
                            <li><a href="mlm-business.php">mlm business</a></li>
                            <li><a href="mlm-software.php">mlm software</a></li>

                        </ul>

                    </ul>

                    <ul>
                        <li>Network Marketing</li>

                        <ul>
                            <li><a href="network-marketing.php">network marketing</a></li>
                            <li><a href="#">multi level marketing</a></li>
                            <li><a href="multi-level-marketers.php">multi level marketers</a></li>
                            <li><a href="direct-marketing.php">direct marketing</a></li>
                            <li><a href="direct-selling-companies.php">direct selling companies</a></li>

                        </ul>

                    </ul>
                </div>
            </div>

            <div class="col-lg-9 slider">

                <div class="slider23 ">
                    <?php


                    $query = $conn->prepare("SELECT * FROM slider_tb");
                    $query->execute();

                    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {


                    ?>

                        <img src="images/banner/<?php echo $result['image'];  ?>" width="100%" height="400px">

                    <?php } ?>



                </div>

               

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Enquiry Form</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required=""><br>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required=""><br>
                                    <input type="number" class="form-control" placeholder="Mobile" name="mobile" required=""><br>
                                    <input type="text" class="form-control" placeholder="City" name="city" required=""><br>
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" required=""><br>
                                    <textarea class="form-control" placeholder="Comment" name="comment" required=""></textarea>

                                    <br>
                                    <div class="g-recaptcha" data-sitekey="6Ldl5qkZAAAAAEG_OJFTYpKHKEYkxpYsKOhSYqIS"></div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="submit" style="background: #7fad39; color:white;" class="btn">Submit</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div>




        </div>


    </div>

</section>



<!-- Hero Section End -->