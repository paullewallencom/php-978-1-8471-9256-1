<?php
/**
 * Class to demonstrate Singleton pattern
 */
class mySingleton
{
    /**
     *
     * @var type integer
     * variable value to check if there exists a constant value with different objects
     */
    public $value = 10;
    /**
     *
     * @var type Object
     * To hold reference to object
     */
    private static $newInstance;
    
    /**
     * Constructor called just once
     */
    private function __construct()
    {
        echo "I am called just once!!!<br><br>";
    }
    
    /**
     * 
     * @return type object
     * Creates an instance in the first call, otherwise returns previously created instance via static variable
     */
    public static function getInst()
    {
        if(!self::$newInstance)
        {
            self::$newInstance = new mySingleton(); // New keyword that creates objects, is used once
            return self::$newInstance;
        }
        else 
        {
            return self::$newInstance;
        }
    }
    /**
     * Random method to show that class behaves as expected.
     */
    public function RandomFun()
    {
        echo "Random method called with no problem<br>";
    }
}
/**
 * Class testing
 */

$obj = mySingleton::getInst();                     //call static method to obtain object, note that new keywords not used
echo "Value(Object obj): ".$obj->value."<br>";
echo "Change value to 100 with Object 'obj'<br><br>";
$obj->value = 100;                                  //Value changed to 100 would be reflected everywhere 
echo "Value(Object obj): ".$obj->value."<br>";
$obj1 = mySingleton::getInst();                     //obtains previously created object
echo "Value(Object obj1): ".$obj1->value."<br>";    //value displayed via obj would not be 10 but 100, which was changed by obj1
$obj2 = mySingleton::getInst();
echo "Change value to 599 with Object 'obj2'<br><br>";
$obj2->value = 599;
echo "Value(Object obj): ".$obj->value."<br>";      //each object having the same value variable
echo "Value(Object obj1): ".$obj1->value."<br>";
echo "Value(Object obj2): ".$obj2->value."<br><br>";
$obj2->RandomFun();

/*if(($obj === $obj1 )&& ($obj1 === $obj2 ))
{
    echo "obj, obj2, obj3 are equal";    
}
 else 
{
     echo "obj, obj2, obj3 are not equal";    
    
}*/
?>