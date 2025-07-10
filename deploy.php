<?php
$secret = 'e9f1b2c93d1a4567e93cb2a97c4fd9d512a1e6ff347aa9b3d9e5c45b7d05a0cb';

// Get headers
$headers = getallheaders();
$signature = $headers['X-Hub-Signature-256'] ?? '';
$payload = file_get_contents('php://input');

// Validate signature
if ($signature && hash_equals('sha256=' . hash_hmac('sha256', $payload, $secret), $signature)) {
    // Pull latest changes
    $output = shell_exec('cd /var/www/vhosts/yogeshdarge.com/httpdocs && git pull 2>&1');
    echo "Success:\n" . $output;
} else {
    http_response_code(403);
    echo "Forbidden";
}