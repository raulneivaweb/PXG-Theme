<?php get_header(); ?>

<div class="container">
 <div class="row">

  <?php if(have_posts()) : while(have_posts()) : the_post();?>
  <div class="col-md-8 conteudo-single">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
  </div>
  <?php endwhile; else: ?>
  <?php endif; ?>

<div class="container">
 <div class="row">
  <div class="colum4">
    <?php 
     if ( is_active_sidebar('sidebar1') ) {
     dynamic_sidebar('sidebar1');
     }
    ?>
    </div>
  <div class="colum5">
    <?php 
     if ( is_active_sidebar('sidebar2') ) {
     dynamic_sidebar('sidebar2');
     }
    ?>
     </div>
    </div>   
   </div>
  </div>
 </div> 

<?php get_footer (); ?>