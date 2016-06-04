<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:25
 */

namespace Evo;

use Evo\Creature\Creature;

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
        $this->kill();
        $this->reproduct();
    }

    protected function runBattles()
    {
        $creatures = $this->universe->getCreatures();
        foreach ($creatures as $k => $creature) {
            for($i = 0; $i<10; $i++) {
                $battle = new Battle($creature, $creatures);
                $battle->run();
            }
        }
    }

    protected function reproduct()
    {
        $newCreatures = [];
        foreach ($this->universe->getCreatures() as $oldCreature) {
            $energy = $oldCreature->getEnergy();
            $oldCreature->decreaseEnergy($energy / 2);
            $newCreature = new Creature();
            $newCreature->setSpecies($oldCreature->getSpecies());
            $newCreature->setEnergy($energy - $oldCreature->getEnergy());
            $newCreatures[] = $newCreature;
        }

        $this->universe->setCreatures(array_merge($this->universe->getCreatures(), $newCreatures));
    }

    protected function kill()
    {
        $creatures = [];
        foreach ($this->universe->getCreatures() as $creature) {
            $creature->decreaseEnergy($creature->getSpecies()->getMiniEnergyForLife());
            if ($creature->getSpecies()->getMiniEnergyForLife() < $creature->getEnergy()) {
                $creatures[] = $creature;
            }
        }

        $this->universe->setCreatures($creatures);
    }
}