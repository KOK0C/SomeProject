<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 01.11.2017
 * Time: 18:14
 */

namespace IhorRadchenko\App\Models;

use IhorRadchenko\App\DataBase;
use IhorRadchenko\App\Exceptions\DbException;
use IhorRadchenko\App\Model;

class Photo extends Model
{
    const TABLE = 'photos';

    private $article_id;
    public $file_name;

    public function getPhoto(): string
    {
        return '/public/img/photos/' . $this->file_name;
    }

    /**
     * @param int $id ID статьи
     * @return array Массив объектов Photo
     * @throws DbException
     */
    public static function findForArticle(int $id): array
    {
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE article_id = :id';
        return DataBase::getInstance()->query($sql, self::class, ['id' => $id]);
    }
}