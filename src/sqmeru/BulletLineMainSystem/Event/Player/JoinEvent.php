<?php

namespace sqmeru\BulletLineMainSystem\Event\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class JoinEvent implements Listener {

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        if($player->isOp()){
            $name = $player->getName();
            $player->setDisplayName("§c*§r{$name}");
            $event->setJoinmessage("§c*§r" . $name . "が§bAquaServer§fにログインしました");
        }
    }
}