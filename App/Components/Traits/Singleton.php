<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 15.10.2017
 * Time: 10:49
 */

namespace IhorRadchenko\App\Components\Traits;

/**
 * Traits Singleton
 * @package App
 * Шаблон синглтон предназначен для запрета создания
 * более одного объекта класса (private __construct() && private __clone())
 */
trait Singleton
{
    /**
     * @var static Хранит объект класса
     */
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * Если объект класса еще не создан - создает его иначе возвращает объект
     * @return static
     */
    public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}