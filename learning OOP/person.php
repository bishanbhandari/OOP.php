<?php
Class Person{
    public $name;
    public $email;
    public $password;
    public function __construct($name){
        $this->name = $name;
    }
}
$student =new person("BISHAN");
echo $student -> name;
echo "<br>";
$student1 =new person("XYZ");
echo $student1->name;
echo"<br>";
$student2 =new person("ABC");
echo $student2->name;

?>
