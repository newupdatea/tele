<?php

$links = array(
    'link1' => 'https://t.me/omar4app',
    'link2' => 'https://t.me/omar_tic',
    'link3' => 'https://t.me/whatsap_omar'
);


if (isset($_GET['link'])) {
    $selectedLink = $_GET['link'];
    if (array_key_exists($selectedLink, $links)) {
        $redirectLink = $links[$selectedLink];
        header("Location: $redirectLink");
        exit();
    }
}
?>
