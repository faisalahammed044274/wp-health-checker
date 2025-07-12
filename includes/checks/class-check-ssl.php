<?php
if (!defined('ABSPATH')) exit;

/**
 * SSL Certificate Check
 */
class WPHC_Check_SSL {
    public static function run() {
        $ssl = is_ssl();
        return [
            'label' => 'SSL Certificate',
            'status' => $ssl ? 'pass' : 'fail',
            'message' => $ssl ? 'Your site is secured with SSL.' : 'SSL not detected – install an SSL certificate.',
        ];
    }
}
