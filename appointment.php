        <!-- include header -->
        <?php include 'includes/header.php';?>

        <!-- Page Title -->
        <div class="page-title-area page-title-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item">
                        <h2>Get Your  Appointment</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Appointment -->
        <section class="appointment-area-two">
            <div class="container-fluid">
                <div class="row align-items-center appointment-wrap-two">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="appointment-item appointment-item-two">
                            <div class="appointment-shape">
                                <img src="assets/img/appointment/3.png" alt="Shape">
                            </div>
                            <h2>Book your appointment</h2>
                            <span>We will confirm your  appointment within 2 hours</span>
                            <div class="appointment-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-business-man-alt-1"></i>
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-ui-message"></i>
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-ui-call"></i>
                                                <label>Phone</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-hospital"></i>
                                                <label>Services</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Dental Care</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-doctor"></i>
                                                <label>Doctor</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Choose Your Doctor</option>
                                                    <option>John Smith</option>
                                                    <option>Sarah Taylor</option>
                                                    <option>Stevn King</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <i class="icofont-business-man"></i>
                                                <label>Age</label>
                                                <input type="text" class="form-control" placeholder="Your Age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn appointment-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Appointment -->

        
       
        <!-- Footer -->
        <footer class="pb-70">
            <!-- Newsletter -->
            <div class="newsletter-area">
                <div class="container">
                    <div class="row newsletter-wrap align-items-center">
                        <div class="col-lg-7">
                            <div class="newsletter-item">
                                <h2>Join Our Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="newsletter-item">
                                <div class="newsletter-form">
                                    <form class="newsletter-form" data-toggle="validator">
                                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
        
                                        <button class="btn newsletter-btn" type="submit">
                                            Subscribe
                                        </button>
        
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Newsletter -->
        </footer>
        <!-- End Footer -->

        <!-- include footer -->
        <?php include 'includes/footer.php';?>