<?php
namespace Elementor\Core\Common\Modules\Connect\Apps;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

abstract class Base_User_App extends Base_App {

	/**
	 * @since 2.3.0
	 * @access protected
	 */
	protected function update_settings() {
<<<<<<< HEAD
		update_user_option( get_current_user_id(), $this->get_option_name(), $this->data );

		// TEMP: Ensure the global meta is deleted. Remove on 3.2.0.
		if ( get_user_meta( get_current_user_id(), $this->get_option_name(), true ) ) {
			delete_user_meta( get_current_user_id(), $this->get_option_name() );
		}
=======
		update_user_meta( get_current_user_id(), $this->get_option_name(), $this->data );
>>>>>>> cf6de4ce0fb1c96e6dfb96542a769208ef370df4
	}

	/**
	 * @since 2.3.0
	 * @access protected
	 */
	protected function init_data() {
<<<<<<< HEAD
		$this->data = get_user_option( $this->get_option_name() );
=======
		$this->data = get_user_meta( get_current_user_id(), $this->get_option_name(), true );
>>>>>>> cf6de4ce0fb1c96e6dfb96542a769208ef370df4

		if ( ! $this->data ) {
			$this->data = [];
		}
	}
}
