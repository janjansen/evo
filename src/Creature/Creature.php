<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:18
 */

namespace Evo\Creature;

use Evo\Species\ISpecies;

class Creature implements ICreature
{
    protected $species;

    public function setSpecies(ISpecies $species)
    {
        $this->species = $species;
    }

    public function getSpecies()
    {
        return $this->species;
    }
}