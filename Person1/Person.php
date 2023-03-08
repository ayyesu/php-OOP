<?php

class Person{
    private $firstName;
    private $lastName;
    private $age;

    public function setfirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setlastName($lastName){
        $this->lastName = $lastName;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getfirstName(){
        return $this->firstName;
    }

    public function getlastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }
}

class Student extends Person{
    private $gradeLevel;
    private $gpa;

    public function setGradeLevel($gradeLevel){
        $this->gradeLevel = $gradeLevel;
    }

    public function setGpa($gpa){
        $this->gpa = $gpa;
    }

    public function getGradeLevel(){
        return $this->gradeLevel;
    }

    public function getGpa(){
        return $this->gpa;
    }
}

class Teacher extends Person{
    private $subject;
    private $yearsTeaching;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function setYearsTeaching($yearsTeaching){
        $this->yearsTeaching = $yearsTeaching;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function getYearsTeaching(){
        return $this->yearsTeaching;
    }
}

$person1 = new Person();

$person1->setfirstName("Daniel");
$person1->setlastName("Kissiedu");
$person1->setAge(20);

echo "Person1 \n";
echo "FullName: " . $person1->getfirstName() . " " . $person1->getlastName() . "\n";
echo "Age: " . $person1->getAge() . "\n\n";

$Student1 = new Student();

$Student1->setfirstName("Travis");
$Student1->setlastName("Jay");
$Student1->setAge(19);
$Student1->setGradeLevel(12);
$Student1->setGpa(3.50);

echo "Student1 \n";
echo "Full Name: " . $Student1->getfirstName() . " " . $Student1->getlastName() . "\n";
echo "Age: " . $Student1->getAge() . "\n";
echo "Grade Level: " . $Student1->getGradeLevel() . "\n";
echo "GPA: " . $Student1->getGpa() . "\n\n";

$Teacher1 = new Teacher();

$Teacher1->setfirstName("John");
$Teacher1->setlastName("Doe");
$Teacher1->setAge(31);
$Teacher1->setSubject("Machine Learning");
$Teacher1->setYearsTeaching(7);

echo "Teacher1 \n";
echo "Full Name: " . $Teacher1->getfirstName() . " " . $Teacher1->getlastName() . "\n";
echo "Age: " . $Teacher1->getAge() . "\n";
echo "Subject: " . $Teacher1->getSubject() . "\n";
echo "Years Teaching: " . $Teacher1->getYearsTeaching();
?>
