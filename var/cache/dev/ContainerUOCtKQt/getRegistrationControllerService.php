<?php

namespace ContainerUOCtKQt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegistrationController.php';

        $container->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\RegistrationController', $container));

        return $instance;
    }
}
