
<?php

namespace AlwaysSpawn;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;

class Loader extends Plugin implements Listener{
  
  
          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
  
  public function onPlayerLogin(PlayerLoginEvent $event){
    $player = $event->getPlayer();
    $x = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getX();
    $y = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getY();
    $z = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getZ();
    $player->setLevel($level);
    }
  }
