<?php
function clean($value) {
	$trimed   = trim($value);
	$entities = htmlentities($trimed, ENT_QUOTES, "UTF-8");
	$nb2br    = nl2br($entities);
	return $nb2br;
}

function emailValidation($email) { 
 return filter_var(filter_var($email, FILTER_SANITIZE_EMAIL),FILTER_VALIDATE_EMAIL); 
}