<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
<?php
while ( have_rows('financial') ): the_row(); 
{
	echo '<br>';

		$date = get_sub_field('date');
		$link = get_sub_field('link');
		$title = get_sub_field('title');
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $date . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $link['url'] . '" target="_blank"/>' . $title .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<?php endwhile; ?>
<?php /*?><?php get_sidebar(); ?><?php */?>

<?php get_footer(); ?>
