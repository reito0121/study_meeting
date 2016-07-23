<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
	<title>Document</title>
	<link rel="stylesheet" href="/wp-content/themes/origin/reset.css"/>
	<link rel="stylesheet" href="/wp-content/themes/origin/style.css"/>

	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">WEB SKILL UP!</div>
				<div class="mail"><a href="#">contact</a></div>
					<nav class="globnav">
						<div id="toggle"><a href="#">menu</a></div>
					<ul id="menu" class="">
						<li><a href="#">HOME</a></li>
						<li><a href="#">STUDY MEETING</a></li>
						<li><a href="#">DAILY LEARNING</a></li>
						<li><a href="#">RECOMMEND</a></li>
						<li><a href="#">PRODUCTION</a></li>
					</ul>
				</nav>
		</div>
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
	<?php wp_footer(); ?>
	</div>
</body>
</html>
