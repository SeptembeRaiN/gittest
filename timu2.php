<?php
class calculator{
	private $a;
	private $b;
	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
		$sum = $this->a + $this->b;
		$minus = $this->a - $this->b;
		$mutiply = $this->a * $this->b;
		$division = $this->a / $this->b;
		echo "$this->a"."+"."$this->b".'='."$sum<br>";
		echo "$this->a"."-"."$this->b".'='."$minus<br>";
		echo "$this->a"."*"."$this->b".'='."$mutiply<br>";
		echo "$this->a"."/"."$this->b".'='."$division<br>";
	}
}
$calculator_1 = new calculator(111,222);

