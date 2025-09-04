<?php

namespace TrepKalkyl\Plugin\Webservices\Helloworld\Extension;

\defined('_JEXEC') or die;

use Joomla\CMS\Event\Application\BeforeApiRouteEvent;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Response\JsonResponse;
use Joomla\Event\SubscriberInterface;
use Joomla\Router\Route;

final class Helloworld extends CMSPlugin implements SubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        // DEBUG 5: SUCCESS!
        // die('DEBUG: getSubscribedEvents() is called.');

        return [
            'onBeforeApiRoute' => 'onBeforeApiRoute',
        ];
    }

    public function onBeforeApiRoute(BeforeApiRouteEvent $event): void
    {
        // DEBUG 6: SUCCESS!
        // die('DEBUG: onBeforeApiRoute() is called.');

        $router = $event->getRouter();

        $route = new Route(
            ['GET'],
            'v1/helloworld/ping',
            'helloworld.ping',
            [],
            ['public' => true]
        );

        $router->addRoute($route);

        // DEBUG 7: SUCCESS!
        // die('DEBUG: Route has been added.');
    }

    public function ping(): JsonResponse
    {
        return new JsonResponse(['hello' => 'world']);
    }
}
