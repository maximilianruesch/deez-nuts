<?php
declare(strict_types=1);

namespace Deez\Nuts;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

class DeezNutsPlugin implements PluginInterface, EventSubscriberInterface
{
    public function activate(Composer $composer, IOInterface $io): void {}

    public function deactivate(Composer $composer, IOInterface $io): void {}

    public function uninstall(Composer $composer, IOInterface $io): void {}

    public static function getSubscribedEvents(): array
    {
        return [
            ScriptEvents::POST_INSTALL_CMD => ["onPostInstall"],
            ScriptEvents::POST_UPDATE_CMD => ["onPostUpdate"],
        ];
    }

    public function onPostInstall(Event $event): void
    {
        $event->getIO()->warning("Installing deez nuts...");
    }

    public function onPostUpdate(Event $event): void
    {
        $event->getIO()->warning("Updating deez nuts...");
    }
}
