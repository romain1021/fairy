<?php

namespace ContainerVehADlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CachePoolPrune_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.cache_pool_prune.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.cache_pool_prune.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:pool:prune', [], 'Prune cache pools', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand {
            return ($container->privates['console.command.cache_pool_prune'] ?? $container->load('getConsole_Command_CachePoolPruneService'));
        });
    }
}
