<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Webservices.Helloworld
 *
 * @copyright   (C) 2024 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;

return static function () {
    $dispatcher = Factory::getContainer()->get(\Joomla\Event\DispatcherInterface::class);
    
    $plugin = new \Joomla\Plugin\Webservices\Helloworld\Extension\Helloworld(
        $dispatcher,
        (array) PluginHelper::getPlugin('webservices', 'helloworld')
    );

    return $plugin;
};
