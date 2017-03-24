<?php

//* Combined comparison operator <=>, can determine the proper sort order.

$belchers = ['Bob', 'Linda', 'Tina', 'Gene', 'Louise'];

//* Sort them in alphabetical order (this is not new to PHP7).
sort($belchers);
//* Combined comparison operator <=>
usort($belchers, function ($a, $b)
{
	// var_dump('a: ' . $a . ', ' . 'b: ' . $b);
	return $a <=> $b; //* will either return -1, 0, or 1
	// If $a is less than $b return -1
	// If $a is equal to $b return 0
	// If $a is greater than $b return 1
});

//* Sort in Reverse (this is not new to PHP7).
rsort($belchers);
//* Combined comparison operator <=>
usort($belchers, function ($a, $b)
{
	return $b <=> $a;
});

//* Sort by charachter length.
usort($belchers, function ($a, $b)
{
	//var_dump('a: ' . $a . ', ' . 'b: ' . $b);
	return strlen($a) <=> strlen($b);
});

//* Sort by charachter length (reverse order).
usort($belchers, function ($a, $b)
{
	//var_dump('a: ' . $a . ', ' . 'b: ' . $b);
	return strlen($b) <=> strlen($a);
});
class User {
	protected $name;
	protected $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
	public function name() {
		return $this->name;
	}
	public function age() {
		return $this->age;
	}
}

class UserCollection {
	protected $users;
	public function __construct(array $users)
	{
		$this->users = $users;
	}
	public function users() {
		return $this->users;
	}
	//* Sort this collection by name, age...
	public function sortBy($method) {
		usort($this->users, function($userOne, $userTwo) use ($method) {
			return $userOne->$method() <=> $userTwo->$method();
		});
	}
}

$collection = new UserCollection([
	new User('Bob', 41),
	new User('Linda', 40),
	new User('Tina', 13),
	new User('Gene', 11),
	new User('Louise', 9)
	]);

//$collection->sortBy('name');
$collection->sortBy('age');
var_dump($collection->users());
 ?>