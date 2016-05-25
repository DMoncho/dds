<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/05/16
 * Time: 2:20
 */

namespace App\Services;


abstract class BetElement
{
    abstract public function calcularCuota($cuota);
}