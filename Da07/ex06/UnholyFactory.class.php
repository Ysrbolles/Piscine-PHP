<?php
class UnholyFactory
{
	public $fighter = Array();
	public function absorb($type)
	{
		if ($type instanceof Fighter)
		{
			$name = $type->returnName();
			if (array_key_exists($name, $this->fighter))
				print "(Factory already absorbed a fighter of type " . $name . ")" . PHP_EOL;
			else
			{
				print "(Factory absorbed a fighter of type " . $name . ")" . PHP_EOL;
				$this->fighter[$name] = $type;
			}
		}
		else
			print "(Factory can't absorb this, it's not  a fighter)" . PHP_EOL;
	}

	public function fabricate($rf)
	{
		if (array_key_exists($rf, $this->fighter))
		{
			print "(Factory fabricates a fighter of type " . $rf . ")" . PHP_EOL;
			return (clone $this->fighter[$rf]);
		}
		else
		{
			print "(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL;
			return (NULL);
		}
	}
 
}
?>
