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

   <!-- BEGIN 2016 -->
	<?php
$rows = array_reverse(get_field('2017_press_releases',41));
if($rows)
{
	echo '<h1>Press Releases</h1><br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '<a href="/media/press-releases/"><STRONG>VIEW MORE PRESS RELEASES</STRONG></a><hr />';
}
?> 
<!-- END 2016 -->

<!-- BEGIN 2015 -->
	<?php
$rows = array_reverse(get_field('cxv_in_the_news',43));
if($rows)
{
	echo '<h3>CXV in the News</h3>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '<hr />';
}
?> 

<!-- END 2015 -->

<!-- BEGIN 2014 -->
	<?php
$rows = array_reverse(get_field('conference_calls',42));
if($rows)
{
	echo '<h3>Conference Calls</h3><br>';

	foreach($rows as $row)
	{
echo '<div class="row"><div class="col-lg-12" style="line-height:2em;"><div class="col-sm-2 text-left"><p><strong>' . $row['date'] . '</strong></p></div><div class="col-sm-10 text-left"><p><a href="' . $row['link'] . '" target="_blank"/>' . $row['title'] .'</a></p></div></div></div>';
	}

	echo '';
}
?> 
<!-- END 2014 -->

	
<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
