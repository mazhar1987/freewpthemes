<?php if( is_single() ): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('newskit-post newskit-single-post single-content-flat'); ?>>
<?php else: ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('newskit-post newskit-single-post newskit-index-post'); ?>>
<?php endif; ?>

    <?php if ( has_post_thumbnail() && !is_single() ){ ?>
        <div class="blog-details-img">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('newskit-large', array('class' => 'img-fluid')); ?>
            </a>
            <?php get_template_part( 'post-format/social-buttons' ); ?>
        </div>
    <?php } else{ ?>
        <div class="blog-details-img">
            <?php get_template_part( 'post-format/social-buttons' ); ?>
        </div>
    <?php } ?>

    <div class="newskit-blog-content clearfix">
        <?php if (is_single()) { ?>
            <div class="thm-post-top"> 
                <!-- Content Single Top -->
                <?php get_template_part( 'post-format/content-single-top' ); ?>

                <div class="newskit-single-post-feature text-center">
                    <?php the_post_thumbnail('newskit-large', array('class' => 'img-fluid')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="entry-blog">
                        <?php
                            get_template_part( 'post-format/entry-content-blog' );
                        ?>
                    </div> <!--/.entry-meta -->
                </div>
            </div>
        <?php } ?>
        <!-- Content Single Bottom -->
        <?php get_template_part( 'post-format/content-single-bottom' ); ?>
        
        <?php if(get_theme_mod( 'blog_read_more', false )) { ?>
            <?php if(!is_single()){ ?>
            <?php if ( get_theme_mod( 'blog_continue_en', true ) ) {  ?>
             <?php   if ( get_theme_mod( 'blog_continue', 'Read More' ) ) { ?>
                  <?php  $continue = esc_html( get_theme_mod( 'blog_continue', 'Read More' ) );
                    echo '<p><a class="btn btn-read-more" href="'.get_permalink().'">'. $continue .'</a></p>';?>
              <?php  } ?>
            <?php } ?>
            <?php }?>
        <?php }?>

    </div>
</article><!--/#post-->
