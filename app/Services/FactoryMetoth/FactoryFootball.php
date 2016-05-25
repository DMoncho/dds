<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/05/16
 * Time: 1:27
 */

namespace App\Services;


class FactoryFootball extends FactoryGames
{

    protected function createGame()
    {
        return new FootballGame();
    }
}