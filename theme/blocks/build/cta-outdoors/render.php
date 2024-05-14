<?php
$block_wrapper_attributes = get_block_wrapper_attributes([
	'class' => 'alignfull'
]);
// wp_send_json($attributes);
$background_image = $attributes['image']['url'] ?? 'https://via.placeholder.com/1024?text=Image';

$logo = $attributes['logo']['url'] ?? 'https://via.placeholder.com/250?text=Logo';


?>
<div <?php echo $block_wrapper_attributes; ?> style="background-image: url(<?php echo $background_image ?>);">
	<div class="container">
		<div class="flex justify-center text-center">
			<?php echo $content; ?>
		</div>
	</div>
</div>