<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mijobrandstw
 */

?>

<footer id="colophon" class="px-4 bg-gris-footer pt-7 md:pt-12 pb-36 lg:pb-10">
	<div class="footer__container">
		<div class="container flex flex-wrap gap-10 lg:gap-0">
			<?php
			$footerMessage = get_field('footer_message', 'option');
			if ($footerMessage) { ?>
				<div class="w-full md:w-8/12 md:mx-auto lg:w-1/4 lg:mx-0">
					<p class="text-white text-body-m"><?php echo $footerMessage; ?></p>;
				</div>
			<?php
			} ?>

			<div class="flex flex-wrap w-full gap-12 md:w-8/12 md:mx-auto lg:w-1/4 lg:mx-0 lg:gap-2">
				<div class="flex items-center justify-center w-full gap-5 md:w-8/12 md:mx-auto social__icons lg:mx-0">
					<?php
					$facebook = get_template_directory_uri() . '/assets/facebook.svg';
					$facebooklink = get_field('facebook_link', 'option');
					if ($facebooklink) { ?>
						<a href="<?php echo $facebooklink ?>" target="_blank">
							<img src="<?php echo $facebook; ?>" alt="facebook">
						</a>
					<?php
					}
					?>


					<?php
					$instagram = get_template_directory_uri() . '/assets/instagram.svg';
					$instagramlink = get_field('instagram_link', 'option');
					if ($instagramlink) { ?>
						<a href="<?php echo $instagramlink ?>" target="_blank">
							<img src="<?php echo $instagram; ?>" alt="instagram">
						</a>
					<?php
					}
					?>

					<?php
					$youtube = get_template_directory_uri() . '/assets/youtube.svg';
					$youtubelink = get_field('youtube_link', 'option');
					if ($youtubelink) { ?>
						<a href="<?php echo $youtubelink ?>" target="_blank">
							<img src="<?php echo $youtube; ?>" alt="youtube">
						</a>
					<?php
					}
					?>

				</div>

				<?php
				$contact = get_field('contact_mail
			', 'option');

				if ($contact) { ?>
					<div class="w-full text-white md:w-8/12 text-body-m lg:w-10/12 lg:mx-auto">
						<h5 class="mb-1 font-normal text-orangeSonos text-body-s">Contacto</h5>
						<div class="email text-body-s">
							<span>Email:</span>
							<a href="mailto:<?php echo $contact; ?>"><?php echo $contact; ?></a>
						</div>
					</div>
				<?php
				}
				?>

			</div>

			<div class="w-full footer-main-menu lg:w-1/4 md:w-8/12 md:mx-auto lg:mx-0">
				<h5 class="mb-1 font-normal text-orangeSonos text-body-s">Sonos outdoors</h5>
				<!--Menu-->
				<?php
				if (has_nav_menu('menu-1')) { ?>

					<?php
					wp_nav_menu(array('theme_location' => 'menu-1'));
					?>

				<?php
				}
				?>
			</div>

			<?php
			$copyright = get_field('copyright
			', 'option');

			if ($copyright) { ?>
				<div class="w-full text-white text-body-s md:w-8/12 md:mx-auto lg:hidden">
					<?php echo $copyright; ?>
				</div>
			<?php
			}
			?>

			<div class="w-full footer-footer-menu md:w-8/12 md:mx-auto lg:w-1/4 lg:mx-0">
				<?php
				$copyright = get_field('copyright
				', 'option');

				if ($copyright) { ?>
					<div class="hidden w-full mb-4 text-white text-body-s lg:flex">
						<?php echo $copyright; ?>
					</div>
				<?php
				}
				?>
				<!--Menu-->
				<?php
				if (has_nav_menu('menu-2')) { ?>

					<?php
					wp_nav_menu(array('theme_location' => 'menu-2'));
					?>

				<?php
				}
				?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
