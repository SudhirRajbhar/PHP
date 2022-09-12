<?php
/*  
class class1{          // class
      public $num=10;  // Variable
      function fun1(){ // function
      	echo "Test";
      }
}
$obj=new class1();
//echo $obj->num;
echo $obj->fun1();

//(1)   O/P----> Test
*/
  
  

/*
// In Static Variable
class class1{          // class
      static public $num=10;  // Static Variable
}

echo class1::$num;
//(2)   O/P----> 10
*/ 


/*
class class1{          
    static public $num=10;  // Static Variable  ko jab bhi Access karna hota hai to waha directly class ka name use karte hai Aur waha Object banane ki zarurat nahi padti hai.
    static function fun1(){
    	echo "Test";
    }
}

echo class1::fun1();
// jab bhi kisi Static Function ko call karana hai to uske Object ko banane k liye ki koi zarurat nahi hai
 
//(3)   O/P----> Test
*/


/*
class class1{          
    static public $num1=10;  
    public $num2=20;
    static function fun1(){
      echo self::$num1;
    }
}

echo class1::fun1();
 
//(4)   O/P----> 10
*/


/*
//jab Aap kisi function ko call karate hai to pahle uska object banana padta hai. jab bhi function ka object banate hai to sabse pahle constructor call hota hai.
      // static me Object hi create nahi hota aur contruct bhi call nahi hota.

 class class1{              
    static public $num=10;  
    function __construct(){
      echo "Hello";

    }

     static function fun1(){
      echo "Test";
     }
    }
echo class1::fun1();
 
//(5)   O/P----> Test
*/



/*
class class1{          
   public $num=10;

     function fun1 (){
      $this->num++;
     }
 }
$obj=new class1();

//ek hi Object se Access karane par
$obj->fun1();
echo $obj->num;
echo "</br>";

$obj->fun1();
echo $obj->num;
echo "</br>";

$obj->fun1();
echo $obj->num;

//(6)   O/P----> 11 12 13
*/



/*
class class1{          
  static  public $num=10;

    static function fun1 (){
      self::$num++;
     }
 }
echo class1:: $num;

//(7)   O/P----> 10
*/


// function/variable ko bina Object k represent/call nahi kar sakte hai 
// function/variable ko Agar bina Object create kiye call/represent karane k liye Static banana padta hai
// Aur constructor me Object banega tabhi call hoga.

class class1{          
  static  public $num=10;

    static function fun1 (){
      self::$num++;
     }
 }
class1::fun1();
echo class1::$num;

class1::fun1();
echo class1::$num;

class1::fun1();
echo class1::$num;

//(8)   O/P----> 11 12 13

?>


