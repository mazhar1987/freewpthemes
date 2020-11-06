<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Themeum_Testimonial extends Widget_Base {
	public function get_name() {
		return 'thm-testimonial';
	}

	public function get_title() {
		return __( 'Themeum Testimonial', 'flatpro' );
	}

	public function get_icon() {
		return 'eicon-blockquote';
	}

	public function get_categories() {
		return [ 'themeum-elementor' ];
	}

	protected function _register_controls() {
		
		
		
		# Option Start
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Themeum Testimonial', 'flatpro' ),
			]
		);
		$this->add_control(
            'testimonial_layout',
            [
                'label'     => __( 'Layout', 'flatpro' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'layout_1',
                'options'   => [
                        'layout_1' 		=> __( 'Center Align Layout', 'flatpro' ),
                        'layout_2' 		=> __( 'Left Bottom Layout', 'flatpro' ),
                    ],
            ]
        );
		$this->add_control(
			'testimonial_list',
			[
				'label' 		=> __( 'Testimonial Items', 'flatpro' ),
				'type' 			=> Controls_Manager::REPEATER,
				'show_label'  	=> true,
				'default' 		=> [
					[
						'text' => __( 'Testimonial #1', 'flatpro' ),
						'icon' => 'fa fa-check',
					],	
				],
				'fields' 		=> [
					[
						'name' 			=> 'person_name',
						'label' 		=> __( 'Person Name', 'flatpro' ),
						'type' 			=> Controls_Manager::TEXT,
						'label_block' 	=> true,
						'placeholder' 	=> __( 'Person Name', 'flatpro' ),
						'default' 		=> __( 'Jason Statham', 'flatpro' ),
					],
					[
						'name' 			=> 'person_designation',
						'label' 		=> __( 'Person Designation', 'flatpro' ),
						'type' 			=> Controls_Manager::TEXT,
						'label_block' 	=> true,
						'placeholder' 	=> __( 'Person Designation', 'flatpro' ),
						'default' 		=> __( 'English actor, former model and competitive diver', 'flatpro' ),
					],
					[
						'name' 			=> 'intro_text',
						'label' 		=> __( 'Intro Text', 'flatpro' ),
						'type' 			=> Controls_Manager::TEXTAREA,
						'label_block' 	=> true,
						'placeholder' 	=> __( 'Client Feedback', 'flatpro' ),
						'default' 		=> __( 'Enter Client feednack', 'flatpro' ),
					],
					[
						'name' 			=> 'image_upload',
		                'label'         => __( 'Image Upload', 'flatpro' ),
		                'type'          => Controls_Manager::MEDIA,
		                'label_block'   => true,
		                'default'       => [
		                        			'url' => Utils::get_placeholder_image_src(),
		                    			],
		            ],
					
				],
			]
		);
        $this->end_controls_section();
		# Option End




		# Style Global Start
		$this->start_controls_section(
			'section_title_style',
			[
				'label' 		=> __( 'Global Style', 'flatpro' ),
				'tab' 			=> Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'testimonial_background_color',
			[
				'label'			=> __( 'Background Color', 'flatpro' ),
				'type'			=> Controls_Manager::COLOR,
				'scheme'		=> [
				    'type'		=> Scheme_Color::get_type(),
				    'value' 	=> Scheme_Color::COLOR_2,
				],
				'selectors' 	=> [
					'{{WRAPPER}} .client-wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'testimonial_padding',
            [
                'label' 		=> __( 'Testimonial Padding', 'flatpro' ),
                'type' 			=> Controls_Manager::DIMENSIONS,
                'size_units' 	=> [ 'px', 'em', '%' ],
                'selectors' 	=> [ '{{WRAPPER}} .client-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
                'separator' 	=> 'before',
            ]
        );
		$this->add_responsive_control(
            'testimonial_margin',
            [
                'label' 		=> __( 'Testimonial Margin', 'flatpro' ),
                'type' 			=> Controls_Manager::DIMENSIONS,
                'size_units' 	=> [ 'px', 'em', '%' ],
                'selectors' 	=> [ '{{WRAPPER}} .client-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
                'separator' 	=> 'before',
            ]
        );
		$this->add_control(
			'testimonial_show_autoplay',
			[
				'label' 		=> __( 'Auto Slide', 'flatpro' ),
				'type' 			=> Controls_Manager::SWITCHER,
				'default' 		=> 'yes',
				'label_on' 		=> __( 'Yes', 'flatpro' ),
				'label_off' 	=> __( 'No', 'flatpro' ),
				'selectors' 	=> [ '{{WRAPPER}} h2.bordered:before' => 'width: 100%;' ],
			]
		);
		$this->add_control(
			'testimonial_show_dots',
			[
				'label' 		=> __( 'Enable Dots', 'flatpro' ),
				'type' 			=> Controls_Manager::SWITCHER,
				'default' 		=> '',
				'label_on' 		=> __( 'Yes', 'flatpro' ),
				'label_off' 	=> __( 'No', 'flatpro' ),
				'selectors' 	=> [ '{{WRAPPER}} h2.bordered:before' => 'width: 100%;' ],
			]
		);
		$this->add_control(
			'testimonial_show_arrow',
			[
				'label' 		=> __( 'Enable Arrow', 'flatpro' ),
				'type' 			=> Controls_Manager::SWITCHER,
				'default' 		=> 'yes',
				'label_on' 		=> __( 'Yes', 'flatpro' ),
				'label_off' 	=> __( 'No', 'flatpro' ),
				'selectors' 	=> [ '{{WRAPPER}} h2.bordered:before' => 'width: 100%;' ],
			]
		);
		$this->add_control(
			'arrow_color',
			[
				'label'		=> __( 'Arrow BG Color', 'flatpro' ),
				'type'		=> Controls_Manager::COLOR,
				'scheme'	=> [
				    'type'	=> Scheme_Color::get_type(),
				    'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [ '{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'background-color: {{VALUE}};' ],
				'condition' => [ 'testimonial_show_arrow' => 'yes' ]
			]
		);
		$this->add_control(
			'arrow_hover_color',
			[
				'label'		=> __( 'Arrow BG Hover Color', 'flatpro' ),
				'type'		=> Controls_Manager::COLOR,
				'scheme'	=> [
				    'type'	=> Scheme_Color::get_type(),
				    'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [ '{{WRAPPER}} .slick-prev:hover,{{WRAPPER}} .slick-next:hover' => 'background-color: {{VALUE}};' ],
				'condition' => [ 'testimonial_show_arrow' => 'yes' ]
			]
		);



		$this->add_control(
			'total_border_radius',
			[
				'label' 		=> __( 'Border Radius', 'flatpro' ),
				'type' 			=> Controls_Manager::DIMENSIONS,
				'size_units' 	=> [ 'px', '%' ],
				'selectors' 	=> [ '{{WRAPPER}} .client-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};' ],
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' 			=> 'image_box_shadow',
				'selector' 		=> '{{WRAPPER}} .client-wrapper',
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' 			=> 'border',
				'label' 		=> __( 'Border', 'flatpro' ),
				'placeholder' 	=> '1px',
				'default' 		=> '1px',
				'selector' 		=> '{{WRAPPER}} .client-wrapper',
				'separator' 	=> 'before',
			]
		);
		$this->end_controls_section();
		# Style Global End





		# Style Name Start
		$this->start_controls_section(
			'section_name_style',
			[
				'label' 	=> __( 'Name Style', 'flatpro' ),
				'tab' 		=> Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'testimonial_name_color',
			[
				'label'		=> __( 'Text Color', 'flatpro' ),
				'type'		=> Controls_Manager::COLOR,
				'scheme'	=> [
				    'type'	=> Scheme_Color::get_type(),
				    'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [ '{{WRAPPER}} .client-info .person-name' => 'color: {{VALUE}};' ],
			]
		);
		$this->add_responsive_control(
            'testimonial_name_margin',
            [
                'label' 	=> __( 'Name Margin', 'flatpro' ),
                'type' 		=> Controls_Manager::DIMENSIONS,
                'size_units'=> [ 'px', 'em', '%' ],
                'selectors' => ['{{WRAPPER}} .client-info .person-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};' ],
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'testimonial_name_align',
            [
                'label'     => __( 'Alignment', 'flatpro' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'      => [
                        'title' => __( 'Left', 'flatpro' ),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center'    => [
                        'title' => __( 'Center', 'flatpro' ),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'right'     => [
                        'title' => __( 'Right', 'flatpro' ),
                        'icon'  => 'fa fa-align-right',
                    ],
                    'justify'   => [
                        'title' => __( 'Justified', 'flatpro' ),
                        'icon'  => 'fa fa-align-justify',
                    ],
                ],
                'default'   => 'center',
                'selectors' => ['{{WRAPPER}} .client-info .person-name' => 'text-align: {{VALUE}};' ],
            ]
        );
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'name_typography',
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .client-info .person-name',
			]
		);
		$this->end_controls_section();
		# Style Name End




		# Style Designation Start
		$this->start_controls_section(
			'section_designation_style',
			[
				'label' 	=> __( 'Designation Style', 'flatpro' ),
				'tab' 		=> Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'testimonial_designation_color',
			[
				'label'		=> __( 'Designation Color', 'flatpro' ),
				'type'		=> Controls_Manager::COLOR,
				'scheme'	=> [
				    'type'	=> Scheme_Color::get_type(),
				    'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [ '{{WRAPPER}} .client-info .person-designation' => 'color: {{VALUE}};' ],
			]
		);
		$this->add_responsive_control(
            'testimonial_designation_margin',
            [
                'label' 	=> __( 'Designation Margin', 'flatpro' ),
                'type' 		=> Controls_Manager::DIMENSIONS,
                'size_units'=> [ 'px', 'em', '%' ],
                'selectors' => [ '{{WRAPPER}} .client-info .person-designation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'testimonial_designation_align',
            [
                'label'     => __( 'Alignment', 'flatpro' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'      => [
                        'title' => __( 'Left', 'flatpro' ),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center'    => [
                        'title' => __( 'Center', 'flatpro' ),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'right'     => [
                        'title' => __( 'Right', 'flatpro' ),
                        'icon'  => 'fa fa-align-right',
                    ],
                    'justify'   => [
                        'title' => __( 'Justified', 'flatpro' ),
                        'icon'  => 'fa fa-align-justify',
                    ],
                ],
                'default'   => 'center',
                'selectors' => [
                    '{{WRAPPER}} .client-info .person-designation,{{WRAPPER}} .client-img,{{WRAPPER}} .testimonial_content_wrapper' => 'text-align: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'designation_typography',
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .client-info .person-designation',
			]
		);
		$this->end_controls_section();
		# Style Designation End





		# Style Image Start
		$this->start_controls_section(
			'section_style_image',
			[
				'label' 	=> __( 'Client Image', 'flatpro' ),
				'tab'   	=> Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'space',
			[
				'label' 	=> __( 'Size (%)', 'flatpro' ),
				'type' 		=> Controls_Manager::SLIDER,
				'default' 	=> [
						'size' => 100,
						'unit' => '%',
				],
				'size_units'=> [ '%' ],
				'range' 	=> [
					'%' 	=> [
							'min' => 1,
							'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .client-img img' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'opacity',
			[
				'label' 	=> __( 'Opacity (%)', 'flatpro' ),
				'type' 		=> Controls_Manager::SLIDER,
				'default' 	=> [
							'size' => 1,
				],
				'range' 	=> [
							'px' => [
								'max' => 1,
								'min' => 0.10,
								'step' => 0.01,
							],
						],
				'selectors' => [ '{{WRAPPER}} .client-img img' => 'opacity: {{SIZE}};'],
			]
		);
		$this->add_control(
			'hover_animation',
			[
				'label' 	=> __( 'Hover Animation', 'flatpro' ),
				'type' 		=> Controls_Manager::HOVER_ANIMATION,
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' 		=> 'image_border',
				'label' 	=> __( 'Image Border', 'flatpro' ),
				'selector' 	=> '{{WRAPPER}} .client-img img',
			]
		);
		$this->add_control(
			'image_border_radius',
			[
				'label' 		=> __( 'Border Radius', 'flatpro' ),
				'type' 			=> Controls_Manager::DIMENSIONS,
				'size_units' 	=> [ 'px', '%' ],
				'selectors'		=> [ '{{WRAPPER}} .client-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
			]
		);
		$this->add_responsive_control(
            'image_margin',
            [
                'label' 		=> __( 'Image Margin', 'flatpro' ),
                'type' 			=> Controls_Manager::DIMENSIONS,
                'size_units' 	=> [ 'px', 'em', '%' ],
                'selectors' 	=> [ '{{WRAPPER}} .client-img img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
            ]
        );
		$this->end_controls_section();
		# Style Image End





		# Style Content Start
		$this->start_controls_section(
			'section_style_content',
			[
				'label' 		=> __( 'Content Style', 'flatpro' ),
				'tab'   		=> Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'testimonial_content_color',
			[
				'label'		=> __( 'Content Color', 'flatpro' ),
				'type'		=> Controls_Manager::COLOR,
				'scheme'	=> [
				    'type'	=> Scheme_Color::get_type(),
				    'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .client-info .person-text' => 'color: {{VALUE}};',
				],
			]
		);		
		$this->add_responsive_control(
            'testimonial_title_margin',
            [
                'label' 		=> __( 'Text Margin', 'flatpro' ),
                'type' 			=> Controls_Manager::DIMENSIONS,
                'size_units' 	=> [ 'px', 'em', '%' ],
                'selectors' 	=> [ '{{WRAPPER}} .client-info .person-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
            ]
        );
        $this->add_responsive_control(
            'testimonial_text_align',
            [
                'label'     => __( 'Alignment', 'flatpro' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'      => [
                        'title' => __( 'Left', 'flatpro' ),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center'    => [
                        'title' => __( 'Center', 'flatpro' ),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'right'     => [
                        'title' => __( 'Right', 'flatpro' ),
                        'icon'  => 'fa fa-align-right',
                    ],
                    'justify'   => [
                        'title' => __( 'Justified', 'flatpro' ),
                        'icon'  => 'fa fa-align-justify',
                    ],
                ],
                'default'   => 'center',
                'selectors' => [
                    '{{WRAPPER}} .client-info .person-text' => 'text-align: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' 		=> 'typography',
				'scheme' 	=> Scheme_Typography::TYPOGRAPHY_1,
				'selector' 	=> '{{WRAPPER}} .client-info .person-text',
			]
		);
		$this->end_controls_section();
		# Style Content End


	
	}

	public function get_script_depends() {
	 	return [ 'jquery-slick' ];
	}

	protected function render( ) {
		$settings = $this->get_settings(); ?>

		<div class="testimonial_content_wrapper" data-autoplay="<?php echo $settings['testimonial_show_autoplay']; ?>" data-showdots="<?php echo $settings['testimonial_show_dots']; ?>" data-showarrow="<?php echo $settings['testimonial_show_arrow']; ?>">
			<?php foreach ( $settings['testimonial_list'] as $item ) : ?>
				<div class="justify-content-center">
					<div class="client-wrapper">
						<?php if( $settings['testimonial_layout'] == 'layout_1' ){ ?>

							<div class="client-info layout1">
								<div class="client-img">
									<?php
										if (!empty($item['image_upload'])) {
											echo wp_get_attachment_image( $item['image_upload']['id'], 'full' );
										}
									?>
								</div>
								<?php if( $item['person_name'] ){ ?><div class="person-name"><?php echo $item['person_name']; ?></div><?php } ?>
								<?php if( $item['person_designation'] ){ ?><div class="person-designation"><?php echo $item['person_designation']; ?></div><?php } ?>
								<?php if( $item['intro_text'] ){ ?><div class="person-text"><?php echo $item['intro_text']; ?></div><?php } ?>
							</div>

						<?php } else { ?>

							<div class="client-info layout2">
								<?php if( $item['intro_text'] ){ ?><div class="person-text"><?php echo $item['intro_text']; ?></div><?php } ?>
								<div class="client-img">
									<?php
										if (!empty($item['image_upload'])) {
											echo wp_get_attachment_image( $item['image_upload']['id'], 'full' );
										}
									?>
								</div>
								<?php if( $item['person_name'] ){ ?><div class="person-name"><?php echo $item['person_name']; ?></div><?php } ?>
								<?php if( $item['person_designation'] ){ ?><div class="person-designation"><?php echo $item['person_designation']; ?></div><?php } ?>
							</div>
							
						<?php } ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<?php 
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Widget_Themeum_Testimonial() );

