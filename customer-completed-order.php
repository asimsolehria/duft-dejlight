<?php

/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>

<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

// The above hook of email order details is not working ... so below code is added instead of hook 


?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
	<tbody class="TextBlockOuter">
		<tr>
			<td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">

				<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" class="TextContentContainer">
					<tbody>
						<tr>
							<td id="emailcontent" valign="top" class="TextContent" style="padding-top: 9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; color: #666666; font-family: Helvetica; font-size: 13px; line-height: 150%; text-align: left;">
								<?php
								// Check if function exist
								if (function_exists('ast_get_tracking_items')) {

									$order_id = $order->get_id(); // Replace with your order_id

									$tracking_items = ast_get_tracking_items($order_id);

									foreach ($tracking_items as $tracking_item) {
										$tracking_number = $tracking_item['tracking_number'];
										$tracking_provider = $tracking_item['formatted_tracking_provider'];
										$tracking_url = $tracking_item['formatted_tracking_link'];
										$date_shipped = date_i18n(get_option('date_format'), $tracking_item['date_shipped']);
										// Tracking per item info

										// $products_list = $tracking_item['products_list'];
										// foreach ($products_list as $product) {
										// 	$product = wc_get_product($product->product);
										// 	$qty = $product->qty;
										// }
									}
								}
								?>
								<p style="margin: 10px 0; padding: 0; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #4B4B4B; font-family: Helvetica; font-size: 16px; line-height: 150%; text-align: left;">Hi,<?php echo $order->get_billing_first_name(); ?></p>
								<!--  Here Goes Content: Start  -->
								<p style="margin: 10px 0; padding: 0; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #4B4B4B; font-family: Helvetica; font-size: 16px; line-height: 150%; text-align: left;">Your order has been received and is now being processed. Your order details are shown below for your reference:</p>
								<table width="100%" style="border: 2px solid #012E57;padding: 10px;">
									<tr>
										<td align="center">
											<a href="<?php echo $tracking_url; ?>"> TRACK ORDER</a>
										</td>
									</tr>
								</table>

								<div style="margin-bottom: 40px;">
									<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; vertical-align: middle;">
										<thead>
											<tr>
												<th width="60%" class="td" scope="col" style="text-align: left; color: #012E57; vertical-align: middle; border-bottom: 1px solid #ebebeb;">Produkt</th>
												<th width="10%" class="td" scope="col" style="text-align: left; color: #012E57; vertical-align: middle; border-bottom: 1px solid #ebebeb;">Antal</th>
												<th width="30%" class="td" scope="col" style="text-align: left; color: #012E57; vertical-align: middle; border-bottom: 1px solid #ebebeb;">Pris</th>
											</tr>
										</thead>
										<tbody>
											<?php
											echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
												$order,
												array(
													'show_sku'      => $sent_to_admin,
													'show_image'    => true,
													'image_size'    => array(100, 100),
													'plain_text'    => $plain_text,
													'sent_to_admin' => $sent_to_admin,
												)
											);
											?>


										</tbody>
										<tfoot style="background-color: #fafafa;">

											<?php
											$item_totals = $order->get_order_item_totals();

											if ($item_totals) {
												$i = 0;
												foreach ($item_totals as $total) {
													$i++;
											?>
													<tr>
														<th class="td" scope="row" colspan="2" style="text-align: right; border-top-width: 0px; color: #858585; vertical-align: middle; padding-top: 8px !important; padding-bottom: 8px !important;"><?php echo wp_kses_post($total['label']); ?></th>
														<td width="150" class="td" style="border-bottom: 2px solid #012E57 ;text-align: left; border-top-width: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; vertical-align: middle; padding-top: 8px !important; padding-bottom: 8px !important;"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?php echo wp_kses_post($total['value']); ?></span></td>
													</tr>

												<?php
												}
											}
											if ($order->get_customer_note()) {
												?>
												<tr>
													<th class="td" scope="row" colspan="2" style="text-align: right; color: #858585; vertical-align: middle; padding-top: 8px !important; padding-bottom: 8px !important;"><?php esc_html_e('Note:', 'woocommerce'); ?></th>
													<td class="td" style="border-bottom: 2px solid #012E57 ;text-align: left; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; vertical-align: middle; padding-top: 8px !important; padding-bottom: 8px !important;"><?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?></td>
												</tr>

											<?php
											}
											?>

										</tfoot>
									</table>
								</div>
								<?php

								/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
								do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);

								/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
								do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);

								/**
								 * Show user-defined additional content - this is set in each email's settings.
								 */
								if ($additional_content) {
									echo wp_kses_post(wpautop(wptexturize($additional_content)));
								}

								/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
								do_action('woocommerce_email_footer', $email);
