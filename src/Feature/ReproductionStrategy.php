<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 09.06.2016
 * Time: 13:43
 */

namespace Evo\Feature;

class ReproductionStrategy extends AbstractFeature
{
    public function getPossibleValues()
    {
        return [
            [10, 100],
            [20, 100],
            [30, 100],
            [40, 100],
            [60, 100],
            [90, 100],
            [10, 70],
            [20, 100],
        ];
    }
}