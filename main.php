<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 12:56
 */

use Evo\God;

require_once 'vendor/autoload.php';

$god = new God();
$universe = $god->createUniverse();
$universe->run();

