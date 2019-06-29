<?php

function widget($atts) {
    
    global $wp_widget_factory;
    
    extract(shortcode_atts(array(
        'widget_name' => FALSE
    ), $atts));
    
    $widget_name = wp_specialchars($widget_name);
    
    ob_start();
    if ( is_active_sidebar( $widget_name ) ) : ?>
      <?php dynamic_sidebar( $widget_name ); ?>
    <?php endif;
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
    
}
add_shortcode('widget','widget'); 

?>