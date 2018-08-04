<?php

class Poster{

	public $name_event;
	public $name_event_error_1;
	public $name_event_error_2;
	public $organised_by;
	public $venue;
	public $date;
	public $prize_1;
	public $prize_2;
	public $prize_3;
	public $prize_error;
	public $instruction;
	public $contact_phone;
	public $contact_phone_error;
	public $email;
	public $email_error;
	public $file1;
	public $file2;
	public $file3;
	public $file4;
	public $file5;
	public $haserror;
function __construct()
{
	$this->name_event=$_POST['name'];
	$this->organised_by=$_POST['organised'];
	$this->venue=$_POST['venue'];
	$this->date=$_POST['date'];
	$this->prize_1=$_POST['prize1'];
	$this->prize_2=$_POST['prize2'];
	$this->prize_3=$_POST['prize3'];
	$this->contact_phone=$_POST['contact'];
	$this->instruction=$_POST['instruction'];
	$this->email=$_POST['email'];
	$this->validate();
}

function validate()
{
	$this->haserror=0;
	$this->prize_error=prize_validate($this->prize_1,$this->prize_2,$this->prize_3);
	if($this->prize_error==0)
		$this->haserror=1;	
	$this->contact_phone_error=check_phone($this->contact_phone);
	if($this->contact_phone_error==0)
		$this->haserror=1;
	$this->name_event_error_1=check_name($this->name_event);
	if($this->name_event_error_1==0)
		$this->haserror=1;

	$this->name_event_error_2=check_year($this->name_event);
	if($this->name_event_error_2==0)
		$this->haserror=1;
$this->contact_phone_error=check_phone($this->contact_phone);

}

}





function prize_validate($prize1,$prize2,$prize3)
{
	if($prize1+$prize2+$prize3<=100000)
		return 0;
	else
		return 1;


}

function check_phone($num)
	{
		if(!preg_match("/^[0-9]{10,10}$/", $num))
			{
			return 0;
			}
			return  1;
	}
	
	function check_email($e)
	{
		if(!preg_match("/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/", $e))
			{
			return 0;
			}
		return 1;
	}
function check_name($name)
	{
		for($i=0;$i<strlen($name);$i++)
			{

				if($name[$i]==' ')
					return 0;

			}
			return 1;
	}
	
function check_year($name)
	{
		for($i=0;$i<strlen($name);$i++)
			{

				if($name[$i]=='0'||$name[$i]=='1'||$name[$i]=='2'||$name[$i]=='3'||$name[$i]=='4'||$name[$i]=='5'||$name[$i]=='6'||$name[$i]=='7'||$name[$i]=='8'||$name[$i]=='9')
					return 1;

			}
			return 0;
	}

/*
if(isset($_POST['name']))
{

	global $posterObject;
	$posterObject=new $Poster;

	
}
*/
?>