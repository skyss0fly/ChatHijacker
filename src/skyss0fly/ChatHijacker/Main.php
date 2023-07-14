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
  public function onEnable(): void {
$this->getServer()->getPluginManager()->registerEvents($this, $this);

    
  }

public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
  switch ($command->getName()) {
            case "hijack":
$message = $this->getConfig()->get("Message");
$value = $this->getConfig()->get("Enabled");
  if ($value) {
  $this->setfalse();
  $sender->sendMessage("Disabled ChatHijacker");
  
}
  else {
$this->settrue();
  $sender->sendMessage("Enabled ChatHijacker");
  
  }
  
}
  return true;
}

  
public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $chat = $event->getMessage();
  $lol = $this->getConfig()->get("Message");
    $l = $this->getConfig()->get("Enabled");
  
  if($l) {
      
                        $event->setMessage($lol);

}
  else {

  // nothing lol
  }
}
 public function settrue(): void {
   $this->getConfig()->set("Enabled", true);
        $this->getConfig()->save();
    }
  public function setfalse(): void {
    $this->getConfig()->set("Enabled", False);
        $this->getConfig()->save();
  }
}
