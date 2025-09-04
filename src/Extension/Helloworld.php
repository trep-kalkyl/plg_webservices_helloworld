<?php

namespace Joomla\Plugin\WebServices\Helloworld\Extension;

use Joomla\CMS\Event\Application\BeforeApiRouteEvent;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Event\SubscriberInterface;
use Joomla\Router\Route;

\defined('_JEXEC') or die;

final class Helloworld extends CMSPlugin implements SubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onBeforeApiRoute' => 'onBeforeApiRoute',
        ];
    }

    public function onBeforeApiRoute(BeforeApiRouteEvent $event): void
    {
        $router = $event->getRouter();

        // Registrera controllern först
        $router->addNamespace('Joomla\\Plugin\\WebServices\\Helloworld\\Controller', JPATH_PLUGINS . '/webservices/helloworld/src/Controller');
        
        // Skapa route som pekar på din controller
        $route = new Route(
            ['GET'],
            'v1/helloworld/ping',
            'helloworld.ping',
            [],
            ['component' => 'com_plugins'] // Använd com_plugins som komponent
        );

        $router->addRoute($route);
    }
}
