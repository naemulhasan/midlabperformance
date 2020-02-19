<?php

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];

	if(empty($name))
	{
		echo "enter a valid name";
	}

	elseif (strlen($name)<=1)
	{
		echo "name is too short";

	}

	else
	{
		echo "okay";
	}

	if(isset($_REQUEST['submit']))
	{
		$email=$_REQUEST['submit'];

		if(empty($email))
		{
			echo " Enter a valid email";
		}
		else
		{
			echo "okay";
		}
	}
	if(isset($_REQUEST['submit']))
	{
		$gender=$_REQUEST['gender'];

		if(empty($gender))
		{
			echo " select your gender";
		}
		else
		{
			echo "okay";
		}
	}
	if(isset($_REQUEST['submit']))
	{
		$date=$_REQUEST['DOB'];

		if(empty($date))
		{
			echo " select your date of birth";
		}
		else
		{
			echo "okay";
		}
	}
	if(isset($_REQUEST['submit']))
	{
		$degree=$_REQUEST['degree'];

		if(empty($degree))
		{
			echo " select your degree";
		}
		else
		{
			echo "okay";
		}
	}
}



