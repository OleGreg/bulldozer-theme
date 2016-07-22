<?php

    function bulldozer_customize_register($wp_customize){

        //
        //
        //
        //FRONT PAGE SLIDES

            // Front Page Slide1
            //
            //
            //

            $wp_customize->add_section('slide1', array(
                'title' => __('Slide1', 'bulldozer'),
                'description' => sprintf(__('Options for slide1', 'bulldozer')),
                'priority' => 130
            ));

            $wp_customize->add_setting('slide1_image', array(
                'default' => __(get_bloginfo('template_directory').'/img/showcase.jpg'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'slide1_image', array(
                    'label' => __('Slide1 Image', 'bulldozer'),
                    'section' => 'slide1',
                    'settings' => 'slide1_image',
                    'priority' => 1
                )
            ));

            $wp_customize->add_setting('slide1_heading', array(
                'default' => __('Slide1', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide1_heading', array(
                'label' => __('Slide1 Heading', 'bulldozer'),
                'section' => 'slide1',
                'priority' => 2
            ));

            $wp_customize->add_setting('slide1_text', array(
                'default' => __('Lorem Ipsum slide1 text', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide1_text', array(
                'label' => __('Slide1 Text', 'bulldozer'),
                'section' => 'slide1',
                'priority' => 3
            ));

            $wp_customize->add_setting('btn_url1', array(
                'default' => __('http://text.com', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_url1', array(
                'label' => __('Button URL', 'bulldozer'),
                'section' => 'slide1',
                'priority' => 4
            ));

            $wp_customize->add_setting('btn_text1', array(
                'default' => __('Learn More', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_text1', array(
                'label' => __('Button Text', 'bulldozer'),
                'section' => 'slide1',
                'priority' => 5
            ));

            // Front Page Slide2
            //
            //
            //

            $wp_customize->add_section('slide2', array(
                'title' => __('Slide2', 'bulldozer'),
                'description' => sprintf(__('Options for slide2', 'bulldozer')),
                'priority' => 130
            ));

            $wp_customize->add_setting('slide2_image', array(
                'default' => __(get_bloginfo('template_directory').'/img/showcase.jpg'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'slide2_image', array(
                    'label' => __('Slide2 Image', 'bulldozer'),
                    'section' => 'slide2',
                    'settings' => 'slide2_image',
                    'priority' => 1
                )
            ));

            $wp_customize->add_setting('slide2_heading', array(
                'default' => __('Slide2', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide2_heading', array(
                'label' => __('Slide2 Heading', 'bulldozer'),
                'section' => 'slide2',
                'priority' => 2
            ));

            $wp_customize->add_setting('slide2_text', array(
                'default' => __('Lorem Ipsum slide2 text', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide2_text', array(
                'label' => __('Slide2 Text', 'bulldozer'),
                'section' => 'slide2',
                'priority' => 3
            ));

            $wp_customize->add_setting('btn_url2', array(
                'default' => __('http://text.com', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_url2', array(
                'label' => __('Button URL', 'bulldozer'),
                'section' => 'slide2',
                'priority' => 4
            ));

            $wp_customize->add_setting('btn_text2', array(
                'default' => __('Learn More', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_text2', array(
                'label' => __('Button Text', 'bulldozer'),
                'section' => 'slide2',
                'priority' => 5
            ));

            // Front Page Slide3
            //
            //
            //

            $wp_customize->add_section('slide3', array(
                'title' => __('Slide3', 'bulldozer'),
                'description' => sprintf(__('Options for slide3', 'bulldozer')),
                'priority' => 130
            ));

            $wp_customize->add_setting('slide3_image', array(
                'default' => __(get_bloginfo('template_directory').'/img/showcase.jpg'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'slide3_image', array(
                    'label' => __('Slide3 Image', 'bulldozer'),
                    'section' => 'slide3',
                    'settings' => 'slide3_image',
                    'priority' => 1
                )
            ));

            $wp_customize->add_setting('slide3_heading', array(
                'default' => __('Slide3', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide3_heading', array(
                'label' => __('Slide3 Heading', 'bulldozer'),
                'section' => 'slide3',
                'priority' => 3
            ));

            $wp_customize->add_setting('slide3_text', array(
                'default' => __('Lorem Ipsum slide3 text', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('slide3_text', array(
                'label' => __('Slide3 Text', 'bulldozer'),
                'section' => 'slide3',
                'priority' => 3
            ));

            $wp_customize->add_setting('btn_url3', array(
                'default' => __('http://text.com', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_url3', array(
                'label' => __('Button URL', 'bulldozer'),
                'section' => 'slide3',
                'priority' => 4
            ));

            $wp_customize->add_setting('btn_text3', array(
                'default' => __('Learn More', 'bulldozer'),
                'type' => 'theme_mod'
            ));

            $wp_customize->add_control('btn_text3', array(
                'label' => __('Button Text', 'bulldozer'),
                'section' => 'slide3',
                'priority' => 5
            ));

        //
        //
        //
        //FRONT PAGE HEADINGS

            //Front Page Heading1
            //
            //
            //

        $wp_customize->add_section('heading1', array(
            'title' => __('Heading1', 'bulldozer'),
            'description' => sprintf(__('Options for heading1', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('heading1_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'heading1_image', array(
                'label' => __('Heading1 Image', 'bulldozer'),
                'section' => 'heading1',
                'settings' => 'heading1_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('heading1_heading', array(
            'default' => __('Heading1', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading1_heading', array(
            'label' => __('Heading1 Heading', 'bulldozer'),
            'section' => 'heading1',
            'priority' => 2
        ));

        $wp_customize->add_setting('heading1_text', array(
            'default' => __('Lorem Ipsum heading1 text', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading1_text', array(
            'label' => __('Heading1 Text', 'bulldozer'),
            'section' => 'heading1',
            'priority' => 3
        ));

        $wp_customize->add_setting('h_btn_url1', array(
            'default' => __('http://text.com', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_url1', array(
            'label' => __('Button URL', 'bulldozer'),
            'section' => 'heading1',
            'priority' => 4
        ));

        $wp_customize->add_setting('h_btn_text1', array(
            'default' => __('Learn More', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_text1', array(
            'label' => __('Button Text', 'bulldozer'),
            'section' => 'heading1',
            'priority' => 5
        ));

        // Front Page Heading2
        //
        //
        //

        $wp_customize->add_section('heading2', array(
            'title' => __('Heading2', 'bulldozer'),
            'description' => sprintf(__('Options for heading2', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('heading2_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'heading2_image', array(
                'label' => __('Heading2 Image', 'bulldozer'),
                'section' => 'heading2',
                'settings' => 'heading2_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('heading2_heading', array(
            'default' => __('Heading2', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading2_heading', array(
            'label' => __('Heading2 Heading', 'bulldozer'),
            'section' => 'heading2',
            'priority' => 2
        ));

        $wp_customize->add_setting('heading2_text', array(
            'default' => __('Lorem Ipsum heading2 text', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading2_text', array(
            'label' => __('Heading2 Text', 'bulldozer'),
            'section' => 'heading2',
            'priority' => 3
        ));

        $wp_customize->add_setting('h_btn_url2', array(
            'default' => __('http://text.com', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_url2', array(
            'label' => __('Button URL', 'bulldozer'),
            'section' => 'heading2',
            'priority' => 4
        ));

        $wp_customize->add_setting('h_btn_text2', array(
            'default' => __('Learn More', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_text2', array(
            'label' => __('Button Text', 'bulldozer'),
            'section' => 'heading2',
            'priority' => 5
        ));

        // Front Page Heading3
        //
        //
        //

        $wp_customize->add_section('heading3', array(
            'title' => __('Heading3', 'bulldozer'),
            'description' => sprintf(__('Options for heading3', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('heading3_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'heading3_image', array(
                'label' => __('Heading3 Image', 'bulldozer'),
                'section' => 'heading3',
                'settings' => 'heading3_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('heading3_heading', array(
            'default' => __('Heading3', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading3_heading', array(
            'label' => __('Heading3 Heading', 'bulldozer'),
            'section' => 'heading3',
            'priority' => 3
        ));

        $wp_customize->add_setting('heading3_text', array(
            'default' => __('Lorem Ipsum heading3 text', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('heading3_text', array(
            'label' => __('Heading3 Text', 'bulldozer'),
            'section' => 'heading3',
            'priority' => 3
        ));

        $wp_customize->add_setting('h_btn_url3', array(
            'default' => __('http://text.com', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_url3', array(
            'label' => __('Button URL', 'bulldozer'),
            'section' => 'heading3',
            'priority' => 4
        ));

        $wp_customize->add_setting('h_btn_text3', array(
            'default' => __('Learn More', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('h_btn_text3', array(
            'label' => __('Button Text', 'bulldozer'),
            'section' => 'heading3',
            'priority' => 5
        ));

        //
        //
        //
        //FRONT PAGE FEATURETTES

        //Front Page Featurette1
        //
        //
        //

        $wp_customize->add_section('featurette1', array(
            'title' => __('Featurette1', 'bulldozer'),
            'description' => sprintf(__('Options for featurette1', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('featurette1_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'featurette1_image', array(
                'label' => __('Featurette1 Image', 'bulldozer'),
                'section' => 'featurette1',
                'settings' => 'featurette1_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('featurette1_heading_bold', array(
            'default' => __('First featurette heading.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette1_heading_bold', array(
            'label' => __('Featurette1 Heading Bold', 'bulldozer'),
            'section' => 'featurette1',
            'priority' => 2
        ));

        $wp_customize->add_setting('featurette1_heading_light', array(
            'default' => __('It\'ll blow your mind.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette1_heading_light', array(
            'label' => __('Featurette1 Heading light', 'bulldozer'),
            'section' => 'featurette1',
            'priority' => 3
        ));

        $wp_customize->add_setting('featurette1_text', array(
            'default' => __('Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette1_text', array(
            'label' => __('Featurette1 Text', 'bulldozer'),
            'section' => 'featurette1',
            'priority' => 4
        ));

        // Front Page Featurette2
        //
        //
        //

        $wp_customize->add_section('featurette2', array(
            'title' => __('Featurette2', 'bulldozer'),
            'description' => sprintf(__('Options for featurette2', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('featurette2_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'featurette2_image', array(
                'label' => __('Featurette2 Image', 'bulldozer'),
                'section' => 'featurette2',
                'settings' => 'featurette2_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('featurette2_heading_bold', array(
            'default' => __('Oh yeah, it\'s that good.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette2_heading_bold', array(
            'label' => __('Featurette2 Heading Bold', 'bulldozer'),
            'section' => 'featurette2',
            'priority' => 2
        ));

        $wp_customize->add_setting('featurette2_heading_light', array(
            'default' => __('See for yourself.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette2_heading_light', array(
            'label' => __('Featurette2 Heading light', 'bulldozer'),
            'section' => 'featurette2',
            'priority' => 3
        ));

        $wp_customize->add_setting('featurette2_text', array(
            'default' => __('Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette2_text', array(
            'label' => __('Featurette2 Text', 'bulldozer'),
            'section' => 'featurette2',
            'priority' => 4
        ));

        // Front Page Featurette3
        //
        //
        //

        $wp_customize->add_section('featurette3', array(
            'title' => __('Featurette3', 'bulldozer'),
            'description' => sprintf(__('Options for featurette3', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('featurette3_image', array(
            'default' => __('data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'featurette3_image', array(
                'label' => __('Featurette3 Image', 'bulldozer'),
                'section' => 'featurette3',
                'settings' => 'featurette3_image',
                'priority' => 1
            )
        ));

        $wp_customize->add_setting('featurette3_heading_bold', array(
            'default' => __('And lastly, this one.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette3_heading_bold', array(
            'label' => __('Featurette3 Heading Bold', 'bulldozer'),
            'section' => 'featurette3',
            'priority' => 2
        ));

        $wp_customize->add_setting('featurette3_heading_light', array(
            'default' => __('Checkmate.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette3_heading_light', array(
            'label' => __('Featurette3 Heading light', 'bulldozer'),
            'section' => 'featurette3',
            'priority' => 3
        ));

        $wp_customize->add_setting('featurette3_text', array(
            'default' => __('Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'bulldozer'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('featurette3_text', array(
            'label' => __('Featurette3 Text', 'bulldozer'),
            'section' => 'featurette3',
            'priority' => 4
        ));

        //
        //
        //
        //NAVBAR

        // Navbar Brand Logo
        //
        //
        //

        $wp_customize->add_section('brandlogo', array(
            'title' => __('Brand Logo', 'bulldozer'),
            'description' => sprintf(__('Options for the brand logo', 'bulldozer')),
            'priority' => 130
        ));

        $wp_customize->add_setting('brand_logo', array(
            'default' => __(get_bloginfo('template_directory').'/img/showcase.jpg'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_image_control($wp_customize, 'brand_logo', array(
                'label' => __('Brand Logo', 'bulldozer'),
                'section' => 'brandlogo',
                'settings' => 'brand_logo',
                'priority' => 1
            )
        ));

    }

    add_action('customize_register', 'bulldozer_customize_register');