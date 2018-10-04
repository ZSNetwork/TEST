<?php

namespace test; //ファイルパス

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
//上記のuse文は、プラグインを動かすのに不可欠

class Test extends PluginBase implements Listener{
	
	public function onEnable(){//プラグインを読み込んだ時のイベント
		
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		//この文がないとイベントが動かないよ！
		
	}
}

    
        
        
    