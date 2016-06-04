<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:18
 */

namespace Evo\Creature;

use Evo\Species\ISpecies;
use Evo\Species\Species;

class Creature implements ICreature
{
    protected $species;
    protected $energy = 0;

    /**
     * @return int
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param int $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }

    /**
     * @param int $energy
     */
    public function increaseEnergy($energy)
    {
        $this->energy += $energy;
    }

    /**
     * @param int $energy
     */
    public function decreaseEnergy($energy)
    {
        $this->energy -= $energy;
    }

    public function setSpecies(ISpecies $species)
    {
        $this->species = $species;
    }

    /**
     * @return Species
     */
    public function getSpecies()
    {
        return $this->species;
    }
}