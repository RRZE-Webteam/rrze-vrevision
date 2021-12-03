<?php
namespace RRZE\vRevision;

defined('ABSPATH') || exit;

/**
 * Shortcode
 */
class Shortcode {
    protected $pluginFile;
    private $pluginname = '';
    private $data;

    public function __construct($pluginFile) {
        $this->pluginFile = $pluginFile;
    }

    public function onLoaded() {
        add_shortcode('rrze_mustercontent', [$this, 'shortcodeOutput'], 10, 2);
    }

    /**
     * Generieren Sie die Shortcode-Ausgabe
     * @param array $atts Shortcode-Attribute
     * @param string $content Beiligender Inhalt
     * @return string Gib den Inhalt zurück
     */
    public function shortcodeOutput( $atts ){
        //merge given attributes with default ones
        /*$shortcode_attr = shortcode_atts( array(
            'type'                  => 'text',
        ), $atts );

        $contenttype = $shortcode_attr['type'];
        */
        $html = "<h2>Hello World!</h2>";
        /*if (!empty($html)) {
            Main::fau_fehlermeldungen_enqueue_style('fau-fehlermeldungen');
        }*/
        return $html;
    }
}