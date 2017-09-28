<?php

namespace AlwaysSpawn;

use pocketmine\event\player\PlayerDeathEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

class AlwaysSpawn extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");

	}
}
