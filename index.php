<?php get_header(); ?>
<!-- slider -->
<div class="container">
 <div ckass="row">

   <div class="col-md-8 slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

      <?php
      $posts_slides = new WP_Query(array(
        'category_name' => 'destaque',
       'post_per_page' => 3
      ));
      $i = 1;
      while($posts_slides->have_posts()) : $posts_slides->the_post();
       ?>
        <div class="item <?php if($i == 1) echo 'active';?>">
        <a href="<?php the_permalink ();?>"><?php the_post_thumbnail('thumbnail-slides-1'); ?> </a>
         <div class="carousel-caption visible-lg">
          <h3><?php the_title(); ?></h3>
          <button type="button" class="btn btn-primary"><?php echo rwmb_meta('subtitulo'); ?></button>
          <p><?php echo rwmb_meta('resumo'); ?></p>
          </div>
        </div>
      <?php $i++;endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<!-- meu-lateral -->
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Menu</a></li>
            <li class="dropdown">
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a> -->
           <!-- menu-navbar -->
            <?php
            wp_nav_menu( array(
                'menu'              => 'menu-lateral',
                'theme_location'    => 'menu-lateral',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
            <!-- fim-menu-navbar -->
              <ul class="dropdown-menu">
          </ul>
        </div> 
      </div>
    </div>
  </div>
</div>
<!-- fim-menu -->

</div>
</div>
<!-- fim-slieder-->

<!-- fim-elementos-laterais --> 

<!-- width-noticias -->

<div class='width-full-box'>
  <div class="container">
    <div class="row">
       <div class="title-box">
         <div class="col-md-3"><h4>Últimas Notícias</h4></div>
       </div>
    </div>
      <div class="row">
      <!-- ultimas-noticias-width-1 -->
      <?php
      $posts_slides = new WP_Query(array(
       'category_name' => 'ultimas-noticias',
       'post_per_page' => 3
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>
       <div class="col-md-3 ultimas-noticias">
         <a href="<?php the_permalink ();?>"><?php the_post_thumbnail('thumbnail-ultimasnoticias', array('class' => 'img-responsive img-thumbnail')); ?> </a>
         <span><?php echo rwmb_meta('subtitulo'); ?></span>
         <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
       </div>
        <!-- fim-ultimas-noticias-width-1 -->
       <?php endwhile; wp_reset_postdata(); ?>

       <!-- ultimas-noticias-width-2 -->
      <?php
      $posts_slides = new WP_Query(array(
       'category_name' => 'outras-noticias',
       'posts_per_page' => 1
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>
       <div class="col-md-3 ultimas-noticias">
         <a href="<?php the_permalink ();?>"><?php the_post_thumbnail('thumbnail-ultimasnoticias', array('class' => 'img-responsive img-thumbnail')); ?> </a>
         <span><?php echo rwmb_meta('subtitulo'); ?></span>
         <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
       </div>
        <!-- fim-ultimas-noticias-width-2 -->
       <?php endwhile; wp_reset_postdata(); ?>
      </div>
  </div>
</div>

<!-- fim-width-noticias -->

<!-- inicio-postagens -->

<div class="container">
  <div class="row">
    <div class="title-box">
         <div class="col-md-7"><h4>Postagens Recentes</h4></div>
         <div class="col-md-5 visible-lg"><h4>Vídeos</h4></div>
       </div>
  </div>
  <div class="row">
   <div class="col-md-7 id=postagens">

<!-- postagens-home -->
<?php
      $posts_slides = new WP_Query(array(
       'max_num_pages' => 5,
       'category__not_in' => array(16,17),
       'posts_per_page' => 5
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>
<div class="media">
  <div class="media-left">
    <a href="#">
      <a href="<?php the_permalink ();?>"><?php the_post_thumbnail('thumbnail-postagens', array('class' => 'media-object img-responsive img-thumbnail')); ?> </a>
    </a>
  </div>
  <div class="media-body">
    <h1 class="media-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <button type="button" class="btn btn-danger btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
    <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
  </div>
</div>
<!-- fim-postagens-home -->
<?php endwhile; wp_reset_postdata(); ?>

</div>
<!-- fim-postagens -->

<!-- Vídeos -->
   <div class="col-md-5" id="video">
    <div class="title-box visible-xs"><h4>Vídeos da Semana</h4></div>

    <?php
      $posts_slides = new WP_Query(array(
       'category_name' => 'videos-da-semana',
       'posts_per_page' => 1
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>

     <div class="embed-responsive embed-responsive-16by9 img-thumbnail">

     <?php echo rwmb_meta('oembed','type=oembed');?>
     </div>
   </div>
   <?php endwhile; wp_reset_postdata(); ?>

<div class="col-md-5" id="video">
    <div class="title-box visible-xs"><h4>Vídeos da Semana</h4></div>

    <?php
      $posts_slides = new WP_Query(array(
       'category_name' => 'video-fixo',
       'posts_per_page' => 1
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>

     <div class="embed-responsive embed-responsive-16by9 img-thumbnail">

     <?php echo rwmb_meta('oembed','type=oembed');?>
     </div>
   </div>
   <?php endwhile; wp_reset_postdata(); ?>

  </div>
 </div>
</div>

<!-- fim vídeos -->

<!--final postagens -->
<?php get_footer (); ?>