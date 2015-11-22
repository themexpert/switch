<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "tx_switch";
    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // Disable tracking
        'disable_tracking' => true,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Switch Settings', 'switch-settings' ),
        'page_title'           => __( 'Switch Settings', 'switch-settings' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ----> [Theme Options] Start
     */

    // -> General Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Global Settings', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-home',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
            array(
                'id'       => 'switch_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Logo', 'tx-switch' ),
                'compiler' => 'true',
                'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/logo/logo.png'),
            ),
            array(
                'id' => 'switch_copyright',
                'type' => 'textarea',
                'title' => __( 'Copyright Text', 'tx-switch' ),
                'default' => 'Copyright © 2010-2015 Switch. All rights reserved.'
            ),       
            array(
                'id' => 'themexpert_credit',
                'type' => 'switch',
                'title' => __( 'ThemeXpert Credit', 'tx-switch' ),
                'desc' => __( 'Its always nice to give back to the developer when you are using a free product. Buy <a href="https://www.themexpert.com/index.php?option=com_digicom&view=cart&task=cart.add&pid=93" target="_blank">Premier Support Plan</a> and get direct support from expert.', 'tx-switch' ),
                'default' => '1'
            )     
        )
    ));

    // -> Layout Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider Option', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-cogs',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
            array(
                'id' => 'auto_slide',
                'type' => 'switch',
                'title' => __( 'Auto Slide', 'tx-switch' ),
                'default' => '1'
            ),
            array(
                'id' => 'slide_interval',
                'type' => 'text',
                'title' => __( 'Slide Interval', 'tx-switch' ),
                'desc' => __( 'The amount of time to delay between automatically cycling an item.', 'tx-switch' ),
                'default' => '5000',
                'required' => array('auto_slide','equals','1'),
            ),
            array(
                'id'       => 'slider1_heading',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Heading', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Lorem ipsum dolor sit amet.',
            ),
            array(
                'id'       => 'slider1_description',
                'type'     => 'textarea',
                'validate' => '',
                'title'    => __( 'Description', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Our first step is targeted towards understanding Lorem ipsum dolor sit amet, consectetur.',
            ),
            
            array(
                'id'       => 'slider1_bg',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'background', 'tx-switch' ),
                'compiler' => 'true',
                'desc'     => __( 'Please upload .....', 'tx-switch' ),
                'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/slider-1.jpg'),
            ),

            array(
                'id'       => 'slider1_button_text',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Text', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Get Started',
            ),

            array(
                'id'       => 'slider1_button_link',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Hiperlink', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'http://www.themexpert.com',
            ),

            //slider 2
            array(
                'id'       => 'slider2_heading',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Heading', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Lorem ipsum dolor sit amet.',
            ),

            array(
                'id'       => 'slider2_description',
                'type'     => 'textarea',
                'validate' => '',
                'title'    => __( 'Description', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Our first step is targeted towards understanding Lorem ipsum dolor sit amet, consectetur.',
            ),
            
            array(
                'id'       => 'slider2_bg',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'background', 'tx-switch' ),
                'compiler' => 'true',
                'desc'     => __( 'Please upload .....', 'tx-switch' ),
                'default'  => array( 'url' => get_template_directory_uri() .'/images/slider-2.jpg'),
            ),

            array(
                'id'       => 'slider2_button_text',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Text', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Get Started',
            ),

            array(
                'id'       => 'slider2_button_link',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Hiperlink', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'http://www.themexpert.com',
            ),
            //Slider 3 
            array(
                'id'       => 'slider3_heading',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Heading', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Lorem ipsum dolor sit amet.',
            ),

            array(
                'id'       => 'slider3_description',
                'type'     => 'textarea',
                'validate' => '',
                'title'    => __( 'Description', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Our first step is targeted towards understanding Lorem ipsum dolor sit amet, consectetur.',
            ),
            
            array(
                'id'       => 'slider3_bg',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'background', 'tx-switch' ),
                'compiler' => 'true',
                'desc'     => __( 'Please upload .....', 'tx-switch' ),
                'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/slider-3.jpg'),
            ),

            array(
                'id'       => 'slider3_button_text',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Text', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'Get Started',
            ),

            array(
                'id'       => 'slider3_button_link',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Button Hiperlink', 'tx-switch' ),
                'desc'     => __( '' ),
                'default'  => 'http://www.themexpert.com',
            ),                        
        ),   
    ));

    // -> Style Settings
    Redux::setSection( $opt_name, array(
        'icon'   => 'el-icon-eye-open',
        'title'  => __( 'Feature', 'tx-switch' ),
        'fields' => array(
           array(
                'id' => 'section_feature_info',
                'type' => 'info',
                'title' => __('Create a new feature from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=feature">here</a> ', 'tx-switch'),
                'style' => 'warning'
            ),
            array(
                'id' => 'section_feature_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),

            array(
                'id' => 'section_feature_menu_text',
                'type' => 'text',
                'title' => __('Section Title in Menubar', 'tx-switch'),
                'default' => "Feature",
            ),
            array(
                'id' => "section_feature_title",
                'type' => 'text',
                'title' => __('Section Title', 'tx-switch'),
                'default' => "Our Front End Feature",
            ),
            array(
                'id' => "section_feature_subtitle",
                'type' => 'textarea',
                'title' => __('Section Subtitle', 'tx-switch'),
                'default' => "Our first step is targeted towards understanding. We must understand what your needs are in order to offer you an appropriate and effective solution.",
            ),
            array(
                'id' => 'section_feature_number',
                'type' => 'text',
                'title' => __('How many posts to display?', 'tx-switch'),
                'default' => "6",
            ),
        )
    ));

    // -> Style Settings
    Redux::setSection( $opt_name, array(
        'icon'   => 'el-icon-website',
        'title'  => __( 'About', 'tx-switch' ),
        'fields' => array(
           array(
                'id' => 'section_about_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),
           array(
                'id'       => 'section_about_us_featured_img',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'About Us Image', 'tx-switch' ),
                'compiler' => 'true',
                'desc'     => __( 'Please upload .....', 'tx-switch' ),
                'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/slider-3.jpg'),
            ),
            array(
                'id' => 'section_about_us_menu_text',
                'type' => 'text',
                'title' => __('Section Title in Menubar', 'tx-switch'),
                'default' => "About Us",
            ),
            array(
                'id' => "section_about_us_title",
                'type' => 'text',
                'title' => __('Section Title', 'tx-switch'),
                'default' => "About Us",
            ),
            array(
                'id' => "section_about_us_subtitle",
                'type' => 'textarea',
                'title' => __('Section Subtitle', 'tx-switch'),
                'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci facilis nemo quae, alias, aspernatur placeat.",
            ),
             array(
                'id' => "section_about_us_descriptio",
                'type' => 'textarea',
                'title' => __('About Description', 'tx-switch'),
                'default' => "<h2>Little more about us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, obcaecati, veritatis, voluptatem perferendis ipsum optio mollitia culpa excepturi necessitatibus eveniet ad asperiores inventore aliquid. Velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, obcaecati, veritatis, voluptatem perferendis ipsum optio mollitia culpa excepturi necessitatibus eveniet ad asperiores inventore aliquid. Velit.</p>
                            <p>
                             Velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, obcaecati, veritatis, voluptatem perferendis ipsum optio mollitia culpa excepturi necessitatibus eveniet ad asperiores inventore aliquid. Velit.</p>",
            ),
            array(
                'id'       => 'section_about_us_background',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'background', 'tx-switch' ),
                'compiler' => 'true',
                'desc'     => __( 'Please upload .....', 'tx-switch' ),
                'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/about-bg.jpg'),
            )
        )
    ));

    // -> Typography Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Testimonial', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-tasks',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
            array(
                'id' => 'section_testimonial_info',
                'type' => 'info',
                'title' => __('Create a new Testimonial from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=testimonial">here</a> ', 'tx-switch'),
                'style' => 'warning'
            ),

            array(
                'id' => 'section_testimonial_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),
            
            array(
                'id'       => 'section_testimonial_title',
                'type'     => 'text',
                'validate' => '',
                'title'    => __( 'Section heading', 'tx-switch'),
                'desc'     => __( '' ),
                'default'  => 'What Our Beloved Clients Says About Us',
            ),

            array(
                'id' => 'section_testimonial_number',
                'type' => 'text',
                'title' => __('How many posts to display?', 'tx-switch'),
                'default' => "3",
            ),
        )
    ));

    // -> Social Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Team', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-user',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
            array(
                'id' => 'section_team_info',
                'type' => 'info',
                'title' => __('Create a new Team Member from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=team">here</a> ', 'tx-switch'),
                'style' => 'warning'
            ),
            array(
                'id' => 'section_team_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),
            array(
                'id' => 'section_team_display_menu',
                'type' => 'text',
                'title' => __('Display In Menubar', 'tx-switch'),
                'default' => "Our Team",
            ),
            array(
                'id' => "section_team_title",
                'type' => 'text',
                'title' => __('Section Title', 'tx-switch'),
                'default' => "Our Team",
            ),
            array(
                'id' => "section_team_subtitle",
                'type' => 'textarea',
                'title' => __('Section Subtitle', 'tx-switch'),
                'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci facilis nemo quae, alias, aspernatur placeat.",
            ),
            array(
                'id' => 'section_team_number',
                'type' => 'text',
                'title' => __('How many posts to display?', 'tx-switch'),
                'default' =>3 ,
            ),
        )
    ));
    
    // Portfolio Section
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Porftolio', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-fork',
        'fields' => array(
            array(
                'id' => 'section_portfolio_info',
                'type' => 'info',
                'title' => __('Create a new Portfolio from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=portfolio">here</a> ', 'tx-switch'),
                'style' => 'warning'
            ),
            array(
                'id' => 'section_portfolio_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),
            array(
                'id' => 'section_portfolio_display_menu',
                'type' => 'text',
                'title' => __('Display In Menubar', 'tx-switch'),
                'default' => "Portfolio",
            ),
            array(
                'id' => "section_portfolio_title",
                'type' => 'text',
                'title' => __('Section Title', 'tx-switch'),
                'default' => "Our portfolio",
            ),
            array(
                'id' => "section_portfolio_subtitle",
                'type' => 'textarea',
                'title' => __('Section Subtitle', 'tx-switch'),
                'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci facilis nemo quae, alias, aspernatur placeat.",
            ),
            array(
                'id' => 'section_team_field',
                'type' => 'text',
                'title' => __('How many posts to display?', 'tx-switch'),
                'default' => "12",
            ), 
        )
    ));

    // Contact Section
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Contact', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-phone-alt',
        'fields' => array(
            array(
                'id' => 'section_contact_display',
                'type' => 'switch',
                'title' => __('Display Section', 'tx-switch'),
                'default' => "1",
            ),
            array(
                'id' => 'section_contact_display_menu',
                'type' => 'text',
                'title' => __('Display In Menubar', 'tx-switch'),
                'default' => "Contact",
            ),
            array(
                'id' => "section_contact_title",
                'type' => 'text',
                'title' => __('Section Title', 'tx-switch'),
                'default' => "Get In Touch",
            ),
            array(
                'id' => "section_contact_address",
                'type' => 'text',
                'title' => __('Address', 'tx-switch'),
                'default' => "211,Winslow Bainbridge,Australia",
            ),
            array(
                'id' => "section_contact_email",
                'type' => 'text',
                'title' => __('Contact Email', 'tx-switch'),
                'default' => "mail@support.com",
            ),
            array(
                'id' => "section_contact_phone",
                'type' => 'text',
                'title' => __('Contact Number', 'tx-switch'),
                'default' => "+88 01672 505 ***",
            ),
            array(
                'id' => "section_contact_map",
                'type' => 'textarea',
                'title' => __('Google Map Link Here', 'tx-switch'),
                'default' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.5555106206834!2d-7.637222461654696!3d33.59088826069678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87da5314adb2dd65!2sRICHBOND!5e0!3m2!1sen!2s!4v1397056520314",
            ),
            array(
                'id' => "section_contact_form",
                'type' => 'editor',
                'title' => __('Contact Form Area', 'tx-switch'),
                'default' => "",
            ),

        ),
    ));
    // Footer Section
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'tx-switch' ),
        'desc'   => __( '', 'tx-switch' ),
        'icon'   => 'el-icon-edit',
        'fields' => array(
            array(
                'id' => "footer_facebook_link",
                'type' => 'text',
                'title' => __('Facebook Link', 'tx-switch'),
                'default' => "http://www.facebook.com/themexpert",
            ),
            array(
                'id' => "footer_twitter_link",
                'type' => 'text',
                'title' => __('Twitter Link', 'tx-switch'),
                'default' => "http://www.twitter.com/themexpert",
            ),
            array(
                'id' => "footer_linkedin_link",
                'type' => 'text',
                'title' => __('Linkedin Link', 'tx-switch'),
                'default' => "http://www.linkedin.com/themexpert",
            ),
            array(
                'id' => "footer_dribbble_link",
                'type' => 'text',
                'title' => __('Dribbble Link', 'tx-switch'),
                'default' => "http://www.dribbble.com/themexpert",
            ),
            array(
                'id' => "footer_pinterest_link",
                'type' => 'text',
                'title' => __('Pinterest Link', 'tx-switch'),
                'default' => "http://www.pinterest.com/themexpert",
            ),
        ),
    ));

    /*
     * ----> [Theme Options] End
     */

    if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => __( 'Documentation', 'tx-switch' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
