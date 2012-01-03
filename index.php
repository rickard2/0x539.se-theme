<?php $ajax = $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"; ?>

<?php if ( $ajax === true ) : ?>

	<?php get_template_part('loop') ?>

<?php else : ?>

	<?php get_header(); ?>

	<div class="main-box">
		<div id="main" role="main">
			<?php get_template_part('loop') ?>
		</div>
		<aside class="sidebar-main">
			<?php dynamic_sidebar("sidebar") ?>
		</aside>
	</div>

	<?php get_footer(); ?>

<?php endif ?>