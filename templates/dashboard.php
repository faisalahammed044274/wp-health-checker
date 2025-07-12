<?php
if (!defined('ABSPATH')) exit;

$results = WPHC_Core::get_checks();
?>

<div class="wrap">
    <h1>WP Health Checker</h1>
    <table class="widefat fixed striped">
        <thead>
            <tr>
                <th>Check</th>
                <th>Status</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $check): ?>
                <tr>
                    <td><?php echo esc_html($check['label']); ?></td>
                    <td>
                        <?php
                            $color = $check['status'] === 'pass' ? 'green' :
                                     ($check['status'] === 'fail' ? 'red' : 'orange');
                            echo '<strong style="color:' . esc_attr($color) . '">' . strtoupper($check['status']) . '</strong>';
                        ?>
                    </td>
                    <td><?php echo esc_html($check['message']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
