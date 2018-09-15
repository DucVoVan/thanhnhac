<?php 
/*
Plugin Name: Thanh nhac login
Plugin URI: ducvovan.com
Description: Manager login website
Version: 1.1
Author: Duc Vo
Author URI: ducvovan.com
Author Email: vovanducvina@gmail.com

*/
require_once('view-client/login.php');
class thanhnhaclogin{
	// Ham khoi tao plugin
	public function __construct()
	{
		// dang ki cac hook de goi cac ham phia duoi.
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
        
        // Register hook executes just before WordPress determines which template page to load
        // add_action( 'template_redirect', array( $this, 'increase_counter_when_home_visited' ) );
        
        // Them mot menu dieu khien tren thanh dashboard
        add_action( 'admin_menu', array( $this, 'create_menu_admin_panel' ) );
        
        // Handle POST request, admin_action_($action)
        // add_action( 'admin_action_nam_counter_action', array( $this, 'nam_counter_admin_action' ) );    
	}

	public function activate( $network_wide ) 
    {   
    
        // if the WordPress version is older than 2.6, deactivate this plugin
        // admin_action_ hook appearance 2.6 
        if ( version_compare( get_bloginfo( 'version' ), '2.6', '<' ) ) {
            deactivate_plugins( basename( __FILE__ ) );
        } else {
            include "Create-table/create.php";
        }
    } // end activate



	// Them mot menu dieu khien tren thanh dashboard
	public function create_menu_admin_panel() 
    {
        add_options_page( 'Thanh Nhac Login Options', 'Thanh Nhac Login', 
        'manage_options', 'thanhnhac-login-unique_identifier', array($this, 'thanhnhac_login_plugin_form' ) );
    }   
    
    /**
     * Tao Giao dien quan ly
     */ 
    public function thanhnhac_login_plugin_form() 
    {
        if (!current_user_can( 'manage_options' )) {
            wp_die( __('You do not have sufficient permission to access this page.') );
        }
        
        // Add css only plugin option page
        // wp_enqueue_style( 'nam-hitcounter', plugins_url( 'css/admin.css', __FILE__ ) );
                    
        
        // admin form manage counter
        include 'views/admin.php';
    }

}
$run = new thanhnhaclogin();

