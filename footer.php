<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
		
		<div class="stock-footer">
		<hr width="75%" />			<?php
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
		
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

</div>

	</div>
</div>
            
			</div>
		</div><!-- big 12 col -->
		</div>
	</div><!-- .container-fluid -->

         
         
<?php wp_footer(); ?>

</body>
</html>
