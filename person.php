<?php

class Person {

	private $firstName;
	private $lastName;

	public function getFirstName():string {
		return $this->firstName;
	}
	public function setFirstName(string $firstName) {
		$this->firstName = $firstName;
	}

	public function getLastName():string {
		return $this->lastName;
	}
	public function setLastName(string $lastName) {
		$this->lastName = $lastName;
	}

	public function display():string {
		return $this->firstName." - ".$this->lastName;
	}
}

	$person = new Person();
	$person->setFirstName("Valentin");
	$person->setLastName("FIOLEAU");
	echo $person->display();

?>