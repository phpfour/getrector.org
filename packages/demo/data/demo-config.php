<?php

use Rector\Core\Configuration\Option;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $services = $containerConfigurator->services();

    // A. run whole set
    $parameters->set(Option::SETS, [SetList::DEAD_CODE]);

    // B. or single rule
    $services->set(TypedPropertyRector::class);
};
