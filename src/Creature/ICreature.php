<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:17
 */

namespace Evo\Creature;

use Evo\Species\ISpecies;

interface ICreature
{
    public function setSpecies(ISpecies $species);
    public function getSpecies();
}