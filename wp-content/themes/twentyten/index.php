<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="front-contact">
				<!--<div id="phone-picture"><a href="http://www.cicvalcea.ro/"><img id="poza-front" src="<?php bloginfo('template_directory'); ?>/images/ed_valcea.png" alt="Sigla Europe Direct Valcea" width="150" height="150"  /></a></div>-->
				<div id="contact-text">
					<h2>Contact</h2>
					<ul>
						<li>Str. Carol I, nr. 26</li>
						<li>Râmnicu-Vâlcea, cod 240591</li>
						<li>Tel.: 0250/739221</li>
						<li>Fax: 0350/424540</li>
						<li>fundatiacasacartii [@] yahoo [.] com</li>
					</ul>
				</div>
				<div id="harta"><iframe width="240" height="220" src="http://maps.google.ro/maps/ms?ie=UTF8&amp;msa=0&amp;msid=204539629882219139919.0004a4041c6eb7d8cc8c6&amp;ll=45.10653,24.362247&amp;spn=0.003635,0.004742&amp;z=16&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ro/maps/ms?ie=UTF8&amp;msa=0&amp;msid=204539629882219139919.0004a4041c6eb7d8cc8c6&amp;ll=45.10653,24.362247&amp;spn=0.003635,0.004742&amp;z=16&amp;source=embed" style="color:#0000FF;text-align:left">Vedeti harta marita</a></small></div>
			</div>
			<div id="content" role="main">
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
