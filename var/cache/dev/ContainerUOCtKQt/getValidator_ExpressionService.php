<?php

namespace ContainerUOCtKQt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_ExpressionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';

        return $container->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator(new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(($container->services['cache.validator_expression_language'] ?? $container->getCache_ValidatorExpressionLanguageService())));
    }
}
