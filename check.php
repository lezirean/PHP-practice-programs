<? php

$username[] = "leila";


// Get query string
$q = $_REQUEST['q'];
$suggestion = "";

// Get suggestions 
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($username as $user){
		if(stristr($q, substr($user, 0, $len))){
			if($suggestion === ""){
				$suggestion = $user;
			} else {
				$suggestion .= ", $user"; // appending user based sa initial letters na ininput so far
			}
		}
	}
}

echo $suggestion === "" ? "No suggestion" : $suggestion;

