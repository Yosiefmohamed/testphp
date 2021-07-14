<?php

// make A class and if you neeed private Varbile

class Info_Embloye{
	
public $name;

public $Salary;

public $path;

public $live;

public $age;

Private $CreditCard;

function infomation(){

$Admin=array("Yosief",2000,"Adminmistration","iraq",100);
	
return $Admin;

}

// how to get private Varbile

function SetCreditCard($Crdit){
	
	$this->$CreditCard=$Crdit;

}


// make _Construct class

function _Construct($name,$Salary,$path,$live,$age){
	
	$this->name=$name;

	$this->Salary=$Salary;

	$this->path=$path;

	$this->live=$live;

	$this->age=$age;

}

}



?>