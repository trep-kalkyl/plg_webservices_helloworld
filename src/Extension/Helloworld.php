<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  WebServices.Helloworld
 *
 * @copyright   (C) 2023 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Plugin\WebServices\Helloworld\Extension;

\defined('_JEXEC') or die;

use Joomla\CMS\Event\WebServices\BeforeApiRouteEvent;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Event\SubscriberInterface;

/**
 * Web Services adapter for Helloworld.
 *
 * @since  1.0.0
 */
final class Helloworld extends CMSPlugin implements SubscriberInterface
{
    /**
     * Returns an array of events this subscriber will listen to.
     *
     * @return  array
     *
     * @since   1.0.0
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onBeforeApiRoute' => 'onBeforeApiRoute',
        ];
    }

    /**
     * Registers the helloworld routes with the API router
     *
     * @param   BeforeApiRouteEvent  $event  The event object
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function onBeforeApiRoute(BeforeApiRouteEvent $event): void
    {
        $router = $event->getApiRouter();

        $router->get(
            'helloworld/ping',
            function () {
                return ['hello' => 'world'];
            }
        );
    }
}