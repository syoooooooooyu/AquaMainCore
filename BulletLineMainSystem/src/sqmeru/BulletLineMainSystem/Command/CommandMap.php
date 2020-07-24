<?php

namespace sqmeru\BulletLineMainSystem\Command;

use pocketmine\command\defaults\WorldCommand;
use pocketmine\Server;
use sqmeru\BulletLineMainSystem\Command\WarpCommands;
use sqmeru\BulletLineMainSystem\Command\infoCommand;
use sqmeru\BulletLineMainSystem\Command\minfoCommand;

class CommandMap {

    const plugin = "BulletLineMainSystem";

    public static function registerCommands(){
        Server::getInstance()->getCommandMap()->register(self::plugin,new dieCommand());
        Server::getInstance()->getCommandMap()->register(self::plugin,new WarpCommands("lobby","色々な施設がある『ロビーワールド』へ移動します","/lobby"));
        Server::getInstance()->getCommandMap()->register(self::plugin,new infoCommand());
        Server::getInstance()->getCommandMap()->register(self::plugin,new minfoCommand());

    }
}