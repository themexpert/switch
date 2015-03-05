<?php
	global $tx_switch;
?>

<?php if ($tx_switch['section_feature_display']) : ?>
        <section id="feature">
            <div class="container">
                <div class="section-title wow bounceIn" data-wow-delay=".2s" >
                    <h1><?php echo $textarea = $tx_switch['section_feature_title']; ?></h1>
                    <p><?php echo $textarea = $tx_switch['section_feature_subtitle']; ?></p>
                </div> <!-- /.section-title -->
                <div class="row">
                    <div class="col-md-12">
                        
                    </div> <!-- /.col-md-12 -->
                    <?php 
                        $limit = $tx_switch['section_feature_number'];
                    $args = array(
                            'post_type'         => 'feature',
                            'post_status'       => 'publish',
                            'posts_per_page'    => $limit,
                        );

                        $portfolio_query = new WP_Query( $args );?>
                    <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
                    
                    <!-- Service Start
                    ================================================== -->
                    <div class="col-md-4 wow fadeIn" data-wow-delay=".3s"  >
                        <div class="block drop-shadow ">
                            <div class="custom-icon">
                                <img src="<?php echo $text = get_post_meta( $post->ID, '_tx_exp_url', true ); ?>" alt="">
                            </div>
                            <h4><?php the_title() ?></h4>
                            <p>
                                <?php echo $text = get_post_meta( $post->ID, '_tx_exp_description', true ); ?>
                            </p>
                            
                        </div>
                    </div> <!-- /.col-md-4 -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div> <!--/row -->
            </div> <!-- /.container -->
        </section>

<?php endif; ?>