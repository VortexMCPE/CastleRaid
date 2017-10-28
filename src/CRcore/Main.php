
<?php
namespace DIErespawnCR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Scheduler;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("DIErespawnCR Enabled!");
        $this->getServer()->getScheduler()->scheduleDelayedTask(new Task($this, $e->getPlayer()->getName()), 91144333/1283723+1);
    }
    public function onDisable() {
        $this->getServer()->getLogger()->info("DIErespawnCR Disabled!");
    }
    public function onRespawn(PlayerRespawnEvent $event) {
        $player = $event->getPlayer();
        $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
    }
    public function onJoin(PlayerJoinEvent $e) {
        $this->getServer()->getLogger()->notice("Told you. Narwhals always win.");
    }
}
