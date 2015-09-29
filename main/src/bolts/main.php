<?php

namespace bolts\main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(TextFormat::RED."[RandomCommandsPlugin] Plugin enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED."[RandomCommandsPlugin] Plugin disabled!");
    }
    
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
            if($sender instanceof Player) {
            $name = $sender->getName();            
            switch (strtolower($command->getName())) {
                case 'myname':
                    $sender->sendMessage(TextFormat::BLUE."[Server] You should probably know this but your name is $name!");
                    return;
                    break;
                case 'pluginfo':
                    $sender->sendMessage(TextFormat::BLUE."[Server] Plugin Name: RandomCOmmandsPlugin");
                    $sender->sendMessage(TextFormat::BLUE."[Server] Plugin Version: 1.0.0");
                    $sender->sendMessage(TextFormat::BLUE."[Server] Author: Bolts");
                    $sender->sendMessage(TextFormat::BLUE."[Server] I didn't use strings for this command because the plugin wont be updated so whats the point.");
                    return;
                    break;
                case 'servversion':
                    $version = $this->getServer()->getVersion();
                    $sender->sendMessage(TextFormat::RED."[Server] The server version is [$version]");
                    return;
                    break;
                case 'promote':
                    if(count($args) > 0) {
                        switch (count($args)) {
                            case 1:
                                $sub = $args[0];
                                $sender->sendMessage(TextFormat::BLUE."[Server] You have promoted $sub!");
                                return;
                                break;
                            case 2:
                                $sub = $args[0];
                                $sub2 = $args[1];
                                $sender->sendMessage(TextFormat::RED."[Server] You have promoted $sub and $sub2!");
                                return;
                                break;
                            case 3:
                                $sub = $args[0];
                                $sub2 = $args[1];
                                $sub3 = $args[2];
                                $sender->sendMessage(TextFormat::BLUE."[Server] You have promoted $sub, $sub2 and $sub3!");
                                return;
                                break;

                        }
                    } else {
                        $sender->sendMessage(TextFormat::RED.'[Server] You have been promoted!');
                        return;
                    }
               
                    
            }
       
                           
        $sender->sendMessage(Color::BLUE."[Bolts] You must run this command in-game!");
        return;
            }
        }
    }  
