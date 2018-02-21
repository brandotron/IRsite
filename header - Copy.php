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

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="site-navigation">
	<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/uploads/2017/05/BLVD-Logo.png" title="BLVD Addiction Centers" style="width: 100%; height: auto;"></a>
					
				</div>
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="site-navigation-inner col-lg-12">
				<div class="navbar navbar-default">
                <div class="container fatnav">
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
							'walker' 			=> new wp_bootstrap_navwalker()
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
            $objYahooStock->addFormat("pj1j2"); 
             
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
				<p class="title">Shares Outstanding</p> 
				<p><?php $float = $stock[2]; echo number_format($float); ?></p>
                
                <?php
            }
            ?>
					</div>
				</div>
			</div><!-- .navbar -->
            </div>
		</div>
	</div><!-- .container-fluid -->
</nav><!-- .site-navigation -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
  <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>');">
     <header class="entry-header">
     </header>
  </div>  
<div class="main-content">

<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="" class="col-sm-3"></div>

			<div id="content" class="main-content-inner col-sm-9">

