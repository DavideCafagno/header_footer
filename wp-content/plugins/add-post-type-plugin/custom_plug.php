<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Add Post-Type
 * Plugin URI:        https://www.wordpress.com
 * Description: Plugin per creazione di Post-type
 * Version: 1.0
 * Author: Davide Cafagno
 * License: GPL Attribution-ShareAlike
 * Text Domain: add-post-type-plugin
 * Domain Path: /languages
 * Requirement to LOG: LOGGER PLUGIN (logger_success,logger_error,logger_info,logger_warning are the functions that permitt to LOG events);
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('plugins_loaded', 'add_post_type_plugin_myplugin_load_translation');
function add_post_type_plugin_myplugin_load_translation()
{
    load_plugin_textdomain('add-post-type-plugin', false, '/add-post-type-plugin/languages/');
}
function load_custom_post_type()
{
    global $wpdb;
    define('ADD_POST_TYPE_PLUGIN_TABLE_NAME', $wpdb->prefix . 'add_post_type_plugin');


    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS " . ADD_POST_TYPE_PLUGIN_TABLE_NAME . "(
                    id integer PRIMARY KEY AUTO_INCREMENT,
                    post_name varchar(100) NOT NULL,
                    post_slug varchar(100) NOT NULL UNIQUE,
                    post_singular_name varchar(100) NOT NULL,
                    post_content boolean DEFAULT false NOT NULL,
                    post_excerpt boolean DEFAULT false NOT NULL,
                    post_thumb boolean DEFAULT false NOT NULL,
                    post_comments boolean DEFAULT false NOT NULL,
                    post_custom_fields boolean DEFAULT false NOT NULL,
                    post_taxonomies varchar(1000) NOT NULL,
                    post_enabled boolean DEFAULT true NOT NULL
                ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    add_action('init', function () {
        foreach (custom_post_list() as $r) {
            $post_name = $r->post_name;
            $post_slug = check_fun_name($r->post_slug);
            $post_singular_name = $r->post_singular_name;
            $post_taxonomies = explode(',', $r->post_taxonomies);
            $support = ['title', 'author'];
            if ($r->post_content == '1') $support[] = "editor";
            if ($r->post_excerpt == '1') $support[] = "excerpt";
            if ($r->post_thumb == '1') $support[] = "thumbnail";
            if ($r->post_comments == '1') $support[] = "comments";
            if ($r->post_custom_fields == '1') $support[] = "custom-fields";
            register_post_type($post_slug,
                array(
                    "labels" => array(
                        "name" => __($post_name, "textdomain"),
                        "singular_name" => __($post_singular_name, "textdomain"),
                    ),
                    "public" => true,
                    "has_archive" => true,
                    "hierarchical" => false,
                    "supports" => $support,
                    "taxonomies" => $post_taxonomies,
                    "show_ui" => true,
                )
            );
            foreach ($post_taxonomies as $tx) {
                do_action( 'registered_taxonomy_for_object_type', $tx, $post_slug);
            }
        }

    },20);
}

function check_fun_name($post_slug)
{
    $post_slug = str_replace(" ", '-', $post_slug);
    $post_slug = strtolower($post_slug);
    return preg_replace("{[à-ù0-9\"'!£$%&/,;.()=?^ÈÙ*|+Ú]}", "", $post_slug);
}

function custom_post_list()
{
    global $wpdb;
    $records = $wpdb->get_results("SELECT * from " . ADD_POST_TYPE_PLUGIN_TABLE_NAME . " WHERE post_enabled = true");
    return $records;
}
function all_custom_post_list()
{
    global $wpdb;
    $records = $wpdb->get_results("SELECT * from " . ADD_POST_TYPE_PLUGIN_TABLE_NAME);
    return $records;
}

function disabled_custom_post_list()
{
    global $wpdb;
    $records = $wpdb->get_results("SELECT * from " . ADD_POST_TYPE_PLUGIN_TABLE_NAME . " WHERE post_enabled = false");
    return $records;
}

include 'rest_api.php';
// include 'functions/capabilities_functions.php';
load_custom_post_type();

global $wp_textdomain_registry;
add_action('admin_enqueue_scripts', 'add_script');
function add_script()
{
    wp_register_script('add-post-type-plugin-script', plugins_url('add-post-type-plugin/js/custom_plugin.js'), array('wp-i18n'), 0.1,'');//, array('jquery'));
    load_script_textdomain('dd-post-type-plugin-script','add-post-type-plugin',plugins_url().'/add-post-type-plugin/languages/');
    wp_set_script_translations( 'add-post-type-plugin-script', 'add-post-type-plugin', plugins_url().'/add-post-type-plugin/languages/');

    wp_localize_script('add-post-type-plugin-script', 'lang',array(
        'insert_all'=>__('Insert all text fields!', 'add-post-type-plugin'),
        'sure_changes'=>__('Are you sure to make the changes?', 'add-post-type-plugin'),
        'select_one'=>__('Select at least one Post-Type!', 'add-post-type-plugin'),
        'sure_delete'=>__('Are you sure to permanently delete?', 'add-post-type-plugin'),
        'sure_disable'=>__('Are you sure to disable? You can enable it later.', 'add-post-type-plugin'),
        'new_association'=>__('The posts associated with their old slug `%1$s`, will lose the association with their Post-Type. Do you want to associate them with the new slug `%2$s`?', 'add-post-type-plugin'),
        'confirm_delete_posts'=>__('Do you want to permanently delete all associated posts?','add-post-type-plugin')
    ));
    wp_localize_script('add-post-type-plugin-script', 'wp_ajax',array('ajaxUrl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('add-post-type-plugin-script');

    wp_register_script('jquery_script', 'https://code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script('jquery_script');
}

add_action('admin_menu', 'add_post_type_register_my_custom_menu_page');
function add_post_type_register_my_custom_menu_page(){
    add_menu_page('my plugin', __('Add Post-Type','add-post-type-plugin'), 'manage_options', 'add_custom_post_plugin', 'my_add_custom_post', 'dashicons-plus-alt2', 66);
    add_submenu_page('add_custom_post_plugin', "my plugin", __("Remove Post-Type",'add-post-type-plugin'), 'manage_options', 'remove-post_type', 'my_remove_custom_post');
    add_submenu_page('add_custom_post_plugin', "my plugin", __("Enable Post-Type",'add-post-type-plugin'), 'manage_options', 'enable-post_type', 'my_enable_custom_post');
    add_submenu_page('add_custom_post_plugin', "my plugin", __("Update Post-Type",'add-post-type-plugin'), 'manage_options', 'update-post_type', 'my_update_custom_post');
}

function my_add_custom_post()
{
    include 'template/adding.php';
}

function my_remove_custom_post()
{
    include 'template/removing.php';
}

function my_enable_custom_post()
{
    include 'template/enabling.php';
}
function my_update_custom_post()
{
    include 'template/modifing.php';
}
