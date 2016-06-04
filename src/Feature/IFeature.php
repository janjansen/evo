<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 13:26
 */

namespace Evo\Feature;

interface IFeature
{
    public function getCost();
    public function getValue();
    public function setValue($value);
    public function getPossibleValues();
    public function getName();
    public function getBattlePower();
}