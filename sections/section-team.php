<?php global $tx_switch ?>
    <?php if($tx_switch['section_team_display']) : ?>
        <!-- Team Start
            ================================================== -->
        <section id="team">
            <div class="container">
                <div class="section-title wow bounceIn" data-wow-delay=".2s" >
                        <h1><?php echo $textarea = $tx_switch['section_team_title']; ?></h1>
                        <p><?php echo $textarea = $tx_switch['section_team_subtitle']; ?></p>
                    </div> <!-- /.Section Title -->
                <div class="row">
                    <?php 
                        $limit = $tx_switch['section_team_number'];
                    $args = array(
                            'post_type'         => 'team',
                            'post_status'       => 'publish',
                            'posts_per_page'    => $limit,
                        );

                        $portfolio_query = new WP_Query( $args );?>
                    <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="thumbnail">
                            <div class="ih-item circle effect1 media-object">
                                    <div class="spin"></div>
                                    <div class="img"><img src="<?php echo $text = get_post_meta( $post->ID, '_tx_team_img', true ); ?>">
                                    </div>
                            </div> <!-- /.ih-item -->
                            <div class="caption">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo $text = get_post_meta( $post->ID, '_tx_team_description', true ); ?></p>
                                <ul class="social-icon">
                                    
                                    <?php 
                                        $fb = get_post_meta( $post->ID, '_tx_team_facebook_link', true );
                                        if(!empty($fb)){ ?>
                                            <li>
                                            <a class="facebook-icon" target="_blank" href="<?php echo $fb ;?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php 
                                        $twitter = get_post_meta( $post->ID, '_tx_team_twitter_link', true );
                                        if(!empty($twitter)){ ?>
                                            <li>
                                            <a  target="_blank" href="<?php echo $twitter ;?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php 
                                        $linkedin = get_post_meta( $post->ID, '_tx_team_linkedin_link', true );
                                        if(!empty($linkedin)){ ?>
                                            <li>
                                            <a  target="_blank" href="<?php echo $linkedin ;?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php 
                                        $dribbble = get_post_meta( $post->ID, '_tx_team_dribbble_link', true );
                                        if(!empty($dribbble)){ ?>
                                            <li>
                                            <a  target="_blank" href="<?php echo $dribbble ;?>">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    <?php } ?>

                                  
                                </ul> <!-- /.social-icon -->
                            </div> <!-- /.caption -->
                        </div> <!-- /.thumbnail -->
                    </div> <!-- /.col-md-4 -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div> <!--/row -->
            </div> <!-- /.container -->
        </section> <!-- /#Team -->
<?php endif ; ?>