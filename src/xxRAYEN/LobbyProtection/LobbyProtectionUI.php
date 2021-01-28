<?php

namespace xxRAYEN\LobbyProtection;

use pocketmine\plugin\{
	PluginBase,
	Plugin
};
use pocketmine\event\{
	Listener,
	player\PlayerBreakBlockEvent,
	player\PlayerPlaceBlockEvent,
	player\PlayerDropItemEvent
};
use pocketmine\command\{
	Command,
	CommandSender
};
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onBreakPlace(PlayerBreakBlockEvent $event1, PlayerPlaceBlockEvent $event2, PlayerDropItemEvent $event3) {
		$sender1 = $event1->getPlayer();
		$sender2 = $event2->getPlayer();
		$sender3 = $event3->getPlayer();
		if($sender->hasPermission("perm.protection")) {
			$nothing = 0;
		} else {
			$event1->setCancelled();
			$event2->setCancelled();
			$event3->setCancelled();
			$sender1->sendMessage("§7[ §b§lSYSTEm §r§7] §cYou haven't enough permissions for that!");
			$sender2->sendMessage("§7[ §b§lSYSTEm §r§7] §cYou haven't enough permissions for that!");
			$sender3->sendMessage("§7[ §b§lSYSTEm §r§7] §cYou haven't enough permissions for that!");
		}
	}
}