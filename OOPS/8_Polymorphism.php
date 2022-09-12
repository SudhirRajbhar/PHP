<?php
// Same operation may behave differently in different class
//Abstract Class
//Interface

/*
abstract class class1{
	abstract function fun1();
}
class class2 extends class1{
	function fun1(){
		echo "fun1";
	}
}

class class3 extends class1{
	function fun1(){
		echo "fun2";
	}
}

$obj=new class3();
$obj->fun1();

//(1) O/P----> fun2
*/

interface class1{           // abstract = interface
	 function fun1();
}

class class2 implements class1{  // extends = implements
	function fun1(){
		echo "Fun1";
	}
}

class class3 implements class1{
	function fun1(){
		echo "Fun2";
	}
}

$obj=new class3();
$obj->fun1();

//(1) O/P----> Fun2
?>

