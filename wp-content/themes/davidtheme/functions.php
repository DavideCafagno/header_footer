<?php
add_action('init','addTranslation');
function addTranslation(){
    $res = load_textdomain('davidtheme', get_stylesheet_directory_uri().'/language/davidtheme-it_IT.mo',get_locale());
}
