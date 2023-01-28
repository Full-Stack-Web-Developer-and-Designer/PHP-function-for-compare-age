<?php
echo "<h1>Compare who is older</h1>";
class Person {
	private $name;
	private $dob;
	
	function __construct($name, $dob) {
		$this->name = $name;
		$this->dob = $dob;	
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function get_dob() {
		return $this->dob;
	}
	
	public function get_age() {
		//Calculate age
		$dob = new Datetime($this->dob);
		$today = new Datetime(date('Y-m-d'));
		$age = $today->diff($dob);
		
		//Return Age in Years
		return $age->y;
	}
}

function compare_ages( $p1, $p2) {
	if ( $p1->get_age() > $p2->get_age() ) {
		return $p1->get_name() . ' is older than ' . $p2->get_name() . '.';
	} else if ( $p1->get_age() < $p2->get_age() ) {
		return $p1->get_name() . ' is younger than ' . $p2->get_name() . '.';
	}

	return $p1->get_name() . ' and ' . $p2->get_name() . ' are the same age.';
}

$mirnes = new Person('Mirnes', '1987-02-15');
$sunyoung = new Person('Sunyoung', '1965-08-24');
$sanja = new Person('Sanja', '1995-10-26');
$umberto = new Person('Umberto', '1967-04-06');
$vlado = new Person('Vlado', '1967-08-20');

echo compare_ages($mirnes, $sanja) . '<br/>';
echo compare_ages($sanja, $sunyoung) . '<br/>';
echo compare_ages($umberto, $vlado) . '<br/>';
