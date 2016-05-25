<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/05/16
 * Time: 2:28
 */

namespace App\Services;


class BetsGroup extends BetElement
{
    protected $bets;

    public function calcularCuota($cuota)
    {
        $cuotaAcumulada=0;
        foreach ($this->bets as $bet) {
            $cuotaAcumulada = $cuotaAcumulada + $bet->calcularCuota($cuota);
        }
        return $cuotaAcumulada;
    }

    public function addBet(BetElement $bet)
    {
        $this->bets[] = $bet;
    }
}