<?php
    global $tx_switch;
?>

    <?php if ($tx_switch['section_about_us_display']) : ?>
    <!-- About Start
            ================================================== -->
        <section id="about" style="background-image: url('<?php echo $img = $tx_switch['section_about_us_background']['url']; ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow bounceIn" data-wow-delay=".2s">
                            <h1><?php echo $textarea = $tx_switch['section_about_us_title']; ?></h1>
                            <p><?php echo $textarea = $tx_switch['section_about_us_subtitle']; ?></p>
                        </div> <!-- /.Section-title -->
                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                        <div class="block">
                            <?php echo $textarea = $tx_switch['section_about_us_descriptio']; ?>
                        </div> <!-- /.block -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".7s">
                        <div class="block">
                            <img src="<?php echo $tx_switch['section_about_us_featured_img']['url'];?>" alt="">
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!--/row -->

                <?php if($tx_switch['section_testimonial_display']) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial">
                            <h2><?php echo $textarea = $tx_switch['section_testimonial_title']; ?></h2>
                            <div class="col-md-12 wow fadeInUp" data-wow-delay=".7s">
                                <div id="testimonial-slider" class="owl-carousel">
                                <?php 
                                    $limit = $tx_switch['section_testimonial_number'];
                                $args = array(
                                        'post_type'         => 'testimonial',
                                        'post_status'       => 'publish',
                                        'posts_per_page'    => $limit,
                                    );

                                    $portfolio_query = new WP_Query( $args );?>
                                <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
                                    <div>
                                        <p>
                                            <?php echo $text = get_post_meta( $post->ID, '_tx_test_description', true ); ?>
                                        </p>
                                        <div class="user">
                                            <img src="<?php echo $text = get_post_meta( $post->ID, '_tx_test_image', true ); ?>">
                                            <p class="name">
                                                <?php echo $text = get_post_meta( $post->ID, '_tx_test_name', true ); ?>
                                                
                                            </p>
                                            <p class="company">
                                                <?php echo $text = get_post_meta( $post->ID, '_tx_test_designation', true ); ?>
                                            </p>
                                        </div> <!-- /.user -->
                                    </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.testimonial -->
                    </div> <!-- /.col-md-12 -->
                </div> <!--/row -->
                <?php endif ; ?>
            </div> <!-- /.container -->
        </section> <!-- /#About -->
<?php endif; ?> 