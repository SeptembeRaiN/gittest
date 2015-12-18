<?php
class Solution1{            //一个质量为1kg的物体下落10m具有的重力势能，g=10
	var $h = 10;            //若初速度为0，现在的速度大小为多少
	var $g = 10;            //该物体拥有多大的动量
	var $m = 1;
    var $energy;
    var $v;
    var $Mo;
    public function mutiply(){
    	$energy1 = $this->m * $this->g * $this->h;   	
    	echo "物体具有的重力势能为".$energy1."J<br>";
    	$this->energy = $energy1;
    }
    public function speed(){
    	$v1= sqrt($this->energy / $this->m);
    	echo "速度大小为".$v1."m/s<br>";
    	$this->v = $v1;
    }
    function __destruct(){
    	$Mo = $this->v * $this->m;
    	echo "物体的动量为".$Mo."kg*m/s<br>";
    }
}
$Solution1_1 = new Solution1;
$Solution1_1->mutiply();
$Solution1_1->speed();


