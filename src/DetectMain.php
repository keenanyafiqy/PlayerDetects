<?php

declare(strict_types=1);

namespace keenanyafiqy\PlayerDetects;

 /*
 * Plugin base for run the plugin
 */

use pocketmine\plugin\PluginBase;

 /*
 * Entities and Events
 */

use pocketmine\player\Player;
use pocketmine\entity\Entity;
use pocketmine\event\Event;

 /*
 * List all class player
 */

use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\event\player\PlayerBedLeaveEvent;
use pocketmine\event\player\PlayerBlockPickEvent;
use pocketmine\event\player\PlayerBucketEmptyEvent;
use pocketmine\event\player\PlayerBucketFillEvent;
use pocketmine\event\player\PlayerChangeSkinEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\player\PlayerCreationEvent;
use pocketmine\event\player\PlayerDataSaveEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerDisplayNameChangeEvent;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerDuplicateLoginEvent;
use pocketmine\event\player\PlayerEditBookEvent;
use pocketmine\event\player\PlayerEmoteEvent;
use pocketmine\event\player\PlayerEntityInteractEvent;
use pocketmine\event\player\PlayerEvent;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\event\player\PlayerExperienceChangeEvent;
use pocketmine\event\player\PlayerGameModeChangeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\player\PlayerItemUseEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerJumpEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerToogleFlighEvent;
use pocketmine\event\player\PlayerToogleSneakEvent;
use pocketmine\event\player\PlayerToogleSprintEvent;
use pocketmine\event\player\PlayerTransferEvent;

 /*
 * Events listener
 */

use pocketmine\event\Listener

class DetectMain extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info("Plugin has been enabled. You'll now notified when some players interacting something.")
        $this->getServer()->getPluginManager()->registerEvents($this, $this)
    }
    
    public function onDisable(): void
    {
        $this->getLogger()->info("Plugin has been disabled. You will not been notified when some players interacting something.")
    }
    
    public function onPlayerSleep(PlayerBedEnterEvent $event): void
    {
        $playername = $evt->getPlayer()->getName()
        $this->getLogger()->info($playername . " is now sleeped!")
    }
}
