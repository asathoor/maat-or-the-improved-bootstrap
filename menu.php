<?php
/**
 * The Menu
 * @link: https://github.com/twittem/wp-bootstrap-navwalker
*/
?>

<!-- Navigation -->	

		<nav class="navbar navbar">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo home_url(); ?>">
				        <?php bloginfo('name'); ?>
				    </a>
			</div>

				<?php
				    wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 2,
				        'container'         => 'div',
				        'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
				        'menu_class'        => 'nav nav-tabs',
				        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				        'walker'            => new wp_bootstrap_navwalker())
				    );
				?>
			</div>
		</nav><!-- /navigation --> 

<?php
/**
 * To change your menu style add Bootstrap nav class names to the menu_class declaration.
*/
?>
