<?php
    // Function to get the user's IP address
    function getUserIP() {
        // Get the client IP address
        $ip_address = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ip_address = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        } else {
            $ip_address = 'UNKNOWN';
        }
        return $ip_address;
    }

    // Function to get the country based on IP address
    function getCountryFromIP($ip) {
        $url = 'https://api.ipgeolocation.io/ipgeo?apiKey=YOUR_API_KEY&ip=' . $ip;
        $data = file_get_contents($url);
        $result = json_decode($data, true);
        return $result['country_code2'];
    }

    // Get the user's IP address
    $user_ip = getUserIP();

    // Get the country code based on IP address
    $country_code = getCountryFromIP($user_ip);

    // Check if the country code is Greece (GR) or Cyprus (CY)
    if ($country_code == "GR" || $country_code == "CY") {
        header("Location: greek.html"); // Redirect to Greek page
        exit();
    } else {
        header("Location: index.html"); // Redirect to English page
        exit();
    }
?>
