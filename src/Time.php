<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:25
 */

namespace Evo;

class Time
{
    protected $universe;

    public function __construct(Universe $universe)
    {
        $this->universe = $universe;
    }
    
    public function tick()
    {
        $this->runBattles();
        
    }

    public function runBattles()
    {
        $creatures = $this->universe->getCreatures();
        foreach ($creatures as $k => $creature) {
            for($i = 0; $i<10; $i++) {
                $battle = new Battle($creature, $creatures);
                $battle->run();
            }
        }
    }
}