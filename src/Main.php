<?php

namespace skyss0fly\ChatHijacker;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class Main extends PluginBase implements Listener {

public function onLoad(): void {
$this->savedefaultconfig();
}

public function onCommand(CommandSender $sender, string $bool, array $args): bool {
$message = $this->getConfig()->get("Message");
$value = $this->getConfig()->get("Enabled");
  if ($value) {
  $value->file_set_contents("False");
  $sender->sendMessage("Disabled ChatHijacker");
  
}
  else {
$value->file_set_contents("True");
  $sender->sendMessage("Enabled ChatHijacker");
  
  }
  
}

  
public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $message = $event->getMessage();
  $lol = $this->getConfig()->get("Message");
    $l = $this->getConfig()->get("Enabled");
  if($l) {
       $hijacked_message = str_replace($lol, $message);
                        $event->setMessage($hijacked_message);

}
  else{
case: "none"
  // nothing lol
  }
}

}
