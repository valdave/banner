<?php
declare(strict_types=1);

class src_Banner {
    /**
     * @param $image string image path to show
     * @return void
     */
    public static function show(string $image = 'images/default.jpg'): void
    {
        header('Content-type: image/jpg');

        echo file_get_contents($image);
        exit;
    }
}