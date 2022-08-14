<?php

/**
 * Email Order Items
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-items.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

$text_align  = is_rtl() ? 'right' : 'left';
$margin_side = is_rtl() ? 'left' : 'right';

foreach ($items as $item_id => $item) :
	$product       = $item->get_product();
	$sku           = '';
	$purchase_note = '';
	$image         = '';

	if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
		continue;
	}

	if (is_object($product)) {
		$sku           = $product->get_sku();
		$purchase_note = $product->get_purchase_note();
		$image         = $product->get_image($image_size);
		$image_id  = $product->get_image_id();
		$image_url = wp_get_attachment_image_url($image_id, 'full');
	}

?>

	<tr class="order_item">
		<td class="td" style="text-align: left; vertical-align: middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; word-wrap: break-word; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; border-bottom: 1px solid #ebebeb;font-weight: bold;">
			<img width="64" height="64" src="<?php echo $image_url; ?>" class="attachment-64x64 size-64x64 wp-post-image" alt="" style="border: 0; display: inline-block; font-size: 14px; font-weight: bold; height: auto !important; outline: none; text-decoration: none; text-transform: capitalize; vertical-align: middle; margin-right: 10px; -ms-interpolation-mode: bicubic;">

			<br>
			<?php


			$terms = get_the_terms($product->get_id(), 'product_cat', array('fields' => 'ids', 'parent' => '1'));
			if ($terms) {
				$i = 0;
				foreach ($terms as $term) {

					$i++;
					$product_cat = $term->name;
					if ($i == 2) {
						echo $product_cat . "-";
					}
					if ($i == 1) {
						$cat = $term->name;
					}
				}
			}

			// Show title/image etc.
			// if ($show_image) {
			// 	echo wp_kses_post(apply_filters('woocommerce_order_item_thumbnail', $image, $item));
			// }

			// Product name.
			echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));
			echo "<br>";
			echo "<br>";

			// SKU.
			if ($sku) {
				echo wp_kses_post(' (#' . $sku . ')');
			}

			echo "<br>";
			// echo wc_display_product_attributes($product);
			foreach ($product->get_attributes() as $attr_name => $attr) {

				echo wc_attribute_label($attr_name); // attr label
				// or get_taxonomy( $attr_name )->labels->singular_name;

				foreach ($attr->get_terms() as $term) {

					echo $term->name;
				}
				break;
			}

			echo "<br>";



			// SKU.
			$tags = $product->tag_ids;
			if ($tags) {
				foreach ($tags as $tag) {
					echo get_term($tag)->name;
				}
			}
			echo "<br>";

			echo $cat;
			// $variant = $product->get_attribute('pa_variant');
			// echo $variant;



			// allow other plugins to add additional product information here.
			// do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

			// wc_display_item_meta(
			// 	$item,
			// 	array(
			// 		'label_before' => '<strong class="wc-item-meta-label" style="float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
			// 	)
			// );

			// allow other plugins to add additional product information here.
			// do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);

			?>


		</td>
		<td class="td" style="text-align: left; vertical-align: middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; border-bottom: 1px solid #ebebeb;">


			<?php
			$qty          = $item->get_quantity();
			$refunded_qty = $order->get_qty_refunded_for_item($item_id);

			if ($refunded_qty) {
				$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
			} else {
				$qty_display = esc_html($qty);
			}
			echo wp_kses_post(apply_filters('woocommerce_email_order_item_quantity', $qty_display, $item));
			?>
		</td>
		<td class="td" style="text-align: left; vertical-align: middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #858585; border-bottom: 1px solid #ebebeb;">
			<span class="woocommerce-Price-amount amount">
				<span class="woocommerce-Price-currencySymbol">

				</span>
				<?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
			</span>
		</td>
	</tr>



	<?php

	if ($show_purchase_note && $purchase_note) {
	?>
		<tr>
			<td colspan="3" style="text-align:<?php echo esc_attr($text_align); ?>; vertical-align:middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;">
				<?php
				echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
				?>
			</td>
		</tr>
	<?php
	}
	?>

<?php endforeach; ?>