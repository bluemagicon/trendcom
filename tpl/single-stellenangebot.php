<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */



 // ----------------------------------------------------------------------
 // Custom Fields

 $homeoffice = get_field('career_homeoffice', $theID) ? get_field('career_homeoffice_text', $theID) : false;
 $entry = get_field('career_entry', $theID) ?: false;
 if($entry) {
 	if($entry && $entry == "text") {
 		$entry_date = get_field('career_entrydate_text', $theID);
 	} else {
 		$entry_date = get_field('career_entrydate', $theID);
 	}
 }
 // ----------------------------------------------------------------------
 // Taxonomy Terms

 $post_taxs = get_post_taxonomies();
 $post_taxs_data = array(
 	'berufseinstieg' => array('title' => 'Art', 'icon' => 'solid/door-open'),
 	'berufsgruppe' => array('title' => 'Bereich', 'icon' => 'solid/user-tie'),
 	'location' => array('title' => 'Standort', 'icon' => 'solid/map-pin'),
 );

 $career_entry	= get_the_terms($theID, 'karriereeinstieg');
 $career_cluster	= get_the_terms($theID, 'karrierebereich');

?>

<article <?php post_class('post post--detail'); ?>>

	<header class="single-header">
		<div class="single-header-inner">
			<div class="uk-grid uk-flex-middle">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="uk-width-1-3@s post-image">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
				<?php } ?>
				<div class="uk-width-expand">
					<div class="single-header-inner">
						<h1 class="single-title">
							<?= get_the_title(); ?>
						</h1>
						<div class="post-meta">
							<div class="uk-grid uk-grid-large uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-auto@m">

								<?php if($entry && $entry_date) { ?>
									<div>
										<span class="is-style-subheadline"><?= __('Eintritt', 'trendcom') ?></span><br>
										<b><?= $entry_date ?></b>
									</div>
								<?php } ?>

								<?php foreach($post_taxs as $tax) {
									$terms = get_the_terms($theID, $tax);
									$term_icon = $post_taxs_data[$tax]['icon'] ?: 'solid/info-circle'; ?>
									<?php if($terms) { ?>
										<div>
											<span class="is-style-subheadline">
												<?= $post_taxs_data[$tax]['title'] ?>
											</span><br>
											<b>
												<ul class="w-list w-list--inline w-list--comma">
													<?php foreach($terms as $term) { ?>
														<li><?= $term->name ?></li>
													<?php } ?>
												</ul>
											</b>
										</div>
									<?php } ?>
								<?php } ?>

								<?php if($homeoffice) { ?>
									<div>
										<span class="is-style-subheadline"><?= __('Homeoffice', 'trendcom') ?></span><br>
										<b><?= $homeoffice ?></b>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="single-content entry-content">
		<?php the_content(); ?>
	</div>

	<?php get_template_part( 'tpl/single/navigation' ); ?>


</article>
