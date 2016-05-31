<?php get_header(); ?>
<!-- index.php -->

<div class="container">
  <div class="row">

    <article id="text" class="col-lg-8 col-md-9 col-xs-12">
		<?php include_once "loop.php"; ?>
	</article>

	<aside id="sidebar" class="col-lg-4 col-md-3 col-xs-12">
		<?php get_sidebar(); ?>
	</aside>

  </div><!-- /row -->

<!-- /index.php -->
<?php get_footer(); ?>
