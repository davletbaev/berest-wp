<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package insur-asia
 */

?>

	</main><!-- #content -->

	<footer class="footer">
		<div class="container footer__container">
			<div class="row align-items-center justify-content-between">
				<div class="footer__copyright text-lg-left text-xl-left text-center col-12 col-lg-auto order-2 order-lg-1 mt-5 mt-lg-0">
					<span class="d-block d-lg-inline">COPYRIGHT © <?php echo date(Y);?> PROOF OF REVIEW.</span> <span class="d-block d-lg-inline">ALL RIGHTS RESERVED.</span>
				</div>

				<ul class="socials d-flex align-items-center justify-content-center col-12 col-lg-auto order-1">
					<li class="socials__item">
						<a href="<?php echo get_option('por_medium'); ?>" class="socials__link" target="_blank">
							<svg class="socials__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#medium"></use>
							</svg>
						</a>
					</li>

					<li class="socials__item">
						<a href="mailto:<?php echo get_option('por_email'); ?>" class="socials__link" target="_blank">
							<svg class="socials__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#email"></use>
							</svg>
						</a>
					</li>

					<li class="socials__item">
						<a href="<?php echo get_option('por_linkedin'); ?>" class="socials__link" target="_blank">
							<svg class="socials__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#linkedin"></use>
							</svg>
						</a>
					</li>

					<li class="socials__item">
						<a href="<?php echo get_option('por_twitter'); ?>" class="socials__link" target="_blank">
							<svg class="socials__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#twitter"></use>
							</svg>
						</a>
					</li>

					<li class="socials__item">
						<a href="<?php echo get_option('por_discord'); ?>" class="socials__link" target="_blank">
							<svg class="socials__icon socials__icon--discord">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/icons.svg#discord-filled"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
