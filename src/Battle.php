<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:43
 */

namespace Evo;

use Evo\Creature\Creature;

class Battle
{
    protected $attacker;
    protected $defender;

    public function __construct(Creature $creature, $pool)
    {
        $this->attacker = $creature;
        $this->defender = $pool[mt_rand(0, count($pool) - 1)];
    }

    public function run()
    {

    }
}