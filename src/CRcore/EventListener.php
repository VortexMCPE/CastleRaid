<?php
declare(strict_types=1);
namespace CRcore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;

class EventListener implements Listener {
	/** @var \CRcore\Main $plugin */
	private $plugin;

	public function __construct(Main $plugin){
		$this->plugin = $plugin;
	}

	public function onRespawn(PlayerRespawnEvent $event){
		$player = $event->getPlayer();
		$player->teleport($this->plugin->getServer()->getDefaultLevel()->getSafeSpawn());
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if($player->isAuthenticated()){
			$player->addTitle("§aCastle§l§2Raid", "§7Welcome!", 30, 5 * 20, 30);
			$this->plugin->getServer()->getLogger()->notice("Told you. Narwhals always win.");
		}
	}
}