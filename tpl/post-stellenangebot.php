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

include 'post/load-vars.php';

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
$post_taxs_icons = array(
	'berufseinstieg' => 'solid/door-open',
	'berufsgruppe' => 'solid/user-tie',
	'location' => 'solid/map-pin',
);

$career_entry	= get_the_terms($theID, 'karriereeinstieg');
$career_cluster	= get_the_terms($theID, 'karrierebereich');

?>


<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">

	<a href="<?= get_permalink() ?>" class="post-inner">

		<div class="post-content">
			<header class="post-header">
			    <h3 class="post-title">
		            <?= get_the_title(); ?>
		        </h3>
			</header>


			<?php if(! $hide_descr) { ?>
				<ul class="post-datalist">
					<?php if($entry && $entry_date) { ?>
						<li>
							<?= baw_svg('solid/clock').$entry_date ?>
						</li>
					<?php } ?>
					<?php foreach($post_taxs as $tax) {
						$terms = get_the_terms($theID, $tax);
						$term_icon = $post_taxs_icons[$tax] ?: 'solid/info-circle'; ?>
						<?php if($terms) { ?>
							<li>
								<?= baw_svg($term_icon) ?>
								<?php foreach($terms as $term) { ?>
									<span><?= $term->name ?></span>
								<?php } ?>
							</li>
						<?php } ?>
					<?php } ?>
					<?php if($homeoffice) { ?>
						<li>
							<?= baw_svg('solid/home').$homeoffice ?>
						</li>
					<?php } ?>
				</ul>
				<?php /* the_excerpt(); */ ?>
				<?php
				/*
				pre_print_r($entry_date);
				pre_print_r($contact);
				pre_print_r($benefits);
				pre_print_r($benefits_cstm);
				*/
				?>
			<?php } ?>

		</div>

	</a>

</article>
