<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 17:56
 */

namespace Evo\Feature;

class BattleStrategy extends AbstractFeature
{
    const ALWAYS_RUN = 'ALWAYS_RUN';
    const ALWAYS_FIGHT = 'ALWAYS_FIGHT';
    
    public function getCost()
    {
        switch (true) {
            case $this->getValue() == self::ALWAYS_RUN :
            case $this->getValue() == self::ALWAYS_FIGHT :
                return 0;
        }
    }

    public function getPossibleValues()
    {
        return [
            self::ALWAYS_FIGHT,
            self::ALWAYS_RUN,
        ];
    }
}