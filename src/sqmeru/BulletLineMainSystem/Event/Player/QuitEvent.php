<?php

namespace sqmeru\BulletLineMainSystem\Event\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class QuitEvent implements Listener {

    public function onQuit(PlayerQuitEvent $event){
        $sqmeru = $event->getQuitReason();
        $name = $event->getPlayer()->getName();
        $event->setQuitMessage("§b*§r{$name}が§bAquaServer§fからログアウトしました§r(Reason:{$sqmeru})");
    }

}