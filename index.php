<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>RS Enterprises</title>
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

      <div class="heroBanner">
         <div class="banner-container">
            <div class="bannerContent">

               <h1 class="font-heading fontWeight700 ">Rely Enterprises </h1>
               <h2 class="font-heading fontWeight600">
                  is into <span class="text-primary">Transformer</span> Maintenance
               </h2>

               <div class="bannerBtn d-flex gap-4 mt-5">
                  <button class="btnTheme w-50 py-2"><span>Explore More</span></button>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio est veritatis neque quidem omnis placeat porro dignissimos fuga ipsam minima!</p>
               </div>
            </div>
            <div class="social-links">

               <div class="banner-icons"><i class="fa-brands fa-facebook-f"></i></div>
               <div class="banner-icons"><i class="fa-brands fa-instagram"></i></div>
               <div class="banner-icons"><i class="fa-brands fa-x-twitter"></i></div>
            </div>

         </div>
         <div class="banner-video">
            <video src="images/hero-banner.mp4" autoplay loop muted></video>

         </div>
      </div>


      <!-- 
      <section>
         <div class="containerFull">
            <div class="services-Container">
               <div class="row gap-4">
                  <div class="col-3 p-3">
                     <div class="serviceBox">
                        <div class="service_img">
                           <img src="" alt="">

                        </div>
                        <div class="service_content"></div>
                     </div>
                  </div>
                  <div class="col-3 p-3">
                     <div class="serviceBox">
                        <div class="service_img">
                           <img src="" alt="">
                        </div>
                        <div class="service_content"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
 -->



      <section class="pb-5">
         <div class="containerFull">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="py-5">
                     <h3 class="font-heading heading text-primary">Who we are</h3>
                     <p class="small_heading mb-3 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. dicta, vitae eaque tempora.
                     </p>
                     <p class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem inventore autem rem ratione id quas cum error optio ducimus laudantium numquam quis fuga soluta saepe impedit dicta, vitae eaque tempora.
                     </p>
                     <div class="row g-5 mt-2">
                        <div class="col-md-6">
                           <ul class="mb-3">
                              <li class="d-flex mb-3">
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                       width="16" height="16"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-secondary opacity-75"
                                       viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2 title">Aenean eu leo quam
                                    ornare curabitur blandit
                                    tempus.</span>
                              </li>
                              <li class="d-flex">
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                       width="16" height="16"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-secondary opacity-75"
                                       viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2 title">Lorem ipsum dolor sit
                                    amet consectetur.</span>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-6">
                           <ul class="list-unstyled mb-0">
                              <li class="d-flex mb-3">
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                       width="16" height="16"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-secondary opacity-75"
                                       viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2 title">Consectetur dolor
                                    sit, amet sectetur
                                    adipisicing.</span>
                              </li>
                              <li class="d-flex">
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                       width="16" height="16"
                                       fill="currentColor"
                                       class="bi bi-check-circle-fill text-secondary opacity-75"
                                       viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2 title">Mollitia qui sit
                                    velit, facere, quasi quisquam
                                    unde.</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-6 short-about-img">
                        <a href="#!">
                           <div class="rounded-3 about-image"><img src="images/about-1.jpg" alt=""></div>
                        </a>
                        <a href="#!">
                           <div class="rounded-3 about-image"><img src="images/about-2.jpg" alt=""></div>
                        </a>
                     </div>
                     <div class="col-lg-6">
                        <a href="#!">
                           <div class="rounded-3 about-image"><img src="images/about-3.jpg" alt=""></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <div class="container-fluid">
         <div class="row">

            <div class="col-md-6 left-section">
               <h6>SUSTAINABILITY</h6>
               <h2 class="mt-2 font-heading">Committed to keep people healthy & safe</h2>
               <p class="mt-2">Benefit of the socie where we operate. A success website obusly needs great design to be one.</p>
               <a href="#" class="btn btn-custom">Work with us</a>
            </div>

            <div class="col-md-6 right-section">
               <h2 class="font-heading">We are best in the field</h2>
               <p class="title mt-3">Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT.</p>

               <div class="row pt-3 pe-5">
                  <div class="icon-text col-6">
                     <i class="fa-brands fa-pagelines"></i>
                     <span>Sustainability</span>
                  </div>
                  <div class="icon-text col-6">
                     <i class="bi bi-clock"></i>
                     <span>Project on time</span>
                  </div>
                  <div class="icon-text col-6">
                     <i class="bi bi-laptop"></i>
                     <span>Modern Tech</span>
                  </div>
                  <div class="icon-text col-6">
                     <i class="bi bi-card-text"></i>
                     <span>Latest Design</span>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <section>
         <div class="containerFull">
            <h4 class="text fontWeight600 text_primary lineBorder">Our Projects</h4>
            <h3 class="heading fontHeading fontWeight600 mt-3">Residential & Commercial Projects</h3>
            <div class="projectTabHomes">
               <ul>
                  <li class="active" data-tab="all">All</li>
                  <li data-tab="developer">Completed</li>
                  <li data-tab="contractor">Ongoing</li>
               </ul>
            </div>
            <div class="contentHome">
               <div class="itemContent" id="all">
                  <div class="projectSlider">
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-1.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">S.B.I. Milan CHS Ltd.</h4>
                              <p class="my-2 mt-1">Veera Desai Road, Andheri (West)</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-2.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">WITTY WORLD (SCHOOL)</h4>
                              <p class="my-2 mt-1">BANGUR NAGAR, GOREGAON (W).</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-1.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">S.B.I. Milan CHS Ltd.</h4>
                              <p class="my-2 mt-1">Veera Desai Road, Andheri (West)</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-2.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">WITTY WORLD (SCHOOL)</h4>
                              <p class="my-2 mt-1">BANGUR NAGAR, GOREGAON (W).</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-1.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">S.B.I. Milan CHS Ltd.</h4>
                              <p class="my-2 mt-1">Veera Desai Road, Andheri (West)</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                     <div class="itemProject">
                        <div class="innerProject">
                           <div class="projectImg">
                              <img src="images/project-2.jpg" />
                           </div>
                           <div class="projectNameHome">
                              <h4 class="small_heading fontWeight700 fontHeading">WITTY WORLD (SCHOOL)</h4>
                              <p class="my-2 mt-1">BANGUR NAGAR, GOREGAON (W).</p>
                              <a href="#" class="mb-2">View More</a>

                           </div>
                        </div>



                     </div>
                  </div>
               </div>
            </div>
      </section>


      <section>
         <div class="containerFull">


            <h2 class="large_heading fontWeight700 font-heading text-center">Some of our latest works.</h2>


            <div class="project-container mt-5">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="project_img rounded-3 bg-dark">
                        <img src="images/project-1.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="project-content text-center">
                        <h3 class="heading">S.B.I. Milan CHS Ltd. </h3>
                        <h4 class="title mt-3">Veera Desai Road, Andheri (West)</h4>
                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam veniam sed quae amet a nobis necessitatibus corrupti fugit quos quasi?</p>
                        <a href="#" class="py-2 px-4 mt-4 btnTheme"><span>View More</span></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="project-container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="project-content text-center">
                        <h3 class="heading">WITTY WORLD (SCHOOL)</h3>
                        <h4 class="title mt-3">BANGUR NAGAR, GOREGAON (W).</h4>
                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam veniam sed quae amet a nobis necessitatibus corrupti fugit quos quasi?</p>
                        <a href="#" class="py-2 px-4 mt-4 btnTheme"><span>View More</span></a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="project_img rounded-3 bg-dark">
                        <img src="images/project-2.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </section>




      <div>
         <div class="containerFull bg-new py-5 text-center">
            <h2 class="large_heading font-heading fontweight700 my-4">Partners</h2>
            <p class="mb-3 title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam assumenda animi, similique tempore <br> quaerat sequi, dolore quos inventore at ab ullam labore!</p>

            <div class="row">
               <div class="col-lg-10 offset-1">
                  <div class="partner-slider">
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                     <div class="item-slider p-4">
                        <div class="clientLogo">
                           <img src="images/google.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <button type="button" class="btn text px-4 py-2 btn-primary mt-3 mb-5">All Partners</button>
         </div>
      </div>




      <section>
         <div class="containerFull">
            <h3 class="heading font-heading text-center text-decoration-underline">Our Testimonials</h3>

            <div class="testimonial-container mt-5">
               <div class="testimonial-slider">
                  <div class="testimonial-box text-center p-5">
                     <div class="textimonial-img">
                        <img src="images/dummy.jpg" alt="">
                     </div>
                     <h3 class="title fontWeight700 font-secondary">Lorem Epsum</h3>
                     <p class="mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut quidem architecto nostrum consectetur libero incidunt, est corrupti atque eius.</p>
                  </div>

                  <div class="testimonial-box text-center p-5">
                     <div class="textimonial-img">
                        <img src="images/dummy.jpg" alt="">
                     </div>
                     <h3 class="title fontWeight700 font-secondary">Lorem Epsum</h3>
                     <p class="mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut quidem architecto nostrum consectetur libero incidunt, est corrupti atque eius.</p>
                  </div>

                  <div class="testimonial-box text-center p-5">
                     <div class="textimonial-img">
                        <img src="images/dummy.jpg" alt="">
                     </div>
                     <h3 class="title fontWeight700 font-secondary">Lorem Epsum</h3>
                     <p class="mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut quidem architecto nostrum consectetur libero incidunt, est corrupti atque eius.</p>
                  </div>

                  <div class="testimonial-box text-center p-5">
                     <div class="textimonial-img">
                        <img src="images/dummy.jpg" alt="">
                     </div>
                     <h3 class="title fontWeight700 font-secondary">Lorem Epsum</h3>
                     <p class="mt-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut quidem architecto nostrum consectetur libero incidunt, est corrupti atque eius.</p>
                  </div>
               </div>

            </div>

         </div>
      </section>



      <section>
         <div class="container">
            <div class="row align-items-center" style="min-height: 400px;">

               <div class="col-md-6 form-container">
                  <h3 class="form-heading text-center">Get a Quote</h3>
                  <form>
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
                           <button type="submit" class="btn btn-primary w-100">Button Text</button>
                        </div>
                     </div>
                  </form>



               </div>


               <div class="col-md-6 image-placeholder">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30766738.48171446!2d60.9691763862997!3d19.725163578221917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1725712589053!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </section>



      <?php include 'include/footer.php'; ?>
   </div>
   <?php include 'include/footer-links.php'; ?>
</body>

</html>