<?php

namespace AleoTV;

use pocketmine\event\Listener;
 use pocketmine\plugin\PluginBase;
 use pocketmine\command\Command;
 use pocketmine\command\CommandSender;
 use pocketmine\Player;

class main extends PluginBase {
 
    public function onEnable()
    {
        $this->getLogger()->info(" is online.");
    }

    public $fts;

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        $fts = "[FunnyGames]";
        $this->fts = $fts;

        if ($cmd->getName() == "day") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("time.command")) {
                    $sender->getLevel()->setTime(6000);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rYou have set the time to day");
                    return true;
                } else {
                    $sender->sendMessage("§rYou have no permission");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "night") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("time.command")) {
                    $sender->getLevel()->setTime(16000);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rYou have set the time to night");
                    return true;
                } else {
                    $sender->sendMessage("§cYou have no permissions for that");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm 0") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(0);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDein Spielmodus ist nun §cÜberleben");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm 1") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(1);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDein Spielmodus ist nun §aKreativ");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm 2") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(2);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDein Spielmodus ist nun §4Abenteuer");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
		}
        if ($cmd->getName() == "heal") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("heal.command")) {
                    $sender->setHealth(20);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rYou has Drink water and get Full live");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
        }
        if ($cmd->getName() == "food") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("food.command")) {
                    $sender->setFood(20);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rYou are eating fish and chips");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm 3") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(3);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDein Spielmodus ist nun §1Zuschauer");
                } else {
                    $sender->sendMessage("§cYou have no permission for that");
                }
            }
            return true;
         }
        return true;
        }

} 