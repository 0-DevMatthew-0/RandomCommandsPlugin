<?php

namespace bolts\application;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;


class Application extends PluginBase {
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
            if($sender instanceof Player) {
            $name = $sender->getName();            
            switch (strtolower($command->getName())) {
                case 'main':
                    $sender->sendMessage(TextFormat::RED."[Bolts] Hello! $name you may know me as Bolts! I would like to be a developer because while support may be fun, its not something that suits me much. Thats where coding comes in.");
                       return;
                       break;
                case 'disclaimer':
                    $sender->sendMessage(TextFormat::BLUE."[Bolts] Most of my application can be found at forum.leet.cc these commands just give you little snippets of them.");
                    return;
                    break;
                case 'experience':
                    $sender->sendMessage(TextFormat::RED."[Bolts] The coding languages I have learned so far are python, php, getting into angularjs, basic html and one day Java.");
                    return;
                    break;
                case 'information':
                    $sender->sendMessage(TextFormat::BLUE."[Bolts] You should already know most of this. After all I already work for you :)");
                    return;
                    break;
                case 'whyiamapplying':
                    $sender->sendMessage(TextFormat::RED."[Bolts] There are a plethora of reasons why. If you want me to go through them ask me :)");
                    return;
                    break;
                case 'hobbies':
                    $sender->sendMessage(TextFormat::BLUE."[Bolts] Hobbies I like to do include; coding, playing hockey, hanging out with friends, going running, playing football and soccer with friends and tons more!");
                    return;
                    break;
                case 'leetexp':
                    $sender->sendMessage(TextFormat::RED."[Bolts] I have a vast knowledge of leet as I am already support staff.");
                    return;
                    break;
                case 'pocketmineexp':
                    $sender->sendMessage(TextFormat::BLUE."[Bolts] I don't have much experience with pocketmine aside from making plugins which is what this application is about.");
                    return;
                    break;
                case 'others':
                    $sender->sendMessage(TextFormat::RED."[Bolts] I've known php for quite some time, but I've never put it to use. I love web developing. You can find my simple python bot on my git page.");
                    return;
                    break;

                    }
               
                    
            }
       
                           
        $sender->sendMessage(TextFormat::BLUE."[Server] You must run this command in-game!");
        return;
            }
        }            
