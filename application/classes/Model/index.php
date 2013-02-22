<?php
class Model_Index extends RedBean
{
	public function addIndex($name, $age, $dOB)
	{
		$person = R::dispense('person');
		$person->name = $name;
		$person->age = $age;
		$person->dob = $dOB;
		
		$id = R::store($person);
	}
}