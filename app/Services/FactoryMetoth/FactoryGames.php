<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/05/16
 * Time: 1:20
 */

namespace App\Services;


abstract class FactoryGames
{

    abstract protected function createGame();

    public function create()
    {
        $obj = $this->createGame();

        return $obj;
    }
}