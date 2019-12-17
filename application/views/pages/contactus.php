<?php

$this->load->view('layout/header');
?>
<style>
    .shop_timing{
        float: left;
        width: 135px;
    }
</style>

<!-- MAP -->

<div style="clear: both"></div>
<!-- Content -->
<div id=""> 
    <!-- Contact Us -->
    <section class="lets-talk pad-t-b-30">
        <div class="container"> 
            <!-- Cantact Us -->
            <div class="row">
                <div class="col-md-6 contact-social"> 

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Our Location</h3>
                    </div>
                    <ul class="studio-loc padding-right-100">
                      <div class="widget clearfix">
                                    <div>
                                        <h5><i class='icon-map-marker'></i> Address:</h5>
                                        <address class="nobottommargin">
                                            <div class="text-muted">
                                                <p class="nobottommargin">
                                                    Flat D3 11/F, Mirador Mansion,<br/>
                                                    54-64B Nathan Rd,<br/>
                                                    Kowloon 
                                                    Hong Kong
                                                </p>
                                            </div>
                                        </address>
                                    </div>
                                </div>
                      <div class="widget clearfix">
                                    <div>
                                        <h5><i class='icon-phone-sign'></i> Contact:</h5>
                                        <address class="nobottommargin">
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> +(852) 3619 7457<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> sales@hkwoolentextile.com
                                        </address>
                                    </div>
                                </div>  
                    </ul>

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-20 margin-top-30">
                        <h3 class="text-transform-none letter-space-0">Follow Us</h3>
                    </div>
                    <div class="social-links">
                               <div class="topmargin-sm clearfix">
                                    <a href="#" class="social-icon si-small si-colored si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small si-colored si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small si-colored si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>


                                    <a href="#" class="social-icon si-small si-colored si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>



                                    <a href="#" class="social-icon si-small si-colored si-youtube">
                                        <i class="icon-youtube"></i>
                                        <i class="icon-youtube"></i>
                                    </a>
                                </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-sm-6">
                    <!-- Main Heading -->
                    <div class="heading-block left-align margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Conatct Us</h3>
                    </div>

                 <div class="postcontent nobottommargin" style="width: 100%;">

						

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Enquiry">Enquiry</option>
										<option value="Feedback">Feedback</option>

									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

							</form>
						</div>

					</div><!-- .postcontent end -->
                </div>
            </div>
            <div class="goldline2 " style="margin-bottom: 30px;"></div>
        </div>

    </section>
</div>

<?php

$this->load->view('layout/footer');
?>