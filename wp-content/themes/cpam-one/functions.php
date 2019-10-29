<?php
require_once(__DIR__."/Classes/Assets/CSS.php");
require_once(__DIR__."/Classes/Assets/JS.php");
require_once(__DIR__."/Classes/Menus/Menus.php");
add_action("wp_enqueue_scripts", "CSS::enqueue");
add_action("wp_enqueue_scripts", "JS::enqueue");
//pour les menus
add_action("init","Menus::register");
//custom Post Types : Configuration
function wpm_custom_post_type(){
// tableau contenant les informations
// affichées dans le tableau de bord
$labels=[
"name"=>_x("configuration","Post Type General Name"),
"singular_name"=> _x("Configuration","Post Type Singlar Name")];

$args=[
    "label"=>__("Configuration"),
    "description"=>__("Toutes les configuraitons"),
    "labels" => $labels,
    "supports"=>[
        "title",
        "excerpt",
        
        "thumbnail",
        "custom-fields"
    ],
    "show_in_rest"=>true,
    "has_archive"=>true,
    "public"=>true,
    "rewrite"=>["slug"=>"configurations"]
];
register_post_type("configurations",$args);
}
add_action("init","wpm_custom_post_type");

function wpm_add_taxonomies(){
$anneeLabels=[
    "name",
    "singular_name",
    "all_items",
    "search_items",
    "edit_item",
    "update_item",
    "add_new_item",
    "new_item_name",
    "menu_name"=>__("Année")
];
$argsAnnee=[
    "labels"=>$anneeLabels,
    "show_ui"=>true,
    "show_admin_columns"=>true,
    "query_var"=>true,
    "rewrite"=>["slug"=>"annees"]
];
register_taxonomy(
    "annees",
    "configurations",
    $argsAnnee);

}
add_action("init","wpm_add_taxonomies");