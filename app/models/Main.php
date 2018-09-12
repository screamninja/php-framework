<?php

namespace PFW\Models;

use PFW\Core\Model;
use PFW\Lib\Db;

/**
 * Class Main
 * @package PFW\Models
 */
class Main extends Model
{

    /**
     * @return array
     */
    public function showNews(): array
    {
        $db = Db::init();
        $result = $db->row('SELECT title, text FROM news');
        return $result;
    }
}
