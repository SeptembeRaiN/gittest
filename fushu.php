<?php
class fushu{
	private $a1,$a2,$b1,$b2,$sum1,$sum2,$minus1,$minus2;
	public function __construct($a,$b,$c,$d){
		$this->a1 = $a;
		$this->b1 = $b;
		$this->a2 = $c;
		$this->b2 = $d;
		$this->sum1 =$this->a1+$this->a2;
		$this->sum2 =$this->b1+$this->b2;
		$this->minus1 =$this->a1-$this->a2;
		$this->minus2=$this->b1-$this->b2;
	}
	public function sum(){
		echo "$this->a1"."+"."$this->b1"."i"."+"."$this->a2"."+"."$this->b2"."i"."="."$this->sum1"."+"."$this->sum2"."i<br>";
	}
	public function minus(){
		echo "$this->a1"."+"."$this->b1"."i"."-"."$this->a2"."-"."$this->b2"."i"."="."$this->minus1"."+"."("."$this->minus2".")"."i";
	}
}
$fushu_1 = new fushu(1,2,3,4);
$fushu_1->sum();
$fushu_1->minus();