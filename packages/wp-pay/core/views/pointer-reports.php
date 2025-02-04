<?php
/**
 * Pointer Reports
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<h3><?php esc_html_e( 'Reports', 'pronamic-pay-with-mollie-for-woocommerce' ); ?></h3>

<p>
	<?php esc_html_e( 'The Pronamic Pay reports page shows you an graph of all the payments of this year.', 'pronamic-pay-with-mollie-for-woocommerce' ); ?>
	<?php esc_html_e( 'You can see the number of successful payments and the total amount of pending, successful, cancelled and failed payments.', 'pronamic-pay-with-mollie-for-woocommerce' ); ?>
</p>
