<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

/**
 * Модель - Событие
 * @package app\models
 */
class Activity extends Model
{
    /**
     * @var string Название события
     */
    public $title;

    /**
     * @var int Дата начала
     */
    public $dayStart;

    /**
     * @var int Дата окончания
     */
    public $dayEnd;

    /**
     * @var int Номер пользователя
     */
    public $userID;

    /**
     * @var string Описание события
     */
    public $description;

    /**
     * @var bool Может ли событие повторяться
     */
    public $repeat = false;

    /**
     * @var bool Могут ли другие события быть в этот день
     */
    public $blocked = true;
}