<?php get_header(); ?>
    <?php 
    $headerstyle = get_theme_mod( 'header_layout', 'individual' );
    if ( $headerstyle == 'individual' ) {
       get_template_part('lib/sub-header');
    } else {
        //get_template_part('lib/sub-header');
    }
    ?>
    <section id="main">
        <?php if ( have_posts() ) :  ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="container">
                    <div class="row">
                        <div id="content" class="site-content col-md-12" role="main">
                            <?php get_template_part( 'post-format/content-portfolio' ); ?>
                        </div> <!-- #content -->
                    </div> <!-- .row -->
                </div> <!-- .container -->

            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part( 'post-format/content', 'none' ); ?>
        <?php endif; ?>
        <div class="clearfix"></div>
    </section> <!-- #main -->
<?php get_footer();
