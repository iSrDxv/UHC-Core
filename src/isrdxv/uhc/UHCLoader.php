<?php

namespace isrdxv\uhc;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class UHCLoader extends PluginBase
{
    const PREFIX = "&8[&eUHC&c-&bCore&8]";

    use SingletonTrait;

    public function onLoad(): void
    {
        //self::setInstance($this);
    }

    public function onEnable(): void
    {

    }
}