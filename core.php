<?php
if (!defined('IN_SYS')) {
    // exit('禁止访问');
    header("Location: index.php");
    exit;
}
$ROOT = __DIR__;

$rooturl = $_SERVER['HTTP_HOST'];
$domain = preg_replace('/^www\./', '', $rooturl);

$static_release = '1559728996134';
$brandName = "UIISC";
$iFastNetAff = 19474;
$CopyRightYear = "2013 - " . date("Y");
$title = "UIISC";
$title_s = "UIISC";
$author = 'Crogram Inc.';
$description = "uiisc, freewebhost, webhost, Crogram, iFastNet";
$google_site_verification = "5O6Wxt0gIyGb7btMuXiQqddZJ516n-xBOW_9RLMBeSY";

include_once "{$ROOT}/lib/language.php";
