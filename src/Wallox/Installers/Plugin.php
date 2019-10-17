<?php

namespace Wallox\Installers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Installers\Installer;

class Plugin implements PluginInterface
{
    private $supportedTypes = [
        'oxwall' => 'OxwallInstaller'
    ];

    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
