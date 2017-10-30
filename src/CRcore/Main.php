
<?php
namespace DIErespawnCR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Scheduler;

use CRcore\auth\Auth;
use CRcore\EventListener;

class Main extends PluginBase {
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->getServer()->getLogger()->info("DIErespawnCR Enabled!");
    }
    public function onDisable() {
        $this->getServer()->getLogger()->info("DIErespawnCR Disabled!");
    }
    
}
