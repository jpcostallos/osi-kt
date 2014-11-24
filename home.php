<?php /* Template Name: Home */

get_header(); ?>

			<div class="content-area">
				<div class="main">
					<section>
<?php
						$sidebarLoop = new WP_Query(array('post_type' => 'sidebar-items', 'posts_per_page' => 4, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'sidebar-form-order'));

						while ($sidebarLoop->have_posts()) {

							$sidebarLoop->the_post();

							$content = get_the_content();
							$url = get_post_meta($post->ID, 'sidebar-form-url', true);
?>
						<article class="sidebar-item">

							<?php echo $content; ?>
						</article>
<?php
						}
?>
					</section>
<!-- 					<div class="amount-raised">
						<div id="dollar">$</div>
						<div id="hundreds">392,</div>
						<div id="ones">831</div>
						<div id="cents">.65</div>
						<h1>Raised by Knight-Thon!</h1>
					</div> -->
					<div class="vimeo-wrap"><div>
						<iframe src="//www.youtube.com/embed/_lRYh-CF0NA" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
					</div></div>
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content', 'home' );
					} ?>
					<!-- Complete credit for the beautiful timer: http://codepen.io/mel/details/nleBw -->
					<div class="countdown-timer">
						<div id="days"></div>
						<div id="hours"></div>
						<div id="minutes"></div>
						<div id="seconds"></div>
						<h1>Until Knight-Thon</h1>
					</div>
				</div>
			</div>
<?php get_footer(); ?>