<?php 

namespace Src\public;

use Src\includes\BaseController;

class SPP_GoogleMap extends BaseController{
    
    public function enqueueStyle () {
        wp_enqueue_style( $this->pluginName(), $this->getPluginUrl(). 'css/google-map.css', array(), $this->version(), 'all' );
    }

    public function enqueueScript () {
        
        $api_key = esc_attr(get_option( 'google_map_api_key' ));
        wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key='.$api_key.'&callback=myMap' , array(), '', true);
        wp_enqueue_script( $this->pluginName(), plugin_dir_url( __FILE__ ) . 'js/google-map.js', array( 'jquery', 'googlemaps' ), $this->version(), true );
        
    }


    function shortCode(  $atts ) {

       $option = shortcode_atts( array(
            "lat" => 23.6115,
            "lang" => 90.9773,
        ), $atts );
        return require_once plugin_dir_path( dirname( __FILE__ )  ) . 'public/spp-google-map-html.php';
    }
}