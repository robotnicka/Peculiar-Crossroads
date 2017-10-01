<?php
/**
 * "Featured Post" Layout Template File
 *
 * DO NOT MODIFY THIS FILE!
 *
 * To override, copy the /fpw2_views/ folder to your active theme's folder.
 * Modify the file in the theme's folder and the plugin will use it.
 * See: http://wordpress.org/extend/plugins/feature-a-page-widget/faq/
 *
 * Note: Feature a Page Widget provides a variety of filters and options that may alter the output of the_title, the_excerpt, and the_post_thumbnail in this template.
 */
?>

<div class="featured-post__card">
    <a href="<?php the_permalink(); ?>">
		<div class="featured-post__image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="featured-post__content">
		    <h2><?php the_title(); ?></h2>
			<p><?php $excerpt = get_the_excerpt();
			$readmorepos = strpos($excerpt,' <a class="fpw-read-more-link"');
			if($readmorepos !==FALSE){
				$endpos = strpos($excerpt,'</a>',$readmorepos);
				$excerpt = substr($excerpt,0,$readmorepos);
			}
			echo $excerpt;
			?></p>
		</div>
		<div class="featured-post__footer">
			<a href="<?php the_permalink(); ?>">
			    <span class="featured-post__dagger">†</span> Read more...
			</a>
		</div>
	</a>
</div>
