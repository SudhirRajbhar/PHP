<?php
/*
class class1 {
	//function__construct()
	 function __construct() {
		$this->num=1;
	}
}

$obj=new class1();

$obj->num=2;  // class k bahar value ko retrive/change karna galat baat hai.

echo $obj->num;
// (1)---  Output    - 1  2
*/



/*
class class1 {
	//function__construct()

	//puplic $num;
	//private $num;
	 protected $num;          //protected is a variable/fun me hi use kar sakte hai
	 function __construct() {
	 $this->num=1;
	}
}
class class2 extends class1{
	function getNum() {  // getres k through hum value ko retriv karte hai aur setress k through hum value ko set karte hai
	     return $this->num;
	}
}

$obj=new class2();

//$obj->num=2;  // class k bahar value ko retrive/change karna karna galat baat hai.
echo $obj->getNum();

//public------------> Puplic me Access Within a class ya Kisi ne usko extends kiya hai waha par bhi rahta hai, Agar Aap class k bahar chahe Access karna to bhi kar sakte hai.

//protected---------> Protected me Access within a class rahta hai ya fir esko ne bhi extends kiya hai waha par bhi rahega ||| jo  Aapka variable  tha agar Aapki class ko kisi ne extends kiya hai tojis class ne use extends kiya hai Wo class bhi uske value ko Retruve kar sakta hai.


//private-----------> Private me Isaka Access Class k undar rahega (Only Within a Class rahta hai) Agar Aap chahe to usko class k bahar use use nahi kar sakte hai

// (2)---  Output    - 1 
*/

/*
class class1{
	private $num;
    function __construct() {
    	//$this->num=1;
	}

    protected function getData(){
    	echo "Hello1";
 }

}
 
 class class2 extends class1{

 }

 $obj=new class2();
 echo $obj->getData();

// (3)---  Output    - Hello1
*/

 class class1{
	private $num;             //Access level to class2::getData() must be public (as in class class1)
    function __construct() {
    	//$this->num=1;
	}

     function getData(){
    	echo "Hello1";
  }
}
 
 class class2 extends class1{
 	 function getData(){
 		echo "Hello2";
 	}
 }

 $obj=new class2();
 echo $obj->getData();

// (4)---  Output    - Hello2

//public-----(Sub Jagah)--->> Agar Kisi bhi property/variable ko Aapne Public kiya hai to uska jo Access hai wo class k Andar bhi rahega Aur jis class ko exetends kiya hai waha par bhi rahega aur class k bahar bhi rahega.

//private----(Within A class/ class k bahar use  nahi kar sakte)--->> Agar Aapne Private banaya hai kisi variable ko to uska Access within a Class Rahega, Class k bahar chahe Aapne Inharit kiya ho ya Na kiya ho To usko Use nahi kar askte hai/ Same to Same Function k saath bhi hoti hai.

//protected--(Within A class/jis class se use  extends kia ho)---->> Agar Aapne Protrcted banaya hai Apne Variable ko to uska jo Access hai  wo Aapki class k Andar rahega au jisne use Inherite kiya hai waha par rahega
 ?>