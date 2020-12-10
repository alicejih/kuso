<?php

namespace App\Services;

/**
 * Class InspiringService
 */
class InspiringService
{
    /**
     * @return string
     */
    public function inspire()
    {
        $quotes = [
            '失敗為成功之母。—— 愛迪生',
            '簡潔是最終的精密。—— 李奧納多‧達文西',
            '好的開始是成功的一半。—— 荷拉斯',
            '多聽，少說，接受每一個人的責難， 但是保留你的最後裁決。 —— 莎士比亞',
            '人的差異在於業餘時間。——愛因斯坦',
        ];
        $key = rand(0, 4);
        return $quotes[$key];
    }
}