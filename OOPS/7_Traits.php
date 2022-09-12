<?php
/*
//Inheritance ------ inherit using class extends 

 class class1{
 	function fun1(){
 		echo "Fun1";
 	}
 }

 class class2 extends class1{
 	function fun2(){
 		echo "fun2";
 	}
 }

 class class3 extends class2{
 	function fun3(){
 		echo "fun3";
 	}
 }

 class class4 extends class3{
 	function fun4(){
 		echo "fun4";
 	}
 }

$obj=new class3();
$obj->fun1();

//(1)- O/P----> Fun1
*/

/*
trait class1{
 	function fun1(){
 		echo "Fun1";
 	}
 }

 class class2{
 	use class1;             // Use single ----> trait concept
 	function fun2(){
 		echo "fun2";
 	}
 }

 class class3 extends class2{
 	function fun3(){
 		echo "fun3";
 	}
 }

 class class4 extends class3{
 	function fun4(){
 		echo "fun4";
 	}
 }

$obj=new class3();
$obj->fun1();
*/
//(2)- O/P----> Fun1


/*
trait t1{
 	function fun1(){
 		echo "t1:Fun1";
 	}
 }

 trait t2{
 	                    // Use Double ----> trait concept
 	function fun2(){
 		echo "t2:Fun2";
 	}
 }

 class class1 {
 		use t1,t2;
 	}
 
$obj=new class1();
//$obj->fun1();
$obj->fun2();

//(3) O/P----> t1:Fun1
//(3) O/P----> t2:Fun2
*/


/*
trait t1{
 	function fun1(){
 		echo "t1:Fun1";
 	}
 }

 trait t2{
 	  
 	function fun2(){
 		echo "t2:Fun2";  // Use Double ----> trait concept
 	}
 }

 class class1 {
 		use t1,t2;     

        //Agar Aapne  class k Andar koi  function banaya hai to uski prefrence me jyda hogi comparasion to Aapke traits me 

 		function fun2(){      

        //Agar Aapne class k Andar Function Banaya same name ka function traits me bhi use kiya hai To class k andar jo  function tha usko preference pahle milegi uske baad traid k function ko milegi   MATLAB->>  Agar Aapne 1 function bataya class k andar bhi traits k andar bhi aur jab use Object banakar Call karenge to us time sabse pahle Aapke class Andar ka function call hoga   Agar class k andar function nahi hai to Wo traits k Andar Call hoga. 

 		echo "class1:Fun2";  // Using function ----> trait concept

 	} //use t1,t2;  
 	}
 
$obj=new class1();
$obj->fun2();

//(4) O/P----> class1:Fun2
*/



trait t1{
    function fun1(){
        echo "t1:Fun1";
    }
 }

 trait t2{
      
    function fun1(){
        echo "t2:Fun2";  // Use Double ----> trait concept
    }
 }

 class class1{
        use t1,t2{
            t1::fun1 insteadof t2; //For single function
            t2::fun1 as fun2;      //For multiple function Using  Alias fun // Aliasing/Importing 
        }  

      /*function fun2(){     
        echo "class1:Fun2";  // Using function ----> trait concept
    }*/
 }
$obj=new class1();
//$obj->fun1();
$obj->fun2();

//(5) O/P----> t1:Fun1
//(5) O/P----> t2:Fun2
?>