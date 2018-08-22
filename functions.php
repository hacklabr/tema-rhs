<?php

function theme_enqueue_styles() {

	$parent_style = 'parent-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
	get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style )
	);
	wp_enqueue_style( 'style-theme', get_stylesheet_directory_uri() . '/assets/sass/theme.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 99 );

/**
 * Register the menu for use after the banner
 */
register_nav_menus( array(
	'menuTopoDropDown' => __( 'Nav Menu Dropdown Below Header', 'tainacan-theme' ),
	'menuDropDownMobile' => __( 'Nav Menu Dropdown Mobile Below Header', 'tainacan-theme' ),
) );

/**
*
* Menu dropdown que fica no segundo nav da página
*
* @param 'menu' => 'MenuDropdDown' Seleciona o menu com este nome no painel admin.
* @param 'theme_location' => 'MenuDropdDown' pega o menu que está setado em MenuDropDown
*
**/
function menuTopoDropDown(){
	wp_nav_menu( array(
        'menu'              => 'menuTopoDropDown',
        'theme_location'    => 'menuTopoDropDown',
        'depth'             => 0,
        'container'         => false,
        'menu_class'        => 'dropdown-menu',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()) // Classe usada para compor o menu bootstrap com o WP
    );
}

/**
*
* Menu que fica no segundo nav da página.
*
* @param 'menu' => 'SegundoMenu' Seleciona o menu com este nome no painel admin.
* @param 'theme_location' => 'SegundoMenu' pega o menu que está setado em SegundoMenu
**/
function navMenubelowHeader(){
	wp_nav_menu( array(
        'menu'              => 'navMenubelowHeader',
        'theme_location'    => 'navMenubelowHeader',
		'depth'             => 0,
		'container_class' 	=> 'ml-auto mr-2',
        'menu_class'        => 'nav navbar-nav navbar-right',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()) // Classe usada para compor o menu bootstrap com o WP
    );
}

/**
*
* Menu dropdown que fica no segundo nav da página
*
* @param 'menu' => 'MenuDropdDown' Seleciona o menu com este nome no painel admin.
* @param 'theme_location' => 'MenuDropdDown' pega o menu que está setado em MenuDropDown
*
**/
function menuDropDownMobile(){
    wp_nav_menu( array(
        'menu'              => 'menuDropDownMobile',
        'theme_location'    => 'menuDropDownMobile',
        'depth'             => 0,
        'menu_class'        => 'nav navbar-nav mobile-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()) // Classe usada para compor o menu bootstrap com o WP
    );
}

/*
* Altera a forma que o wp_is_mobile diferenciam o mobile, ipad e desktop.
*/
function my_wp_is_mobile() {
    if (
        ! empty($_SERVER['HTTP_USER_AGENT'])

        //detecta o Ipad.
        && false !== strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')
    ) return false;
    return wp_is_mobile();
}