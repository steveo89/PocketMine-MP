<?php

/*

           -
         /   \
      /         \
   /   PocketMine  \
/          MP         \
|\     @shoghicp     /|
|.   \           /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

class WallSignBlock extends TransparentBlock{
	public function __construct($meta = 0){
		parent::__construct(WALL_SIGN, $meta, "Wall Sign");
	}
	public function getDrops(Item $item, Player $player){
		return array(
			array(323, 0, 1),
		);
	}
	
}