<?php
//charger les fichiers nécessaires
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');


// Lancer la sessions PHP pour pouvoir passer des variables de page en page
add_action('init', 'dw_boot_theme', 1);

function dw_boot_theme()
{
    load_theme_textdomain('Aline-db-antilope', __DIR__ . '/locales');
	if (! session_id()) {
		session_start();
	}
}



// désactive l'éditeur Gutenberg dans wordpress
add_filter('use_block_editor_for_post', '__return_false');

//activer les img sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un seul custom post-type pour "Dispositifs"
register_post_type('Dispositifs', [
	'label' => 'Dispositifs',
	'labels' => [
		'name' => 'Dispositifs',
		'singular_name' => 'Dispositif',
	],
	"hierarchical" => true,
	'description' => 'Tous les dispositifs',
	'public' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-category',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'dispositifs'],
]);

// Enregistrer un seul custom post-type pour "Articles"
register_post_type('Articles', [
	'label' => 'Articles',
	'labels' => [
		'name' => 'Articles',
		'singular_name' => 'Article',
	],
	'description' => 'Tous les Articles',
	'public' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-category',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'articles'],
]);


// Récupérer les dispositifs via une requête Wordpress
function dw_get_projects($count = 20)
{
	// 1. on instancie l'objet WP_Query
	$dispositifs = new WP_Query([
		'post_type' => 'Dispositifs',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
	]);

	// 2. on retourne l'objet WP_Query
	return $dispositifs;
}

// Récupérer les dispositifs via une requête Wordpress
function dw_get_articles($count = 20)
{
	// 1. on instancie l'objet WP_Query
	$articles = new WP_Query([
		'post_type' => 'Articles',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
	]);

	// 2. on retourne l'objet WP_Query
	return $articles;
}


//enregistrer les zones de menus
register_nav_menu('primary','Navigation principale (haut de page)');


//fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objet
function dw_get_menu_items($location){
	$items = [];
	//récupérer le menu WP pour $location
	$locations = get_nav_menu_locations();
	if(!($locations[$location] ?? null)){//si dans locations il y a une clé location (si n'existe pas = null)
		return $items;
	}
	//récupérer tous les éléments du menu récupéré
	$menu = $locations[$location];
	$posts = wp_get_nav_menu_items($menu);

	//formater chaque élément dans une instance de classe personnalisée. Boucler sur chaque post pour transformer le WP_post en une instance
	//de notre classe perso et on va l'ajouter à $items sauf si sous menu à l'item parent
	foreach($posts as $post){
		$item = new PrimaryMenuItem($post);
		//retourner un tableau d'éléments du menu formaté
		$items[] = $item;
	}
	return $items;
}




// Fonction qui charge les assets compilés et retourne leure chemin absolu

function dw_mix($path)
{
    $path = '/' . ltrim($path, '/');

    if (!realpath(__DIR__ . '/public' . $path)) {
        return;
    }

    if (!($manifest = realpath(__DIR__ . '/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest.json
    $manifest = json_decode(file_get_contents($manifest), true);

    // Regarder si on a une clef qui correspond au fichier chargé dans $path
    if (!array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Récupérer & retourner le chemin versionné
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}




