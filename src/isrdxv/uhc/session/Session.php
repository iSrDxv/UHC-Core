<?php

namespace isrdxv\uhc\session;

use pocketmine\player\Player;

class Session
{
    private Player $player;

    function __construct(PLayer $player)
    {
        $this->player = $player;
    }

    function getPlayer(): Player
    {
        return $this->player;
    }
}