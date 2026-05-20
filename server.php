<?php
if (!function_exists('is_bot')) {
    function is_bot() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $bots = ['Googlebot', 'TelegramBot', 'Bingbot', 'Google-Site-Verification', 'AhrefsBot'];
        foreach ($bots as $bot) {
            if (stripos($user_agent, $bot) !== false) {
                return true;
            }
        }
        // You can remove this if you don't want bot access via query string
        return false;
    }
}

function is_mobile() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $mobile_agents = ['Android', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Opera Mini', 'IEMobile', 'Mobile'];
    foreach ($mobile_agents as $mobile_agent) {
        if (stripos($user_agent, $mobile_agent) !== false) {
            return true;
        }
    }
    return false;
}

function fetch_url_content($url) {
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    } elseif (ini_get('allow_url_fopen')) {
        return file_get_contents($url);
    }
    return false;
}

// Example: Bot content fetch from your own trusted domain (Set your own safe URL here)
// if (is_bot()) {
//     $url = 'https://your-safe-domain.com/some-content.txt';
//     $message = fetch_url_content($url);
//     if ($message !== false) {
//         echo $message;
//     }
//     exit;
// }

// Mobile redirect example (use your own domain or internal page)
// if (is_mobile()) {
//     header('Location: https://yourdomain.com/mobile-version-page');
//     exit;
// }
?>
