<?php 
//php does't support multiple inheritance  

//(2)- Interface can only contain abstract function
//(3)- In Interface we can not define variables
//(4)- No constructor in interface
//(5)- All function must be public
//(1)- Interface support multiple inheritance



 /*
interface class1 {
	public function test1();	
}

interface class2 {
	public function test2();	
}

class class3 implements class1,class2{
	public function test1(){

	}

	public function test2() {

	}
 }
 */



 interface class1 {
	public function test1();	
}

interface class2 {
	public function test2();	
}

class class3 implements class1,class2{
	public function test1(){
		echo "Test1";

	}

	public function test2() {
        echo "Test2";
	}
 }

 $obj=new class3();
 echo $obj->test2();

 // O/P----> Test2
 ?>
