<?php 
function capitaine_enqueue_assets(){
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'capitaine_enqueue_assets' );



add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
}


//pour ajouter de nouvelles compétitions

function competition_register_post_types(){
  // CPT Competition
  $labels = array(
      'name' => 'Competitions',
      'all_items' => 'Toutes les competitions',  
      'singular_name' => 'competition',
      'add_new_item' => 'Ajouter une competition',
      'edit_item' => 'Modifier la competition',
      'menu_name' => 'Competitions'
  );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'menu_position' => 5, 
      'menu_icon' => 'dashicons-awards'
  );

  register_post_type( 'Competitions', $args );

  // Déclaration Taxonomie Statut
  $label = array(
      'name' => 'Statut',
      'new_item_name' => 'Nom du nouveau statut',
      'parent_item' => 'Type de statut'
  );

  $arg = array(
      'label' => 'Statut',
      'labels' => $label,
      'public' => true,
      'show_in_rest' => true,
      'hierarchical' => true
  );

  register_taxonomy( 'statut', 'competitions', $arg );
};

add_action( 'init', 'competition_register_post_types' );


//Pour ajouter de nouveaux articles

function news_register_post_types(){
  // CPT News
  $labels = array(
      'name' => 'News',
      'all_items' => 'Toutes les news',  
      'singular_name' => 'news',
      'add_new_item' => 'Ajouter une news',
      'edit_item' => 'Modifier une news',
      'menu_name' => 'News'
  );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'menu_position' => 5, 
      'menu_icon' => 'dashicons-media-document'
  );

  register_post_type( 'News', $args );

  // Déclaration Taxonomie Statut
  $label = array(
      'name' => 'Statuts',
      'new_item_name' => 'Nom du nouveau statut',
      'parent_item' => 'Type de statut'
  );

  $arg = array(
      'label' => 'Statuts',
      'labels' => $label,
      'public' => true,
      'show_in_rest' => true,
      'hierarchical' => true
  );

  register_taxonomy( 'statuts', 'news', $arg );
};

add_action( 'init', 'news_register_post_types' );