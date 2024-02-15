<?php

$links = array(
    'link1' => 'https://example.com/page1',
    'link2' => 'https://example.com/page2',
    'link3' => 'https://example.com/page3'
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
