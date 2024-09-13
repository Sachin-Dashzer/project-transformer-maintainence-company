<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us || RS Enterprises</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body>
    <div class="wrapper">
        <?php include 'include/header.php'; ?>

        <div class="shortBanner d-flex align-items-lg-center justify-content-center ">

            <h2 class="large_heading fontWeight700 font-heading">Contact Us</h2>
        </div>





        <section class="position-relative">
            <div class="container contact-details">
                <div class="row">
                    <div

                        class="col-md-4">
                        <div class="text-center pb-5 pt-0">
                            <div
                                class="icon-lg border mb-3">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <h5>Phone No.</h5>
                            <p class="mb-0"><a href="#">+91 96897 68282</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center pb-5 pt-0">
                            <div
                                class="icon-lg border mb-3">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <h5>Email</h5>
                            <p class="mb-0"><a href="#">relyenterprises@rediffmail.com</a><br>
                        </p>
                        <p>
                                <a href="#">relyenterprises21711@gmail.com</a>

                            </p>
                        </div>
                    </div>

                    <div
                        class="col-md-4">
                        <div class="text-center pb-5 pt-0">
                            <div
                                class="icon-lg border mb-3">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <h5>Address</h5>
                            <p class="mb-0">Office No 14, Rajiv Gandhi MHADA Commercial Complex, Near Atharva College, Ekta Nagar, Kandivali (W), Mumbai - 67 </p>
                        </div>
                    </div>
                </div>


            </div>



            <div class="newContact containerFull bgLight rounded-1">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.5853571428597!2d72.83202847425537!3d19.213304547649674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b72dd34d944d%3A0x705746bdd0e75f74!2sEkta%20nagar!5e0!3m2!1sen!2sin!4v1726224450747!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newContact-form px-5">
                            <h3 class="mt-5 font-heading heading text-center">Get a Quote</h3>
                            <form class="mt-5">
                                <div class="row">
                                    <div class="mb-3 col-6 form-input">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="mb-3 col-6 form-input">
                                        <input type="text" class="form-control" placeholder="Phone No." required>
                                    </div>
                                    <div class="mb-3 col-6 form-input">
                                        <input type="text" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <div class="mb-3 col-6 form-input">
                                        <input type="text" class="form-control" placeholder="Input" required>
                                    </div>
                                    <div class="mb-3 col-12 form-input">
                                        <textarea class="form-control">Write a massage...</textarea>
                                    </div>
                                    <div class="form-check col-10 offset-1 px-2 form-checkbox">
                                        <input type="checkbox" class="form-check-input" id="termsCheck">
                                        <label class="form-check-label" for="termsCheck">I agree with all conditions</label>
                                    </div>
                                    <div class="form-submit col-12 px-2 ">
                                        <button type="submit" class="btnTheme py-1 w-100"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="bgTower">
                <img src="images/icons/bg-icon.png" alt="">
            </div>

        </section>


        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>