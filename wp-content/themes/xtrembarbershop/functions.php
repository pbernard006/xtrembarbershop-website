<?php
function xtrembarbershop_support()
{
    add_theme_support('title-tag');
}

function xtrembarbershop_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);
    // wp_deregister_script('jquery');
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'xtrembarbershop_register_assets');


function wpm_custom_post_type()
{
    //region accueil
    $labelsHome = array(
        'name'                => _x('Prestation', 'Post Type General Name'),
        'singular_name'       => _x('Prestation', 'Post Type Singular Name'),
        'menu_name'           => __('Prestation'),
        'all_items'           => __('Toutes les prestations'),
        'view_item'           => __('Voir les prestations'),
        'add_new_item'        => __('Ajouter une nouvelle prestation'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer la prestation'),
        'update_item'         => __('Modifier la prestation'),
        'search_items'        => __('Rechercher une prestation'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    $argsHome = array(
        'label'         => __('prestations'),
        'description'   => __('Tous sur les prestations'),
        'labels'        => $labelsHome,
        'supports'      => array('title'),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'prestations'),
        'menu_icon'     => 'dashicons-admin-users',
    );

    $labelsPersonnaliser = array(
        'name'                => _x('Personnaliser', 'Post Type General Name'),
        'singular_name'       => _x('Personnaliser', 'Post Type Singular Name'),
        'menu_name'           => __('Personnaliser'),
        'view_item'           => __('Personnaliser'),
        'add_new_item'        => __('Personnaliser'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer'),
        'update_item'         => __('Modifier'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille'),
    );

    $argsPersonnaliser = array(
        'label'         => __('Personnaliser'),
        'description'   => __('Personnaliser'),
        'labels'        => $labelsPersonnaliser,
        'supports'      => array('title'),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'personnaliser'),
        'menu_icon'     => 'dashicons-store',
    );
    register_post_type('personnaliser', $argsPersonnaliser);
    register_post_type('prestation', $argsHome);
}

add_action('init', 'wpm_custom_post_type', 0);
