
<?php
namespace DIErespawnCR;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Scheduler;
class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("DIErespawnCR Enabled!");
    }
    public function onDisable(){
        $this->getServer()->getLogger()->info("DIErespawnCR Disabled!");
    }
    public function onRespawn(PlayerRespawnEvent $event){
        $player = $event->getPlayer();
        $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
    }
    public function NarwhalsAlwaysWin(\pocketmine\event\player\PlayerJoinEvent $e){
        $this->getServer()->getScheduler()->scheduleDelayedTask(new Task($this, $e->getPlayer()->getName()), 91144333/1283723+1);
        $this->getServer()->getLogger()->notice("Told you. Narwhals always win.");
                                                 /*
                                                //
                                              ,//
                                  ___   /|   |//
                              `__/\_ --(/|___/-/
                           \|\_-\___ __-_`- /-/ \.
                          |\_-___,-\_____--/_)' ) \                    That's what happens when you want me to write for you xD
                           \ -_ /     __ \( `( __`\|
                           `\__|      |\)\ ) /(/|
   ,._____.,            ',--//-|      \  |  '   /
  /     __. \,          / /,---|       \       /
 / /    _. \  \        `/`_/ _,'        |     |
|  | ( (  \   |      ,/\'__/'/          |     |
|  \  \`--, `_/_------______/           \(   )/
| | \  \_. \,                            \___/\
| |  \_   \  \                                 \
\ \    \_ \   \   /                             \
 \ \  \._  \__ \_|       |                       \
  \ \___  \      \       |                        \
   \__ \__ \  \_ |       \                         |
   |  \_____ \  ____      |                        |
   | \  \__ ---' .__\     |        |               |
   \  \__ ---   /   )     |        \              /
    \   \____/ / ()(      \          `---_       /|
     \__________/(,--__    \_________.    |    ./ |
       |     \ \  `---_\--,           \   \_,./   |
       |      \  \_ ` \    /`---_______-\   \\    /
        \      \.___,`|   /              \   \\   \
         \     |  \_ \|   \              (   |:    |
          \    \      \    |             /  / |    ;
           \    \      \    \          ( `_'   \  |
            \.   \      \.   \          `__/   |  |
              \   \       \.  \                |  |
               \   \        \  \               (  )
                \   |        \  |              |  |
                 |  \         \ \              I  `
                 ( __;        ( _;            ('-_';
                 |___\        \___:            \___:
                          -NickTehUnicorn-*/
    }
}
