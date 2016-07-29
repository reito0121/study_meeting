<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>WEB SKILL UP!</title>
	<?php wp_head(); ?>
	<link href="wp-content/themes/origin/css/reset.css" rel="stylesheet" type="text/css">
	<link href="wp-content/themes/origin/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php get_header(); ?>

	<?php $query = array("post_type" => "post"); ?>
  <?php $loop = new WP_Query( $query ); ?>
  <?php if ($loop->have_posts()): ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php endwhile; ?>
  <?php endif; ?>


	<?php get_sidebar(); ?>
	<?php get_footer(); ?>

	<script src="wp-content/themes/origin/js/jquery-3.1.0.min.js"></script>
	<script src="wp-content/themes/origin/js/default.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
