<?php
/**
* Template Name: Home page
*/

    get_header();
    global $tx_switch;
    $interval = ( $tx_switch['auto_slide'] ) ? $tx_switch['slide_interval'] : 'false';    
?>
<!-- Hero Area Start
================================================== -->
<section id="hero-unit" class="clearfix">
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="<?php echo $interval; ?>">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner ">
            <div class="item active slider-1" style="background-image: url('<?php echo $img = $tx_switch['slider1_bg']['url']; ?>');">
                <div class="carousel-caption ">
                    <h1 class="animated animate-delay-1 slideInRight">
                    <?php echo $textarea = $tx_switch['slider1_heading']; ?></h1>
                    <p class="animated animate-delay-2 fadeInLeft ">
                        <?php echo $textarea = $tx_switch['slider1_description']; ?>
                    </p>
                    <div class="animated fadeInUp animate-delay-3">
                        <div class="btn-line">
                            <a href="<?php echo $textarea = $tx_switch['slider1_button_link']; ?>">
                                <p><?php echo $textarea = $tx_switch['slider1_button_text']; ?></p>
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slider-2" style="background-image: url('<?php echo $img = $tx_switch['slider2_bg']['url']; ?>');">
                <div class="carousel-caption">
                    <h1 class="animated animate-delay-1 slideInRight"><?php echo $textarea = $tx_switch['slider2_heading']; ?></h1>
                    <p class="animated animate-delay-2 fadeInLeft ">
                        <?php echo $textarea = $tx_switch['slider2_description']; ?>
                    </p>
                    <div class="animated fadeInUp animate-delay-3">
                        <div class="btn-line">
                            <a href="<?php echo $textarea = $tx_switch['slider2_button_link']; ?>">
                                <p><?php echo $textarea = $tx_switch['slider2_button_text']; ?></p>
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slider-3" style="background-image: url('<?php echo $img = $tx_switch['slider3_bg']['url']; ?>');">
                <div class="carousel-caption">
                    <h1 class="animated animate-delay-1 bounceIn">
                    <?php echo $textarea = $tx_switch['slider3_heading']; ?>
                    </h1>
                    <p class="animated animate-delay-2 fadeInRightBig">
                        <?php echo $textarea = $tx_switch['slider3_description']; ?>
                    </p>
                    <div class="animated fadeInUp animate-delay-3">
                        <div class="btn-line">
                            <a href="<?php echo $textarea = $tx_switch['slider3_button_link']; ?>">
                                <p><?php echo $textarea = $tx_switch['slider3_button_text']; ?></p>
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#carousel" data-slide="next">
            <i class="fa fa-angle-right "></i>
        </a>
        </div> <!-- /#Carousel -->
        </section> <!-- /#hero-unit -->
        
        <?php get_template_part( '/sections/section-feature' ); ?>
        <?php get_template_part( '/sections/section-about' ); ?>
        <?php get_template_part('/sections/section-team') ; ?>
        <?php get_template_part('/sections/section-portfolio') ; ?>
        <?php get_template_part('/sections/section-contact') ; ?>
        <?php get_footer(); ?>