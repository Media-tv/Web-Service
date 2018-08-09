<?php 
header('Content-Type: application/json');

$foo = new StdClass();
$foo->versioncode = 2;
$foo->versionname = "2.5.6";
$foo->title = "SOFTWARE UPDATE FAILED";
$foo->message = "Urgent new software updates are available for your device. Update your software to the latest version(v2.5.6) to prevent errors from occurring.";
$foo->download_link = "https://github.com/mohamedebrahim96/PlexMedia/raw/master/version/release/app-release.apk";


$json = json_encode($foo);
echo $json;

?> 