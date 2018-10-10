<?php
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Open+Sans:300,400,600,700,800', array(), null, 'all');
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), null, 'all');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style( 'imagelightbox', get_template_directory_uri() . '/css/imagelightbox.css', array(), null, 'all');
  

    wp_enqueue_script( 'jquery-2.1.1', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',  array(), '1.0.0', 'in_footer');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',  array(), '1.0.0', 'in_footer');
    

    if (is_front_page()) {
        wp_enqueue_style( 'kenburnsy-css', get_template_directory_uri() .'/css/jquery.kenburnsy.css', array(), null, 'all');
        wp_enqueue_script( 'velocity-js', get_template_directory_uri() .'/js/jquery.velocity.min.js',  array(), '1.0.0', 'in_footer');
        wp_enqueue_script( 'kenburnsy-js', get_template_directory_uri() .'/js/jquery.kenburnsy.js',  array(), '1.0.0', 'in_footer');
    }

    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), null, 'all' );
 
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), null, 'all');

    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js',  array(), '1.0.0', 'in_footer');
    wp_enqueue_script( 'imagelightbox-js', get_template_directory_uri() . '/js/imagelightbox.js',  array(), '1.0.0', 'in_footer');
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js',  array(), '1.0.0', 'in_footer');
    
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/*Menus*/
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

add_theme_support('post-thumbnails');

//Create extra fields called Altnative Text and Custom Classess
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    $args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );


function the_breadcrumb() {
        echo '<ul id="crumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo "</a></li>";
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo "</li><li>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

function staff_words() {
  global $post;
  $text = get_field('words_to_live_by');
  if ( '' != $text ) {
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>>', $text);
    $text_length = strlen($text); // Get text length (characters)
    $excerpt_length = 100;  // 50 desired characters
    $excerpt_more = '...';
    
    // Shorten the text
    $text = substr($text, 0, $excerpt_length);
    
    // If the text is more than 50 characters, append $excerpt_more
    if ($text_length > $excerpt_length) {
      $text .= $excerpt_more;
    } 

  }
  return apply_filters('the_excerpt', $text);
}

show_admin_bar(false);