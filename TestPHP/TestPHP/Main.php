<?php

namespace TestPHP:

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getLogger()->info("Plugin successfully enabled.");
	}

	public function onDisable(){
		$this->getLogger->info("Plugin disabled.");
	}
}