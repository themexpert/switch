<?php global $tx_switch ?>

<?php if($tx_switch['section_contact_display']) : ?>
	<!-- Contact  Start
            ================================================== -->
        <section id="contact"  class="wow fadeInUp" data-wow-delay=".5s">
            <!-- Map -->
            <div class="map">
                 <iframe src="<?php echo $textarea = $tx_switch['section_contact_map'] ; ?>"  frameborder="0" style="border:0"></iframe>
            </div> <!-- map -->
            <div class="row">
                <div class="col-md-6 contact-form">
                    <h2 class="text-center">
                        <?php echo $textarea = $tx_switch['section_contact_title']; ?></h2>
                    <!-- Contact-form -->
                    <?php  
                            $f = $tx_switch['section_contact_form']; 
                            echo do_shortcode($f);
                        ?>
                    </div> <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <address>
                        <ul>
                            <li class="wow fadeInRight" data-wow-delay=".8s">
                                <span>
                                    <i class="fa fa-building-o"></i>
                                </span>
                                <p>
                                   <?php echo $textarea = $tx_switch['section_contact_address']; ?>
                                </p>
                            </li>
                            <li class="wow fadeInRight" data-wow-delay="1.1s">
                                <span>
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <p>
                                    <?php echo $textarea = $tx_switch['section_contact_email']; ?>
                                </p>
                            </li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">
                                <span>
                                    <i class="fa fa-phone"></i>
                                </span>
                                <p>
                                   <?php echo $textarea = $tx_switch['section_contact_phone']; ?>
                                </p>
                            </li>
                        </ul>
                    </address> <!--/address --> 
                </div> <!-- /.col-md-6 -->
            </div> <!--/row -->
        </section>
<?php endif ; ?>