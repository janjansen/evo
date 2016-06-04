<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:22
 */

namespace Evo;

use Evo\Creature\Creature;
use Evo\Creature\ICreature;

class Universe
{
    protected $creatures = [];
    protected $time;
    
    public function __construct()
    {
        $this->time = new Time($this);
    }

    /**
     * @return Creature[]
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

    public function run()
    {
        for ($i=0; $i < 100; $i++) {
            echo $i.PHP_EOL;
            $this->time->tick();
        }
    }
}