<?php
/**
 * Class published in Object-Oriented Programming with PHP5
 * Page No: 80
 * Topic: Design Patterns
 * Sub Topic: Singleton Pattern
 */
class MySQLManager                      
{
    private static $instance;
    public $value = 10;
    public function __construct()
    {
        if (!self::$instance)
        {
            self::$instance = $this;
            //echo "New Instance<br><br>";
            return self::$instance;
        }
        else
        {
            //echo "Old Instance<br><br>";
            return self::$instance;
        }
    }
//keep other methods same
}

/**
 * Class testing
 */

$obj = new MySQLManager();                                      //new creates a new instance/object each time called
echo "Value(Object obj): ".$obj->value."<br>";
echo "Change value to 100 with Object 'obj'<br><br>";
$obj->value = 100;                                              //Value changed to 100 would be reflected only with 'obj'
echo "Value(Object obj): ".$obj->value."<br>";
$obj1 = new MySQLManager();                                     //new object created
echo "Value(Object obj1): ".$obj1->value."<br>";                //value = 10, as defined in the class and its a new object
$obj2 = new MySQLManager();
$obj2->value = 599;
echo "Change value to 599 with Object 'obj2'<br><br>";      
echo "Value(Object obj): ".$obj->value."<br>";                  //Each obj has its own copy of value, which goes to show, 
echo "Value(Object obj1): ".$obj1->value."<br>";                //its not a single object
echo "Value(Object obj2): ".$obj2->value."<br>";

/*if(($obj === $obj1 )&& ($obj1 === $obj2 ))
{
    echo "obj, obj2, obj3 are equal";    
}
 else 
{
     echo "obj, obj2, obj3 are not equal";    
    
}*/
?>