<?php
abstract class Fighter
{
	abstract public function fight($target);
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function returnName()
	{
		return ($this->name);
	}
}
?>
