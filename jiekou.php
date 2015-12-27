<?php
public interface Comparable{
	public function Compare($object);
	//将本类的对象与object对象进行比较大小，如果本类的对象比较大则输出1，,如果object对象比较大则输出-1，
	//如果两个对象相等则输出0
}