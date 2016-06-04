<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:08
 */

namespace Evo\Species;

use Evo\Feature\IFeature;

interface ISpecies
{
    public function addFeature(IFeature $feature);
    public function getFeatures();
    
}