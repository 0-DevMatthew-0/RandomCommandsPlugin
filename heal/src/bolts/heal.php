<?php

namespace bolts\heal;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Heal extends PluginBase {
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {

        if($sender instanceof Player) {
            $name = $sender->getName();
            if (strtolower($command->getName()) == 'heal') {
                if (count($args) > 0) {
                    $player = $args[0];
                    if ($this->getServer()->getPlayer($player)) {
                        $player = $this->getServer()->getPlayer($player);
                        $player->setHealth(20);
                        $sender->sendMessage(TextFormat::BLUE . "[Server] Player " . $player->getName() . " has been healed!");
                        $player->sendMessage(TextFormat::RED . "You have been healed!");
                        return;
                    } else {
                        $sender->sendMessage(TextFormat::BLUE . "[Server] $player isn't online at the moment. Please try again when he returns!");
                        return;
                    }
                } else {
                    $sender->setHealth(20);
                    $sender->sendMessage(TextFormat::RED . "You have been healed!");
                    return;
                }
            }
        }
    }        
}
