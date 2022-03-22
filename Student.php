<?php

class Student
{
public $full_name;
public $address;
public $phone;
public $bio;
public $skills;
public $email;
public $facbook;
public $twitter;
public $instagrame;
//static members [constant and static method]
//none static member [variable property and method]
//public const FAV_CLUB='Ahly';
//Magic Methods
/*public function __construct($name){
    $this->full_name=$name;
}

public function play(){
    return"hello";
}
public static function walk(){
    return"i`m walking";
}*/
}

/*$student = new Student('ali');
$student->address='Qena';
/*var_dump($student);*/
/*echo Student::FAV_CLUB;
echo Student::walk();
echo $student->full_name;
echo $student->play();*/