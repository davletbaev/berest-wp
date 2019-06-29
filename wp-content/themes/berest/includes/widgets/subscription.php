<?php

class Subscription extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'subscription',
			'description' => 'Subscription Form',
		);
		parent::__construct( 'my_widget', 'Subscription', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
    if ( ! isset( $args['widget_id'] ) ) {
      $args['widget_id'] = $this->id;
    }

    $widget_id = 'widget_' . $args['widget_id'];

    $heading = get_field('heading', $widget_id);
    $desc = get_field('description', $widget_id);
    $phone_raw = get_option('insur_phone');
    $phone_formatted = apply_filters( 'phone_filter', get_option('insur_phone'));
    $mail = get_option('insur_email');

    $html = '<h2 class="section__title">' . $heading . '</h2>' .
      '<div class="section__content contact-card">' .
        '<div class="contact-card__body">' .
          '<div class="contact-card__content">' .
            '<h3 class="contact-card__title">' . $desc . '</h3>' .
            '<div class="contact-card__contacts">' .
              '<span class="contact-card__contacts-label">Free advice:</span>' .
              '<a href="tel:' . $phone_formatted . '" class="contact-card__contacts-item contact-link" title="Call ' . $phone_raw . '">' .
                '<i class="icon icon--phone"></i>' .
                '<span class="topbar__link-label">' . $phone_raw . '</span>' .
              '</a>' .
              '<a href="mailto:' . $mail . '" class="contact-card__contacts-item contact-link" title="Mail to ' . $mail . '">' .
                '<i class="icon icon--envelope"></i>' .
                '<span class="topbar__link-label">' . $mail . '</span>' .
              '</a>' .
              '<button class="contact-card__contacts-item button button--white button--outline button--uppercase button--lg">' .
                '<span>Go to chat</span>' .
                '<i class="icon icon--right"></i>' .
              '</button>' .
            '</div>' .
          '</div>' .
        '</div>' .
      '</div>';

    echo $args['before_widget'];
    echo $html;
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}

function register_subscription_widget() {
  register_widget( 'Subscription' );
}
add_action( 'widgets_init', 'register_subscription_widget' );

?>