<?php

namespace Joomla\Plugin\WebServices\Helloworld\Extension;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Event\Application\BeforeApiRouteEvent;
use Joomla\Event\SubscriberInterface;

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
        $router->get(
            'helloworld/ping',
            function () {
                return ['hello' => 'world'];
            }
        );
    }
}
