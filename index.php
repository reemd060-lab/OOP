<?php
class Fruit{
    public $name;
    public $color;
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    

}
 $apple=new Fruit();
 $apple->name='apple1';
 //$apple->setName('apple2');
// echo $apple->name;
 //echo $apple->getName() . "<br>" ;
 class User{
    public $firstName;
    public $lastName;
    private $salary;
    const Pass_length=8;
    public function __construct($firstName,$lastName)
    {
       $this->firstName=$firstName;
       $this->lastName=$lastName;
    }
    public function check($pass){
        if((strlen($pass) < self::Pass_length)){
            echo "small keyword";
        }
        return $pass;
    }
    public function getFullName(){
        return $this->firstName ." ". $this->lastName;
    }
    public function Salary($salary){
        $this->salary=$salary;
    }
    public function getSalary(){
        return $this->salary;
    }
 }
$user= new User('reem','daoud');
echo $user->check('900000000000000');
echo $user->getFullName();
echo $user->Salary(6000);
echo $user->getSalary();
echo$user::Pass_length;
echo User::Pass_length;
class Employee{
    public $name;
    public $salary;
    public function __construct($name,$salary)
    {
        $this->name=$name;
        $this->salary=$salary;
    }
    public function getInfo(){
        return $this->name." ".$this->salary;
    }
}
$employee= new Employee('employ1',4000);
//echo $employee->getInfo();
$employee1= new Employee('employ2',5000);
//echo $employee1->getInfo();
class manger extends Employee{
    public $department;
    public function __construct($name, $salary,$department)
    {
         parent::__construct($name, $salary);
        $this->department=$department;
    }
    public function getInfo()
    {
    return $this->name." ". $this->salary." ". $this->department;
    }
}
$mange= new manger('manger','8000','it');
echo $mange->getInfo();



?>