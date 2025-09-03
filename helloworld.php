<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Router\ApiRouter;

class PlgWebservicesHelloworld extends CMSPlugin
{
    public function onBeforeApiRoute(ApiRouter $router)
    {
        $router->get(
            'helloworld/ping',
            function () {
                return ['hello' => 'world'];
            }
        );
    }
}
