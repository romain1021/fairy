<?php

namespace ContainerUOCtKQt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->getCache_AppService()), 'cache.system' => ($container->services['cache.system'] ?? $container->getCache_SystemService()), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->getCache_ValidatorService()), 'cache.serializer' => ($container->privates['cache.serializer'] ?? $container->getCache_SerializerService()), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->getCache_PropertyInfoService()), 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? $container->getCache_Messenger_RestartWorkersSignalService()), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->getCache_ValidatorExpressionLanguageService()), 'cache.doctrine.orm.default.result' => ($container->privates['cache.doctrine.orm.default.result'] ?? $container->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($container->privates['cache.doctrine.orm.default.query'] ?? $container->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->getCache_SecurityExpressionLanguageService())]);
    }
}
