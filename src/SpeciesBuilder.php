<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 14:41
 */

namespace Evo;

use Evo\Feature\IFeature;
use Evo\Species\Species;

class SpeciesBuilder
{
    /**
     * @return Species
     */
    public function createNewSpecies()
    {
        $species = new Species();
        $species->addFeature($this->createFeature('Evo\Feature\Size'));
        $species->addFeature($this->createFeature('Evo\Feature\WarmBlood'));

        return $species;
    }

    /**
     * @param $class
     * @return IFeature
     */
    protected function createFeature($class)
    {
        $feature = new $class;
        /**
         * @var $feature IFeature
         */
        $feature->setValue(array_rand($feature->getPossibleValues()));

        return $feature;
    }
}