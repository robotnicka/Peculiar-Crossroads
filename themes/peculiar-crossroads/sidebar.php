<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peculiar-crossroads
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="featured-event__container">
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
		</div>

	</div>
	<!--<?php dynamic_sidebar( 'sidebar-1' ); ?>-->
</aside><!-- #secondary -->
