<?php

namespace Container3NLUxuZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XIu3t4PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XIu3t4P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XIu3t4P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorRepository' => ['privates', 'App\\Repository\\EntrepriseRepository', 'getEntrepriseRepositoryService', true],
        ], [
            'authorRepository' => 'App\\Repository\\EntrepriseRepository',
        ]);
    }
}
