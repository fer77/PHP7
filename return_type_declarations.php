<?php 

// class User {}

// function getUser()
// {
// 	return new User;  //* there's no protection against returning an array or something else.
// 	return [];
// }

//* Typend returned values: makes things a little more strict.  Only do this in situations where it is very important where people that user an interface adhere to a "contarct".
// class User {}

// function getUser() : User
// {
// 	return []; //* This will not be allowed.
// 	return new User;
// }

// var_dump(getUser());

//* This can be useful for defining interfaces where others will create the concrete implementations.
class User{}

interface SomeInterface
{
	public function getUser() : User;
}

class SomeClass implements SomeInterface
{
	public function getUser() : User
	{
		return new User;
	}
}

(new SomeClass)->getUser();
 ?>