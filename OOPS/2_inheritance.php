<?php
/*
//accessing propertyfrom one class to an other class

	function __construct() {
		echo "Construct1";
	}

	function fun1 () {
		echo "fun1";
	}
} 

class class2 extends class1{

}
  $obj=new class2();
  $obj->fun1();
// (1)---  Output    - Construct1
*/
/*
class class1 {
	function __construct() {
		echo "Construct1";
	}

	function fun1 () {
		echo "fun1";
	}
} 

class class2 extends class1{
	 function __construct() {
		echo "Construct2";
		parent::__construct();  // class2  me koi function banaya O same name ka function class1 me bhi Available hai to us case me----->class2 ka jo fucntion Aapne likha hai O call hoga class1 ka nahi call hoga. 
	}
}
  $obj=new class2();  //class2 ka object bana , Class2 ka constructor call hoga // class1 ka nahi
  //$obj->fun1();
  
// (2)---  Output    - Construct2
// (3)---  Output    - Construct2Construct1
*/


class class1 {
	function __construct() {
		$this->num=1;   //Declered variable value 1
		//echo "Construct1";
	}

	function fun1 () {
		echo "fun1";
	}
} 

class class2 extends class1{
	 function __construct() {
		echo "Construct2";
		parent::__construct(); //jab Aapne chaild class se "Construct2"  se Object banaya aur object k through property ko Access karne ki koishish ki to depend ye karta hai ki Agar Aapne perents class k constructor ko bhi call kiya hai to Agar Aapne constructor ko agar Aapne perents class k constructor ko variable k define karne k pahle call kiya tab ko O barabaroutput dega child class ka Agar Aagar Aapne useke baad call kiya to jo output dega o parents class ka dega.

		$this->num=2;    //Declered variable kaene par value 2 Aa jayega
	}
}
  function fun1 () {
  	echo "fun2";
  }

  $obj=new class2();
  echo $obj->num;
  //$obj->fun1();
  
// (4)---  Output    -  Construct22
 ?>