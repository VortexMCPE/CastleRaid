
<?php
namespace DIErespawnCR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Scheduler;

use CRcore\auth\Auth;
use CRcore\listener\EventListener;

class Main extends PluginBase {
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->getServer()->getLogger()->info("DIErespawnCR Enabled!");
    }
    public function onDisable() {
        $this->getServer()->getLogger()->info("DIErespawnCR Disabled!");
    }
    public function onRespawn(PlayerRespawnEvent $event) {
        $player = $event->getPlayer();
        $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
    }
    public function onJoin(PlayerJoinEvent $e) {
        $player = $e->getPlayer();
        if ($player->isAuthenicated) {
            $player->addTitle("§aCastle§l§2Raid, "§7Welcome!", 30, 5*20, 30);
            $this->getServer()->getLogger()->notice("Told you. Narwhals always win.");
        }
    }
}
