<?php

/**
 * Основной класс игры
 */
class GameModel
{
    /**Количество ресурсов в начале игры*/
    const START_COUNT_POPULATION = 100; //Численность населения
    const START_COUNT_WHEAT = 2800;     //Бушелей пшеницы
    const START_COUNT_CITY_SIZE = 1000; //Акров земли города

    /**
     * @var bool Активна ли игра
     */
    private $active = false;

    /**
     * @var integer номер раунда(года)
     */
    private $raund;

    /**
     * @var integer текущая численность населения
     */
    private $current_population;

    /**
     * @var integer текущее значение бушелей пшеницы
     */
    private $current_wheat;

    /**
     * @var integer текущий размер города (акров)
     */
    private $current_city_size;

    public function isActive()
    {
        return $this->active;
    }

    public function getCurrentCountsResurses()
    {
        $current_resurses = array($this->current_population, $this->current_wheat, $this->current_city_size);
        return $current_resurses;
    }



}