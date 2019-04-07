<?php

class Jaime extends Lannister {

	public function sleepWith($sleeper) {
		
		if ($sleeper instanceof Tyrion)
			print(self::NO);
		if ($sleeper instanceof Sansa)
			print(self::LETS);
		if ($sleeper instanceof Cersei)
			print(self::PLES);
	}
}

?>
