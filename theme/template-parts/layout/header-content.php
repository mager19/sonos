<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mijobrandstw
 */

?>

<header id="masthead" class="bg-heroBg">
	<div class="container">
		<div class="flex items-center justify-between">
			<div class="w-1/3 text-white logo">
				<?php
				if (is_front_page()) :
				?>
					<h1><?php bloginfo('name'); ?></h1>
				<?php
				else :
				?>
					<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;

				$mijobrands_description = get_bloginfo('description', 'display');
				if ($mijobrands_description || is_customize_preview()) :
				?>
					<p><?php echo $mijobrands_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						?></p>
				<?php endif; ?>
			</div>

			<div class="w-2/3 menu">
				<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'mijobrands'); ?>">
					<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'mijobrands'); ?></button>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div>
</header><!-- #masthead -->
