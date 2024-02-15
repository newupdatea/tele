<?php
// تحديد الصفحات المختلفة هنا
$pages = array(
    'page1' => 'page1.php',
    'page2' => 'page2.php',
    'page3' => 'page3.php'
);

// التحقق من الضغطة التي قام بها المستخدم
if (isset($_GET['page'])) {
    $selectedPage = $_GET['page'];
    if (array_key_exists($selectedPage, $pages)) {
        $redirectPage = $pages[$selectedPage];
        header("Location: $redirectPage");
        exit();
    }
}
?>
