<?php
// قم بتعريف مصفوفة تحتوي على الروابط المختلفة
$links = array(
    "https://example.com/link1",
    "https://example.com/link2",
    "https://example.com/link3"
);

// اختر رابط عشوائي من المصفوفة
$randomLink = $links[array_rand($links)];

// قم بتوجيه المستخدم إلى الرابط المختار
header("Location: " . $randomLink);
exit;
?>
