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

        // Skapa en route som använder com_content's struktur
        $route = new Route(
            ['GET'],
            'v1/helloworld/ping',
            'articles.displayList', // Använd befintlig controller
            [],
            ['component' => 'com_content', 'view' => 'articles']
        );

        $router->addRoute($route);
    }
}
