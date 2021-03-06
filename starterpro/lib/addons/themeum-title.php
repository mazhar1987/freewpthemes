<?php
add_action('init', 'themeum_title_data', 99);
function themeum_title_data(){
    global $kc;
    if (function_exists('kc_add_map')) 
    {
    kc_add_map(
        array(
            'themeum_title' => array(
                'name'        => 'Themeum Title',
                'description' => esc_html__('Title shortcode of the theme', 'starterpro'),
                'icon'        => 'fa-header',
                'category'    => 'Starter',
                'params'      => array(

                    'General' => array(

                            array(
                                'type'          => 'radio_image',
                                'label'         => esc_html__( 'Select layout', 'starterpro' ),
                                'description'   => esc_html__('Select title layout style.', 'starterpro'),
                                'name'          => 'title_layout',
                                'admin_label'   => true,
                                'options'       => array(
                                    'default' => get_template_directory_uri()  . '/lib/addons/image/title/1.png',
                                    'classic' => get_template_directory_uri()  . '/lib/addons/image/title/3.png',
                                    'titlenumber' => get_template_directory_uri()  . '/lib/addons/image/title/2.png',
                                ),
                                'value'         => 'classic'
                            ),   

                            array(
                                'name'          => 'border_width',
                                'type'          => 'number_slider',
                                'label'         => esc_html__('Border width', 'starterpro'),
                                'options'       => array(
                                                    'min'           => 0,
                                                    'max'           => 200,
                                                    'unit'          => 'px',
                                                    'show_input'    => true
                                                ),
                                'value'         => '70px',
                                'description'   => esc_html__('Choose border width for bottom of the title ', 'starterpro'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'default',
                                ),
                            ),
                            array(
                                'name'          => 'border_height',
                                'type'          => 'number_slider',
                                'label'         => esc_html__('Border height', 'starterpro'),
                                'options'       => array(
                                    'min'           => 0,
                                    'max'           => 10,
                                    'unit'          => 'px',
                                    'show_input'    => true
                                ),
                                'value'         => '1px',
                                'description'   => esc_html__('Choose border height for bottom of the title ', 'starterpro'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'default',
                                ),
                            ), 
                            array(
                                'name'    => 'border_position',
                                'label'   => esc_html__('Title Type', 'starterpro'),
                                'type'    => 'select',
                                'admin_label' => true,
                                'options' => array(
                                    'top'  => 'Top',
                                    'bottom'  => 'Bottom',
                                ),
                                'value'         => 'bottom',
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'default',
                                ),
                            ),                                                   
                            array(
                                'name'          => 'border_bg',
                                'type'          => 'color_picker',
                                'label'         => esc_html__( 'Border Background', 'starterpro' ),
                                'value'         => '#1a1a1a',
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'default',
                                ),
                            ), 
                            array(
                                'name'          => 'number',
                                'type'          => 'text',
                                'label'         => esc_html__('Number text', 'starterpro'),
                                'description'   => esc_html__('Number of the heading.', 'starterpro'),
                                'admin_label'   => true,
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'titlenumber',
                                ),
                            ),   
                            array(
                                'name'          => 'number_position_left',
                                'type'          => 'number_slider',
                                'label'         => esc_html__('Number position from left', 'starterpro'),
                                'options'       => array(
                                                    'min'           => -200,
                                                    'max'           => 300,
                                                    'unit'          => 'px',
                                                    'show_input'    => true
                                                ),
                                'value'         => '0px',
                                'description'   => esc_html__('Choose Number position for the title ', 'starterpro'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'titlenumber',
                                ),
                            ),                             
                            array(
                                'name'          => 'number_position_top',
                                'type'          => 'number_slider',
                                'label'         => esc_html__('Number position from top', 'starterpro'),
                                'options'       => array(
                                                    'min'           => -200,
                                                    'max'           => 200,
                                                    'unit'          => 'px',
                                                    'show_input'    => true
                                                ),
                                'value'         => '-20px',
                                'description'   => esc_html__('Choose Number position for the title ', 'starterpro'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => 'titlenumber',
                                ),
                            ), 

                            array(
                                'name'          => 'title',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Title text', 'starterpro'),
                                'description'   => esc_html__('Title of the heading.', 'starterpro'),
                                'admin_label'   => true,
                            ),
                            array(
                                'name'    => 'headline',
                                'label'   => esc_html__('Title Type', 'starterpro'),
                                'type'    => 'select',
                                'admin_label' => true,
                                'options' => array(
                                    'h1'  => 'H1',
                                    'h2'  => 'H2',
                                    'h3'  => 'H3',
                                    'h4'  => 'H4',
                                    'h5'  => 'H5',
                                    'h6'  => 'H6',
                                    'div'  => 'div',
                                    'span'  => 'Span',
                                    'p'  => 'P'
                                ),
                                'value'         => 'h2',
                            ),                            
                            array(
                                'name'          => 'subtitle',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Sub Title text', 'starterpro'),
                                'description'   => esc_html__('Sub title of the heading.', 'starterpro'),
                                'admin_label'   => true,
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ),
                            array(
                                'name'    => 'subheadline',
                                'label'   => esc_html__('Sub Title Type', 'starterpro'),
                                'type'    => 'select',
                                'admin_label' => true,
                                'options' => array(
                                    'h1'  => 'H1',
                                    'h2'  => 'H2',
                                    'h3'  => 'H3',
                                    'h4'  => 'H4',
                                    'h5'  => 'H5',
                                    'h6'  => 'H6',
                                    'div'  => 'div',
                                    'span'  => 'Span',
                                    'p'  => 'P'
                                ),
                                'value'         => 'h3',
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ), 
                            array(
                                'name'          => 'desc',
                                'type'          => 'textarea',
                                'label'         => esc_html__('Description text', 'starterpro'),
                                'description'   => esc_html__('Description of the heading.', 'starterpro'),
                                'relation'    => array(
                                    'parent'    => 'title_layout',
                                    'show_when' => array('classic','titlenumber'),
                                ),
                            ),
                            array(
                                'name'          => 'border_align',
                                'type'          => 'dropdown',
                                'label'         => esc_html__('Title wrap align', 'starterpro'),
                                'options'       => array(
                                        'left'     => esc_html__('Left', 'starterpro'),
                                        'center'   => esc_html__('Center', 'starterpro'),
                                        'right'    => esc_html__('Right', 'starterpro'),
                                  ),
                                'value'         => 'center',
                                'description'   => esc_html__('Select the title wrap align', 'starterpro'),

                            ),                                                                                      
                            array(
                                'name'  => 'extra_class',
                                'label' => esc_html__('Extra class', 'starterpro'),
                                'description'   => esc_html__('Custom class for wrapper of the shortcode', 'starterpro'),
                                'type'  => 'text'
                            ),
                        ),//general

                        'styling' => array(
                            array(
                                'name'    => 'css_custom',
                                'type'    => 'css',
                                'options'       => array(
                                    array(
                                        "screens" => "any,1024,999,767,479",
                                        'Title Style' => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starterpro'), 'selector' => '.themeum_title'),                                            
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'display', 'label' => esc_html__('Display', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starterpro'), 'selector' => '.themeum_title'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starterpro'), 'selector' => '.themeum_title')
                                        ),
                                        'Subtitle'  => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starterpro'), 'selector' => '.themeum-subtitle'),
                                        ),                                        
                                        'Number'  => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starterpro'), 'selector' => '.themeum-title-number'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starterpro'), 'selector' => '.themeum-title-number'),
                                        ),                                
                                        'Desc'  => array(
                                            array('property' => 'color', 'label' => esc_html__('Color', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'line-height', 'label' => esc_html__('Line height', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'font-weight', 'label' => esc_html__('Font weight', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'text-align', 'label' => esc_html__('Alignment', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starterpro'), 'selector' => '.themeum-title-desc'),
                                        ), 
                                        'Box' => array(
                                            array('property' => 'margin', 'label' => esc_html__('Margin', 'starterpro'), 'selector' => '.title-number-wrap,.title-default-wrap,.title-classic-wrap'),
                                            array('property' => 'padding', 'label' => esc_html__('Padding', 'starterpro'), 'selector' => '.title-number-wrap,.title-default-wrap,.title-classic-wrap'),
                                        ),
                                    )
                                )
                            )
                        ),//styling
                    ) //params
                )//themeum_title
        ));
    }
  }

// Register Hover Shortcode
function themeum_title_data_shortcodes($atts, $content = null){
    $output = $headline = $subtitle = $number = $title = $border_position = $headline = $extra_class = $align = $title_style = $desc = $style = $borderclass = $number_position_left = $number_position_top = $numstyle =  '';
    extract( shortcode_atts( array(

        'number'                => '',
        'number_position_left'  => '',
        'number_position_top'   => '',
        'title'                 => '',
        'title_layout'          => 'classic',
        'headline'              => 'h2',
        'subtitle'              => '',
        'subheadline'           => 'h3',
        'desc'                  => '',
        'border_position'       => 'bottom',
        'border_width'          => '70',
        'border_height'         => '1',
        'border_bg'             => '',
        'border_align'          => 'center',
        'extra_class'           => ''
    ), $atts ));
    

    if( empty( $headline ) ) {
        $headline = 'h2';
    }    

    if( empty( $subheadline ) ) {
        $subheadline = 'h3';
    }

    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    $class_title = array( 'themeum_title' );

    $wrap_class[] = 'themeum-title-wrap';

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    } 

    $borderclass = rand(1,100); 

    //border layout
    if( $border_align ){ 
        if( $border_align == 'left' ){ $align = 'text-left'; }
        if( $border_align == 'right' ){ $align = 'text-right'; }
        if( $border_align == 'center' ){ $align = 'text-center'; }
    }else{
        $align = 'text-center';
    }
    
    if( $border_bg ){
        $style .= '.default-'.$borderclass.' .themeum_title:after{ background:'.$border_bg.';}';
    } 

    if( $border_align ){ 
        if( $border_align == 'left' ){
            if( $border_width ){
                $mar = (int)esc_attr($border_width)/2;
                $style .= '.default-'.$borderclass.' .themeum_title:after{width:'.esc_attr($border_width).';left: 0;}';
            }   
        } elseif ($border_align == 'right') {
            if( $border_width ){
                $mar = (int)esc_attr($border_width)/2;
                $style .= '.default-'.$borderclass.' .themeum_title:after{width:'.esc_attr($border_width).';left:auto;right: 0;}';
            }
        } else {
            if( $border_width ){
                $mar = (int)esc_attr($border_width)/2;
                $style .= '.default-'.$borderclass.' .themeum_title:after{width:'.esc_attr($border_width).';margin-left: -'.$mar.'px;left: 50%;}';
            } 
        }
    } else {
        if( $border_width ){
            $mar = (int)esc_attr($border_width)/2;
            $style .= '.default-'.$borderclass.' .themeum_title:after{width:'.esc_attr($border_width).';margin-left: -'.$mar.'px;left: 50%;}';
        }
    }
   
    if( $border_height ){
        $style .= '.default-'.$borderclass.' .themeum_title:after{height:'.esc_attr($border_height).';content: "";top: 30px;position: absolute; }';
    }    
    if( $border_position == 'top' ){
        $style .= '.default-'.$borderclass.' .themeum_title:after{top:0px;bottom:auto; }';
    } else {
       $style .= '.default-'.$borderclass.' .themeum_title:after{bottom:0px;top:auto; }'; 
    }
    if ( $title_layout == 'default' ) {
       $output .= '<style>'.$style.'</style>';
    }
    
    if( $number_position_left ){
        $numstyle .= 'left:'.esc_attr($number_position_left).';';
    }    
    if( $number_position_top ){
        $numstyle .= 'top:'.esc_attr($number_position_top).';';
    }

    if ( $title_layout == 'classic' ) {
        $output .= '<div class="'.esc_attr( implode( ' ', $wrap_class ) ).' '.esc_attr($title_layout).' '.$align.'">';
            $output .= '<div class="title-classic-wrap">';
                if ( !empty($title) ) {
                    $output .= '<'.esc_attr($headline).' class="'. implode( ' ', $class_title ) . '">'.wp_kses_post($title).'</'.esc_attr($headline).'>';
                }
                if ( !empty($subtitle) ) {
                    $output .= '<'.esc_attr($subheadline).' class="themeum-subtitle">'.wp_kses_post($subtitle).'</'.esc_attr($subheadline).'>';
                }
                if ( !empty($desc) ) {
                    $output .= '<div class="themeum-title-desc">'.wp_kses_post($desc).'</div>';
                }
            $output .= '</div>';
        $output .= '</div>';
    } elseif ( $title_layout == 'default' ) {
        $output .= '<div class="'.esc_attr( implode( ' ', $wrap_class ) ).' '.esc_attr($title_layout).' '.$align.' default-'.$borderclass.'">';
            $output .= '<div class="title-default-wrap">';
                $output .= '<'.esc_attr($headline).' class="'. implode( ' ', $class_title ) . '">'.wp_kses_post($title).'</'.esc_attr($headline).'>';
            $output .= '</div>';
        $output .= '</div>';
    }elseif ( $title_layout == 'titlenumber' ) {
        $output .= '<div class="'.esc_attr( implode( ' ', $wrap_class ) ).' '.esc_attr($title_layout).' '.$align.'">';
            $output .= '<div class="title-number-wrap">';
                if ( !empty($number) ) {
                    $output .= '<span class="themeum-title-number" style="'.$numstyle.'">'.esc_attr($number).'</span>';
                }
                if ( !empty($title) ) {
                    $output .= '<'.esc_attr($headline).' class="'. implode( ' ', $class_title ) . '">'.wp_kses_post($title).'</'.esc_attr($headline).'>';
                }
                if ( !empty($subtitle) ) {
                    $output .= '<'.esc_attr($subheadline).' class="themeum-subtitle">'.wp_kses_post($subtitle).'</'.esc_attr($subheadline).'>';
                }                
                if ( !empty($desc) ) {
                    $output .= '<div class="themeum-title-desc">'.wp_kses_post($desc).'</div>';
                }
            $output .= '</div>';
        $output .= '</div>';
    } else {
        $output .= esc_html__('Select your desire title layout', 'starterpro');
    }



    return $output;
  }
add_shortcode('themeum_title', 'themeum_title_data_shortcodes');