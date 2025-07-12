=== WP Health Checker – Diagnose & Report ===
Contributors: your-name
Requires at least: 5.2
Tested up to: 6.5
Stable tag: 1.0
License: GPLv2 or later
Tags: health, system info, site diagnostics, troubleshooting

A lightweight, dev-friendly plugin to check key health metrics on your WordPress site.


WP Health Checker – Diagnose & Report


A lightweight, developer-friendly plugin to help diagnose common WordPress issues and generate site health reports. Built with clean PHP OOP principles.

🧰 Features
PHP version check

SSL certificate detection

WP_DEBUG mode status

Admin dashboard report

Status indicators (✅ Pass / ❌ Fail / ⚠️ Warning)

Clean modular code (OOP-based structure)

Extendable with custom checks

Developer-ready for support teams and freelancers

📦 Installation
Download or clone the plugin into your wp-content/plugins directory:

bash
Copy
Edit
wp-content/plugins/wp-health-checker/
Activate the plugin via WordPress Admin → Plugins.

🗂️ Folder Structure
python
Copy
Edit
wp-health-checker/
├── wp-health-checker.php                  # Main plugin loader
├── includes/
│   ├── class-health-check-core.php       # Loads all health checks
│   └── checks/
│       ├── class-check-php.php           # PHP version checker
│       ├── class-check-ssl.php           # SSL status checker
│       └── class-check-debug.php         # WP_DEBUG mode checker
├── templates/
│   └── dashboard.php                     # Admin page template
├── assets/
│   ├── css/style.css                     # Optional styling
│   └── js/main.js                        # Optional JS (AJAX)
├── readme.txt                            # WP plugin readme
└── docs/
    └── user-guide.md                     # (Optional) User documentation
🧑‍💻 How It Works
Adds a new menu in Tools → WP Health Checker.

Runs multiple system checks using custom PHP classes.

Displays a styled table of results.

Modular architecture allows for easy extension (add your own checks).

🛠️ Adding Your Own Checks
You can easily add custom health checks:

Create a new file: includes/checks/class-check-yourcheck.php

Follow this structure:

php
Copy
Edit
class WPHC_Check_YourCheck {
    public static function run() {
        return [
            'label' => 'Custom Check',
            'status' => 'pass', // or 'fail', 'warning'
            'message' => 'Your check passed!',
        ];
    }
}
Register it in class-health-check-core.php like this:

php
Copy
Edit
require_once WPHC_PATH . 'includes/checks/class-check-yourcheck.php';
$checks[] = WPHC_Check_YourCheck::run();
📋 Status Indicators
Status	Meaning
✅ Pass	All good
❌ Fail	Needs attention
⚠️ Warning	Potential issue (non-critical)

📤 Future Improvements (Ideas)
Email report to site owner or support team

Export health report as .txt, .json, or PDF

Add WP-CLI command for server-side checks

Run scheduled checks with cron

Detect plugin conflicts, orphaned options, etc.

🙌 Credits
Developed by: https://github.com/faisalahammed044274
License: GPL v2 or later


