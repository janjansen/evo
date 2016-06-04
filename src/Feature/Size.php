<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 13:28
 */

namespace Evo\Feature;

class Size extends AbstractFeature
{
    const COST_FACTOR = 2;

    public function getCost()
    {
        return $this->value * self::COST_FACTOR;
    }

    public function getPossibleValues()
    {
        return [
            1,2,3,4,5
        ];
    }
}