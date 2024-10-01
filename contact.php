<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us || Rely Enterprises</title>
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

        <div class="shortBanner d-flex align-items-center justify-content-center ">

            <h2 class="large_heading fontWeight700 font-heading">Contact Us</h2>
        </div>





        <section class="bgLight ">

            <div class="newContact containerFull rounded-1">

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details px-md-4">
                            <h3 class="heading fontWeight700 font-heading py-2 mb-md-2">Contact Us</h3>
                            <ul>
                                <li>
                                    <div class="contact-smallbox">

                                        <div class="icon-detail">
                                            <h5 class="title fontWeight700"><span><i class="fa-solid fa-location-dot"></i></span> &nbsp; Address</h5>
                                            <p class="mt-2">Office No 14, Rajiv Gandhi MHADA Commercial Complex, Near Atharva College, Ekta Nagar, Kandivali (W), Mumbai - 67 </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-smallbox">

                                        <div class="icon-detail">
                                            <h5 class="title fontWeight700"><span><i class="fa-solid fa-phone"></i></span> &nbsp; Mobile No.</h5>
                                            <p class="mt-2"><a href="#">+91 81690 98726</a></p>
                                            <p class="mt-1"><a href="#">+91 70455 61993</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-smallbox">

                                        <div class="icon-detail">
                                            <h5 class="title fontWeight700"><span><i class="fa-solid fa-envelope"></i></span> &nbsp; Email</h5>
                                            <p class="mt-2">
                                                <a href="#">relyenterprises@rediffmail.com</a>
                                            </p>
                                            <p class="mt-1">
                                                <a href="#">relyenterprises21711@gmail.com</a>
                                            </p>
                                            <p class="mt-1">

                                                <a href="#">relaible36780@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-smallbox">

                                        <div class="icon-detail d-flex">
                                            <div class="social-icons-links"><i class="fa-brands fa-facebook-f"></i></div>
                                            <div class="social-icons-links"><i class="fa-brands fa-instagram"></i></div>
                                            <div class="social-icons-links"><i class="fa-brands fa-x-twitter"></i></div>
                                            <div class="social-icons-links"><i class="fa-brands fa-linkedin-in"></i></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="newContact-form-new rounded-3 pt-md-2 p-lg-5 pb-4 p-3">
                            <h3 class="mt-2 mt-lg-5 mt-md-4 font-heading heading text-center">Get a Quote</h3>
                            <form class="mt-lg-5 mt-md-4 mt-3">
                                <div class="row">
                                    <div class="mb-md-3 mb-2 col-lg-6 form-input">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="mb-md-3 mb-2 col-lg-6 form-input">
                                        <input type="text" class="form-control" placeholder="Phone No." required>
                                    </div>
                                    <div class="mb-md-3 mb-2 col-lg-6 form-input">
                                        <input type="text" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <div class="mb-md-3 mb-2 col-lg-6 form-input">
                                        <select id="services" name="services" class="form-control">
                                            <option value="option1"><span>Services</span></option>
                                            <option value="option2">HT Transformer Maintenance</option>
                                            <option value="option3">Electrical Contracting</option>
                                            
                                        </select>
                                    </div>
                                    <div class="mb-3 col-12 form-input">
                                        <textarea class="form-control">Write a massage...</textarea>
                                    </div>

                                    <div class="form-submit col-12 px-2 ">
                                        <button type="submit" class="btnTheme py-1 py-md-2 w-100"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.5853571428597!2d72.83202847425537!3d19.213304547649674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b72dd34d944d%3A0x705746bdd0e75f74!2sEkta%20nagar!5e0!3m2!1sen!2sin!4v1726224450747!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>