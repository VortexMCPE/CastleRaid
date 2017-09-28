<?php

namespace AlwaysSpawn;

use pocketmine\plugin\PluginBase;

class AlwaysSpawn extends PluginBase{

          public function onLoad(){
                    $this->getLogger()->info("Boiii we loading!");
          }
          public function onEnable(){
                    $this->getLogger()->info("Boiiii we loaded!");
          }
          public function onDisable(){
                    $this->getLogger()->info("Why you disable meh!");
          }
