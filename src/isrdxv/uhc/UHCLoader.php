<?php

namespace isrdxv\uhc;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\{
    SingletonTrait,
    TextFormat
};

use isrdxv\uhc\task\TaskManager;

class UHCLoader extends PluginBase
{
    const PREFIX = "&8[&eUHC&c-&bCore&8]";

    use SingletonTrait;

    private TaskManager $taskManager;

    function onLoad(): void
    {
        self::setInstance($this);
        $this->taskManager = new TaskManager($this);
        $this->saveDefaultConfig();
        $this->getServer()->getNetwork()->setName($this->getConfig()->get("server-motd"));
    }

    function onEnable(): void
    {
        $this->getLogger()->notice("==========================");
        $this->getLogger()->notice("Plugin created by: " . implode(",", $this->getDescription()->getAuthors()));
        $this->getLogger()->notice("Version of plugin: " . $this->getDescription()->getVersion());
        $this->getLogger()->notice("Description: " . $this->getDescription()->getDescription());
        $this->getLogger()->notice("Prefix: " . $this->getDescription()->getPrefix());
        $this->getLogger()->notice("API: " . implode(" ", $this->getDescription()->getCompatibleApis()));
        $this->getLogger()->notice("==========================");
    }

    function onDisable(): void
    {
        $this->getLogger()->notice("==========================");
        $this->getLogger()->notice("Plugin DIsabled!!");
        $this->getLogger()->notice("==========================");
    }

    function getTaskManager(): TaskManager
    {
        return $this->taskManager;
    }
}