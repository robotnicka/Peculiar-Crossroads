<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package peculiar-crossroads
 */

get_header();

?>
<div class="home-page__marquee">
	<?php

		the_post_thumbnail();

	?>
</div>

<div class="normal_posts">
    <div class="content">

		<div class="triptych triptych__container">
			<div class="triptych__card">
			    <a href="#">
    				<div class="triptych__image">
    					<img src="http://via.placeholder.com/350x150"/>
    				</div>
    				<div class="triptych__content">
    				    <h2>Nyarlathotep... the crawling chaos... </h2>
    					<p>I do not recall distinctly when it began, but it was months ago. The general tension was horrible. To a season of political and social upheaval was added a strange and brooding apprehension of hideous physical danger; a danger widespread and all-embracing, such a danger as may be imagined only in the most terrible phantasms of the night.</p>
    				</div>
    				<div class="triptych__footer">
    					<a href="#">
    					    <span class="triptych__dagger">†</span> Read more...
    					</a>
    				</div>
    			</a>
			</div>

			<div class="triptych__card">
			    <a href="#">
					<div class="triptych__image">
						<img src="http://via.placeholder.com/350x150"/>
					</div>
					<div class="triptych__content">
					    <h2>Nyarlathotep... the crawling chaos... </h2>
						<p>I do not recall distinctly when it began, but it was months ago. The general tension was horrible. To a season of political and social upheaval was added a strange and brooding apprehension of hideous physical danger; a danger widespread and all-embracing, such a danger as may be imagined only in the most terrible phantasms of the night.</p>
					</div>
					<div class="triptych__footer">
						<a href="#">
						    <span class="triptych__dagger">†</span> Read more...
						</a>
					</div>
				</a>
			</div>

			<div class="triptych__card">
			    <a href="#">
					<div class="triptych__image">
						<img src="http://via.placeholder.com/350x150"/>
					</div>
					<div class="triptych__content">
					    <h2>Nyarlathotep... the crawling chaos... </h2>
						<p>I do not recall distinctly when it began, but it was months ago. The general tension was horrible. To a season of political and social upheaval was added a strange and brooding apprehension of hideous physical danger; a danger widespread and all-embracing, such a danger as may be imagined only in the most terrible phantasms of the night.</p>
					</div>
					<div class="triptych__footer">
						<a href="#">
						    <span class="triptych__dagger">†</span> Read more...
						</a>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
