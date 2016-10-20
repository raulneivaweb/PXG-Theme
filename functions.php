<?php 

// imagens dos posts //
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header //
require get_template_directory() . '/inc/marca.php';

// pegar arquivo metabox.php //
require get_template_directory() . '/inc/meta-box.php';

// registrar navigation walker //
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'THEMENAME' ),
) );

// menu lateral //
register_nav_menus( array(
    'menu-lateral' => __( 'Menu-Lateral', 'THEMENAME' ),
) );

// links úteis - rodape //
register_nav_menus( array(
    'links-uteis' => __( 'Links Úteis', 'THEMENAME' ),
) );

// Registro de sidebar
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Minha Conta'),
        'id' => 'sidebar-login',
        'description' => __( 'Formulario de login para o painel ADMIN.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' => __( 'Regras do Portal - ADMIN'),
        'id' => 'sidebar-regras',
        'description' => __( 'Informações sobre regras do Portal (Área de Login do Site).'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    // Registro das suas widgets
    register_sidebar(array(
        'name' => __( 'Sidebar 1'),
        'id' => 'sidebar1',
        'description' => __( 'Sidebar do Menu Lateral.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar(array(
        'name' => __( 'Sidebar 2'),
        'id' => 'sidebar2',
        'description' => __( 'Sidebar para os demais Widgets.'),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
    register_sidebar(array(
        'name' => __( 'Sobre - Footer'),
        'id' => 'sobre-nos-rodape',
        'description' => __( 'Informações sobre o Blog'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) ); 
    register_sidebar(array(
        'name' => __( 'Parceiros'),
        'id' => 'parceiros-rodape',
        'description' => __( 'Widget-Footer para parceiros.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' => __( 'Hospedagem'),
        'id' => 'hospedagem-rodape',
        'description' => __( 'Sidebar de Hospedagem'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

}

?>