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
$hide_links = true;

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>

		<div class="post-content">

            <?php $team_data = get_field('team_daten', $theID); ?>
            <p class="is-style-subheadline"><?php echo $team_data['position']; ?></p>


            <?php include 'post/header.php'; ?>

			<?php if(! $hide_descr) { ?>
				<?php
				if(get_field('team_daten', $theID)) {


					$team_fields = array(
						'position'	=> array('icon' => 'solid/user-tie'),
						'email'	=> array('icon' => 'solid/envelope', 'is_url' => true, 'url_prefix' => 'mailto:',),
						'telefon'	=> array('icon' => 'solid/phone', 'is_url' => true, 'url_prefix' => 'tel:'),
						'handy'	=> array('icon' => 'solid/mobile', 'is_url' => true, 'url_prefix' => 'tel:'),
						'fax'	=> array('icon' => 'solid/fax'),
					)

					?>

                    <ul class="post-datalist">
                        <li data-field="position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.193" height="17.192" viewBox="0 0 17.193 17.192"><path id="Pfad_42" data-name="Pfad 42" d="M9.08,10.337a10.082,10.082,0,0,0,3.775,3.775L13.7,12.93a.955.955,0,0,1,1.236-.283,10.91,10.91,0,0,0,4.377,1.3.955.955,0,0,1,.88.952v4.262a.955.955,0,0,1-.858.95A14.814,14.814,0,0,1,3.078,3.858.955.955,0,0,1,4.029,3H8.291a.955.955,0,0,1,.952.88,10.91,10.91,0,0,0,1.3,4.377.955.955,0,0,1-.283,1.236ZM6.672,9.71l1.815-1.3a12.808,12.808,0,0,1-1.048-3.5H4.92c-.006.159-.009.318-.009.478A12.893,12.893,0,0,0,17.8,18.282c.16,0,.319,0,.478-.01V15.754a12.808,12.808,0,0,1-3.5-1.048l-1.3,1.815a11.884,11.884,0,0,1-1.517-.716l-.055-.032a11.993,11.993,0,0,1-4.491-4.491l-.032-.055A11.884,11.884,0,0,1,6.672,9.71Z" transform="translate(-3 -3)" fill="#008a90"/></svg>
                            <a href='mailto:<?php echo $team_data["telefon"]; ?>'><?php echo $team_data['telefon']; ?></a>
                        </li>
                        <li data-field="position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.97" height="15.273" viewBox="0 0 16.97 15.273"><path id="Pfad_60" data-name="Pfad 60" d="M2.848,3H18.121a.848.848,0,0,1,.848.848V17.424a.848.848,0,0,1-.848.848H2.848A.848.848,0,0,1,2,17.424V3.848A.848.848,0,0,1,2.848,3ZM17.273,6.6,10.546,12.62,3.7,6.577v10H17.273ZM4.131,4.7l6.406,5.653L16.85,4.7Z" transform="translate(-2 -3)" fill="#008a90"/></svg>
                            <a href='mailto:<?php echo $team_data["email"]; ?>'><?php echo $team_data['email']; ?></a>
                        </li>
                        <li data-field="position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.858" height="14.977" viewBox="0 0 15.858 14.977"><path id="Pfad_125" data-name="Pfad 125" d="M6.268,4.664A1.664,1.664,0,1,1,4.6,3,1.664,1.664,0,0,1,6.268,4.664Zm.05,2.9H2.99V17.975H6.318Zm5.258,0H8.265V17.975h3.278V12.509c0-3.045,3.969-3.328,3.969,0v5.466H18.8v-6.6c0-5.133-5.874-4.942-7.255-2.421Z" transform="translate(-2.94 -2.999)" fill="#008a90"/></svg>
                            auf LinkedIn vernetzen
                        </li>

                        <?php /*
					<?php if($team_data['opt_socialmedia']) { ?>
						<div class="post-socials">
							<?php $social_profiles = $team_data['opt_socialmedia'];
							include 'partials/social.php'; ?>
						</div>

					<?php } ?> */?>
				<?php } ?>
			<?php } ?>
		</div>

	</div>

</article>
