<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 9/16/18
 * Time: 2:44 PM
 */

namespace NoDeathDrops;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\plugin\PluginBase;

/**
 * Class Main
 * @package NoDeathDrops
 */
class Main extends PluginBase implements Listener{
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	/**
	 * @param PlayerDeathEvent $event
	 */
	public function onDeath(PlayerDeathEvent $event) : void{
		$event->setDrops([]);
	}
}