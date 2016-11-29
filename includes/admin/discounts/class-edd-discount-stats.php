<?php
/**
 * Discounts Stats Class
 *
 * @package     EDD
 * @subpackage  Admin/Discounts
 * @copyright   Copyright (c) 2016, Sunny Ratilal
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.7
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * EDD_Discount_Stats Class
 *
 * This class is for retrieving stats for earnings and sales where a discount
 * code has been used.
 *
 * @since 2.7
 */
class EDD_Discount_Stats extends EDD_Stats {
	/**
	 * Retrieve sales for a specified discount code.
	 *
	 * @access public
	 * @since  2.7
	 *
	 * @param  int    $download_id
	 * @param  string $discount_code
	 * @param  string $start_date
	 * @param  string $end_date
	 * @param  string $status
	 */
	public function get_sales( $download_id = 0, $discount_code = false, $start_date = false, $end_date = false, $status = 'active' ) {
		$this->setup_dates( $start_date, $end_date );

		// Ensure start date is valid
		if ( is_wp_error( $this->start_date ) ) {
			return $this->start_date;
		}

		// Ensure end date is valid
		if ( is_wp_error( $this->end_date ) ) {
			return $this->end_date;
		}

		/**
		 * Bail if an empty discount code is provided
		 *
		 * @todo Implement querying for all discounts in 2.8 when EDD_Discount is introduced
		 */
		if ( ! $discount_code || empty( $discount_code ) ) {
			return -1;
		}


	}

	/**
	 * Retrieve earnings for a specified discount code.
	 *
	 * @access public
	 * @since  2.7
	 *
	 * @param  int    $download_id
	 * @param  string $discount_code
	 * @param  string $start_date
	 * @param  string $end_date
	 * @param  string $status
	 */
	public function get_earnings( $download_id = 0, $discount_code = false, $start_date = false, $end_date = false, $status = 'active' ) {
		$this->setup_dates( $start_date, $end_date );

		// Ensure start date is valid
		if ( is_wp_error( $this->start_date ) ) {
			return $this->start_date;
		}

		// Ensure end date is valid
		if ( is_wp_error( $this->end_date ) ) {
			return $this->end_date;
		}

		/**
		 * Bail if an empty discount code is provided
		 *
		 * @todo Implement querying for all discounts in 2.8 when EDD_Discount is introduced
		 */
		if ( ! $discount_code || empty( $discount_code ) ) {
			return -1;
		}
	}
}