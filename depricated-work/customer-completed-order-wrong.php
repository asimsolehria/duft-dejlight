<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css" />
	<title>Document</title>

	<style>
		@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

		body {
			background-color: rgb(242, 242, 242);
			font-family: "Quicksand", sans-serif;
			color: rgb(75, 75, 75);
		}

		a {
			color: black;
		}

		.container {
			width: 50%;
			margin-left: auto;
			margin-right: auto;
		}

		/* Top Logo and Account CSS */
		.logo {
			width: 400px;
		}

		.logo-div {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.link {
			margin: 0 4px;
			color: rgb(58, 58, 58);
			font-weight: 600;
		}

		#shop {}

		.sub-container {
			background-color: white;
			padding: 10px 25px;
			font-weight: 600;
			position: relative;
			top: -5px;
		}

		.main-img img {
			width: 100%;
		}

		.order-text-div {
			height: 75px;
			background-color: rgb(1, 46, 87);
			position: relative;
			top: -5px;
		}

		.order-text-div h2 {
			margin-top: 0;
			color: white;
			text-transform: uppercase;
			padding-top: 20px;
			padding-left: 20px;
		}

		.btn {
			background-color: transparent;
			border: 2px solid rgb(1, 46, 87);
			width: 100%;
			font-size: 18px;
			padding: 10px 0;
			font-weight: 600;
			color: rgb(75, 75, 75);
		}

		.cart-headings {
			display: flex;
			justify-content: space-around;
			border-bottom: 2px solid rgb(1, 46, 87);
		}

		.cart-heading h4 {
			color: rgb(1, 46, 87);
			font-size: 18px;
			margin-bottom: 10px;
			font-weight: bolder;
		}

		.cart-heading-right {
			display: flex;
			position: relative;
			left: 30px;
		}

		.cart-heading-right :nth-child(2) {
			color: rebeccapurple;
			position: relative;
			left: 60px;
		}

		/* Cart */
		.cart-item {
			display: flex;
			align-items: center;
			justify-content: space-around;
			border-bottom: 2px solid rgb(1, 46, 87);
		}

		.cart-item img {
			width: 150px;
		}

		.product {
			display: flex;
			align-items: center;
		}

		#emptyDiv {
			flex: 1;
		}

		.parent-div {
			display: flex;
			justify-content: space-between;
		}

		.amount-div {
			display: flex;
			flex-direction: column;
			flex: 1;
		}

		.single-item-amount {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.single-item-amount h3 {
			margin: 7px 0;
			font-size: 16px;
		}

		h3 span {
			color: rgb(1, 46, 87);
			margin-right: 10px;
			font-size: 16px;
		}

		.customer-details {
			display: flex;
			align-items: center;
		}

		.customer-details p {
			font-size: 18px;
			font-weight: 400;
			font-size: 16px;
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.customer-details h3 {
			margin-right: 5px;
			font-weight: 700;
			font-size: 16px;
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.customer-details a {
			color: blue;
		}

		.single-item-amount div {
			border-bottom: 2px solid rgb(1, 46, 87);
			width: 60%;
		}

		.shipping-parent-div {
			display: flex;
		}

		.shipping-parent-div div {
			padding-left: 24px;
			font-weight: 400;
		}

		.flex-child:first-child {
			margin-right: 200px;
		}

		/* Bottom styles */
		.bottom {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-right: 20px;
		}

		.bottom-flex-child {
			/* flex: 1; */
		}

		.bottom-flex-child img {
			width: 220px;
		}

		/* Social Icons */

		.social-icons {
			color: rgb(1, 46, 87);
		}

		.social-icons i {
			margin: 0 5px;
		}

		.product {
			display: flex;
		}

		.col-3 {
			flex: 3;
		}

		.col-9 {
			flex: 9;
		}

		.image {
			width: 100%;
		}

		.table-heading {
			height: 200px;
			width: 200px;
			background-color: rgb(1, 46, 87);
		}

		.table {
			margin: 20px 5px;
		}

		.table p {
			padding-left: 20px;
		}

		.table th {
			color: rgb(1, 46, 87);
		}

		.table td {
			font-weight: 500;
		}

		/* Responsive */

		@media (max-width: 986px) {
			#emptyDiv {
				display: none;
			}

			.container {
				width: 70%;
			}

			.sub-container {
				width: 90%;
			}

			.logo {
				width: 200px;
			}

			.logo-div {
				justify-content: space-between;
			}

			.link {
				display: block;
			}

			.sub-container {
				padding-left: 10px;
				padding-right: 10px;
				width: 94%;
			}

			.shipping-parent-div {
				flex-direction: column;
			}

			.bottom img {
				width: 120px;
			}

			.bottom p {
				font-size: 12px;
			}

			.bottom {
				margin-right: 0;
			}

			.social-icons {}
		}

		@media (max-width: 786px) {
			#emptyDiv {
				display: none;
			}

			.container {
				width: 90%;
			}

			.sub-container {
				width: 100%;
			}

			.logo {
				width: 200px;
			}

			.logo-div {
				justify-content: space-between;
			}

			.link {
				display: block;
			}

			.sub-container {
				padding-left: 10px;
				padding-right: 10px;
				width: 94%;
			}

			.shipping-parent-div {
				flex-direction: column;
			}

			.bottom img {
				width: 120px;
			}

			.bottom p {
				font-size: 12px;
			}

			.bottom {
				margin-right: 0;
			}

			.social-icons {}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="logo-div">
			<div class="image-wrapper">
				<img src="https://duftdejligt.dk/wp-content/uploads/logo.png" class="logo" alt="logo" />
			</div>
			<div>
				<a href="<?php echo site_url(); ?>" class="link" id="shop">Shop </a>
				<a href="<?php echo site_url() . "/my-account"; ?>" class="link">My Account</a>
			</div>
		</div>

		<div>
			<div class="main-img">
				<img src="https://duftdejligt.dk/wp-content/uploads/banner.webp" alt="main-image" />
			</div>
			<div class="order-text-div">
				<h2>order completed (Order <?php echo "#" . $order->get_order_number(); ?>)</h2>
			</div>
		</div>
		<div class="sub-container">
			<div>
				<p>Hi, <?php echo $order->get_billing_first_name(); ?></p>
				<p>
					Just to let you know - we've finished processing your order (<?php echo "#" . $order->get_order_number(); ?>)),
					and you can now track your order:
				</p>
				<p>
					De bedste hilsener
					Teamet bag Duft Dejligt.dk
				</p>
			</div>
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

					echo $tracking_url;
					// Tracking per item info

					$products_list = $tracking_item['products_list'];
					foreach ($products_list as $product) {
						$product = wc_get_product($product->product);
						$qty = $product->qty;
					}
				}
			}

			?>
			<button class="btn"><a href="<?php echo $tracking_url; ?>">TRACK ORDER</a></button>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th style="width: 60%">Product</th>
							<th style="width: 10%">Antal</th>
							<th style="width: 12%">Pris</th>
							<th style="width: 16%"></th>
						</tr>
					</thead>

					<tbody>
						<?php
						foreach ($order->get_items() as $key => $value) {
							$product = wc_get_product($value['product_id']);
							$image_id = $product->get_image_id();
							$image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
						?>


							<tr>
								<td>
									<div class="row product">
										<div class="col-3 image-wrapper">
											<img src="<?php echo $image_url; ?>" class="image" alt="drive image" />
										</div>
										<div class="col-9">
											<p>
												<?php echo $value['name'] ?>
											</p>
										</div>
									</div>
								</td>
								<td>
									<p><?php echo $value['quantity'] ?></p>
								</td>
								<td>
									<p>$<?php echo $value['subtotal'] ?></p>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>

			<div class="parent-div">
				<div id="emptyDiv"></div>
				<div class="amount-div">




					<?php
					$item_totals = $order->get_order_item_totals();

					if ($item_totals) {
						$i = 0;
						foreach ($item_totals as $total) {
							$i++;
					?>
							<div class="single-item-amount">
								<h3><span><?php echo wp_kses_post($total['label']); ?></span></h3>
								<div>
									<h3><?php echo wp_kses_post($total['value']); ?></h3>
								</div>
							</div>
							<br>

						<?php
						}
					}
					if ($order->get_customer_note()) {
						?>
						<tr>
							<th class="td" scope="row" colspan="2" style="text-align:<?php echo esc_attr($text_align); ?>;"><?php esc_html_e('Note:', 'woocommerce'); ?></th>
							<td class="td" style="text-align:<?php echo esc_attr($text_align); ?>;"><?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?></td>
						</tr>
					<?php
					}
					?>

					<!-- <div class="single-item-amount">
						<h3><span>Shipping:</span></h3>
						<div>
							<h3>$9.99 via Standard Ground</h3>
						</div>
					</div>
					<div class="single-item-amount">
						<h3><span>Payment :</span></h3>
						<div>
							<h3>Credit Card / debit card</h3>
						</div>
					</div>
					<div class="single-item-amount">
						<h3><span>Subtotal:</span></h3>
						<div>
							<h3>$23.96</h3>
						</div>
					</div> -->
				</div>
			</div>

			<div>
				<h3>
					<span> Customer Details</span>
				</h3>
				<div class="customer-details">
					<h3>Name:</h3>
					<p><?php echo $order->get_billing_first_name() . " " . $order->get_billing_last_name(); ?></p>
				</div>

				<div class="customer-details">
					<h3>Email:</h3>
					<a href="#"><?php echo $order->get_billing_email(); ?></a>
				</div>
				<div class="customer-details">
					<h3>Tel:</h3>
					<p><?php echo $order->get_billing_phone(); ?></p>
				</div>
			</div>
			<div class="shipping-parent-div">
				<div class="flex-child">
					<h3>
						<span> Faktura adresse</span>
					</h3>
					<p>
						<?php echo $order->get_formatted_billing_address(); ?>
						<!-- Mike Hagy <br />
						190 Dalton St <br />
						93003 California <br />
						Ventura, United States (US) -->
					</p>
				</div>
				<div class="flex-child">
					<h3>
						<span> Forsendelsesadresse</span>
					</h3>
					<p>
						<?php echo $order->get_formatted_billing_address(); ?>
						<!-- Mike Hagy <br />
						190 Dalton St <br />
						93003 California <br />
						Ventura, United States (US) -->
					</p>
				</div>
			</div>
			<div class="heading">
				<h3>
					Contact Details
				</h3>
			</div>
			<div class="shipping-parent-div">
				<div style="max-width: 50%;">
					<h3>
						<span> Har du brug for hjaelp-sa kontakt kundeservice.</span>
					</h3>
					<p>
						Abningstider i kundeservice: <br />
						Mandag-Fredag:16-19 <br />
						Lordag: 10-13 <br />
						Ellers send en mail, vi besvarer dem lobende
					</p>
				</div>
				<div style="max-width: 50%;">
					<h3>
						<span> Kontakt os:</span>
					</h3>
					<p>
						<br>
						Duft Dejligt ApS<br />
						Horvaenget 7, 2630 Taastrup<br />
						Cvr. 42 05 40 11<br />
						Tlf. 72 60 0070
					</p>
				</div>
			</div>

		</div>

		<div class="bottom">
			<div class="image-wrapper bottom-flex-child">
				<img src="https://duftdejligt.dk/wp-content/uploads/logo.png" class="logo" alt="logo" />
			</div>
			<div class="bottom-flex-child">
				<p>&copy; Copyright 2022. Alle rettigheder forbeholdes</p>
			</div>
			<div class="social-icons">
				<a href="https://www.facebook.com/Duftdejligt.dk/"><i class="fa-brands fa-facebook-square"></i></a>
				<a href="https://www.instagram.com/duftdejligt.dk/"><i class="fa-brands fa-instagram"></i></a>
				<a href="https://www.pinterest.dk/Duftdejligt/"><i class="fa-brands fa-pinterest"></i></a>
			</div>
		</div>
	</div>
</body>

</html>