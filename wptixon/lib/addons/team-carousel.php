<?php
add_action('init', 'themeum_team_carousel_addons', 99);

function themeum_team_carousel_addons(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

                'thm_team_carousel'    => array(
                    'name'          => esc_html__( 'Team Carousel', 'wptixon' ),
                    'icon'          => 'fa-sliders',
                    'category'      => 'Tixon',
                    'nested'        => true,
                    'accept_child'  => 'themeum_team',
                    'params' => array(
                        array(
                            'name'    => 'teamcolumn',
                            'label'   => esc_html__('Show Column', 'wptixon'),
                            'type'    => 'select',
                            'options' => array(
                                '2'  => esc_html__('Column 2', 'wptixon'), 
                                '3'  => esc_html__('Column 3', 'wptixon'),
                                '4'  => esc_html__('Column 4', 'wptixon'),
                                '5'  => esc_html__('Column 5', 'wptixon'),
                                '6'  => esc_html__('Column 6', 'wptixon'),
                            ),
                            'value'         => '3',
                        ), 
                        array(
                            'name'    => 'teampagination',
                            'label'   => esc_html__('Show Pagination', 'wptixon'),
                            'type'    => 'select',
                            'options' => array(
                                'true'  => esc_html__('Yes', 'wptixon'),  
                                'false'  => esc_html__('No', 'wptixon'),
                            ),
                            'value'         => 'true',
                        ),                         
                        array(
                            'name'    => 'teamautoplay',
                            'label'   => esc_html__('Auto play', 'wptixon'),
                            'type'    => 'select',
                            'options' => array(
                                'true'  => esc_html__('Yes', 'wptixon'),  
                                'false'  => esc_html__('No', 'wptixon'),

                            ),
                            'value'         => 'true',
                        ),                                                 
                        array(
                            'type'          => 'text',
                            'label'         => esc_html__( 'Custom class', 'wptixon' ),
                            'name'          => 'extra_class',
                            'description'   => esc_html__( 'Enter extra custom class', 'wptixon' )
                        ),
                    )                    
                )

            )
        ); // End add map

    } // End if
}

function themeum_team_carousel_register( $atts, $content = null ){
    $output = $extra_class  = $teamcolumn = $teampagination = $teamautoplay = '';
    extract( shortcode_atts( array(
        'teamcolumn'            => '3',
        'teampagination'        => 'true',
        'teamautoplay'          => 'true',
        'extra_class'           => '',
    ), $atts ));
    

    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    $wrap_class[] = 'themeum-team-carousel';
    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    } 

    $output = '<div data-number="'.esc_attr($teamcolumn).'" data-pagi="'.esc_attr($teampagination).'" data-aplay="'.esc_attr($teamautoplay).'" class="team-carousel owl-carousel owl-theme '.esc_attr( implode( ' ', $wrap_class ) ).'">';
        $output .= do_shortcode( str_replace('thm_team_carousel#', 'thm_team_carousel', $content ) );
    $output .= '</div>';

    return $output;

}
add_shortcode('thm_team_carousel', 'themeum_team_carousel_register');



