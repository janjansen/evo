<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:22
 */

namespace Evo;

use Evo\Creature\ICreature;

class Environment
{
    protected $creatures = [];

    /**
     * @return mixed
     */
    public function getCreatures()
    {
        return $this->creatures;
    }

    /**
     * @param ICreature $creatures
     */
    public function addCreature(ICreature $creatures)
    {
        $this->creatures[] = $creatures;
    }


}