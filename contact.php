    <!-- include header -->
    <?php $page = 'contact';include 'includes/header.php';?>

        <!-- Page Title -->
        <div class="page-title-area page-title-six">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Location -->
        <div class="location-area">
            <div class="container">
                <div class="row location-wrap">
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-location-pin" style="float: left;margin-right:15px"></i>
                            <h3>Location</h3>
                            <p>5th Floor, Nidan Hospital Building, <br> Pulchowk Road (Opposite Sajha <br> Petrol Pump),
                                Lalitpur, Nepal</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-ui-message" style="float: left;margin-right:15px"></i>
                            <h3>Email</h3>
                            <ul>
                                <li>info@niflc.com.np</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-ui-call" style="float: left;margin-right:15px"></i>
                            <h3>Phone</h3>
                            <ul>
                                <li>+977-01-5555499</li>
                                <li>9813755826</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Location -->

        

        <!-- Drop -->
        <section class="drop-area pt-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 p-0">
                        <div class="drop-item drop-img">
                            <div class="drop-left">
                                <h2>Drop your message for any info or question.</h2>
                                <form id="contactForm">
									<div class="row">
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-md-12 col-lg-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-md-12 col-lg-12">
											<button type="submit" class="drop-btn">
												Send
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="speciality-item speciality-right speciality-right-two speciality-right-three">
                            <!-- <img src="assets/img/home-two/4.jpg" alt="Contact"> -->
                            <div class="speciality-emergency">
                                <div class="speciality-icon">
                                    <i class="icofont-ui-call"></i>
                                </div>
                                <h3>Contact Us</h3>
                                <p>+977-01-5555499</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Drop -->

        <!-- Map -->
        <!-- Start Map Area -->
		<div class="contact-map-area">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.251747891352!2d85.31420101438395!3d27.67861303336242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4fa865b23%3A0xe71743be65a18cbd!2sNepal%20International%20Fertility%20%26%20Laparoscopic%20Centre%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1604543786988!5m2!1sen!2snp" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- End Map Area -->
        <!-- End Map -->

        
    
    <!-- include footer -->
    <?php include 'includes/footer.php';?>