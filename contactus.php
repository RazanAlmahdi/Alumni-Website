<link href="css/contactUs.css" rel="stylesheet" />  
<script src="js/contact.js"></script>
       <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" action = "sendMessage.php" method = "post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name = "name" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name = "email"  id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name = "phone"  id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name = "message"  id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button-->
                    <input class="viewMessage" name="Submit" id="Submit" type="Submit">
                </form>
            </div>
        </section>
       
