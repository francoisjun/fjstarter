<?php 

function fjstarter_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/login-logo.png);
        }
    </style>
<?php 
    // desabilita o carregamento do css padrão da página de login
    // wp_deregister_style('login');
}
add_action( 'login_enqueue_scripts', 'fjstarter_login_logo' );

function fjstarter_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'fjstarter_login_logo_url' );

function fjstarter_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertext', 'fjstarter_login_logo_url_title' );

