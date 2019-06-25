<?php 

// get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<strong><?=get_the_author()?></strong>
 <small><?php the_time('F jS, Y'); ?></small>

 <div class="entry">
   <?php the_content();
   
   ?>
 </div>

 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</div> <!-- fin du premier bloc div -->

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer();?>