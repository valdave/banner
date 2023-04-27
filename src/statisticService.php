<?php
declare(strict_types=1);

include __DIR__ . '/connection.php';

class src_StatisticService {
    /**
     * Coolect statistic of banner views
     *
     * @param $ip string
     * @param $userAgent string
     * @param $pageUrl string
     * @return void
     */
    public static function handle(string $ip, string $userAgent, string $pageUrl): void {
        $connection = src_Connection::get();

        $sql = 'INSERT INTO banner_show_stat (ip_address, user_agent, page_url, views_count)
            VALUES (:ip, :userAgent, :pageUrl, 1) ON DUPLICATE KEY UPDATE
           views_count = views_count + 1';

        $sth = $connection->prepare($sql);
        $sth->execute(['ip' => $ip, 'userAgent' => $userAgent, 'pageUrl' => $pageUrl]);
    }
}