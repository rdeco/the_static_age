<?php
	
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));	
define( 'IMAGES', TEMPPATH. "/imgs");


add_theme_support( 'post-thumbnails' );
require_once('theme-options.php');

/***
 * Enqueue scripts & stylesheets
 * -----------------------------
 */
 
function staticAge_styles() {
	wp_enqueue_style ('main_css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style ('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style ('bootstrap_theme_css', get_template_directory_uri().'/css/bootstrap-theme.min.css' );
	wp_enqueue_style ('normalize_css', get_template_directory_uri().'/css/normalize.css' );
	wp_enqueue_style ('googlefonts_css', 'http://fonts.googleapis.com/css?family=Josefin+Sans' );	
	
}
add_action('wp_enqueue_scripts', 'staticAge_styles');

function staticAge_scripts() {
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '2015326', true);
    wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/jquery.js', '2015326', true);
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js', array('jquery'), '2015326', true);	

}
add_action('wp_enqueue_scripts', 'staticAge_scripts');


/***
 * register navigation menus
 * -----------------------------
 */
 
 
add_theme_support('menus'); 
function register_staticAge_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
		
	);
}
add_action('init', 'register_staticAge_menus');


/***
 * register meta boxes for title & tagline on front page
 * -------------------------------------------------------
 */
 
 
/* title field */
 
function staticAge_title_field() {
	
    add_meta_box( 'meta-box-id-title', 'Title', 'staticAge_field_title', 'page', 'normal', 'high' );
}


add_action( 'add_meta_boxes', 'staticAge_title_field' );



    function staticAge_field_title( $post ) {
        $values = get_post_custom( $post->ID );
        $text = isset( $values['meta_box_title_field'] ) ? esc_attr( $values['meta_box_title_field'][0] ) : '';
?>
<p>
    <label for="meta_box_text">Title:  </label>
    <input type="text" name="meta_box_title_field" id="meta_box_title_field" value="<?php echo $text; ?>" />
</p>

<?php
}


add_action( 'save_post', 'staticAge_meta_box_save_title' );
function staticAge_meta_box_save_title( $post_id ) {
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post', $post_id ) ) return;

    // now we can actually save the data
    $allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

    // Make sure your data is set before trying to save it
    if( isset( $_POST['meta_box_title_field'] ) )
        update_post_meta( $post_id, 'meta_box_title_field', wp_kses( $_POST['meta_box_title_field'], $allowed ) );

}

/* end of title field */

/* tagline field */

function staticAge_tagline_field() {
    add_meta_box( 'meta-box-id-tagline', 'Tagline', 'staticAge_field_tagline', 'page', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'staticAge_tagline_field' );



    function staticAge_field_tagline( $post ) {
        $values = get_post_custom( $post->ID );
        $text = isset( $values['meta_box_tagline_field'] ) ? esc_attr( $values['meta_box_tagline_field'][0] ) : '';
?>
<p>
    <label for="meta_box_text">Tagline:  </label>
    <input type="text" name="meta_box_tagline_field" id="meta_box_tagline_field" value="<?php echo $text; ?>" />
</p>

<?php
}


add_action( 'save_post', 'staticAge_meta_box_save_tagline' );
function staticAge_meta_box_save_tagline( $post_id ) {
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post', $post_id ) ) return;

    // now we can actually save the data
    $allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );

    // Make sure your data is set before trying to save it
    if( isset( $_POST['meta_box_tagline_field'] ) )
        update_post_meta( $post_id, 'meta_box_tagline_field', wp_kses( $_POST['meta_box_tagline_field'], $allowed ) );

}

/* end of tagline field*/


/***
 * register widgets for services page
 * -----------------------------------
 */
 
 function staticAge_services_widget($name, $id, $description){
	 register_sidebar(array(
		 'name' => __( $name ),
		 'id' => $id,
		 'description' => __($description),
		 'before_widget' => '<div class="col-xs-12 service-widget-background">',
		 'after_widget' => '</div>',
		 'before_title' => '<h1 class="service-name">',
		 'after_title' => '</h1>'
		 
	 ));
}
staticAge_services_widget( 'Services Page Left', 'services-left', 'Displays service info on the left side of the page' );
staticAge_services_widget( 'Services Page Center', 'services-center', 'Displays service info on the center side of the page' ); 
staticAge_services_widget( 'Services Page Right', 'services-right', 'Displays service info on the right side of the page' ); 

/***
 *  end register widgets for services page
 * ---------------------------------------
 */
 


/***
 * register widget for modal on services page
 * -----------------------------------------
 */
 
 function staticAge_servicesModal_widget($name, $id, $description){
	 register_sidebar(array(
		 'name' => __( $name ),
		 'id' => $id,
		 'description' => __($description),
		 'before_widget' => '<div class="modal-dialog">',
		 'after_widget' => '</div>',
		 'before_title' => '<h4 class="modal-title">',
		 'after_title' => '</h4>'
		 
	 ));
}
staticAge_servicesModal_widget( 'Services Page Modal Left', 'services-modal-left', 'Displays extra service info in the modal of the services page on the left side' );
staticAge_servicesModal_widget( 'Services Page Modal Center', 'services-modal-center', 'Displays extra service info in the modal of the services page in the center' );
staticAge_servicesModal_widget( 'Services Page Modal Right', 'services-modal-right', 'Displays extra service info in the modal of the services page on the right side' );


/***
 *  end register widget for modal on services page
 * -----------------------------------------
 */


/***
 * register multiple images on services page
 * -----------------------------------------
 */

if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Secondary Service Image',
		'id' => 'secondary-service-image',
		'post_type' => 'page'
	 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
		'label' => 'Tertiary Service Image',
		'id' => 'third-service-image',
		'post_type' => 'page'
	 ) );

 }


/***
 * end multiple images on services page
 * -----------------------------------------
 */
 
 
 
/*
function add_custom_types_to_tax( $query ) {
if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
$post_types = get_post_types();

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );
*/

/**
 * Starts support for excerpt character count
 * ------------------------------------------
 */

function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}
/**
 * Ends support for excerpt character count
 * ------------------------------------------
 */




?>