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

				<p class="mt-4 mb-0 font-thin sm:mt-12 lg:mt-10 cta__description text-lightGraySonos text-body-m lg:text-body-l">
					<?php echo $attributes['description']; ?>
			</div>
		</div>
	</div>
</div>
