<?php
namespace Vldivn;

class StrtotimeInRus
{
    private $str = null;

    public function __construct(string $dateStr)
    {
        $this->str = mb_strtolower($dateStr, 'UTF-8');
    }

    public function getDateTime() : \DateTime
    {
        $this->replaceMonth();
        $date = new \DateTime();
        $date->setTimestamp(strtotime($this->str));
        return $date;
    }

    private function replaceMonth()
    {
        foreach (self::nativeMonth() as $key => $month) {
            $this->str = str_replace(mb_strtolower($month, 'UTF-8'), $key, $this->str);
        }
    }

    private static function nativeMonth()
    {
        return [
            'January' => 'Января',
            'February' => 'Февраля',
            'March' => 'Марта',
            'April' => 'Апреля',
            'May' => 'Мая',
            'June' => 'Июня',
            'July' => 'Июля',
            'August' => 'Августа',
            'September' => 'Сентября',
            'October' => 'Октября',
            'November' => 'Ноября',
            'December' => 'Декабря',
        ];
    }
}