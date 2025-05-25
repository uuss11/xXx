<?php
$targetDir = "uploads/";
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$title = htmlspecialchars($_POST['title']);
$videoFile = $_FILES['video'];

$targetFile = $targetDir . basename($videoFile["name"]);

if (move_uploaded_file($videoFile["tmp_name"], $targetFile)) {
    echo "تم رفع الفيديو بنجاح: " . $title . "<br>";
    echo "<video src='$targetFile' controls width='400'></video>";
} else {
    echo "حدث خطأ أثناء رفع الفيديو.";
}
?>
