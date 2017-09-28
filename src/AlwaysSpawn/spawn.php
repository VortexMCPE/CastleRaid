<?php

namespace AlwaysSpawn;

use pocketmine\plugin\PluginBase;

class AlwaysSpawn extends PluginBase{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
