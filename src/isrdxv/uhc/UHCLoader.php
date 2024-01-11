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
        self::setInstance($this);
    }

    public function onEnable(): void
    {
        $this->getLogger()->notice("==========================");
        $this->getLogger()->notice("Plugin created by: " . implode(",", $this->getDescription()->getAuthors()));
        $this->getLogger()->notice("Version of plugin: " . $this->getDescription()->getVersion());
        $this->getLogger()->notice("Description: " . $this->getDescription()->getDescription());
        $this->getLogger()->notice("Prefix: " . $this->getDescription()->getPrefix());
        $this->getLogger()->notice("API: " . implode(" ", $this->getDescription()->getCompatibleApis()));
        $this->getLogger()->notice("==========================");
    }
}