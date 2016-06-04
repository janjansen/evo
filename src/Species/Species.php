<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:09
 */

namespace Evo\Species;

use Evo\Feature\BattleStrategy;
use Evo\Feature\IFeature;

/**
 * Class Species
 * @package Evo\Species
 */
class Species implements ISpecies
{
    /**
     * @var array
     */
    protected $features = [];

    /**
     * @var int
     */
    protected $mixLifeEnergy = null;

    /**
     * @var
     */
    protected $battleStrategy;

    /**
     * @param IFeature $feature
     */
    public function addFeature(IFeature $feature)
    {
        $this->features[] = $feature;
        
        if ($feature instanceof BattleStrategy) {
            $this->battleStrategy = $feature;
        }
    }

    /**
     * @return BattleStrategy
     */
    public function getBattleStrategy()
    {
        return $this->battleStrategy;
    }

    /**
     * @return IFeature[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    public function getHash()
    {
        $hash = '';
        foreach ($this->getFeatures() as $f) {
            $hash .= $f->getName() . ':';
        }
        return $hash;
    }
    
    public function getPower()
    {
        $power = 0;
        foreach ($this->getFeatures() as $f) {
            $power .= $f->getBattlePower();
        }
        return $power;
    }

    public function getMiniEnergyForLife()
    {
        if (is_null($this->mixLifeEnergy)) {
            foreach ($this->getFeatures() as $f) {
                $this->mixLifeEnergy += $f->getCost();
            }
        }


        return $this->mixLifeEnergy;
    }
}