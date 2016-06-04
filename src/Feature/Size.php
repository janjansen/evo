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
    const BACTERIUM = 'BACTERIUM';
    const ANT = 'ANT';
    const MOUSE = 'MOUSE';
    const CAT = 'CAT';
    const COW = 'COW';
    const ELEPHANT = 'ELEPHANT';

    public function getCost()
    {
        switch (true) {
            case $this->getValue() == self::BACTERIUM :
                return 1;
            case $this->getValue() == self::ANT :
                return 10;
            case $this->getValue() == self::MOUSE :
                return 100;
            case $this->getValue() == self::CAT :
                return 100;
            case $this->getValue() == self::COW :
                return 1000;
            case $this->getValue() == self::ELEPHANT :
                return 10000;
        }
    }

    public function getPossibleValues()
    {
        return [
            self::BACTERIUM,
            self::ANT,
            self::MOUSE,
            self::CAT,
            self::COW,
            self::ELEPHANT,
        ];
    }

    public function getBattlePower()
    {
        switch (true) {
            case $this->getValue() == self::BACTERIUM :
                return 1;
            case $this->getValue() == self::ANT :
                return 10;
            case $this->getValue() == self::MOUSE :
                return 100;
            case $this->getValue() == self::CAT :
                return 100;
            case $this->getValue() == self::COW :
                return 1000;
            case $this->getValue() == self::ELEPHANT :
                return 10000;
        }
    }
}