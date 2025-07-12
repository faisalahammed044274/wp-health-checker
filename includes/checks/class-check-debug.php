<?php
if (!defined('ABSPATH')) exit;

/**
 * WP_DEBUG Mode Check
 */
class WPHC_Check_Debug {
    public static function run() {
        $debug = defined('WP_DEBUG') && WP_DEBUG;
        return [
            'label' => 'WP_DEBUG Mode',
            'status' => $debug ? 'warning' : 'pass',
            'message' => $debug ? 'WP_DEBUG is ON – turn off on production.' : 'WP_DEBUG is OFF.',
        ];
    }
}
