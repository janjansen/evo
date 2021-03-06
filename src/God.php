<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:18
 */

namespace Evo;

use Evo\Creature\Creature;

class God
{
    public function createUniverse()
    {
        $universe = new Universe();
        $builder = new SpeciesBuilder();
        for($i = 0; $i < 100; $i++) {
            $species = $builder->createNewSpecies();
            for ($j = 0; $j < 10; $j++) {
                $creature = new Creature();
                $creature->setEnergy(mt_rand($species->getMiniEnergyForLife() * 2 ,$species->getMiniEnergyForLife() * 100));
                $creature->setSpecies($species);
                $universe->addCreature($creature);
            }
        }

        return $universe;
    }
}