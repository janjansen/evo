<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:43
 */

namespace Evo;

use Evo\Creature\Creature;
use Evo\Feature\BattleStrategy;

class Battle
{
    const PRIZE = 1100;
    /**
     * @var Creature
     */
    protected $attacker;

    /**
     * @var Creature
     */
    protected $defender;

    public function __construct(Creature $creature, $pool)
    {
        $this->attacker = $creature;
        $this->defender = $pool[mt_rand(0, count($pool) - 1)];
    }

    public function run()
    {
        $abs = $this->attacker->getSpecies()->getBattleStrategy()->getValue();
        $dbs = $this->defender->getSpecies()->getBattleStrategy()->getValue();
        $amefl = $this->attacker->getSpecies()->getMiniEnergyForLife();
        $dmefl = $this->defender->getSpecies()->getMiniEnergyForLife();

        if ($abs == BattleStrategy::ALWAYS_FIGHT) {
            if ($dbs == BattleStrategy::ALWAYS_RUN) {
                $this->attacker->increaseEnergy($amefl / 2);
                $this->defender->decreaseEnergy($dmefl / 100);
            } else {
                $ap = $this->attacker->getSpecies()->getPower();
                $dp = $this->defender->getSpecies()->getPower();

                $aw = $ap > $dp ? true : $ap == $dp ? mt_rand(0,1) : false;
                if ($aw) {
                    $this->attacker->increaseEnergy($amefl);
                    $this->attacker->decreaseEnergy($dmefl / 2);
                    $this->defender->decreaseEnergy($amefl / 2);
                } else {
                    $this->defender->increaseEnergy($dmefl);
                    $this->defender->decreaseEnergy($amefl / 2);
                    $this->attacker->decreaseEnergy($dmefl / 2);
                }
            }
                        
        } else {
            if ($dbs == BattleStrategy::ALWAYS_FIGHT) {
                $this->defender->increaseEnergy($amefl);
                $this->attacker->decreaseEnergy($amefl / 100);
            } else {
                $this->attacker->decreaseEnergy($dmefl / 100);
                $this->defender->decreaseEnergy($amefl / 100);
            }
        }
    }
}