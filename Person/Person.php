<?php
class Person {
    private $name;
    private $age;
    private $gender;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }
}

class Employee extends Person {
    private $id;
    private $position;
    private $salary;

    public function setId($id) {
        $this->id = $id;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getId() {
        return $this->id;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Manager extends Employee {
    private $bonus;

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    public function getBonus() {
        return $this->bonus;
    }
}

// Demo usage
$employee1 = new Employee();
$employee1->setName("Daniel Kissiedu");
$employee1->setAge(30);
$employee1->setGender("Male");
$employee1->setId(1001);
$employee1->setPosition("Developer");
$employee1->setSalary(5000.0);

$employee2 = new Employee();
$employee2->setName("Josephine Boateng");
$employee2->setAge(25);
$employee2->setGender("Female");
$employee2->setId(1002);
$employee2->setPosition("UI/UX Designer");
$employee2->setSalary(4500.0);

$manager1 = new Manager();
$manager1->setName("Benjamin Mensah");
$manager1->setAge(40);
$manager1->setGender("Male");
$manager1->setId(2001);
$manager1->setPosition("Manager");
$manager1->setSalary(8000.0);
$manager1->setBonus(2000.0);

$manager2 = new Manager();
$manager2->setName("Bernard Armah");
$manager2->setAge(35);
$manager2->setGender("Male");
$manager2->setId(2002);
$manager2->setPosition("Senior Manager");
$manager2->setSalary(10000.0);
$manager2->setBonus(3000.0);

// Print employee and manager details
echo "Employee 1: " . $employee1->getName() . " (" . $employee1->getGender() . "), " . $employee1->getAge() . " years old\n";
echo "Position: " . $employee1->getPosition() . ", ID: " . $employee1->getId() . ", Salary: $" . $employee1->getSalary() . "\n\n";

echo "Employee 2: " . $employee2->getName() . " (" . $employee2->getGender() . "), " . $employee2->getAge() . " years old\n";
echo "Position: " . $employee2->getPosition() . ", ID: " . $employee2->getId() . ", Salary: $" . $employee2->getSalary(). "\n\n";

echo "Manager 1: " . $manager1->getName() . " (" . $manager1->getGender() . "), " . $manager1->getAge() . " years old\n";
echo "Position: " . $manager1->getPosition() . ", ID: " . $manager1->getId() . ", Salary: $" . $manager1->getSalary() . ", Bonus: $" . $manager1->getBonus() . "\n\n";

echo "Manager 2: " . $manager2->getName() . " (" . $manager2->getGender() . "), " . $manager2->getAge() . " years old\n";
echo "Position: " . $manager2->getPosition() . ", ID: " . $manager2->getId() . ", Salary: $" . $manager2->getSalary() . ", Bonus: $" . $manager2->getBonus();
?>
