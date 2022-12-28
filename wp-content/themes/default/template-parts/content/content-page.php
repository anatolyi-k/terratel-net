<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php if( $post->ID == 2) { ?>
		<div class="blocks wide-max-width">
			<div class="grid-100">
				<div class="header-block-title">
					<?php the_field('header_title'); ?>
				</div>
				<?php 
					$rows = get_field('products');
					if( $rows ) {?>
						<div id="products" class="products-blocks">
					    <?php foreach( $rows as $row ) {?>
							<div class="product-block-item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
								<div class="block-border-data <?php echo $row['product_posit']; ?>">
									<div class="product-block-name"><?php echo $row['product_name']; ?></div>
									<div class="grid-100">
										<div class="grid-50">
											<img src="<?php echo $row['product_img']; ?>" class="product-block-image">
										</div>
										<div class="grid-50">
											<div class="product-block-feature">Features</div>
											<div class="product-block-desc"><?php echo $row['product_desc']; ?></div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
				<?php }?>

				<div id="about" class="text-block" data-aos="fade-up">
					<div class="header-desc-title">About Terratel/Company</div>
					<?php the_field('text_about'); ?>
				</div>
				<div id="service" class="text-block" data-aos="fade-down">
					<div class="header-desc-title">Services</div>
					<?php the_field('text_service'); ?>
				</div>
				<div id="payment" class="text-block" data-aos="fade-left">
					<div class="header-desc-title">Payment and Shipping Methods</div>
					<?php the_field('text_payment'); ?>
				</div>
				<div id="rd-service" class="text-block" data-aos="fade-right">
					<div class="header-desc-title">R&D services</div>
					<?php the_field('text_rd_service'); ?>
				</div>
				<div id="contact" class="text-block" data-aos="flip-left">
					<div class="header-desc-title">Contact</div>
					<?php the_field('contact'); ?>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
