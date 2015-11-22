<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package switch
 */
?>

<?php global $tx_switch; ?>

    <!-- Footer Start
            ================================================== -->
        <footer id="footer" class="clearfix" >
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".7s">
                    <p class="copyright"><?php echo $tx_switch['switch_copyright']?></p>
                    <?php if($tx_switch['themexpert_credit']):?>
                        <p class="tx-credit">Design and Developed by <a href="https://www.themexpert.com" title="WordPress Themes by ThemeXpert">ThemeXpert</a></p>
                    <?php else: ?>
                        <a href="https://www.themexpert.com" title="WordPress Themes by ThemeXpert"></a>
                    <?php endif; ?>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6  wow fadeInRight" data-wow-delay=".7s">
                    <ul class="social-icon">
                        <?php 
                            $footer_fb = $tx_switch['footer_facebook_link'] ;
                            if(!empty($footer_fb)){ ?>
                                <li>
                                <a class="fb"  target="_blank" href="<?php echo $footer_fb ;?>">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        <?php } ?>

                        <?php 
                            $footer_twitter =$tx_switch['footer_twitter_link'];
                            if(!empty($footer_twitter)){ ?>
                                <li>
                                <a class="twitter"  target="_blank" href="<?php echo $footer_twitter ;?>">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        <?php } ?>

                        <?php 
                            $footer_linkedin =$tx_switch['footer_linkedin_link'];
                            if(!empty($footer_linkedin)){ ?>
                                <li>
                                <a class="linkedin"  target="_blank" href="<?php echo $footer_linkedin ;?>">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        <?php } ?>

                        <?php 
                            $footer_pinterest =$tx_switch['footer_pinterest_link'];
                            if(!empty($footer_pinterest)){ ?>
                                <li>
                                <a class="pinterest"  target="_blank" href="<?php echo $footer_pinterest ;?>">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        <?php } ?>

                        <?php 
                            $footer_dribbble =$tx_switch['footer_dribbble_link'];
                            if(!empty($footer_dribbble)){ ?>
                                <li>
                                <a class="dribbble"  target="_blank" href="<?php echo $footer_dribbble ;?>">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </footer> <!--/#Footer -->
<?php wp_footer(); ?>
</body>
</html>
