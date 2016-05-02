<?php 
/**
 * 
 * @author WP Shop Team
 */
class Wpshop_Requests {

    protected static $instance = NULL;
    public function __construct() {}

    public static function get_instance() {
        NULL === self::$instance and self::$instance = new self;
        return self::$instance;
    }    

    public function setup() {
        add_action('init', array($this, 'rewrite_rules'));
        add_filter('query_vars', array($this, 'query_vars'), 10, 1);
        add_action('parse_request', array($this, 'parse_request'), 10, 1);
    }

    public function rewrite_rules(){
        $ek_result = get_option("wpshop.payments.ek");
        $ya_result = get_option("wpshop.payments.yandex_kassa");
        add_rewrite_rule('wpshop/wallet_'.$ek_result["passfrase"].'/?$', 'index.php?wpshop_wallet_'.$ek_result["passfrase"].'=true', 'top');
        add_rewrite_rule('wpshop/yandex_'.$ya_result["passfrase"].'/?$', 'index.php?wpshop_kassa_'.$ya_result["passfrase"].'=true', 'top');
        
    }

    public function flush_rules(){
        $this->rewrite_rules();
        flush_rewrite_rules();
    }

    public function query_vars($vars){
        $ek_result = get_option("wpshop.payments.ek");
        $ya_result = get_option("wpshop.payments.yandex_kassa");
        $vars[] = 'wpshop_wallet_'.$ek_result["passfrase"];
        $vars[] = 'wpshop_kassa_'.$ya_result["passfrase"];
        return $vars;
    }

    public function parse_request($wp){
        $ek_result = get_option("wpshop.payments.ek");
        $ya_result = get_option("wpshop.payments.yandex_kassa");
        if ( array_key_exists( 'wpshop_wallet_'.$ek_result["passfrase"], $wp->query_vars ) ){
            include WPSHOP_DIR . '/views/wallet_result.php';
            exit();
        }
        if ( array_key_exists( 'wpshop_kassa_'.$ya_result["passfrase"], $wp->query_vars ) ){
            include WPSHOP_DIR . '/views/yandex_result.php';
            exit();
        }
    }
}