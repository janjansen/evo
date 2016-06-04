<?php
/**
 * Created by PhpStorm.
 * User: ROSomkin
 * Date: 08.06.2016
 * Time: 12:56
 */
use Evo\Creature\Creature;
use Evo\Environment;
use Evo\SpeciesBuilder;

require_once 'vendor/autoload.php';

$env = new Environment();
$builder = new SpeciesBuilder();
for($i = 0; $i < 100; $i++) {
    $species = $builder->createNewSpecies();
    for ($j = 0; $j < 100; $j++) {
        $creature = new Creature();
        $creature->setSpecies($species);
        $env->addCreature($creature);
    }
}

var_dump(count($env->getCreatures()));