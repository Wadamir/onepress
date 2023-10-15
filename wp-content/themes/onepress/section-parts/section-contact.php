<?php
$onepress_contact_id            = get_theme_mod('onepress_contact_id', esc_html__('contact', 'onepress'));
$onepress_contact_disable       = get_theme_mod('onepress_contact_disable') == 1 ? true : false;
$onepress_contact_title         = get_theme_mod('onepress_contact_title', esc_html__('Get in touch', 'onepress'));
$onepress_contact_subtitle      = get_theme_mod('onepress_contact_subtitle', esc_html__('Section subtitle', 'onepress'));
$onepress_contact_cf7           = get_theme_mod('onepress_contact_cf7');
$onepress_contact_cf7_disable   = get_theme_mod('onepress_contact_cf7_disable');
$onepress_contact_text          = get_theme_mod('onepress_contact_text');
$onepress_contact_address_title = get_theme_mod('onepress_contact_address_title');
$onepress_contact_address       = get_theme_mod('onepress_contact_address');
$onepress_contact_phone         = get_theme_mod('onepress_contact_phone');
$onepress_contact_email         = get_theme_mod('onepress_contact_email');
$onepress_contact_whatsapp      = get_theme_mod('onepress_contact_whatsapp');
$onepress_contact_telegram      = get_theme_mod('onepress_contact_telegram');

if (onepress_is_selective_refresh()) {
	$onepress_contact_disable = false;
}

if ($onepress_contact_cf7 || $onepress_contact_text || $onepress_contact_address_title || $onepress_contact_phone || $onepress_contact_email || $onepress_contact_telegram || $onepress_contact_whatsapp) {
	$desc = wp_kses_post(get_theme_mod('onepress_contact_desc'));
?>
	<?php if (!$onepress_contact_disable) : ?>
		<?php if (!onepress_is_selective_refresh()) { ?>
			<section id="<?php if ($onepress_contact_id != '') {
								echo esc_attr($onepress_contact_id);
							}; ?>" <?php do_action('onepress_section_atts', 'counter'); ?> class="<?php echo esc_attr(apply_filters('onepress_section_class', 'section-contact section-padding  section-meta onepage-section', 'contact')); ?>">
			<?php } ?>
			<?php do_action('onepress_section_before_inner', 'contact'); ?>
			<div class="<?php echo esc_attr(apply_filters('onepress_section_container_class', 'container', 'contact')); ?>">
				<?php if ($onepress_contact_title || $onepress_contact_subtitle || $desc) { ?>
					<div class="section-title-area">
						<?php if ($onepress_contact_subtitle != '') {
							echo '<h5 class="section-subtitle">' . esc_html($onepress_contact_subtitle) . '</h5>';
						} ?>
						<?php if ($onepress_contact_title != '') {
							echo '<h2 class="section-title">' . esc_html($onepress_contact_title) . '</h2>';
						} ?>
						<?php if ($desc) {
							echo '<div class="section-desc">' . apply_filters('onepress_the_content', $desc) . '</div>';
						} ?>
					</div>
				<?php } ?>
				<div class="row">
					<?php if ($onepress_contact_cf7_disable != '1') : ?>
						<?php if (isset($onepress_contact_cf7) && $onepress_contact_cf7 != '') { ?>
							<div class="contact-form col-sm-6 wow slideInUp">
								<?php echo do_shortcode(wp_kses_post($onepress_contact_cf7)); ?>
							</div>
						<?php } else { ?>
							<div class="contact-form col-sm-6 wow slideInUp">
								<br>
								<small>
									<i><?php printf(esc_html__('You can install %1$s plugin and go to Customizer &rarr; Section: Contact &rarr; Section Content to show a working contact form here.', 'onepress'), '<a href="' . esc_url('https://wordpress.org/plugins/pirate-forms/', 'onepress') . '" target="_blank">Contact Form 7</a>'); ?></i>
								</small>
							</div>
						<?php } ?>
					<?php endif; ?>

					<div class="col-sm-6 wow slideInUp">
						<div class="address-box-text">
							<?php
							if ($onepress_contact_text != '') {
								echo apply_filters('onepress_the_content', wp_kses_post(trim($onepress_contact_text)));
							}
							?>
						</div>
						<br><br>
						<div class="address-box">

							<h3><?php if ($onepress_contact_address_title != '') {
									echo wp_kses_post($onepress_contact_address_title);
								} ?></h3>

							<?php if ($onepress_contact_address != '') : ?>
								<div class="address-contact">
									<span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x fa-inverse"></i></span>

									<div class="address-content"><?php echo wp_kses_post($onepress_contact_address); ?></div>
								</div>
							<?php endif; ?>

							<?php if ($onepress_contact_phone != '') : ?>
								<div class="address-contact">
									<a href='tel:<?php echo $onepress_contact_whatsapp; ?>'>
										<span class="address-contact-icon icon-phone">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-16.39 307.37l-15 65A15 15 0 0 1 354 416C194 416 64 286.29 64 126a15.7 15.7 0 0 1 11.63-14.61l65-15A18.23 18.23 0 0 1 144 96a16.27 16.27 0 0 1 13.79 9.09l30 70A17.9 17.9 0 0 1 189 181a17 17 0 0 1-5.5 11.61l-37.89 31a231.91 231.91 0 0 0 110.78 110.78l31-37.89A17 17 0 0 1 299 291a17.85 17.85 0 0 1 5.91 1.21l70 30A16.25 16.25 0 0 1 384 336a17.41 17.41 0 0 1-.39 3.37z" />
											</svg>
										</span>
										<div class="address-content"><?php echo wp_kses_post($onepress_contact_phone); ?></div>
									</a>
								</div>
							<?php endif; ?>

							<?php if ($onepress_contact_whatsapp != '') : ?>
								<div class="address-contact">
									<a href='https://wa.me/<?php echo $onepress_contact_whatsapp; ?>'>
										<span class="address-contact-icon icon-whatsapp">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
												<path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z" />
											</svg>
										</span>
										<div class="address-content"><?php echo wp_kses_post($onepress_contact_whatsapp); ?></div>
									</a>
								</div>
							<?php endif; ?>

							<?php if ($onepress_contact_telegram != '') : ?>
								<div class="address-contact">
									<a href='https://t.me/<?php echo $onepress_contact_telegram; ?>'>
										<span class="address-contact-icon icon-telegram">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
												<path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z" />
											</svg>
										</span>
										<div class="address-content"><?php echo wp_kses_post($onepress_contact_telegram); ?></div>
									</a>
								</div>
							<?php endif; ?>

							<?php if ($onepress_contact_email != '') : ?>
								<div class="address-contact">
									<a href="mailto:<?php echo antispambot($onepress_contact_email); ?>">
										<span class="address-contact-icon icon-email">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
											</svg>
										</span>
										<div class="address-content"><?php echo antispambot($onepress_contact_email); ?> </div>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php do_action('onepress_section_after_inner', 'contact'); ?>
			<?php if (!onepress_is_selective_refresh()) { ?>
			</section>
		<?php } ?>
<?php endif;
}
