<?php

namespace skyss0fly\ChatHijacker;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

public function onLoad(): void {
$this->savedefaultconfig();
}

public function onCommand(CommandSender $sender, string $bool, array $args): bool {
$message = $this->getConfig()->get("Message");

}

}
