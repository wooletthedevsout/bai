<?php
/**
 * Plugin Name:     Woocommerce Bai Pagamentos
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Integração Woocommerce e gateway BAI.
 * Author:          WP Helpers
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wc-baipaga
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wc_Baipaga
 */

define('BANCOBAI_SLUG', 'wc-baipaga');

use BancoBai\Init;

require __DIR__ . '/vendor/autoload.php';

final class BancoBai
{
    /**
     * @var reference to singleton instance
     */
    private static $instance;

    /**
     * Plugin's main class object.
     * 
     * @var BancoBai\Init
     * 
     */
    protected $init;

    /**
     * Array of constraints for executing the plugin. This
     * may include both declared classes or PHP extensions.
     * 
     * @var array
     */
    protected static $constraints = [
        ['woocommerce/woocommerce.php', 'WooCommerce']
    ];

    /**
     * Creates a new instance of a singleton class if the
     * requirements are fulfilled
     *
     * @return self
     */
    public static function instance()
    {
        foreach(self::$constraints as $check) {

            if(!is_plugin_active($check[0])) {

                    return self::warning($check);
            }
        }
        if(!self::$instance) {
            
            self::$instance = new self;  

        }
        
        return self::$instance;
    }

    /**
     * Plugin's constructor for the main instance. Initiates
     * all routines and tasks from 'plugins_init' hook, but
     * those associated to other important actions, such as
     * the translations support.
     * 
     * @since 1.0.0
     * @return void()
     * 
     */
    public function __construct() {

        $this->init = new Init();
    }

    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     * Fired by `init` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function i18n()
    {
        load_plugin_textdomain(BANCOBAI_SLUG);
    }

    /**
     * If any of the constraints is not met, then it 
     * echoes a warning on WP admin area, indicating the
     * missing plugin.
     * 
     * @param array  $plugin  The required plugin relative path and name.
     * @since 1.0.0-beta
     * 
     * @return void()
     */
    public static function warning(array $plugin)
    {
        add_action('admin_notices', function() use ($plugin) {

            echo '<div class="notice notice-warning is-dismissible"><p>' . __('O plugin ', BANCOBAI_SLUG) . $plugin[1] . __(' é necessário para esta integração e não está ativo.', BANCOBAI_SLUG) . '</p></div>';
        });
    }
}

add_action('plugins_loaded', function() {
    BancoBai::instance();
});
