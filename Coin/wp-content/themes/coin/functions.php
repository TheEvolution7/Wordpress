<?php 

    function customize_register( $wp_customize ) {
    // Mã function
    };
    add_theme_support('post-thumbnails');
    add_theme_support( 'menus' );
    add_theme_support('title-tag');
    add_theme_support('post-format', array(
        'image',
        'video',
        'gallery',
        'quote',
        'link'
    ));
    add_action( 'customize_register', 'customize_register' );
    function  menu($menu,$class)
    {
        $menu =  array(
            'container'  => 'ul',
            'menu' => $menu,
            'menu_class' => $class, 
        );
        wp_nav_menu($menu);
    }    
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

        function special_nav_class ($classes, $item) {
          if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active';
          }
          return $classes;
        }

    function header_options( $wp_customize ) {
        // Section
        $wp_customize->add_section ('section_header_1',
        array(
        'title' => 'Header',
        'description' => 'Content',
        'priority' => 30
        )
        );
        $wp_customize->add_setting( 'img-upload' );
        $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'logo-header',
               array(
                   'label' => 'Logo',
                   'section' => 'section_header_1',
                   'settings' => 'img-upload'
               )
           )
        );  
    }
        add_action( 'customize_register', 'header_options' );
    
        function footer_options( $wp_customize ) {
            $wp_customize->add_section ('section_footer',
                    array(
                    'title' => 'Footer',
                    'description' => 'Content',
                    'priority' => 30
                    )
                );
            $wp_customize->add_setting ('option_footer_1',
                array(
                    'default' => 'Change text at here'
                )
                );
            
             // Control
             $wp_customize->add_control ('copyright',
             array(
             'label' => 'Copyright',
             'section' => 'section_footer',
             'type' => 'text',
             'settings' => 'option_footer_1'
             )
             );
             
            
            }
            add_action( 'customize_register', 'footer_options' );

            function social_options( $wp_customize ) {
                // Section
                $wp_customize->add_section ('section_social',
                    array(
                    'title' => 'Social',
                    'description' => 'Content',
                    'priority' => 30
                    )
                );
                $wp_customize->add_setting ('option_social_1',
                array(
                'default' => 'https://www.linkedin.com/'
                )
                );
                $wp_customize->add_control ('control_option1',
                array(
                'label' => 'Link Linkedin',
                'section' => 'section_social',
                'type' => 'text',
                'settings' => 'option_social_1'
                )
                );
                 // Setting
                $wp_customize->add_setting ('option_social_2',
                array(
                    'default' => 'https://twitter.com/'
                )
                );
                $wp_customize->add_control ('control_option2',
                    array(
                    'label' => 'Link Twitter',
                    'section' => 'section_social',
                    'type' => 'text',
                    'settings' => 'option_social_2'
                )
                );
    
            $wp_customize->add_setting ('option_social_3',
            array(
                'default' => 'https://www.facebook.com/'
            )
            );
            $wp_customize->add_control ('control_option3',
                array(
                'label' => 'Link Facebook',
                'section' => 'section_social',
                'type' => 'text',
                'settings' => 'option_social_3'
            )
            );

            

            $wp_customize->add_setting ('option_social_4',
            array(
                'default' => 'https://www.instagram.com/'
            )
            );
            $wp_customize->add_control ('control_option4',
                array(
                'label' => 'Link Instagram',
                'section' => 'section_social',
                'type' => 'text',
                'settings' => 'option_social_4'
            )
            );
                }
            add_action( 'customize_register', 'social_options' );