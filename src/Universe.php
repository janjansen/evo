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
        for ($i=0; $i < 10000; $i++) {
            $this->time->tick();
            $this->dump($i);
        }
    }

    /**
     * @param array $creatures
     */
    public function setCreatures($creatures)
    {
        $this->creatures = $creatures;
    }
    
    private function dump($i)
    {
        if (empty($this->getCreatures())) {
            die();
        }
        $stat = [];
        foreach ($this->getCreatures() as $creature) {
            $hash = $creature->getSpecies()->getHash();
            if(!isset($stat[$hash])) {
                $stat[$hash] = 0;
            }

            $stat[$hash]++;
        }

        echo 'STEP     '.$i.PHP_EOL;
        foreach ($stat as $k=>$v) {
            echo $k.' '.$v.PHP_EOL;
        }
        echo '---------------------'.PHP_EOL;
    }
}