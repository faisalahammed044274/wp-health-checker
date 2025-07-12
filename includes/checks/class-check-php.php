<?php
if (!defined('ABSPATH')) exit;

/**
 * PHP Version Health Check
 */
class WPHC_Check_PHP {
    public static function run() {
        return [
            'label' => 'PHP Version',
            'status' => version_compare(PHP_VERSION, '8.0', '>=') ? 'pass' : 'fail',
            'message' => 'Current: ' . PHP_VERSION . ' | Recommended: 8.0+',
        ];
    }
}
