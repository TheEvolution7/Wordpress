<?php 

    function customize_register( $wp_customize ) {
    // Mã function
    };
    add_theme_support('post-thumbnails');
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
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
            'add_li_class' => 'nav-item'
        );
        wp_nav_menu($menu);
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
                   'label' => 'Logo Dark',
                   'section' => 'section_header_1',
                   'settings' => 'img-upload'
               )
           )
        );  
        $wp_customize->add_setting( 'img-upload-2' );
        $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'logo-header-2',
               array(
                   'label' => 'Logo White',
                   'section' => 'section_header_1',
                   'settings' => 'img-upload-2'
               )
           )
        );  
        $wp_customize->add_setting ('option_header_1',
        array(
            'default' => 'Join our team'
        )
        );
        $wp_customize->add_control ('control_option_1',
            array(
            'label' => 'Button',
            'section' => 'section_header_1',
            'type' => 'text',
            'settings' => 'option_header_1'
        )
        );
    }
        add_action( 'customize_register', 'header_options' );
    
        function footer_options( $wp_customize ) {
            // Section
            $wp_customize->add_section ('section_footer_1',
            array(
            'title' => 'Footer',
            'description' => 'Content',
            'priority' => 30
            )
            );
            $wp_customize->add_setting( 'img-footer' );
            $wp_customize->add_control(
               new WP_Customize_Image_Control(
                   $wp_customize,
                   'logo-footer',
                   array(
                       'label' => 'Logo',
                       'section' => 'section_footer_1',
                       'settings' => 'img-footer'
                   )
               )
           );

           $wp_customize->add_setting ('option_footer_1',
           array(
               'default' => 'Change text at here'
           )
           );
            // Control
            $wp_customize->add_control ('text',
                array(
                'label' => 'Text',
                'section' => 'section_footer_1',
                'type' => 'text',
                'settings' => 'option_footer_1'
                )
            );

           $wp_customize->add_setting ('option_footer_2',
           array(
               'default' => 'Change text at here'
           )
           );
            // Control
            $wp_customize->add_control ('phone',
                array(
                'label' => 'Phone',
                'section' => 'section_footer_1',
                'type' => 'text',
                'settings' => 'option_footer_2'
                )
            );
            $wp_customize->add_setting ('option_footer_3',
                array(
                    'default' => 'Change text at here'
                )
                );
            // Control
            $wp_customize->add_control ('email',
            array(
            'label' => 'Email',
            'section' => 'section_footer_1',
            'type' => 'text',
            'settings' => 'option_footer_3'
            )
            
            );
           $wp_customize->add_setting ('option_footer_4',
                array(
                    'default' => 'Change text at here'
                )
                );
            // Control
            $wp_customize->add_control ('address',
            array(
            'label' => 'Address',
            'section' => 'section_footer_1',
            'type' => 'text',
            'settings' => 'option_footer_4'
            )
            
            );
           
            $wp_customize->add_setting ('option_footer_5',
                array(
                    'default' => 'Change text at here'
                )
                );
            
             // Control
             $wp_customize->add_control ('copyright',
             array(
             'label' => 'Copyright',
             'section' => 'section_footer_1',
             'type' => 'text',
             'settings' => 'option_footer_5'
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
                 // Setting
                $wp_customize->add_setting ('option_social_1',
                array(
                    'default' => 'https://twitter.com/'
                )
                );
                $wp_customize->add_control ('control_option1',
                    array(
                    'label' => 'Link Twitter',
                    'section' => 'section_social',
                    'type' => 'text',
                    'settings' => 'option_social_1'
                )
                );
    
            $wp_customize->add_setting ('option_social_2',
            array(
                'default' => 'https://www.facebook.com/'
            )
            );
            $wp_customize->add_control ('control_option2',
                array(
                'label' => 'Link Facebook',
                'section' => 'section_social',
                'type' => 'text',
                'settings' => 'option_social_2'
            )
            );

            $wp_customize->add_setting ('option_social_3',
            array(
                'default' => 'https://linkedin.com/'
            )
            );
            $wp_customize->add_control ('control_option3',
                array(
                'label' => 'Link Linkedin',
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
           