<?php
if (!defined('ABSPATH')) exit;

/**
 * Core health checker loader class
 */
class WPHC_Core {

    /**
     * Get all health check results
     */
    public static function get_checks() {
        $checks = [];

        // Load individual check classes
        require_once WPHC_PATH . 'includes/checks/class-check-php.php';
        require_once WPHC_PATH . 'includes/checks/class-check-ssl.php';
        require_once WPHC_PATH . 'includes/checks/class-check-debug.php';

        // Run checks
        $checks[] = WPHC_Check_PHP::run();
        $checks[] = WPHC_Check_SSL::run();
        $checks[] = WPHC_Check_Debug::run();

        return $checks;
    }
}
