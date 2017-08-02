<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>
<body class="wide">
    

    <!-- WRAPPER -->
    <div class="wrapper">

<?php 
    include "header.php";
?>
        
   <!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light" data-stellar-background-ratio="0.9" style="background-image: url(images/ePropel_AboutUs.png)"> <!-- images/parallax/14.jpg -->
	<div class="background-overlay"></div>
	<div class="container">
		<div class="page-title col-md-8">
			<h1 class="text-uppercase text-medium">CONTACT US</h1>
			<!-- <span>Work is easy when you have all tools around you!</span> -->
		</div>
	</div>
</section>
<!-- END: PAGE TITLE -->
        
        <!-- CONTENT -->
        
        
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <p>Ready to propel your business forward? Feel free to send us a quick message and we will get in touch with you in 24 hours to get a free quote and see how we can help you. We are available 24/7 at any time of the week. Whether you want to meet us during work hours, after your work hours, or on weekends, we will be happy to meet you by appointment.
                        
                        </p>

                        


                        <!-- <div class="row m-t-40">
                            <div class="col-md-6">
                                <address>
			  <strong>Polo, Inc.</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
                            </div>
                            <div class="col-md-6">
                                <address>
			  <strong>Polo Office</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
                            </div>
                        </div> -->




                       <!-- <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>-->
                    </div> 

                    <div class="col-md-12">
                        <form id="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                            <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                        <script type="text/javascript">
                            jQuery("#widget-contact-form").validate({

                                submitHandler: function(form) {

                                    jQuery(form).ajaxSubmit({
                                        success: function(text) {
                                            if (text.response == 'success') {
                                                $.notify({
                                                    message: "We have <strong>successfully</strong> received your Message and will get back to you as soon as possible."
                                                }, {
                                                    type: 'success'
                                                });
                                                $(form)[0].reset();

                                            } else {
                                                $.notify({
                                                    message: text.message
                                                }, {
                                                    type: 'danger'
                                                });
                                            }
                                        }
                                    });
                                }
                            });

                        </script>
                    </div>

                </div>
            </div>
        </section>
        <!-- END: CONTENT -->
        
        <!-- FOOTER -->
        <footer class="background-dark text-grey" id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row text-center">
                        <img alt="ePropel" src="/images/ePropel.png" style="height:90px;" >
                        <div class="copyright-text text-center"> &copy; 2016 ePropel. All Rights Reserved. 
                        </div>
                        <div class="social-icons center">
                                    <ul>
                                        <li class="social-facebook"><a href="https://www.facebook.com/ePropel" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="https://www.instagram.com/ePropel_CA" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <!-- <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->

                                    </ul>
                                </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: FOOTER -->

    </div>
    <!-- END: WRAPPER -->

    <!-- GO TOP BUTTON -->
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme-functions.js"></script>

    <!-- Custom js file -->
            <script async src="js/custom.js"></script>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3361479.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>
