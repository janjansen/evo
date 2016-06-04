<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 13:27
 */

namespace Evo\Feature;

abstract class AbstractFeature implements IFeature
{
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return 0;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    public function getName()
    {
        return $this->getValue();
        $class = get_called_class();
        $class = explode( '\\', $class );
        $class = end( $class );
        return $class . '_' . $this->getValue();
    }

    public function getBattlePower()
    {
        return 0;
    }
}