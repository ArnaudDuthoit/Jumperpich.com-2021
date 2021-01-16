<?php

namespace ContainerFKvzxce;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKg8acoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKg8aco' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKg8aco'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.t2eG6kD', 'get_ServiceLocator_T2eG6kDService', true],
            'App\\Controller\\ProjetController::download' => ['privates', '.service_locator.BkMzPbZ', 'get_ServiceLocator_BkMzPbZService', true],
            'App\\Controller\\ProjetController::index' => ['privates', '.service_locator.X2L5oc4', 'get_ServiceLocator_X2L5oc4Service', true],
            'App\\Controller\\ProjetController::show' => ['privates', '.service_locator.CGJ3eQ2', 'get_ServiceLocator_CGJ3eQ2Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::deleteUser' => ['privates', '.service_locator.px2rAP.', 'get_ServiceLocator_Px2rAP_Service', true],
            'App\\Controller\\UserController::editInfo' => ['privates', '.service_locator.px2rAP.', 'get_ServiceLocator_Px2rAP_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.t2eG6kD', 'get_ServiceLocator_T2eG6kDService', true],
            'App\\Controller\\ProjetController:download' => ['privates', '.service_locator.BkMzPbZ', 'get_ServiceLocator_BkMzPbZService', true],
            'App\\Controller\\ProjetController:index' => ['privates', '.service_locator.X2L5oc4', 'get_ServiceLocator_X2L5oc4Service', true],
            'App\\Controller\\ProjetController:show' => ['privates', '.service_locator.CGJ3eQ2', 'get_ServiceLocator_CGJ3eQ2Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:deleteUser' => ['privates', '.service_locator.px2rAP.', 'get_ServiceLocator_Px2rAP_Service', true],
            'App\\Controller\\UserController:editInfo' => ['privates', '.service_locator.px2rAP.', 'get_ServiceLocator_Px2rAP_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProjetController::download' => '?',
            'App\\Controller\\ProjetController::index' => '?',
            'App\\Controller\\ProjetController::show' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::deleteUser' => '?',
            'App\\Controller\\UserController::editInfo' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProjetController:download' => '?',
            'App\\Controller\\ProjetController:index' => '?',
            'App\\Controller\\ProjetController:show' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:deleteUser' => '?',
            'App\\Controller\\UserController:editInfo' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}