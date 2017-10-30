<?php

namespace CRcore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\math\Vector3;

use CRcore\Main;

class EventListener implements Listener {
		
		private $plugin;
		
		public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }
		
		public function onRespawn(PlayerRespawnEvent $event) {
				$player = $event->getPlayer();
        $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
		}
		
		public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        if ($player->isAuthenicated) {
            $player->addTitle("§aCastle§l§2Raid, "§7Welcome!", 30, 5*20, 30);
            $this->getServer()->getLogger()->notice("Told you. Narwhals always win.");
        }
    }
}
