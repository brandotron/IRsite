<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<link rel='stylesheet' id='blvdcenters-cloud-type-css'  href='//cloud.typography.com/7956754/692228/css/fonts.css?ver=20150213' type='text/css' media='all' />
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59830209-11', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>



<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid no-gutters">
		<div class="row no-gutters">
		<div class="col-sm-12 no-gutters">
		<div class=" col-sm-3 no-gutters">
		<nav class="site-navigation" >
		
			<div align="center" style="padding: 15px 10px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/uploads/2017/05/BLVD-Centers-Logo.png" title="BLVD Addiction Centers" style="width: 200px; height: auto; max-width: 100%;"></a></div>
		
			<div class="site-navigation-inner">
				<div class="navbar navbar-default">
                <div class="fatnav">
					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<!-- Your site title as branding in the menu -->
						
					</div>
					<!-- The WordPress Menu goes here -->
					
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker(),
							
						)
					); ?>
					<div class="stock">
					<?php
            include_once('class.yahoostock.php');
             
            $objYahooStock = new YahooStock;
             
            /**
                Add format/parameters to be fetched
                
                s = Symbol
                n = Name
                l1 = Last Trade (Price Only)
                d1 = Last Trade Date
                t1 = Last Trade Time
                c = Change and Percent Change
                v = Volume
             */
            $objYahooStock->addFormat("pj1j2v"); 
             
            /**
                Add company stock code to be fetched
                
                msft = Microsoft
                amzn = Amazon
                yhoo = Yahoo
                goog = Google
                aapl = Apple	
             */
            $objYahooStock->addStock("CXV.V");
			

            /**
             * Printing out the data
             */
            foreach( $objYahooStock->getQuotes() as $code => $stock)
            {
                ?>
                
				<p class="title">Previous Close</p> 
				<p>$<?php echo $stock[0]; ?></p>
				<p class="title">Market Cap</p>
				<p>$<?php echo $stock[1]; ?></p>
				<p class="title">Volume</p> 
				<p><?php $float = $stock[3]; echo number_format($float); ?></p>
                
                <?php
            }
            ?>
					</div>
					</div>
			</div><!-- .navbar -->
            </div>
			</nav>
			</div>
           
           
            <div class="col-sm-9 no-gutters tone-titan">
         <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
          <?php if (has_post_thumbnail()): ?>

 <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size:cover;">
     <header class="entry-header">
     </header>
  </div>  
<?php else: ?>
<?php endif ?>
          
 
<div class="main-content">

<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row no-gutters">
			