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
<!--<img src="/wp-content/uploads/2017/05/home-chart-map.jpg" alt="THE NEW BLVD TREATMENT CENTERS" title="THE NEW BLVD TREATMENT CENTERS"/>-->
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
<div class="row"><hr /></div>

<h3>OUR ADDICTION TREATMENT CENTERS</h3>
<div class="row">
	<div class="col-md-3 col-xs-6 text-center facil"><h4>CORONA</h4>INPATIENT<a href="/corona-detox-residential-rehab/"><img src="/wp-content/uploads/2014/07/corona.jpg" /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"><h4>HOLLYWOOD</h4>INPATIENT<a href="/hollywood-detox-residential-rehab/"><img src="/wp-content/uploads/2016/05/hollywood.jpg" /><br /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"><h4>HOLLYWOOD</h4>OUTPATIENT<a href="/west-hollywood-outpatient-drug-alcohol-rehab/"><img src="/wp-content/uploads/2014/07/hollywood2.jpg" /><br /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"><h4>PORTLAND</h4>OUTPATIENT<a href="/portland-outpatient-drug-alcohol-rehab-center/"><img src="/wp-content/uploads/2016/05/portland.jpg" /><br /></a></div>
</div>
<div class="clearfix"></div>
<div class="row"><div class="col-md-12">&nbsp;</div></div>
<div class="row">
	<div class="col-md-3 col-xs-6 text-center facil"><h4>SAN DIEGO</h4>OUTPATIENT<a href="/san-diego-outpatient-drug-alcohol-rehab/"><img src="/wp-content/uploads/2016/05/san-diego.jpg" /><br /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"><h4>WEST LOS ANGELES</h4>OUTPATIENT<a href="/blvds-outpatient-addiction-rehab-west-los-angeles-california/"><img src="/wp-content/uploads/2016/05/LA.jpg" /><br /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"><h4>ORANGE COUNTY</h4>OUTPATIENT<a href="/orange-county-outpatient-drug-rehab-center/"><img src="/wp-content/uploads/2016/05/oc.jpg" /><br /></a></div>
	<div class="col-md-3 col-xs-6 text-center facil"></div>
</div>
<div class="clearfix"></div>
<div class="row"><div class="col-md-12">&nbsp;</div></div>
<p style="font-size:xx-small; color: #757575;" class="text-justify"><em>Forward Looking Statements<br />Certain statements contained in this website constitute "forward-looking information" as such term is defined in applicable Canadian securities legislation. The words "may", "would", "could", "should", "potential", "will", "seek", "intend", "plan", "anticipate", "believe", "estimate", "expect" and similar expressions as they relate to the Company, including the projections for 2017 related to seats and beds, are intended to identify forward-looking information. All statements other than statements of historical fact may be forward-looking information. Such statements reflect the Company's current views and intentions with respect to future events, and current information available to the Company, and are subject to certain risks, uncertainties and assumptions. Material factors or assumptions were applied in providing forward-looking information, including: insurance reimbursement remains at levels similar to today, census levels and patient demand remains strong, partners operate their locations profitably, partners reimburse the Company for any and all working capital loans, additional corporate overhead is not needed). Many factors could cause the actual results, performance or achievements that may be expressed or implied by such forward-looking information to vary from those described herein should one or more of these risks or uncertainties materialize. These factors include, without limitation, changes in law, the ability to implement business strategies and pursue business opportunities, state of the capital markets, the availability of funds and resources to pursue operations, decline of reimbursement rates, dependence on few payors, possible new drug discoveries, a novel business model, dependence on key suppliers, granting of permits and licenses in a highly regulated business, competition, difficulty integrating newly acquired businesses, the outcome and cost of any litigation with insurance providers, low profit market segments, as well as general economic, market and business conditions, as well as those risk factors discussed or referred to in Convalo's annual Management's Discussion and Analysis for the year ended February 29, 2016, filed with the securities regulatory authorities in certain provinces of Canada and available at www.sedar.com. Should any factor affect Convalo in an unexpected manner, or should assumptions underlying the forward looking information prove incorrect, the actual results or events may differ materially from the results or events predicted. Any such forward-looking information is expressly qualified in its entirety by this cautionary statement. Moreover, Convalo does not assume responsibility for the accuracy or completeness of such forward-looking information. The forward -looking information included in this website is made as of the date of May 30, 2017 and Convalo undertakes no obligation to publicly update or revise any forward-looking information, other than as required by applicable law. Convalo's results and forward-looking information and calculations may be affected by fluctuations in exchange rates. All figures are in Canadian dollars unless otherwise indicated.</em></p>
<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
