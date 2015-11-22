<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package switch
 */
// Get Redux option
global $tx_switch;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
<!-- magnific popup -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/magnific-popup.css">
<!--color stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/themes/purple.css">
<!-- Main css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
<!-- Responsive Css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">    
       
<?php wp_head(); ?>
</head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".main-nav" data-offset="80">
        <header id="top-header">
            <div class="" data-spy="affix" data-offset-top="600" data-offset-bottom="200">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                           	 <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <img src="<?php echo $img = $tx_switch['switch_logo']['url']; ?>" alt="">
                             </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-nav" id="navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a data-scroll href="#top-header">Home</a>
                                    </li>
                                    <?php if( $tx_switch['section_feature_display'] ) :?>
                                        <li>
                                            <a data-scroll href="#feature">
                                                <?php echo $tx_switch['section_feature_menu_text']; ?>    
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if( $tx_switch['section_about_display'] ) :?>
                                        <li>
                                            <a data-scroll href="#about">
                                                <?php echo $tx_switch['section_about_us_menu_text']; ?>    
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if( $tx_switch['section_team_display'] ) :?>
                                        <li>
                                            <a data-scroll href="#team">
                                                <?php echo $tx_switch['section_team_display_menu']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if( $tx_switch['section_portfolio_display'] ) :?>
                                        <li>
                                            <a data-scroll href="#portfolio">
                                                <?php echo $tx_switch['section_portfolio_display_menu']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( $tx_switch['section_contact_display'] ) :?>
                                        <li>
                                            <a data-scroll href="#contact">
                                                <?php echo $tx_switch['section_contact_display_menu']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div> <!--/row -->
                </div> <!-- /.container -->
            </div> <!-- /. affix -->
        </header> <!-- /#Top-header -->
