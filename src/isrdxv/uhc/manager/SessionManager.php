<?php

namespace isrdxv\uhc\manager;

use isrdxv\uhc\session\Session;

use pocketmine\player\Player;

class SessionManager
{
    private array $sessions;

    function set(Player $player): void
    {
        if (empty($this->sessions[$player->getName()])) {
            $this->sessions[$player->getName()] = new Session($player);
        }
    }

    function get(Player $player): Session
    {
        return $this->sessions[$player->getName()];
    }

    function all(): array
    {
        return $this->sessions;
    }
}