<?php

class Tyrion extends Lannister {

	public function sleepWith($sleeper) {	
		if ($sleeper instanceof Jaime)
			print(self::NO);
		if ($sleeper instanceof Sansa)
			print(self::LETS);
		if ($sleeper instanceof Cersei)
			print(self::NO);
	}
}

?>
