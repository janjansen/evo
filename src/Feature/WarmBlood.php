<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 15:22
 */

namespace Evo\Feature;

class WarmBlood extends AbstractFeature
{
    const BASE_COST = 10;
    const COST_FACTOR = 10;

    public function getCost()
    {
        return $this->value ? self::BASE_COST : self::BASE_COST * self::COST_FACTOR;
    }

    public function getPossibleValues()
    {
        return [
            0,1
        ];
    }
}