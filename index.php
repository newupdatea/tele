<?php
// تحديد الروابط المختلفة هنا
$links = array(
    'link1' => 'https://example.com/page1',
    'link2' => 'https://example.com/page2',
    'link3' => 'https://example.com/page3'
);

// التحقق من الضغطة التي قام بها المستخدم
if (isset($_GET['link'])) {
    $selectedLink = $_GET['link'];
    if (array_key_exists($selectedLink, $links)) {
        $redirectLink = $links[$selectedLink];
        header("Location: $redirectLink");
        exit();
    }
}
?>
