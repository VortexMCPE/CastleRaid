<?php

namespace CRcore;

use pocketmine\scheduler\PluginTask;
use pocketmine\Player;
use CRcore\Main;

class Task extends PluginTask{

public $playername;

	public function __construct(Main $main, string $playername){
		parent::__construct($main);
		$this->playername = $playername;
	}
	//TITLE STUFF. WRITTEN BY NickTehUnicorn! xD
	public function onRun(int $tick){
	$player = $this->getOwner()->getServer()->getPlayer($this->playername());
		if($player instanceof Player){
			$player->addTitle("§aCastle§l§2Raid, "§7Welcome!", 30, 5*20, 30);
		}
	}
}


