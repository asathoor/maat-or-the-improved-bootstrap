<?php
/**
 * The Maat Loop
 *
 * @package WordPress
 * @subpackage maat-or-the-improved-bootstrap
 * @since 1.0
 * @version 1.0
 *
 * It's a bit bloated. 
 * Cut to pieces?
 */
?>

<!-- begin main loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="article-<?php the_ID(); ?>" 
  <?php if(is_category('featured')): ?>class="featured-post"

  <?php endif; ?>>
  <a href="<?php the_permalink(); ?>" 
    title="<?php the_title_attribute(); ?>">
  	  <h3><?php the_title() ;?></h3>
  </a>

  <p class="theAuthor"><em>
    <?php the_author(); ?></em>
  </p>
  <figure class="theAvatar">
    <?php echo get_avatar($id); ?>
  </figure>
	<p>
		Published on <?php the_time('M j, Y'); ?> 
		by <?php the_category(', '); ?>
		in <?php the_category(', '); ?>
	</p>
  <div class="navLinks">
    <?php posts_nav_link(); ?>
  </div>
 
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	  <?php the_content(); ?>
  </div>
  <aside class="tags">
    <?php the_tags(); ?>
  </aside>

	<div class="prev-next-links">
		<ul>
			<li><?php next_post_link(); ?></li>
			<li><?php previous_post_link(); ?></li>
		</ul>

	</div>
  
  <!-- Comment stuff -->  
  <aside class="theCommentsHere">

    <?php comments_template(); // query the comments template ?> 

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

  <!-- comments loop -->
  <?php  if ( have_comments() ) : ?>
    <h4><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>
    <ul class="commentlist">
	    <?php wp_list_comments(); ?></ul>
    <div class="commentNavigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php // else : // this is displayed if there are no comments so far ?>
	    <?php if ( comments_open() ) :
		    // If comments are open, but there are no comments.
        echo __e("No comments. Yet. Be the first to add one.", "maat-or-the-improved-bootstrap");
	    else : // comments are closed
        echo __e("The comments are closed.", "maat-or-the-improved-bootstrap");
	    endif;
    endif;
    ?>
      <!-- comment add -->
  <div class="addCommentsForm">
	    <?php // comment_form(); ?>
  </div>

  <h5> <?php _e("Comments", "maat-or-the-improved-bootstrap"); ?> </h5>
</aside><!-- .theCommentsHere -->

</article>

<?php endwhile; else: ?>

	<p>Sorry, this post does not exist</p>

<?php endif; ?><!-- end loop -->
