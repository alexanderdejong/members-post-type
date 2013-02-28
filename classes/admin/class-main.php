<?php
class MPT_Admin_Main {
	public function __construct( ) {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'admin_enqueue_scripts' ), 10, 1 );
	}

	public static function admin_enqueue_scripts( $hook ) {
		if ( in_array( $hook, array( 'edit.php', 'post-new.php' ) ) && isset( $_GET['post_type'] ) && $_GET['post_type'] == MPT_CPT_NAME ) {
			wp_enqueue_style( MPT_CPT_NAME . '-admin', MPT_URL . '/assets/css/admin.css', array( ), MPT_VERSION, 'all' );
		}
	}
}
