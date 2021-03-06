<?php
/*
*Template Name: 404 Page Template
*/
get_header('alternative');
?>

<div class="eventco-error-wrapper" style="background-image: url(<?php echo esc_url( get_theme_mod('errorlogo', get_parent_theme_file_uri().'/images/404.jpg')); ?>)">
    
    <div id="particle-container">
        <?php for ($i=0; $i <30 ; $i++) { ?>
            <div class='particle'></div>
        <?php } ?>
    </div>

    <div class="container">
        <div class="info-wrapper">
            <h2 class="error-message-title">
                <?php  echo esc_html(get_theme_mod( '404_title', esc_html__('404', 'eventco') )); ?>
            </h2>
            <p class="error-message">
                <?php  echo esc_html(get_theme_mod( '404_description', esc_html__('Oops! you’ve encountered an error!', 'eventco') )); ?>
            </p>
            <a class="btn btn-eventco white" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php  esc_html_e( 'HOME', 'eventco' ); ?>">
                <?php  echo esc_html(get_theme_mod( '404_btn_text', esc_html__('Go Home', 'eventco') )); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer('alternative'); ?>
