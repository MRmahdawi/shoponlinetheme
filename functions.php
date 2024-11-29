<?php
add_action( 'wp_enqueue_scripts', 'add_style_assets' );
function add_style_assets() {
    //Style.ss
    wp_enqueue_style( 'BootstrapMin', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'BootstrapRTL', get_template_directory_uri() . '/css/bootstrap-rtl.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'StyleCSS', get_template_directory_uri() . '/style.css', array(), '4.0.0' );

    // Scripts
    wp_enqueue_script( 'JavaScript', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.4.1', true );
}


// Add menu
add_action( 'init', 'theme_setup' );
function theme_setup() {

    register_nav_menus(
        array(
            'one_menu' => __( 'جایگاه اول منوهای سایت' ),

        )
    );
}

// Add Widgets
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'ستون سمت راست سایت',
        'id'   => 'sidbarright',
        'description'   => 'اگر مایل بودید میتوانید هر یک از ابزارهای روبه رو را در این قسمت قرار دهید تا سمت راست سایت شما تکمیل شود',
        'before_widget' => ' <div class="widgetbox">',
        'before_title'  => '<div class="headerbox"> <h4>',
        'after_title'   => '</h4> </div>',
        'after_widget'  => '</div>'
    ));
}



if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'ابزارک های قسمت فوتر سایت',
        'id'   => 'footer-site',
        'description'   => 'کلیه مواردی که برای قسمت فوتر باید قرار بگیرید',
        'before_widget' => '  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widfooter">',
        'before_title'  => ' <div class="widheaderfoot">
                        <h3>',
        'after_title'   => '  </h3>
                    </div>
                    <div class="contfooter">',
        'after_widget'  => '</div>
                </div>
            </div>'
    ));
}

//add post type

// Register Custom Post Type
function add_slider() {

    $labels = array(
        'name'                  => _x( 'اسلایدر', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'اسلایدر', 'text_domain' ),
        'name_admin_bar'        => __( 'اسلایدر', 'text_domain' ),
        'archives'              => __( 'کلیه اسلایدرها', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'کلیه اسلایدرها', 'text_domain' ),
        'add_new_item'          => __( 'اضافه کردن اسلایدر', 'text_domain' ),
        'add_new'               => __( 'اضافه کردن یک اسلاید', 'text_domain' ),
        'new_item'              => __( 'اضافه کردن یک اسلایدر', 'text_domain' ),
        'edit_item'             => __( 'تغییرات جدید', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'مشاهده این اسلایدر', 'text_domain' ),
        'view_items'            => __( 'مشاهده اسلایدرها', 'text_domain' ),
        'search_items'          => __( 'جستجو برای اسلایدر', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'تصویر اسلایدر', 'text_domain' ),
        'set_featured_image'    => __( 'قراردادن تصویر اسلایدر', 'text_domain' ),
        'remove_featured_image' => __( 'حذف تصویر اسلایدر', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Slider', 'text_domain' ),
        'description'           => __( 'add new picture in the slider', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' , 'excerpt', ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 80,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'slider', $args );

}
add_action( 'init', 'add_slider', 0 );




// add image
if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ){
    add_image_size( 'slider', 1100, 328, true );
    add_image_size( 'productpicture', 240, 230, true );
    add_image_size( 'singleproducts', 350, 400, true );
    add_image_size( 'archive', 120, 120, true );
}


// add theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}