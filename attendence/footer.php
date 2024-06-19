<?php
$product = array(
    array(
        'text' => 'Web Development',
        // 'link' => '../../web.php',
    ),
    array(
        'text' => 'Internet of Things',
        // 'link' => '../../iot.php',
    ),
    array(
        'text' => 'Machine Learning',
        // 'link' => '../../ml.php',
    )
);

$usefullinks = array(
    array(
        'text' => 'Home',
        // 'link' => '../../index.php',
    ),
    array(
        'text' => 'About Us',
        // 'link' => '../../about.php',
    ),
    array(
        'text' => 'contact us',
        // 'link' => '../../contact.php',
    )
);

$addrerss = array(
    array(
        'text' => 'admin@miphub.in',
        'link' => '',
    ),

)
?>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
            <!-- <span>Get connected with us on social networks:</span> -->
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <!-- <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-facebook-f"></i>
            </a> -->
            <!-- <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-linkedin"></i>
            </a> -->
            <!-- <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-instagram"></i>
            </a>
            
            <a href="" class="text-white me-4 social_icon">
                <i class="fab fa-github"></i>
            </a> -->
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold">MIP</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Machine Intelligence Program
                    </p>
                    <address>
                        NCAIR office, 2nd Floor, Pre-Engineered Building,<br>
                        Opp. Hillside Power house, <br>
                        IIT-Bombay, Powai, Mumbai- 400076<br>
                        Ph. +91.22.25764946
                    </address>
                </div>
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <?php foreach ($addrerss as $item) : ?>
                        <p>
                            <i class="fas fa-email mr-3"></i><a href="<?php echo $item['link']; ?>" class="text-white"><?php echo $item['text']; ?></a>
                        </p>
                    <?php endforeach; ?>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

</footer>
<!-- Footer -->

<!-- </div> -->
<!-- End of .container -->