<?php

/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html lang="en-US" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/">

<head>
	<title> Email from Duftdejligt store </title>
	<meta name="description" content="Email Template for WooCommerce." />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		@media only screen and (min-width:768px) {
			.templateContainer {
				width: 600px !important
			}
		}

		@media only screen and (max-width:480px) {

			body,
			table,
			td,
			p,
			a,
			li,
			blockquote {
				-webkit-text-size-adjust: none !important
			}

			body {
				width: 100% !important;
				min-width: 100% !important
			}

			#bodyCell {
				padding-top: 10px !important
			}

			.Image {
				width: 100% !important
			}

			.CaptionTopContent,
			.CaptionBottomContent,
			.TextContentContainer,
			.BoxedTextContentContainer,
			.ImageGroupContentContainer,
			.CaptionLeftTextContentContainer,
			.CaptionRightTextContentContainer,
			.CaptionLeftImageContentContainer,
			.CaptionRightImageContentContainer,
			.ImageCardLeftTextContentContainer,
			.ImageCardRightTextContentContainer {
				max-width: 100% !important;
				width: 100% !important
			}

			.TextContent,
			.BoxedTextContentColumn {
				padding-right: 18px !important;
				padding-left: 18px !important
			}

			h2 {
				font-size: 24px !important;
				line-height: 125% !important
			}

			#templatePreheader {
				display: block !important
			}

			#templatePreheader .TextContent,
			#templatePreheader .TextContent p {
				font-size: 16px !important;
				line-height: 150% !important
			}

			#templateBody .TextContent,
			#templateBody .TextContent p {
				font-size: 13px !important;
				line-height: 150% !important
			}

			#templateFooter .TextContent,
			#templateFooter .TextContent p {
				font-size: 14px !important;
				line-height: 150% !important
			}
		}
	</style>
</head>

<body style="height: 100%; margin: 0; padding: 0; width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f5f3f2;">
	<center>
		<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; height: 100%; margin: 0; padding: 0; width: 100%; background-color: #f5f3f2;">
			<tr>
				<td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; height: 100%; margin: 0; padding: 10px; width: 100%; border-top: 0;">
					<!-- BEGIN TEMPLATE // -->
					<!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
					<table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; border: 0; max-width: 600px !important;">
						<tr>
							<td valign="top" id="templatePreheader" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f5f3f2; border-top: 0; border-bottom: 0; padding-top: 9px; padding-bottom: 9px;">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
									<tbody class="TextBlockOuter">
										<tr>
											<!-- logo -->
											<td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">

												<table align="left" border="0" cellpadding="0" cellspacing="0" width="197" class="TextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
													<tbody>
														<tr>
															<td valign="top" class="TextContent" style="padding-top: 9px; padding-left: 18px; padding-bottom: 9px; padding-right: 0; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; color: #666666; font-family: Helvetica; font-size: 12px; line-height: 150%; text-align: left;">

																<div class="headercontainer" position="relative" width="300px">
																	<a href="<?php echo site_url(); ?>" target="_blank" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #666666; font-weight: normal; text-decoration: underline;">
																		<img src="https://duftdejligt.dk/wp-content/uploads/logo.png" alt="Themes Email" width="200" height="38" style="border: 0; display: inline-block; font-size: 14px; font-weight: bold; height: auto !important; outline: none; text-decoration: none; text-transform: capitalize; vertical-align: middle; margin-right: 10px; -ms-interpolation-mode: bicubic;"></a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
												<!-- Social icons -->
												<table align="right" border="0" cellpadding="0" cellspacing="0" width="366" class="TextContentContainer" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
													<tbody>
														<tr>
															<td valign="top" class="TextContent" style="padding-top: 20px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; color: #666666; font-family: Helvetica; font-size: 12px; line-height: 150%; text-align: left;">

																<div class="socialheader" style="text-align: right; opacity: 0.7;">
																	<a href="<?php echo site_url(); ?>" target="_blank" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #000000;font-size: 16px; font-weight: normal; text-decoration: underline;">
																		Shop
																	</a>

																	&nbsp;
																	&nbsp;
																	&nbsp;

																	<a href="<?php echo site_url() . "/my-account"; ?>" target="_blank" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #000000;font-size: 16px; font-weight: normal; text-decoration: underline;">
																		My Account
																	</a>

																	<!-- <hr class="invisible" style="background-color: #f5f3f2; height: 2px; border: 0 none !important; margin: 1% 0%;"> -->
																</div>



															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td valign="top" id="templateHeader" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f5f3f2; border-top: 0; border-bottom: 0; padding-top: 9px; padding-bottom: 0;"></td>
						</tr>
						<tr>
							<td valign="top" id="templateBody" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #ffffff; border-top: 0; border-bottom: none; padding-top: 0; padding-bottom: 0px;">
								<!-- Hero Image -->
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="ImageBlock" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
									<tbody class="ImageBlockOuter">
										<tr>
											<td valign="top" style="padding: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" class="ImageBlockInner">
												<table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="ImageContentContainer" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
													<tbody>
														<tr>
															<td class="ImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 0; text-align: center; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">

																<a href="https://themes.email/" title="" class="" target="_blank" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #7d766f; font-weight: normal; text-decoration: underline;">
																	<img align="center" alt="" src="https://duftdejligt.dk/wp-content/uploads/banner.jpg" width="600" style="max-width: 1200px; padding-bottom: 0; display: inline !important; vertical-align: bottom; border: 0; height: auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; margin: 0px!important; font-size: 14px; font-weight: bold; text-transform: capitalize; margin-right: 10px;" class="Image"></a>

															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<table bgcolor="#012E57" border="0" cellpadding="0" cellspacing="0" width="100%" class="ImageBlock" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">

									<tr>
										<td valign="middle" style="padding: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" class="ImageBlockInner">
											<table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="ImageContentContainer" style="min-width: 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
												<tbody>
													<tr>
														<td class="ImageContent" valign="middle" style="padding-bottom: 10px; padding-left: 20px; padding-top: 20px; text-align: center; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">

															<h3 style="color: #fff;">
																<?php echo $email_heading; ?>
															</h3>

														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>

								</table>