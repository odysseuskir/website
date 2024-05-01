$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($lang == "el" || $lang == "gr" || $lang == "cy") {
    header("Location: greek.html"); // Redirect to Greek page
    exit();
} else {
    header("Location: index.html"); // Redirect to English page
    exit();
}