<?php
$block_wrapper_attributes = get_block_wrapper_attributes([
	'class' => ''
]);
// wp_send_json($attributes);

$background = get_template_directory_uri() . '/assets/background-cta.gif';

?>

<div <?php echo $block_wrapper_attributes; ?> style="background-image: url(<?php echo $background; ?>);">
	<div class="container">
		<div class="flex items-center">
			<div class="w-full mx-auto content__cta lg:w-10/12">
				<h3 class="font-light cta__title text-body-xl lg:text-header-cta text-gris-medium">
					<?php echo $attributes['title']; ?>
				</h3>

				<p class="mt-4 mb-0 font-normal sm:mt-12 lg:mt-10 cta__description text-lightGraySonos text-body-m lg:text-body-l">
					<?php echo $attributes['description']; ?>
			</div>
		</div>
	</div>
</div>

<div class="mobile__menu lg:hidden">
	<div class="container">
		<div class="flex items-center justify-center w-full px-2 md:px-0">
			<div class="flex items-center justify-center w-full gap-12 px-7 bg-heroBg mobile__menu__container">
				<div class="w-auto logo">
					<?php
					$logoMobile = get_field('logo', 'option');
					if ($logoMobile) { ?>
						<a href="<?php echo esc_url(get_bloginfo('url')); ?>">
							<?php
							echo wp_get_attachment_image($logoMobile['id'], 'full', false, array('class' => 'main__logo'));
							?>
						</a>
					<?php
					}
					?>
				</div>

				<div class="w-auto">
					<button id="menumobile" data-izimodal-open="#modal-custom-1b">
						<svg width="43" height="44" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="21.5" cy="22" r="20.5" stroke="#F57F43" stroke-width="2" />
							<path d="M15 15.5H28M15 28.5H28M15 22H28" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
				</div>

				<div class="w-auto">
					<div class="getquote">
						<a href="<?php echo esc_url(get_bloginfo('url')); ?>/contacto/" class="btn btn--primary">
							<span>Get a Quote</span>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.01311 0.833442C6.10391 0.86517 4.28367 1.64567 2.94492 3.00662C1.60616 4.36757 0.856159 6.19994 0.856629 8.10859C0.857003 10.0376 1.62389 11.8875 2.98861 13.2514C4.35334 14.6153 6.20414 15.3815 8.13398 15.3815C9.34657 15.3815 10.5399 15.0787 11.6056 14.5004C12.8242 15.2444 14.4469 15.4606 15.4838 15.4606C14.8811 14.5283 14.2087 13.6238 13.8623 12.5954C14.866 11.315 15.4114 9.73525 15.4113 8.10859C15.4114 7.15325 15.2233 6.20725 14.8576 5.3246C14.4919 4.44195 13.9559 3.63994 13.2801 2.96437C12.6044 2.28881 11.8021 1.75291 10.9191 1.38728C10.0361 1.02165 9.08973 0.833458 8.13398 0.833442C8.0937 0.833107 8.05339 0.833107 8.01311 0.833442Z" stroke="#262626" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M5.77851 7.58344C5.9277 7.58344 6.07077 7.64271 6.17626 7.7482C6.28175 7.85369 6.34102 7.99676 6.34102 8.14594C6.34102 8.29513 6.28175 8.4382 6.17626 8.54369C6.07077 8.64918 5.9277 8.70844 5.77851 8.70844C5.70464 8.70845 5.63149 8.6939 5.56324 8.66563C5.495 8.63736 5.433 8.59593 5.38077 8.54369C5.32853 8.49146 5.28709 8.42945 5.25882 8.36121C5.23056 8.29296 5.216 8.21981 5.216 8.14594C5.216 8.07208 5.23056 7.99893 5.25882 7.93068C5.28709 7.86244 5.32853 7.80043 5.38077 7.74819C5.433 7.69596 5.495 7.65453 5.56324 7.62626C5.63149 7.59799 5.70464 7.58344 5.77851 7.58344Z" stroke="#262626" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M10.5598 7.58344C10.7089 7.58344 10.852 7.64271 10.9575 7.7482C11.063 7.85369 11.1222 7.99676 11.1222 8.14594C11.1222 8.29513 11.063 8.4382 10.9575 8.54369C10.852 8.64918 10.7089 8.70844 10.5598 8.70844C10.4859 8.70845 10.4127 8.6939 10.3445 8.66563C10.2762 8.63736 10.2143 8.59593 10.162 8.54369C10.1098 8.49146 10.0683 8.42945 10.0401 8.36121C10.0118 8.29296 9.99725 8.21981 9.99725 8.14594C9.99725 8.07208 10.0118 7.99893 10.0401 7.93068C10.0683 7.86244 10.1098 7.80043 10.162 7.74819C10.2143 7.69596 10.2762 7.65453 10.3445 7.62626C10.4127 7.59799 10.4859 7.58344 10.5598 7.58344Z" stroke="#262626" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>