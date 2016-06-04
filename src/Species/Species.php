<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:09
 */

namespace Evo\Species;

use Evo\Feature\IFeature;

class Species implements ISpecies
{
    protected $features = [];
    
    public function addFeature(IFeature $feature)
    {
        $this->features[] = $feature;
    }

    public function getFeatures()
    {
        return $this->features;
    }
}