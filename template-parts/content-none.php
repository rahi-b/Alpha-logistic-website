<?php
/**
 * Template part for displaying not posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transto
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="transto_blog_item">
			<h2><?php esc_html_e('No Post found!','transto');?></h2>
		</div>
	</article>