<?php
/*
class class1{
	public $x=1;
	function fun1 (){
		echo "fun1";
	}
	function fun2 (){
		echo "fun2";
	}
}
$obj = new class1(); 
$obj -> fun1();

//(1) -----> Output - fun1
*/  




/*
class class1{
	public $x=1;
	function fun1 (){
		echo $this->x;
	}
	function fun2 (){
		echo "fun2";
	}
}
$obj = new class1(); 
$obj -> fun1();

//(2)  ------->  Output - 1
*/




/*
class class1{
	public $x=1;
	function fun1 (){
		echo ++$this->x;  //current Intance
		//echo $this->x++;
	}
	function fun2 (){
		echo "fun2";
	}
}
$obj = new class1(); 
$obj -> fun1();

   //(3)--------> Output - 2
*/


/*
//Benifit of object programming langauge
class class1{
	public $x=1;
	function fun1 () {
        return $this->x++;
	}
 }   

 $obj1 = new class1();
 $obj2 = new class1();

 $obj1->fun1();
 echo $obj1->x;

 echo "<br/>";

 echo $obj2->x;
 //  (4)  ---------->Output  -  2       1
*/

/*
 //Contructor --- jab bhi call hoga sabse pahle hoga by default
 //and Distructor-- jab bhi call hoga sabse end me hoga by default
 class class1{
 	function __construct() {
 		echo "start";
 	}
                                //Sequence/Order -----> construct , function, destruct
 	function fun1 (){
 		echo "Hello";
 	}                        

 	function __destruct() {
 		echo "end";
 	}
 }  

 $obj1=new class1();
 $obj1->fun1();
 //   (5)------- Output  - startHelloend
 */


/*
  class class1{
 	function __construct() {
 		$this->x=10;
 	}
                                //Sequence/Order -----> construct , function, destruct
 	function fun1 (){
 		echo $this->x;
 	}                        

 	function __destruct() {
 		echo "end";
 	}
 }  

 $obj1=new class1();
 $obj1->fun1();

 //   (6)------- Output  - 10end
 */

/*
 class class1{
 	function __construct($y) {
 		$this->x=$y;
 	}
                                //Sequence/Order -----> construct , function, destruct
 	function fun1 (){
 		echo $this->x;
 	}                        

 	function __destruct() {
 		//echo "end";
 	}
 }  

 $obj1=new class1(20);
 $obj1->fun1();

//   (7)------- Output  - 20
*/

 class class1{
 	function __construct($y) {
 		$this->x=$y;
 	}
                                //Sequence/Order -----> construct , function, destruct
 	function fun1 (){
 		echo $this->x;
 	}                        

 	function __destruct() {
 		echo "end";
 	}
 }  

 $obj1=new class1(20);
 $obj1->fun1();

//   (7)------- Output  - 20end
?>