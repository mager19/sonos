<?php
$block_wrapper_attributes = get_block_wrapper_attributes([
	'class' => 'alignfull'
]);
// wp_send_json($attributes);

$background_image =  $attributes['image']['url'] !== '' ? $attributes['image']['url'] : 'https://via.placeholder.com/1024?text=Image';


?>
<div <?php echo $block_wrapper_attributes; ?> style="background-image: url(<?php echo $background_image ?>);">
	<div class="container pb-6 lg:py-24">
		<div class="flex flex-wrap">
			<div class="w-full px-4 md:w-1/2 content__cta lg:pl-12">
				<h3 class="font-light cta__title text-body-l text-orangeSonos">
					<?php echo $attributes['title']; ?>
				</h3>

				<p class="mt-10 mb-0 font-normal sm:mt-12 lg:mt-6 cta__description text-lightGraySonos text-body-m lg:text-body-s">
					<?php echo $attributes['description']; ?>
			</div>

			<div class="w-11/12 px-4 mx-auto md:w-1/2 form__container">
				<?php echo do_shortcode($attributes['shortcode']); ?>
			</div>
		</div>
	</div>
</div>
