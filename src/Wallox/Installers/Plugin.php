<?php

namespace Wallox\Installers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{

    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OxwallInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
