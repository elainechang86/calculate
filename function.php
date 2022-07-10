add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'application',
         get_template_directory_uri() . '/js/application.js', 
         array('jquery') 
    );
    wp_enqueue_script(
        'bootstrap',
         get_template_directory_uri() . '/js/bootsrap.js', 
         array('jquery') 
    );
    wp_enqueue_script(
        'buttom',
         get_template_directory_uri() . '/js/buttom.js', 
         array('jquery') 
    );
}