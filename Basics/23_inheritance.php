<?php
/*
1. With the help of the inheritance we can reduce the code duplication.
2. In inheritance, we have a parent class with its own method and properties and  a child class ( or classes) that can the code from the parent.
*/

class Car    //claas name car
{   
    public function test()
    {
        return "text function from Car class";
    }

/*
  public $model;

  public function setModel($model) // function
  {
      $this->model = $model; // variable model
  }

  public function getModel()   //get variable
  {
      return $this->model;
  }  
}  */

class Sportscar extends Car   //inherit to using extends and not need to any method in this class
{   
   public function test()
   {
       return "test function from Sportscar";
   }

   $Sportscar_obj = new Sportscar();
      echo $Sportscar_obj->test();
    /*
   public $style="very fast car ";
   public function CarwithStyle()  //atribute  and function
   {
       return $this->style;        
   }*/
}  

$Sportscar_obj = new Sportscar();

/*
$Sportscar_obj->setModel("Maruti");
echo $Sportscar_obj->getModel();
echo "</br>";
echo $Sportscar_obj->CarwithStyle();
*/
?>
