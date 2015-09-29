<?php

namespace bolts\diceroll;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Diceroll extends PluginBase {
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        
       if($sender instanceof Player)
           $number = mt_rand(1, 6);
            if ($number == 1) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 1.");
                return;
            }
            if ($number == 2) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 2.");
                return;
            }
            if ($number == 3) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 3.");
                return;
            }
            if ($number == 4) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 4.");
                return;
            }
            if ($number == 5) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 5.");
                return;
            }
            if ($number == 6) {
                $sender->sendMessage(TextFormat::BLUE."[Server] You rolled a ... 6.");
                return;
            }
    }
}    
