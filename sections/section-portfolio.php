<?php global $tx_switch ?>

<?php if($tx_switch['section_portfolio_display']) : ?>
    <!-- Portfolio Start
            ================================================== -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title wow bounceIn" data-wow-delay=".2s">
                     <h1><?php echo $textarea = $tx_switch['section_portfolio_title']; ?></h1>
                    <p><?php echo $textarea = $tx_switch['section_portfolio_subtitle']; ?></p>
                </div> <!-- /.Section title -->
                <div id="portfolio-body" class="col-md-12  wow fadeInUp" data-wow-delay=".6s" >
                    <?php
                        $terms = get_terms('filters');
                        $count = count($terms);
                        if ( $count > 0 ){
                        echo '<ul class="portfolio-filter" id="projects-filter">';
                        echo '<li data-filter="*" class="active">All</li>';
                        foreach ( $terms as $term ) {
                            $termname = strtolower($term->name);  
                            $termname = str_replace(' ', '-', $termname);  
                            echo '<li data-filter="' . '.' . $termname . '">' . $term->name . '</li>';
                        }
                        echo '</ul>';
                        }
                    ?>
                    <div class="portfolio-container">
                        <ul id="da-thumbs" class="da-thumbs " >
                        <?php 
                            $args = array(
                                    'post_type'         => 'portfolio',
                                    'post_status'       => 'publish',
                                );

                                $portfolio_query = new WP_Query( $args );?>
                            <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>

                            <li <?php echo post_class();?>>
                                <a href="">
                                    <img src="<?php echo $text = get_post_meta( $post->ID, '_tx_portfolio_img', true ); ?>">
                                    <div></div>    
                                </a>
                                <span class="portfolio-buttons">
                                    <a class="test-popup-link" href="<?php echo $text = get_post_meta( $post->ID, '_tx_portfolio_img', true ); ?>   " >
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="<?php echo $text = get_post_meta( $post->ID, '_tx_portfolio_link', true ); ?>" target="_blank">
                                        <i class="fa fa fa-link"></i>
                                    </a>
                                </span>
                            </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        </ul>  <!-- /.da-thumbs -->
                    </div>  <!-- /.portfolio container -->
                </div> <!-- /.col-md-12 -->
            </div> <!--/row -->
        </div> <!-- /.container -->
    </section> <!-- /#Portfolio -->
<?php endif ; ?>