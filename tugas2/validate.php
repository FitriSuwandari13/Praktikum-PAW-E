<?php
	$rname;
	$rfname;
	$remail;
	$rpassword;
	$rcpassword;
	function vname(&$errors, $field_list, $surname){
		global $rname;
		$pattern = "/^[a-zA-Z'-]+$/"; // format surname (alfabet)
		if (!isset($field_list[$surname]) ||empty($field_list[$surname])){
			$rname="field is required";
			$errors[$surname] = 'field is required';
		}
		else{
			if (!preg_match($pattern, $field_list[$surname])){
				$rname="field must contain alphabets only";
				$errors[$surname] = 'field must contain alphabets only';
			}
		}
	}

	function vfname(&$errors, $field_list, $firstname){
		global $rfname;
		$pattern = "/^[a-zA-Z'-]+$/"; // format surname (alfabet)
		if (!isset($field_list[$firstname]) ||empty($field_list[$firstname])){
			$rfname="field is required";
			$errors[$firstname] = 'field is required';
		}
		else{
			if (!preg_match($pattern, $field_list[$firstname])){
				$rfname="field must contain alphabets only";
				$errors[$firstname] = 'field must contain alphabets only';
			}
		}
	}

	function vemail(&$errors, $field_list, $email){
		global $remail;
		$pattern = "/^[a-zA-Z]+@+[a-zA-Z]+.+$/"; // format surname (alfabet)
		if (!isset($field_list[$email]) ||empty($field_list[$email])){
			$remail="field is required";
			$errors[$email] = 'field is required';
		}
		else{
			if (!filter_var($field_list[$email], FILTER_VALIDATE_EMAIL)){
				$remail="invalid email address";
				$errors[$email] = 'invalid email address';
			}
		}
	}

	function vpassword(&$errors, $field_list, $password){
		global $rpassword;
		if (!isset($field_list[$password]) ||empty($field_list[$password])){
			$rpassword="field is required";
			$errors[$password] = 'field is required';
		}
		else{
			if (!preg_match("/\w{6,20}/", $field_list[$password])){
				$rpassword="password entered was not 6 digits long";
				$errors[$password] = 'password entered was not 6 digits long';
			}
			else if (!preg_match("/[0-9]/", $field_list[$password])){
				$rpassword="field must contain numeric only";
				$errors[$password] = 'field must contain numeric only';
			}
		}
	}

	function vcpassword(&$errors, $field_list, $cpassword){
		global $rcpassword;
		if (!isset($field_list[$cpassword]) ||empty($field_list[$cpassword])){
			$rcpassword="field is required";
			$errors[$cpassword] = 'field is required';
		}
		else{
			if ($field_list['password'] != $field_list[$cpassword]){
				$rcpassword="password do not mutch";
				$errors[$cpassword] = 'password do not mutch';
			}
		}
	}
?>