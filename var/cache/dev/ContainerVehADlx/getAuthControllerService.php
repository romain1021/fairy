<?php

namespace ContainerVehADlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthController' shared autowired service.
     *
     * @return \App\Controller\AuthController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Controller\\AuthController'] = new \App\Controller\AuthController();
    }
}
