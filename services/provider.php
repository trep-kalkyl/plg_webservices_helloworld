<?php

\defined('_JEXEC') or die;

// DEBUG 1: SUCCESS!
// die('DEBUG: provider.php is loaded.');

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use TrepKalkyl\Plugin\Webservices\Helloworld\Extension\Helloworld;

return new class () implements ServiceProviderInterface {
    public function register(Container $container): void
    {
        // DEBUG 2: SUCCESS!
        // die('DEBUG: register() method in provider.php is called.');

        $container->set(
            PluginInterface::class,
            function (Container $container) {
                // DEBUG 3: SUCCESS!
                // die('DEBUG: Helloworld object creation is attempted.');

                $plugin = new Helloworld(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('webservices', 'helloworld')
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};
