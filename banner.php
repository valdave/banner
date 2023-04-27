<?php
declare(strict_types=1);

include __DIR__ . '/src/banner.php';
include __DIR__ . '/src/statisticService.php';

$ip        = $_SERVER['REMOTE_ADDR'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$pageUrl   = $_SERVER['HTTP_REFERER'] ?? '';

if(isset($_SERVER['HTTP_REFERER']) && str_contains($_SERVER['HTTP_REFERER'], 'index')){
    src_StatisticService::handle($ip, $userAgent, $pageUrl);
    src_Banner::show();
}
