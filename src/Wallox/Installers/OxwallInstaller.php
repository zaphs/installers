<?php
namespace Wallox\Installers;

use Composer\Installers\BaseInstaller;

class OxwallInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'ow_plugins/{$name}/',
        'theme'     => 'ow_themes/{$name}/',
    );
}
