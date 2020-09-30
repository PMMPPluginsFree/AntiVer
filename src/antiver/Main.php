<?php

namespace antiver;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandMap;
use pocketmine\{
    Server,
    Player
};

class Main extends PluginBase{
    
    public function onEnable(){
        
        $map = $this->getServer()->getCommandMap();
        $map->unregister($this->getServer()->getCommandMap()->getCommand("about"));
        $this->getLogger()->info("§cGeladen");
        
    }
    
}
