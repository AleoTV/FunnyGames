<?php

namespace AleoTV;

use pocketmine\event\Listener;
 use pocketmine\plugin\PluginBase;
 use pocketmine\command\Command;
 use pocketmine\command\CommandSender;
 use pocketmine\Player;


 class main extends PluginBase implements Listener {
 
    public function onEnable()
    {
        $this->getLogger()->info("[FunnyGames] Aktiviert.");
    }

    public $fts;

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        $fts = "[FunnyGames]";
        $this->fts = $fts;

        if ($cmd->getName() == "tag") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("time.command")) {
                    $sender->getLevel()->setTime(6000);
                    $sender->sendMessage("§§l§fFunnyGames §8§l> §rDu hast Tag gemacht");
                    return true;
                } else {
                    $sender->sendMessage("§rDu hast keine Rechte diesen Befehl zu benutzen");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "nacht") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("time.command")) {
                    $sender->getLevel()->setTime(16000);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDu hast Nacht gemacht");
                    return true;
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                    return true;
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm0") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(0);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDu bist nun im gm0");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm1") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(1);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDu bist nun im gm1");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm2") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(2);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDu bist nun im gm2");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
		}
        if ($cmd->getName() == "heal") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("heal.command")) {
                    $sender->setHealth(20);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDeine Herzen wurden gefüllt");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "food") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("food.command")) {
                    $sender->setFood(20);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDeine Hungersleiste wurde gefüllt");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
        }
        if ($cmd->getName() == "gm3") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("gamemode.command")) {
                    $sender->setGamemode(3);
                    $sender->sendMessage("§l§fFunnyGames §8§l> §rDu bist nun im gm3");
                } else {
                    $sender->sendMessage("§cDu hast keine Rechte diesen Befehl zu benutzen");
                }
            }
            return true;
         }
        return true;
        }
 } 
