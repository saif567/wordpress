<?php
/**
 
 * @package WordPress
 * @subpackage jack

 */
 function jack_setup() {
	 
	 add_theme_support( 'automatic-feed-links' );
 }
    add_action( 'after_setup_theme', 'jack_setup' );

function jack_scripts() {
	
	
	
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
	


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	
	wp_enqueue_style( 'stylesheet1', get_template_directory_uri() . '/fonts/stylesheet.css' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	
	wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	
	
	wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/css/animate.min.csss' );
	
	
	
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	
	
	wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/css/owl.transitions.css' );

	
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' );
	

	wp_enqueue_script( 'bootstrap-min1', get_template_directory_uri() . '/js/bootstrap.min.js' );
	
	wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js' );
	
	
	wp_enqueue_script( 'mousescroll', get_template_directory_uri() . '/js/mousescroll.js' );
	
	
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js' );
	
	
	wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js' );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );

	

}
add_action( 'wp_enqueue_scripts', 'jack_scripts' );

add_action('after_setup_theme', 'jack_menu');

function jack_menu(){
	register_nav_menu('header', __('Header Menu', 'theme-slug'));
	
	register_nav_menu('header1', __('Top Header','theme-slug'));
	
	register_nav_menu('header2', __('User Header','theme-slug'));
 
}

function jack_sidebar(){
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar','textdomain'),
		'description' => __('A Short decription','textdomain'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
		)
	);
}

add_action('widgets_init','jack_sidebar');

add_theme_support( 'post-thumbnails' );


function jack_feature_content_menu(){
    add_menu_page( 
        __( 'Feature Content', 'textdomain' ),
        'Header Content',
        'manage_options',
        'fcontent-otions',
        'jack_feature_content_callback',
        'dashicons-admin-links',
         10
    ); 
}
add_action( 'admin_menu', 'jack_feature_content_menu' );




/**
 * Display Feature content Callback page
 **/
function jack_feature_content_callback(){  
    
if($_POST["fcontent-submit"]){
    
	$ftext = $_POST["fcontent_t"];
    $ftext_area = $_POST["fcontent_a"];
    
    update_option( 'fcontent_t', $ftext);
    update_option( 'fcontent_a', $ftext_area);
   }

 add_action( 'admin_callback', 'jack_feature_content_callback' );

 
 ?>

<form action="" method="post">
 
<label>Content Title Header/Footer</label></br>

<input type="text" name="fcontent_t" value="<?php echo get_option('fcontent_t');?>"><br /><br />

<label>Content Area Header/Footer</label></br>

<textarea rows="4" cols="50" name="fcontent_a"><?php echo get_option('fcontent_a');?></textarea><br />

 <input type="submit" name="fcontent-submit" value="Submit"/>
 </form>
 
<?php }?>

<?php

function jack_feature_content_menu1(){
    add_menu_page( 
        __( 'Feature Content Banner', 'textdomain' ),
        'Banner Content',
        'manage_options',
        'fcontent-otions1',
        'jack_feature_content_callback1',
        'dashicons-admin-links',
         8
    ); 
}
add_action( 'admin_menu', 'jack_feature_content_menu1' );




/**
 * Display Feature content Callback page
 **/
function jack_feature_content_callback1(){  
    
if($_POST["fcontent-submit1"]){
    
	$ftext1 = $_POST["fcontent_t1"];
    $ftext_area1 = $_POST["fcontent_a1"];
    
    update_option( 'fcontent_t1', $ftext1);
    update_option( 'fcontent_a1', $ftext_area1);
   }

 add_action( 'admin_callback', 'jack_feature_content_callback1' );

 
 ?>

<form action="" method="post">
 
<label>Content Title</label></br>

<input type="text" name="fcontent_t1" value="<?php echo get_option('fcontent_t1');?>"><br /><br />

<label>Content Area</label></br>

<textarea rows="4" cols="50" name="fcontent_a1"><?php echo get_option('fcontent_a1');?></textarea><br />

 <input type="submit" name="fcontent-submit1" value="Submit"/>
 </form>
 
 <?php }?>
 
 
 
 <?php

function jack_feature_content_menu2(){
    add_menu_page( 
        __( 'Feature Content Banner', 'textdomain' ),
        'SignUp Content',
        'manage_options',
        'fcontent-otions2',
        'jack_feature_content_callback2',
        'dashicons-admin-links',
         9
    ); 
}
add_action( 'admin_menu', 'jack_feature_content_menu2' );




/**
 * Display Feature content Callback page
 **/
function jack_feature_content_callback2(){  
    
if($_POST["fcontent-submit2"]){
    
	$ftext2 = $_POST["fcontent_t2"];
    $ftext_area2 = $_POST["fcontent_a2"];
    
    update_option( 'fcontent_t2', $ftext2);
    update_option( 'fcontent_a2', $ftext_area2);
   }

 add_action( 'admin_callback', 'jack_feature_content_callback2' );

 
 ?>

<form action="" method="post">
 
<label>Content Title</label></br>

<input type="text" name="fcontent_t2" value="<?php echo get_option('fcontent_t2');?>"><br /><br />

<label>Content Area</label></br>

<textarea rows="4" cols="50" name="fcontent_a2"><?php echo get_option('fcontent_a2');?></textarea><br />

 <input type="submit" name="fcontent-submit2" value="Submit"/>
 </form>
 
 <?php }?>
 
 
<?php 
 
 function jack_feature_content_menu4(){
    add_menu_page( 
        __( 'Feature Content', 'textdomain' ),
        'Feature Content',
        'manage_options',
        'fcontent-otions4',
        'jack_feature_content_callback4',
        'dashicons-admin-links',
         11
    ); 
}
add_action( 'admin_menu', 'jack_feature_content_menu4' );




/**
 * Display Feature content Callback page
 **/
function jack_feature_content_callback4(){  
    
if($_POST["fcontent-submit4"]){
    
	$ftext4 = $_POST["fcontent_t4"];
    $ftext_area4 = $_POST["fcontent_a4"];
    
    update_option( 'fcontent_t4', $ftext4);
    update_option( 'fcontent_a4', $ftext_area4);
   }

 add_action( 'admin_callback', 'jack_feature_content_callback4' );

 
 ?>

<form action="" method="post">
 
<label>Content Title Header/Footer</label></br>

<input type="text" name="fcontent_t4" value="<?php echo get_option('fcontent_t4');?>"><br /><br />

<label>Content Area Header/Footer</label></br>

<textarea rows="4" cols="50" name="fcontent_a4"><?php echo get_option('fcontent_a4');?></textarea><br />

 <input type="submit" name="fcontent-submit4" value="Submit"/>
 </form>
 
<?php }?>