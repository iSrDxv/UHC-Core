<?php
declare(strict_types=1);

namespace isrdxv\uhc\listener;

use isrdxv\uhc\UHCLoader;

use pocketmine\event\Listener;
use pocketmine\event\player\{
    PlayerJoinEvent,
    PlayerRespawnEvent,
    PlayerQuitEvent
};
use pocketmine\utils\TextFormat;

class SessionListener implements LIstener
{

    function onJoin(PlayerJoinEvent $event): void
    {
        $player = $event->getPlayer();
        $event->setJoinMessage(TextFormat::colorize("&0[&a+&0] &a" . $player->getName()));
    }
}