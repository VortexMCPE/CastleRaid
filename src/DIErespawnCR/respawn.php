
<?php
namespace DIErespawnCR;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\math\Vector3;
class Loader extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getLogger()->info("DIErespawnCR Enabled!");
    }
  
  public function onDisable(){
    $this->getServer()->getLogger()->info("DIErespawnCR Disabled!");
    }
  
  public function onPlayerLogin(PlayerRespawnEvent $event){
    $player = $event->getPlayer();
    $x = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getX();
    $y = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getY();
    $z = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getZ();
    $player->setLevel($level);
    $player->teleport(new Vector3($x, $y, $z));
    }
  }
