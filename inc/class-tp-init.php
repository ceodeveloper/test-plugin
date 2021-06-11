<?php

class TP_Init {

	public function __construct() {
		add_action( 'init', [ $this, 'create_post_type' ] );
	}

	public function create_post_type() {
		$args = array(
			'public'    => true,
			'label'     => __( 'Test', 'test-plugin' ),
			'menu_icon' => 'dashicons-book',
		);

		register_post_type( 'test', $args );
	}

}