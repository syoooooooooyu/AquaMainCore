<?php

namespace sqmeru\BulletLineMainSystem\Event\Server;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;

use sqmeru\BulletLineMainSystem\BulletLineMainSystem;

class PacketReceiveEvent implements Listener {

    public function onPacketReceive(DataPacketReceiveEvent $event){
        $pk = $event->getPacket();
        if($pk instanceof LoginPacket){
        	$num = $pk->clientData['DeviceOS'];
        	BulletLineMainSystem::$deviceOS[$pk->username] = $num;
        }
    }
}