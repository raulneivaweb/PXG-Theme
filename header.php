<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Google Fonte -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
  <!-- Inicio-Header -->
  <div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('m1_logo');?>" class="img-responsive center-block" alt="Portal PXG" title="Portal PXG"></a></div>
      <div class="col-md-5">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Menu de Navegação</a>
            </div>

            <!-- menu-navbar -->
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
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
            </div>
          </nav>
        </div>
        <div class="col-md-4 navbar navbar-default">
      <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" ><span class="glyphicon glyphicon glyphicon-user"></span></a></li>
            </ul> 
      </div>
      </div>
    </div>
  </div>
  <!-- fim-header-->