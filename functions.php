<?php

add_theme_support( 'post-thumbnails' );

function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), '2.0' );
    wp_enqueue_script(
       'custom-script',
       get_stylesheet_directory_uri() . '/custom_script.js',
       array( 'jquery' )
   );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function language_selector(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if($l['active']){
                echo '<a href="'.$l['url'].'">' . $l['tag'] . '</a>';
            }
        }
        echo '<ul>';
        foreach($languages as $l){
            if(!$l['active']){
                echo '<li><a href="'.$l['url'].'">' . $l['tag'] . '</a></li>';
            }
        }
        echo '</ul>';
    }
}


add_action('wp_head','addToHead');

function addToHead(){
	$facebook = "<!-- Facebook Pixel Code --><script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '1188250437881741');fbq('track', \"PageView\");</script><noscript><img height=\"1\" width=\"1\" style=\"display:none\" src=\"https://www.facebook.com/tr?id=1188250437881741&ev=PageView&noscript=1\"/></noscript><!-- End Facebook Pixel Code -->";
	echo $facebook;
	
	$googleTag = "<!-- Google Tag Manager --><noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-PTLSC5\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PTLSC5');</script><!-- End Google Tag Manager -->";
	echo $googleTag;
	
	//cookie translations
	$trans = explode('/', get_permalink() );
	if ($trans[3] == 'en'){ 
		echo '<style>#cn-notice-text .english { display:inline-block; } </style>';
	} else if ($trans[3] == 'es'){
		echo '<style>#cn-notice-text .esp { display:inline-block; } </style>';
	} else if ($trans[3] == 'es_pe'){
		echo '<style>#cn-notice-text .spa { display:inline-block; } </style>';
	} else if ($trans[3] == 'pt'){
		echo '<style>#cn-notice-text .pt { display:inline-block; } </style>';
	}
	
	
}





///CREATING A NEW BLOG MODULES WITHOUT THE MASONRY
/// simply removes certain css so we don't end up with the masonry
/// the actual module is in payme_custom_modules.php
function DS_Custom_Modules(){
 if(class_exists("ET_Builder_Module")){
 include("payme_custom_modules.php");
 }
}

function Prep_DS_Custom_Modules(){
 global $pagenow;

$is_admin = is_admin();
 $action_hook = $is_admin ? 'wp_loaded' : 'wp';
 $required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' ); // list of admin pages where we need to load builder files
 $specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
 $is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
 $is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
 $is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
 $is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];

if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
 add_action($action_hook, 'DS_Custom_Modules', 9789);
 }
}
Prep_DS_Custom_Modules();

