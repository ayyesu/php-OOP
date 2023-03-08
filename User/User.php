<?php

class User {
    protected $name;
    protected $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Admin extends User {
    private $users = array();

    public function deleteUser($user) {
        $key = array_search($user, $this->users, true);
        if ($key !== false) {
            unset($this->users[$key]);
        }
    }

    public function createUser($name, $email) {
        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $this->users[] = $user;
        return $user;
    }

    public function updateUser($user, $name, $email) {
        $user->setName($name);
        $user->setEmail($email);
    }

    public function getUsers() {
        return $this->users;
    }
}

// Usage example

$admin = new Admin();

$user1 = $admin->createUser("Daniel Kissiedu", "iamdanielkissiedu@gmail.com");
$user2 = $admin->createUser("Eric Adjei", "ericadjei@gmail.com");

echo "Users before delete:\n";
foreach ($admin->getUsers() as $user) {
    echo $user->getName() . " - " . $user->getEmail() . "\n";
}

$admin->deleteUser($user1);

echo "Users after delete:\n";
foreach ($admin->getUsers() as $user) {
    echo $user->getName() . " - " . $user->getEmail() . "\n";
}

$admin->updateUser($user2, "Eric Adjei", "eric.ad@example.com");

echo "Users after update:\n";
foreach ($admin->getUsers() as $user) {
    echo $user->getName() . " - " . $user->getEmail() . "\n";
}

?>
