    <?php if (is_active_sidebar('bottom1') || is_active_sidebar('bottom2') || is_active_sidebar('bottom3') || is_active_sidebar('bottom4')) {?>      
            <?php if ( get_theme_mod( 'bottom_en', true )) { ?>
                <?php $col = get_theme_mod( 'bottom_column', 3 ); ?>
                <div id="bottom-wrap"> 
                    <div class="container">
                        <div class="row clearfix">
                            <?php if (is_active_sidebar('bottom1')):?>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <?php dynamic_sidebar('bottom1'); ?>
                                </div>
                            <?php endif; ?> 
                            <?php if (is_active_sidebar('bottom2')):?>
                                <div class="col-sm-6 col-md-6 col-lg-2">
                                    <?php dynamic_sidebar('bottom2'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (is_active_sidebar('bottom3')):?>
                                <div class="col-sm-6 col-md-6 col-lg-2">
                                    <?php dynamic_sidebar('bottom3'); ?>
                                </div>  
                            <?php endif; ?>  
                            <?php if (is_active_sidebar('bottom4')):?>                 
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <?php dynamic_sidebar('bottom4'); ?>
                                </div>
                            <?php endif; ?>  
                        </div>
                    </div>
                </div><!--/#bottom-wrap-->
            <?php } ?>
        <?php } ?>

        <?php if ( get_theme_mod( 'footer_en', true )) { ?>
            <footer id="footer-wrap"> 
                <div class="container">
                    <div class="row clearfix">
                        <?php if ( get_theme_mod( 'copyright_en', true )) { ?>
                            <?php if (get_theme_mod( 'bottom_footer_menu', true ) && has_nav_menu( 'footernav' ) ) { ?>
                            <div class="col-sm-12 text-sm-center text-md-left col-md-6">
                            <?php } else{?>
                            <div class="col-sm-12 col-md-12 text-center">
                            <?php }?>
                                <div class="footer-copyright">
                                    <?php if( get_theme_mod( 'copyright_en', true ) ) { ?>
                                        <?php echo wp_kses_post(balanceTags( get_theme_mod( 'copyright_text', esc_html__('Copyright 2019. All Right Reserved', 'wpestate') ))); ?>
                                    <?php } ?>
                                </div> <!-- col-md-6 -->
                            </div> <!-- end footer-copyright -->
                        <?php } ?>                        

                        <?php if ( get_theme_mod( 'bottom_footer_menu', true )) { ?>
                            <?php if ( has_nav_menu( 'footernav' ) ) { ?>
                                <?php if( get_theme_mod( 'copyright_en', true ) ) { ?>
                                <div class="col-sm-12 col-md-6">
                                <?php }else{ ?>
                                <div class="col-sm-12 col-md-12 text-center footer-menu-center">
                                <?php } ?>
                                    <?php
                                    $default = array( 'theme_location'  => 'footernav',
                                      'container'       => '', 
                                      'menu_class'      => 'menu-footer-menu',
                                      'menu_id'         => 'menu-footer-menu',
                                      'fallback_cb'     => 'wp_page_menu',
                                      'depth'           => 1
                                    );
                                    wp_nav_menu($default);
                                    ?>
                                </div>
                            <?php } ?> 
                        <?php } ?>
                    </div><!--/.row clearfix-->    
                </div><!--/.container-->    
            </footer><!--/#footer-wrap-->    
        <?php } ?>
</div>
<?php wp_footer(); ?>
</body>
</html>